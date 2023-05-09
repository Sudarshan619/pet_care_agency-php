<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
$res=false;
if (!isset($_SESSION["authenticated"])) {
    header("location: login1.php");
    exit;
}
?>
  <?php
         $con = mysqli_connect("localhost", "root", "sudu123", "pets");
         $id = ($_GET['id']);
                $query = "select * from booking where id = '$id'";
                $view_users = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($view_users);
                
        ?>
  

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');


body{
background: linear-gradient(to right, rgba(235,224,232,1) 52%,rgba(254,191,1,1) 53%,rgba(254,191,1,1) 100%);
font-family: 'Roboto', sans-serif;
}

.card{
	border: none;
	max-width: 450px;
	border-radius: 15px;
	margin: 150px 0 150px;
	padding: 35px;
	padding-bottom: 20px!important;
}
.heading{
	color: #C1C1C1;
	font-size: 14px;
	font-weight: 500;
}
img{
	transform: translate(160px,-10px);
}
img:hover{
    cursor: pointer;
}
.text-warning{
	font-size: 12px;
	font-weight: 500;
	color: #edb537!important;
}
#cno{
	transform: translateY(-10px);
}
input{
	border-bottom: 1.5px solid #E8E5D2!important;
	font-weight: bold;
	border-radius: 0;
	border: 0;

}
.form-group input:focus{
	border: 0;
	outline: 0;
}
.col-sm-5{
	padding-left: 90px;
}
.btn{
	background: #F3A002!important;
	border: none;
	border-radius: 30px;
}
.btn:focus{
    box-shadow: none;
}
        </style>
    </head>
    <body>
              

<?php 
        if(isset($_POST['submit'])){
            $card_num=$_POST['card_num'];
            $name=$_POST['name'];
            $expiration=$_POST['expiration'];
            $cvv=$_POST['cvv'];
            $package=$row['package'];
            $id = $row['id'];
                  
                   
            $con=mysqli_connect("localhost", "root", "sudu123", "pets");
            $query="insert into payment (id,card_num,name,expiration,cvv,package,booking_id) values(null,'$card_num','$name','$expiration','$cvv','$package','$id')";
                    $result= mysqli_query($con, $query);
//                    echo '$result';
                    if($result){
                        $res=true;
//                        header('location:index.php');
//                        echo 'hello';
                       
//                       
                    }
                    else{
                        echo "cannot insert;";
                    }
                    
        }
        ?>

      
        <?php
        if($res){
             echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Booking succesfull</strong> thank you for bookinng with us.
  <a href="index.php"><input type="submit" value="HOME" class="btn-success"></a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
       
        ?>
  

        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12">
                    <div class="card mx-auto">
                        <p class="heading">PAYMENT DETAILS</p>
                        <form class="card-details " method="post">
                            <input type="hidden" name="id" value= "<?php echo $row['id'] ?>">
                            <div class="form-group mb-0">
                                <p class="text-warning mb-0">Card Number</p> 
                                <input type="text" name="card_num" placeholder="1234 5678 9012 3457" size="17" id="cno" minlength="5" maxlength="5">
                                <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                            </div>

                            <div class="form-group">
                                <p class="text-warning mb-0">Cardholder's Name</p> <input type="text" name="name" placeholder="Name" size="6">
                            </div>
                            <div class="form-group pt-2">
                                <div class="row d-flex">
                                    <div class="col-sm-4">
                                        <p class="text-warning mb-0">Expiration</p>
                                        <input type="text" name="expiration" placeholder="MM/YYYY" size="7" id="exp" minlength="8" maxlength="10">
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="text-warning mb-0">Cvv</p>
                                        <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3"  maxlength="3">
                                    </div>
                                    <div class="col-sm-5 pt-0">
                                        
                                        <input type="submit" name="submit" value="<?php echo  "pay " ; echo $row['package'] ?>" class="btn btn-primary"><i class="fas fa-arrow-right px-3 py-2"></i>
                                    </div>
                                </div>
                            </div>		
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

