<?php
 $insert = false;
 if(isset($_POST['name'])){
    //  set connection variables
 $server = "localhost";
 $username = "root";
 $password = "";
// create a db connection
 $con = mysqli_connect($server,$username,$password);

//  check for connection success
 if(!$con){
     die("connection to this databse failed due to". mysqli_connect_error());
 }
//  echo "success connecting to db"


// collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$group = $_POST['group'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `hci_project`.`hci_project` ( `name`, `usn`, `group_name`, `email`, `whatsapp_number`, `Group_details`, `date`) VALUES ( '$name', '$age', '$group', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

// execute thee query
if($con->query($sql) == true){
    // echo "successfully inserted";
    // flag for succesful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
    
}
// close db connection
$con->close();

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Project Form</title>
  </head>
  <body>
      <div>
      <img class="bg" src="bg.jpg" alt="GIT Belgaum">
    </div>
    <div class="container">
        <h1>Welcome to HCI Project Form</h1>
        <p>Enter your details and submit the form</p>
        <?php 
        if($insert==true){
        echo "<p class='submitmsg'>Your details are submitted successfully.Goodluck for your project!</p>";}
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name" Required>
            <input type="text" name="age" id="age" placeholder="Enter your USN" Required>
            <input type="text" name="group" id="group" placeholder="Enter your group name" Required>
            <input type="email" name="email" id="email" placeholder="Enter your email : exm@gmail.com" Required>
            <input type="phone" name="phone" id="phone" placeholder="Enter your active whatsapp number" Required>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="USN of Your group members and brief description regarding your project" Required></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
      <script src="index.js"></script>

      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>