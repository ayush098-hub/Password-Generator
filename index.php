<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Password Generator</title>
  </head>
  <style>
h1 {text-align: center;}


  </style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Password Generator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<br>


<div class="p-3 mb-2 bg-dark text-white">
<div class="container">

<form action="index.php" method="POST" id="form1">
 <h1>Enter length of password</h1>
  <input class="form-control" type="text" value="<?= isset($_POST['length']) ? htmlentities($_POST['length']) : '' ?>" name="length" required>
  <?= isset($errors['length']) ? '<div class="input-error">'.$errors['length'].'</div>' : '' ?>
  <br>
  <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Submit"/>
</form>
</div>


<div class="container">
<?php

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // validate length
   if (!isset($_POST['length'])) {
     $errors['length'] = 'Length is a required field';
   } 

   // no errors, do processing on length
   if (empty($errors)) {
    $length=$_POST['length'];
    
    if (is_numeric($length)) {
        if ($length <5 ) {
            echo "Please enter length more than 5";
         }
        
        else if ($length>100) {
            echo "You are not allowed to enter length more than 100";
        }
        
        else {
            // echo "Length entered by you is: ".$length;
        
        
        
            $lowercase='abcdefghijklmnopqrstuvwxyz';
            $uppercase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $digits='0123456789';
            $symbols='~!@#$%^&*()_+=-';    
            
            $charcters=$lowercase.$uppercase.$digits.$symbols;
            echo "<br>";
            
            $passwordlist = [];
            
            for ($i=0;$i<$length;$i++){
                $randomChar = $charcters[rand(0, strlen($charcters)-1)];
                array_push($passwordlist,$randomChar);
            }
        
            echo "Your Password is: ";
            foreach($passwordlist as $element) {
              echo  $element;

            }
      }
        
    }
    else {
        echo " Please enter valid number.";
    }
   }
} 
?>

</div>
</div>
<div class="p-3 mb-2 bg-dark text-white" style="height: 500px;">
<div class="container">

  <u> <h1>PASSWORD GENERATOR</h1></u>
  <br><br>
  <p>Just as its name sounds, password generators are online tools that create customized passwords for users. These originators create strong and random passwords for each subscriber account. The most advantaged are individuals who frequently need to create and manage new passwords. Other than creating passwords, the originators securely manage a large number of passwords. Yes, generators aid in creating new strong passwords, but are they all the same?
  <br>

Varying password generators form passwords differently. They are like software programmed to work differently. Some create passwords randomly by combining numbers, special characters, and letters to form complex passwords. However, some are programmed to produce pronounceable passwords.</p>

</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="github.com/ayush098-hub"> Ayush</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

