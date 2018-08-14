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
<!DOCTYPE html>
<html>
  <head>
    <style>
       .image_container{position:relative;background: url("images/library.jpeg") no-repeat center center fixed;font-family: 'Skranji', cursive;background-size: cover;height: 90%;overflow: hidden;}
       .image_container .btn-toolbar section{border-radius: 10px;background-color: rgba(255,255,255,0.8);padding: 3%;width: 50%;height: 30%;box-shadow: 12px 0 15px -4px rgba(215,215, 0, 0.8), -12px 0 8px -4px rgba(215,215, 0, 0.8);margin-left: auto;margin-right: auto;margin-top: 2%;display: flex;flex-direction: column; }

       .columnsUnderTitle {display: flex;color: #008CBA;}
       .header figure img{display: block;margin-left: auto;margin-right: auto;width: 30%;}
       section img{margin: auto;margin-right: 5%;}
       section form{margin: auto;flex: 1;}
       label{font-size: 1.7rem;color: black;}
       input[type=text] {font-family: 'Skranji', cursive;font-size: 1.2rem;width: 100%;padding: 3% 4%;margin: 2% 0;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;}
       input[type=submit] {font-family: 'Skranji', cursive;font-size: 20px;width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;}
       input[type=submit]:hover {background-color: #45a049;}
       input[type=number] {font-family: 'Skranji', cursive;font-size: 1.2rem;width: 100%;padding: 3% 4%;margin: 2% 0;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;}
       input[type=date] {font-family: 'Skranji', cursive;font-size: 1.2rem;width: 100%;padding: 3% 4%;margin: 2% 0;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;}
       /*Link customization*/
       .image_container .btn-toolbar  section form a{text-decoration: none;font-size: 1.1rem;background-color: #DBA901;color: white;padding: 1%;text-align: center;border-radius: 5px;display: inline-block;}
       section form a:hover{background-color: #4CAF50;}
       input, label{display: block;}
       footer {position: fixed;left: 0;bottom: 0;width: 100%;color: white;text-align: center;}
       footer p{float:left;}
    </style>
  </head>
  <body>


<?php

$course = $date = $email = $price ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $course = test_input($_POST["course"]);
  $date = test_input($_POST["date"]);
  $email = test_input($_POST["email"]);
  $price = test_input($_POST["price"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="image_container">

    <div class="btn-toolbar">
 <section id="hire_tutor">
<h2>SUBMIT YOUR DETAILS!!!</h2>
  <div class="columnsUnderTitle">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Course: <input type="text" name="course">
  <br><br>
What date would you like to start? :<input type="date" name="date">
  <br><br>
  E-mail: <input type="text" name="email">
   <br><br>
  Price range per hour: <input type="number" name="price">
  <br><br>
  <input type="submit" name="submit" value="Teach Other Students">  
</form>
  </div>
    </section>
	    <section id="list">
<?php
echo "<h2>Available Tutors:</h2>";
echo $course;
echo "<br>";
echo $date;
echo "<br>";
echo $email;
echo "<br>";
echo $price;

?>
    </section>
    </div>
  </body>
</html>
<?php

include("footer.php");
?>
