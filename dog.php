<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
$res=false;
if(!isset($_SESSION["authenticated"])){
    header("location: login1.php");
    exit;
}
?>
<?php 
        if(isset($_POST['submit'])){
            $petname=$_POST['petname'];
            $package=$_POST['package'];
            $phoneno=$_POST['phoneno'];
            $date1=$_POST['date1'];
            $date2=$_POST['date2'];
                    $groom=$_POST['groom'];
                    $dayout=$_POST['dayout'];
                            $gender=$_POST['gender'];
                            $weight=$_POST['weight'];
                            $pool=$_POST["pool"];
                            $breed=$_POST["breed"];
                            $email=$_SESSION['email'];
                   
            $con=mysqli_connect("localhost", "root", "sudu123", "pets");
            $query="insert into booking (id,breed,status,package,weight,gender,petname,groom,ownername,pools,dayout,date1,date2) values(null,'$breed','confirmed','$package','$weight','$gender','$petname','$groom','$email','$pool','$dayout','$date1','$date2')";
                    $result= mysqli_query($con, $query);
                    if($result=1){
                        $res=true;
//                        header("location:index.php");
//                        exit();
                    }
                    
        }
        ?>
<html>
    <head>
            <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap");
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  align-items: center;
  background: #D8AA96;
  color: rgba(0, 0, 0, 0.8);
  display: grid;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  font-weight: 400;
  height: 100vh;
  justify-items: center;
  weight: 100vw;
}

.signup-container {
  display: grid;
  grid-template-areas: "left right";
  max-width: 900px;
}

.left-container {
  background: #807182;
  overflow: hidden;
  padding: 40px 0 0 0;
  position: relative;
  text-align: center;
  width: 300px;
}
.left-container h1 {
  color: rgba(0, 0, 0, 0.8);
  display: inline-block;
  font-size: 24px;
}
.left-container h1 i {
  background: #F7B1AB;
  border-radius: 50%;
  color: #807182;
  font-size: 24px;
  margin-right: 5px;
  padding: 10px;
  transform: rotate(-45deg);
}
.left-container .puppy {
  bottom: -5px;
  position: absolute;
  text-align: center;
}
.left-container .puppy:before {
  background: #807182;
  content: "";
  height: 100%;
  left: 0;
  opacity: 0.4;
  position: absolute;
  width: 100%;
  z-index: 1;
}
.left-container img {
  filter: sepia(100%);
  width: 70%;
}

.right-container {
  background: #f9c7c2;
  display: grid;
  grid-template-areas: "." ".";
  width: 500px;
}
.right-container h1:nth-of-type(1) {
  color: rgba(0, 0, 0, 0.8);
  font-size: 28px;
  font-weight: 600;
}
.right-container .set {
  display: flex;
  justify-content: space-between;
  margin: 10px 0;
}
.right-container input {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  height: 38px;
  line-height: 38px;
  padding-left: 5px;
}
.right-container input, .right-container label {
  color: rgba(0, 0, 0, 0.8);
}
.right-container header {
  padding: 40px;
}
.right-container label, .right-container input, .right-container .pets-photo {
  width: 176px;
}
.right-container .pets-photo {
  align-items: center;
  display: grid;
  grid-template-areas: ". .";
}
.right-container .pets-photo button {
  border: none;
  border-radius: 50%;
  height: 38px;
  margin-right: 10px;
  outline: none;
  width: 38px;
}
.right-container .pets-photo button i {
  color: rgba(0, 0, 0, 0.8);
  font-size: 16px;
}
.right-container .pets-weight .radio-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
}
.right-container footer {
  align-items: center;
  background: #fff;
  display: grid;
  padding: 5px 40px;
}
.right-container footer button {
  border: 1px solid rgba(0, 0, 0, 0.2);
  height: 38px;
  line-height: 38px;
  width: 100px;
  border-radius: 19px;
  font-family: "Montserrat", sans-serif;
}
.right-container footer #back {
  background: #fff;
  transition: 0.2s all ease-in-out;
}
.right-container footer #back:hover {
  background: #171A2B;
  color: white;
}
.right-container footer #next {
  background: #807182;
  border: 1px solid transparent;
  color: #fff;
}
.right-container footer #next:hover {
  background: #171A2B;
}

.pets-name label, .pets-breed label, .pets-birthday label, .pets-gender label, .pets-spayed-neutered label, .pets-weight label {
  display: block;
  margin-bottom: 5px;
}

.radio-container {
  background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  display: inline-block;
  padding: 5px;
}

.radio-container label {
  background: transparent;
  border: 1px solid transparent;
  border-radius: 2px;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  margin: 0;
  padding: 0;
  text-align: center;
  transition: 0.2s all ease-in-out;
  width: 80px;
}

.radio-container input[type=radio] {
  display: none;
}

.radio-container input[type=radio]:checked + label {
  background: #F7B1AB;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
    </style>
    </head>
    <body>
        <?php
        if($res){
        echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <a href="index.php"><input type="submit" value="payment" class="btn-success"></a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
        ?>
            <form action="" method="post">
    <div class='signup-container'>
        <div class='left-container'>
         <h1>
                  Fill up the form
              </h1>
          <div class='puppy'>
              
            <img src='images/dog.png'>
          </div>
        </div>
        <div class='right-container'>
          <header>

            <div class='set'>
              <div class='pets-name'>
                <label for='pets-name'>Name</label>
                <input id='pets-name' placeholder="Pet's name" name="petname"type='text'>
              </div>
              <!-- <div class='pets-photo'>
                <button id='pets-upload'>
                  <i class='fas fa-camera-retro'></i>
                </button>
                <label for='pets-upload'>Upload a photo</label>
              </div> -->
              <div class='pets-gender'>
                <label for='pet-gender-female'>Package</label>
                <div class='radio-container'>
                  <input checked='' id='pet-gender-female' name='package' type='radio' value='$49'>
                  <label for='pet-gender-female'>$49</label>
                  <input id='pet-gender-male' name='package' type='radio' value='$89'>
                  <label for='pet-gender-male'>$89</label>
                </div>
              </div>
            </div>
            <div class='set'>
              
                <div class='pets-birthday'>
                  <label for='pets-birthday'>Phone no</label>
                  <input id='pets-birthday' name="phoneno"placeholder='' type='text'>
                </div>
                    <div class='pets-breed'>
                <label for='pets-breed'>Breed</label>
                <input id='pets-breed' name="breed" placeholder="Pet's breed" type='text'>
              </div>
              </div>
       
            <div class='set'>
              
              <div class='pets-birthday'>
                <label for='pets-birthday'>boarding from</label>
                <input id='pets-birthday' name="date1"placeholder='MM/DD/YYYY' type='datetime-local'>
              </div>
              <div class='pets-birthday'>
                <label for='pets-birthday'>boarding to</label>
                <input id='pets-birthday' name="date2"placeholder='MM/DD/YYYY' type='datetime-local'>
              </div>
            </div>
            <div class='set'>
                <div class='pets-gender'>
                  <label for='pet-gender-female'>Groom</label>
                  <div class='radio-container'>
                    <input checked='' id='pet-gender-female' name='groom' type='radio' value='YES'>
                    <label for='pet-gender-female'>YES</label>
                    <input id='pet-gender-male' name='groom' type='radio' value='NO'>
                    <label for='pet-gender-male'>No</label>
                  </div>
                </div>
                <div class='pets-spayed-neutered'>
                  <label for='pet-spayed'>Dayout</label>
                  <div class='radio-container'>
                    <input checked='' id='pet-spayed' name='dayout' type='radio' value='YES'>
                    <label for='pet-spayed'>YES</label>
                    <input id='pet-neutered' name='dayout' type='radio' value='NO'>
                    <label for='pet-neutered'>NO</label>
                  </div>
                </div>
              </div>
            <div class='set'>
              <div class='pets-gender'>
                <label for='pet-gender-female1'>Gender</label>
                <div class='radio-container'>
                  <input checked='' id='pet-gender-female1' name='gender' type='radio' value='female'>
                  <label for='pet-gender-female1'>Female</label>
                  <input id='pet-gender-male1' name='gender' type='radio' value='male'>
                  <label for='pet-gender-male1'>Male</label>
                </div>
              </div>
              <div class='pets-spayed-neutered'>
                <label for='pet-spayed1'>pool</label>
                <div class='radio-container'>
                  <input checked='' id='pet-spayed1' name='pool' type='radio' value='YES'>
                  <label for='pet-spayed1'>YES</label>
                  <input id='pet-neutered1' name='pool' type='radio' value='NO'>
                  <label for='pet-neutered1'>NO</label>
                </div>
              </div>
            </div>
            <div class='pets-weight'>
              <label for='pet-weight-0-25'>Weight</label>
              <div class='radio-container'>
                <input checked='' id='pet-weight-0-25' name='weight' type='radio' value='0-25'>
                <label for='pet-weight-0-25'>0-25 lbs</label>
                <input id='pet-weight-25-50' name='weight' type='radio' value='25-50'>
                <label for='pet-weight-25-50'>25-50 lbs</label>
                <input id='pet-weight-50-100' name='weight' type='radio' value='50-100'>
                <label for='pet-weight-50-100'>50-100 lbs</label>
                <input id='pet-weight-100-plus' name='weight' type='radio' value='100+'>
                <label for='pet-weight-100-plus'>100+ lbs</label>
              </div>
            </div>
          </header>
          <footer>
            <div class='set'>
              
              <button id='next' name="submit">Next</button>
            </div>
          </footer>
        </div>
      </div>
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
