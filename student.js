"use strict";

document.addEventListener("DOMContentLoaded", init);

let tutors = [];

function init()
{
    document.querySelector("form").addEventListener("submit", onFormSubmit);
    document.querySelector("#tutors").addEventListener("click", onTutorClick);
}

function onFormSubmit(e)
{
    e.preventDefault();

    let course = document.getElementById("course").value;
    let date = document.getElementById("date").value;
    let email = document.querySelector("email").value;
    let price = document.getElementById("price").value;

    let tutor = { course: course, date: date, email: email, price: price };

    tutors.push(tutor);

    showTutor(tutor);
    resetForm();
}

function resetForm()
{
    document.querySelector("form").reset();
}

function showTutor(tutor)
{
    document.getElementById("list").style.display = "block";



    document.getElementById("tutors").innerHTML +=
        "<li><a href=\"#\" data-email=\"" + tutor.course + "\">" + tutor.date + ", " + tutor.price + " <a href=\"#\"></li>";
}

function onTutorClick(e)
{
    e.preventDefault();

    let target = e.target;

    if (target !== null && target.tagName.toLowerCase() === "a")
    {
        alert(target.text + " can be reached via:\n" + target.getAttribute("data-email"));
    }
}