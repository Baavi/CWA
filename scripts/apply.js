/**
 * Author: Baavika Wijesundera 103520158
 * Target: ASSIGN2
 * Purpose: JavaScript
 * Created: 13/09/2021
 * Last updated: 23/09/2021
 * Credits: None
 */

"use strict";

function prefill_jobref1(){
  let temp_ref = document.getElementById("job1_ref").innerText;
  let jobreference = temp_ref.slice(15, 20);
  localStorage.jobref = jobreference;
  //console.log(localStorage.jobref);
}

function prefill_jobref2(){
  let temp_ref = document.getElementById("job2_ref").innerText;
  let jobreference = temp_ref.slice(15, 20);
  localStorage.jobref = jobreference;
  //console.log(localStorage.jobref);
}

function prefill_jobref(){
  if (localStorage.jobref != undefined) {
    document.getElementById("jobref").value = localStorage.jobref;
    document.getElementById("jobref").readOnly = true;
  }
}

function storeDetails(gname, fname, dob, gender, address, town, state, postcode, email, phone, skill_list, comments) {

  sessionStorage.gname = gname;
  sessionStorage.fname = fname;
  sessionStorage.dob = dob;
  sessionStorage.gender = gender;
  sessionStorage.address = address;
  sessionStorage.town = town;
  sessionStorage.state = state;
  sessionStorage.postcode = postcode;
  sessionStorage.email = email;
  sessionStorage.phone = phone;
  sessionStorage.skill_list = skill_list;
  sessionStorage.comments = comments;

  /*
  alert("Gname: " + sessionStorage.gname + " \n"
  + "Fname: " + sessionStorage.fname + " \n"
  +"DOB: " + sessionStorage.dob + " \n"
  +"Gender: " + sessionStorage.gender + " \n"
  +"Address: " + sessionStorage.address + " \n"
  +"Town: " + sessionStorage.town + " \n"
  +"State: " + sessionStorage.state + " \n"
  +"postcode: " + sessionStorage.postcode + " \n"
  +"Email: " + sessionStorage.email + " \n"
  +"Phone: " + sessionStorage.phone + " \n"
  +"Skill_list: " + sessionStorage.skill_list + " \n"
  +"Comments: " + sessionStorage.comments );
  */
}

function prefill_form() {

  if (sessionStorage.gname != undefined) {
    document.getElementById("gname").value = sessionStorage.gname;
    document.getElementById("fname").value = sessionStorage.fname;
    document.getElementById("dob").value = sessionStorage.dob;
    document.getElementById("address").value = sessionStorage.address;
    document.getElementById("town").value = sessionStorage.town;
    document.getElementById("state").value = sessionStorage.state;
    document.getElementById("postcode").value = sessionStorage.postcode;
    document.getElementById("email").value = sessionStorage.email;
    document.getElementById("phone").value = sessionStorage.phone;
    document.getElementById("comments").value = sessionStorage.comments;

    switch (sessionStorage.gender) {
      case "male":
        document.getElementById("male").checked = true;
        break;
      case "female":
        document.getElementById("female").checked = true;
        break;
      case "other":
        document.getElementById("other").checked = true;
        break;
    }
    var skill_list = sessionStorage.skill_list.split(" ");
    for (let index = 0; index < skill_list.length; index++) {
      let temp = skill_list[index];
      //console.log(temp);
      let skill = document.getElementById(temp);
      skill.checked = true;
    }
  }
}

function validate() {
  // initialize local variables
  var result = true;

  // Job Reference
  var jobreference = document.getElementById("jobref").value.trim();
  let jobref_error = document.getElementById("jobref_error");
  if (!jobreference == ""){
    if (!jobreference.match(/^[A-Za-z0-9]+$/)) {
      jobref_error.style.display = "inline-block";
      jobref_error.innerHTML = "The Job Reference must only contain alpha characters or digits\n";
      result = false;
    }else{
      jobref_error.style.display = "none";
    }
  }else {
    jobref_error.style.display = "inline-block";
    jobref_error.innerHTML = "The Job Reference CANNOT be Empty\n";
    result = false;
  }

  // First Name
  var firstname = document.getElementById("gname").value.trim();
  let firstname_error = document.getElementById("gname_error");
  if (!firstname == ""){
    if (!firstname.match(/^[A-Za-z]+$/)) {
      firstname_error.style.display = "inline-block";
      firstname_error.innerHTML = "Applicant's First name must only contain alpha characters\n";
      result = false;
    }else{
      firstname_error.style.display = "none";
    }
  }else {
    firstname_error.style.display = "inline-block";
    firstname_error.innerHTML = "The Applicant's First name CANNOT be Empty\n";
    result = false;
  }

  // Last Name
  var lastname = document.getElementById("fname").value.trim();
  let lastname_error = document.getElementById("fname_error");
  if (!lastname == ""){
    if (!lastname.match(/^[A-Za-z\-]+$/)) {
      lastname_error.style.display = "inline-block";
      lastname_error.innerHTML = "Applicant's Family name must only contain alpha characters or hyphens\n";
      result = false;
    }else{
      lastname_error.style.display = "none";
    }
  }else {
    lastname_error.style.display = "inline-block";
    lastname_error.innerHTML = "The Applicant's Family name CANNOT be Empty\n";
    result = false;
  }

  // DOB
  var dob = document.getElementById("dob").value.trim();
  let dob_error = document.getElementById("dob_error");
  var dob_pattern = /^\d{2}\/\d{2}\/\d{4}$/;
  if (!dob == ""){
    if (dob_pattern.test(dob)) {
      let date = new Date();
      let year = date.getFullYear();
      let dob_year = dob.slice(6, 10);
      //console.log(dob_year);
      let age = year - dob_year;
      //console.log(age);
      if (age < 15 || age > 80) {
        dob_error.style.display = "inline-block";
        dob_error.innerHTML = "Invalid Date OF Birth, Applicant should be between the age of 15 and 80  \n";
        result = false;
      }else{
        dob_error.style.display = "none";
      }
    } else {
      dob_error.style.display = "inline-block";
      dob_error.innerHTML = "Applicant's Date OF Birth must be a number and should be in DD/MM/YYYY format\n";
      result = false;
    }
  }else {
    dob_error.style.display = "inline-block";
    dob_error.innerHTML = "The Applicant's Date OF Birth CANNOT be Empty\n";
    result = false;
  }


  var M = document.getElementById("male").checked;
  var F = document.getElementById("female").checked;
  var O = document.getElementById("other").checked;

  // Gender
  let gender_error = document.getElementById("gender_error");
  if (!(M || F || O)) {
    gender_error.style.display = "inline-block";
    gender_error.innerHTML = "Applicant must select your Gender\n";
    result = false;
  }else {
    var gender = "";
    if(M){
      gender = "male";
    }else if(F) {
      gender = "female";
    }else{
      gender = "other";
    }
    gender_error.style.display = "none";
  }

  var address = document.getElementById("address").value.trim();
  let address_error = document.getElementById("address_error");
  // Street Address
  if (!address == ""){
    if (!address.match(/^[A-Za-z0-9\s]+$/)) {
      address_error.style.display = "inline-block";
      address_error.innerHTML = "The Street Address must only contain alpha characters or digits\n";
      result = false;
    }else {
      address_error.style.display = "none";
    }
  } else{
    address_error.style.display = "inline-block";
    address_error.innerHTML = "The Street Address name CANNOT be Empty\n";
    result = false;
  }

  var town = document.getElementById("town").value.trim();
  let town_error = document.getElementById("town_error");
  // Suburb/Town
  if (!town == ""){
    if (!town.match(/^[A-Za-z0-9\s]+$/)) {
      town_error.style.display = "inline-block";
      town_error.innerHTML = "The Suburb/Town must only contain alpha characters or digits\n";
      result = false;
    }else {
      town_error.style.display = "none";
    }
  } else {
    town_error.style.display = "inline-block";
    town_error.innerHTML = "The Suburb/Town name CANNOT be Empty\n";
    result = false;
  }

  var state = document.getElementById("state").value;
  let state_error = document.getElementById("state_error");
  // State
  if (state == "placeholder") {
    state_error.style.display = "inline-block";
    state_error.innerHTML = "Applicant must select a State\n";
    result = false;
  }else {
    state_error.style.display = "none";
  }

  var postcode = document.getElementById("postcode").value.trim();
  // Postcode
  let postcode_error = document.getElementById("postcode_error");
  if (!postcode == ""){
    if (postcode.match(/^[0-9]+$/)) {
      // State Postcode match
      let postcode_first = postcode.charAt(0);
      if ((postcode_first == 3 || postcode_first == 8) && state != "VIC") {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      } else if ((postcode_first == 1 || postcode_first == 2) && state != "NSW") {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      } else if ((postcode_first == 4 || postcode_first == 9) && state != "QLD") {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      } else if (postcode_first == 0 && (state != "NT" || state != "ACT")) {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      } else if (postcode_first == 6 && state != "WA") {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      } else if (postcode_first == 5 && state != "SA") {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      } else if (postcode_first == 7 && state != "TAS") {
        postcode_error.style.display = "inline-block";
        postcode_error.innerHTML = "The State entered Postcode entered Doesn’t match \n";
        result = false;
      }else {
        postcode_error.style.display = "none";
      }
    } else {
      postcode_error.style.display = "inline-block";
      postcode_error.innerHTML = "The Postcode must only contain digits\n";
      result = false;
    }
  }else{
    postcode_error.style.display = "inline-block";
    postcode_error.innerHTML = "The Postcode CANNOT be Empty\n";
    result = false;
  }

  // Email
  // Email Pattern taken from https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
  let email_error = document.getElementById("email_error");
  var email_pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var email = document.getElementById("email").value.trim();
  if (!email == ""){
    if (!email_pattern.test(String(email).toLowerCase())) { 
      email_error.style.display = "inline-block";
      email_error.innerHTML = "The Email is NOT valid\n";
      result = false;
    }else {
      email_error.style.display = "none";
    }
  }else {
    email_error.style.display = "inline-block";
    email_error.innerHTML = "The Email CANNOT be Empty\n";
    result = false;
  }

  // Phone Number
  let phone_error = document.getElementById("phone_error");
  var phone_pattern = /^[\d\s]{8,12}$/; 
  var phone = document.getElementById("phone").value.trim();
  if (!phone == ""){
    if (!phone_pattern.test(phone)) { 
      phone_error.style.display = "inline-block";
      phone_error.innerHTML = "The Phone Number must only contain digits\n";
      result = false;
    }else {
      phone_error.style.display = "none";
    }
  }else {
    phone_error.style.display = "inline-block";
    phone_error.innerHTML = "The Phone Number CANNOT be Empty\n";
    result = false;
  }

  // Skill List
  var html = document.getElementById("html").checked;
  var css = document.getElementById("css").checked;
  var javascript = document.getElementById("javascript").checked;
  var php = document.getElementById("php").checked;
  var c = document.getElementById("c").checked;
  var mysql = document.getElementById("mysql").checked;
  var python = document.getElementById("python").checked;
  var cpp = document.getElementById("cpp").checked;
  var java = document.getElementById("java").checked;
  var otherskills = document.getElementById("otherskills").checked;

  let skills_error = document.getElementById("skills_error");
  if (!(html || css || javascript || php || c || mysql || python || cpp || java)){
    skills_error.style.display = "inline-block";
    skills_error.innerHTML = "Applicant must select at least one Skill\n";
    result = false;
  }else {
    var skill_list = "";
    if(html){
      skill_list = "html ";
    }
    if(css) {
      skill_list += "css ";
    }
    if(javascript){
      skill_list += "javascript ";
    }
    if(php){
      skill_list += "php ";
    }
    if(c){
      skill_list += "c ";
    }
    if(mysql){
      skill_list += "mysql ";
    }
    if(python){
      skill_list += "python ";
    }
    if(cpp){
      skill_list += "cpp ";
    }
    if(java){
      skill_list += "java ";
    }
    if(otherskills){
      skill_list += "otherskills";
    }
    //console.log(skill_list);
    skills_error.style.display = "none";
  }

  // Other Skills check
  let comments_error = document.getElementById("comments_error");
  var comments = document.getElementById("comments").value.trim();
  if (otherskills) {
    //alert(comments);
    if (comments == ""){
      comments_error.style.display = "inline-block";
      comments_error.innerHTML = "Other Skills CANNOT be Empty\n";
      result = false;
    }
  }else {
    comments_error.style.display = "none";
  }

  if (result) {
    storeDetails(firstname, lastname, dob, gender, address, town, state, postcode, email, phone, skill_list, comments);
  }

  return result;
}

function init() {
  if (document.getElementById("jobs")) {
    var applybtn1 = document.getElementById("applybtn1"); 
    applybtn1.onclick = prefill_jobref1; 
    var applybtn2 = document.getElementById("applybtn2"); 
    applybtn2.onclick = prefill_jobref2; 
  } else if (document.getElementById("apply")) {
    prefill_jobref();

    // Reset Form
    var reset_btn = document.getElementById("reset_btn"); 
    reset_btn.addEventListener("click",() => {
      document.getElementById("jobref").readOnly = false; 
    });

    var apply = document.getElementById("apply");
    let run_validate =false;
    if (run_validate){
      apply.onsubmit = validate; 
    } 
    prefill_form();
  }
}

window.addEventListener("load", init);
