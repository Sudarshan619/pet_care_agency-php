<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
           <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .navbar-collapse{
            display: flex;
            justify-content: flex-end;
        }
        .nav-link{
            font-size: 20px;
            list-style: none;
            margin: 0 10px;
            padding: 0;
        }

        .navbar-brand {
            font-size: 30px;
            color: aqua;
        }

        

        .carousel-caption {
            color: black;
        }
        #carouselExampleDark{
            height: 50%;
        }
       
        .carousel-item{
            height:700px;
        }
        .user{
            font-size: 30px;
            color: aqua;
            margin: auto;
            text-align: end;
            float: right;
            justify-content: flex-end;
            width: 300px;
        }
    </style>
    </head>
    <body>
         <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PETCARE</a>
         
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    <a class="nav-link" href="payment.php">BOOKING</a>
                    <a class="nav-link" href="features.php">FEATURES</a>
                    <a class="nav-link"  href="profile.php">PROFILE</a>
                    <a class="nav-link"  href="logout.php">LOGOUT</a>
                  
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/dog1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pet Boarding</h5>
                    <p>Owning a pet is a responsibility that should not be taken lightly. Whether it's a dog, cat, or bird,</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="images/parrot1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Day care</h5>
                    <p>By understanding the unique needs of dogs, cats, and birds, we can help foster a lifelong bond between owners and their pets, ensuring a happy and fulfilling life for all.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/cat1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Grooming</h5>
                    <p> we are committed to providing the necessary resources, including high-quality food, toys, grooming products</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <?php
        // put your code here
        
        ?>
    </body>
</html>
