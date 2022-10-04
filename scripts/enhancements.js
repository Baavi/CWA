/**
 * Author: Baavika Wijesundera 103520158
 * Target: ASSIGN2
 * Purpose: JavaScript
 * Created: 13/09/2021
 * Last updated: 23/09/2021
 * Credits: None
 */

"use strict";

const navSlide = () => {
  //console.log("Nav");
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-list");
  const navLinks = document.querySelectorAll(".nav-list > li");

  //toggle Nav
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    //Animate Links
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s`;
      }
    });
    //burger animation
    burger.classList.toggle("toggle");
  });
};
const timer = () => {
  //console.log("Timer");
  // Setting Timer
  var Time1 = new Date().getTime();

  // Update the count down every 1 second
  var x = setInterval(function () {
    // Get today's date and time
    var Time2 = new Date().getTime();

    // Find the counter value
    var counter = Time2 - Time1;

    // Time calculations for minutes and seconds
    var minutes = Math.floor((counter % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((counter % (1000 * 60)) / 1000);

    //checking if element with id="timer" exist
    var check_timer = document.getElementById("timer");
    if (check_timer) {
      // Output the result in an element with id="timer"
      document.getElementById("timer").innerHTML =
        minutes + "m " + seconds + "s ";
      // If the count down is about to finish
      if (minutes == 8 && seconds == 0) {
        document.getElementById("timer").style.backgroundColor = "#ffc107";
        document.getElementById("timer").style.color = "black";
      }
      // If the count down is over
      if (minutes == 10 && seconds == 0) {
        document.getElementById("timer").innerHTML = "Out of Time";
        var respond;
        if (confirm("Need More Time, If so press Ok")) {
          respond = "1";
        } else {
          respond = "0";
        }
      }
      // Redirect
      if ((minutes >= 15 ) || respond == 0) {
        clearInterval(x);
        window.location.href = "index.php";
      }
    }
  }, 1000);
};

function mode() {
  //console.log("Dark");
  const darkSwitch = document.querySelector(".dark-switch");
  const lightSwitch = document.querySelector(".light-switch");
  const body = document.querySelector("body");
  // Checking localstorage
  if (localStorage.getItem("darkMode")) {
    body.classList.add("dark-mode");
    darkSwitch.classList.remove("active");
    lightSwitch.classList.add("active");
  }

  darkSwitch.addEventListener("click", () => {
    body.classList.add("dark-mode");
    darkSwitch.classList.remove("active");
    lightSwitch.classList.add("active");
    localStorage.setItem("darkMode", "true");
  });

  lightSwitch.addEventListener("click", () => {
    body.classList.remove("dark-mode");
    darkSwitch.classList.add("active");
    lightSwitch.classList.remove("active");
    localStorage.removeItem("darkMode");
  });
}

function phperror() {

  if(document.getElementById("apply")){
    let form_valid = document.getElementById("form_valid");
    if (form_valid.innerHTML != ""){
      //console.log("form_valid");
      form_valid.style.display = "inline-block";
    }
    let jobref_error = document.getElementById("jobref_error");
    if (jobref_error.innerHTML != ""){
      //console.log("jobref_error");
      jobref_error.style.display = "inline-block";
    }
    let firstname_error = document.getElementById("gname_error");
    if (firstname_error.innerHTML != ""){
      //console.log("gname_error");
      firstname_error.style.display = "inline-block";
    }
    let lastname_error = document.getElementById("fname_error");
    if (lastname_error.innerHTML != ""){
      //console.log("fname_error");
      lastname_error.style.display = "inline-block";
    }
    let dob_error = document.getElementById("dob_error");
    if (dob_error.innerHTML != ""){
      //console.log("dob_error");
      dob_error.style.display = "inline-block";
    }
    let gender_error = document.getElementById("gender_error");
    if (gender_error.innerHTML != ""){
      //console.log("gender_error");
      gender_error.style.display = "inline-block";
    }
    let address_error = document.getElementById("address_error");
    if (address_error.innerHTML != ""){
      //log("address_error");
      address_error.style.display = "inline-block";
    }
    let town_error = document.getElementById("town_error");
    if (town_error.innerHTML != ""){
      //console.log("town_error");
      town_error.style.display = "inline-block";
    }
    let state_error = document.getElementById("state_error");
    if (state_error.innerHTML != ""){
      //console.log("state_error");
      state_error.style.display = "inline-block";
    }
    let postcode_error = document.getElementById("postcode_error");
    if (postcode_error.innerHTML != ""){
      //console.log("postcode_error");
      postcode_error.style.display = "inline-block";
    }
    let email_error = document.getElementById("email_error");
    if (email_error.innerHTML != ""){
      //console.log("email_error");
      email_error.style.display = "inline-block";
    }
    let phone_error = document.getElementById("phone_error");
    if (phone_error.innerHTML != ""){
      //console.log("phone_error");
      phone_error.style.display = "inline-block";
    }
    let skills_error = document.getElementById("skills_error");
    if (skills_error.innerHTML != ""){
      //console.log("skills_error");
      skills_error.style.display = "inline-block";
    }
    let comments_error = document.getElementById("comments_error");
    if (comments_error.innerHTML != ""){
      //console.log("comments_error");
      comments_error.style.display = "inline-block";
    }
  }

  if(document.getElementById("login_page")){
    let username_error = document.getElementById("username_error");
    if (username_error.innerHTML != ""){
      //console.log("username_error");
      username_error.style.display = "inline-block";
    }
    let password_error = document.getElementById("password_error");
    if (password_error.innerHTML != ""){
      //console.log("password_error");
      password_error.style.display = "inline-block";
    }
  }
}

function inite() {
  if (!document.getElementById("manage")) {
    navSlide();
  }  
  mode();
  if (document.getElementById("apply")) {
    timer();
  }  
}

window.addEventListener("load", inite);


