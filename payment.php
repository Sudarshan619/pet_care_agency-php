<?php
session_start();

if (!isset($_SESSION["authenticated"])) {
    header("location: login1.php");
    exit;
}
?>

<h1 class="text-center">User Bookings</h1>





        
<!-- For demo purpose -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">

                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                                <th >SI</th>
                                <!--<th scope="col" class="col-3">Name</th>-->
                                <th >PET NAME</th>
                                <th >PACKAGE</th>
                                <th >BREED</th>
                                <th >ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                 <?php
                $email = $_SESSION["email"];
//                echo $email;
                $con = mysqli_connect("localhost", "root", "sudu123", "pets");
                $query = "select * from booking where ownername = '$email'";
                $view_users = mysqli_query($con, $query);
//                if (!$view_users) {
//                    echo "no booking found";
//                }
                $si=1;
                while ($row = mysqli_fetch_assoc($view_users)) {
                    $id = $row['petname'];
                    $user = $row['package'];
                    $email = $row['breed'];
//                    $pass = $row['ownername'];
                    $i=$row['id'];
//                    
                     echo "<tr >";
                     echo " <td >$si</td>";
                     echo " <td >{$id}</td>";
                     echo " <td >{$user} </td>";
                     echo " <td >{$email} </td>";
//                     echo " <td >{$pass} </td>";
                     echo "<td> <a href=payment1.php?id=$i><button type= submit>PAYMENT</button></a>";
                     echo " </tr> ";
                     $si++;
                }
                ?>
                            
                          
                           
                        </tbody>
                    </table>
                </div><!-- End -->
                <!-- a BACK Button to go to pervious page -->
<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
    <div>
            </div>
        </div>
    </div>