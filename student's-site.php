<?php
/*
 * @author Sharon Lagat
 * @facebook https://www.facebook.com/slagat7
 * @twitter https://twitter.com/LagatSharon

 */

require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>
<link rel="manifest" href="manifest.json">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
       .image_container{position:relative;background: url("images/library.jpeg") no-repeat center center fixed;font-family: 'Skranji', cursive;background-size: cover;height: 90%;overflow: hidden;}
       .image_container .btn-toolbar section{border-radius: 10px;background-color: rgba(255,255,255,0.8);padding: 3%;width: 50%;height: 30%;box-shadow: 12px 0 15px -4px rgba(215,215, 0, 0.8), -12px 0 8px -4px rgba(215,215, 0, 0.8);margin-left: auto;margin-right: auto;margin-top: 2%;display: flex;flex-direction: column; }

       .columnsUnderTitle {display: flex;}
       .header figure img{display: block;margin-left: auto;margin-right: auto;width: 30%;}
       section img{margin: auto;margin-right: 5%;}
       section form{margin: auto;flex: 1;}
       label{font-size: 1.7rem;color: black;}
       input[type=text], [type=price]{font-family: 'Skranji', cursive;font-size: 1.2rem;width: 100%;padding: 3% 4%;margin: 2% 0;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;}
       input[type=submit] {font-family: 'Skranji', cursive;font-size: 20px;width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;}
       input[type=submit]:hover {background-color: #45a049;}
       /*Link customization*/
       .image_container .btn-toolbar  section form a{text-decoration: none;font-size: 1.1rem;background-color: #DBA901;color: white;padding: 1%;text-align: center;border-radius: 5px;display: inline-block;}
       section form a:hover{background-color: #4CAF50;}
       input, label{display: block;}
       footer {position: fixed;left: 0;bottom: 0;width: 100%;color: white;text-align: center;}
       footer p{float:left;}
</style>



<script type="text/javascript" src="student.js"></script>


    <div class="image_container">

    <div class="btn-toolbar">

    <section id="hire_tutor">
        <h2>BE A TUTOR!!!</h2>

        <div class="columnsUnderTitle">

            <form>
                <label for="course">Course</label>
                <input id="course" name="course" type="text" required="required">

                <label for="date">What date would you like to start</label>
                <input id="date" name="Date" type="text" required="required">

                <label for="email">Email</label>
                <input id="email" name="Email" type="text" required="required">

                <label for="price">Price Range Per Hour</label>
                <input id="price" name="Price" type="text" required="required">

                <input type="submit" value="Teach Other Students!"/>



                </form>


        </div>

    </section>
        <section id="list">
            <h2>Available Tutors</h2>

            <ul id="tutors">
            </ul>
        </section>
    </div>


<?php

include("footer.php");
?>

