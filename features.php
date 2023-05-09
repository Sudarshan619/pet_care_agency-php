<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .container2{

                margin: auto;
            }
            .img-fluid{
                animation: myfirst 10s infinite linear;
                width: 100px;
                height: 100px;
                top: 50%;
                left: 50%;

                border-radius: 320px;
            }
            .bt1 :hover{
                color: white;
                background-color: red;
            }
            .pg{
                text-decoration: none;
            }
            .chem1{
                color: white;
            }
            .og{
                color: white;
                text-decoration: none;
            }
            h2{
                animation: type 3s;
                overflow: hidden;
                white-space: nowrap;
            }
            @keyframes type {
                0%{
                    width: 0ch;
                }
                100%{
                    width: 20ch;
                }
            }
            .navbar-brand{
                font-size: 100px;
            }
            .chem{
                color:blue;
            }
            @keyframes myfirst{
                0%{
                    transform: translate(0%,0%) rotate(0deg);
                }
                100%{
                    transform: translate(0%,0%) rotate(360deg);
                }
            }
            .phy{
                width: 300x;
                height: 450px;
            }

            .grid{
                margin: 80px;
                display: grid;
                grid-template-columns: repeat(3,1fr);
                grid-gap: 50px;
                align-items: center;
            }
            .grid >article{
                background: white;
                border: none;
                box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
                border-radius: 20px;
                text-align: center;
                transition: transform .3s;
            }
            .grid > article:hover{
                transform: translateY(5px);
                box-shadow: 2px 2px 26px 0px rgba(0,0,0,0.3);
            }
            .grid > article img{
                width: 100%;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
            }
            .text{
                padding:0 20px 20px;
            }
            .text button{
                background: black;
                border-radius: 20px;
                border: none;
                color: white;
                padding: 10px;
                width: 100%;
                font-weight: 600;
                text-transform: uppercase;
                cursor: pointer;
            }



            @media (max-width:768px){
                .grid{
                    grid-template-columns:repeat(2,1fr)
                }
            }
            @media (max-width:500px){
                .grid{
                    grid-template-columns:repeat(1,1fr);
                }
                .grid > article{
                    text-align: center;
                }
            }
            h1{
                color: black;
                text-align: center;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div class="container2">
            <h1 >SELECT YOUR PET</h1>
            <div class="container1">
                <main class="grid">
                    <article>
                        <img  height="250px" src="images/cat1.jpg " alt="">
                        <div class="text">
                            <h3 bg-dark>CATS</h3>
                            <p>Cats are known for their independence and grace. To ensure their well-being, cat owners should prioritize certain aspects of care. First and foremost, a balanced diet rich in protein is essential for cats. Our pet care shop offers a variety of cat food options that cater to their specific nutritional needs. Cats are natural climbers and need vertical spaces for exercise and play. Providing scratching posts, perches, and interactive toys helps meet their instinctual needs and prevents destructive behavior. Litter box maintenance is crucial for keeping the living environment clean and odor-free. Regular grooming, including brushing to prevent matting and periodic dental care, is also important. Cat owners should also consider regular veterinary visits for vaccinations, health check-ups, and preventive care. </p>
                            <a href="cat.php">
                                <button>SELECT</button>
                            </a>

                        </div>
                    </article>
                    <article>
                        <img height="250px"src="images/parrot1.jpg" alt="">
                        <div class="text">
                            <h3>BIRDS</h3>
                            <p> Birds are captivating creatures that bring color and song to our lives. Caring for birds requires specific knowledge and attention. A proper diet is vital for their well-being, and our pet care shop offers a range of bird feed and supplements to meet their nutritional requirements. Clean and spacious cages, with perches and toys, provide an engaging environment for birds to explore and exercise. Regular cleaning of cages and the surrounding area helps maintain hygiene and prevent the spread of diseases. Birds need social interaction, so owners should spend quality time with them, engaging in activities such as talking, whistling, or teaching them tricks. Regular veterinary check-ups are essential to monitor their health, and owners should be aware of signs of illness, such as changes in appetite or behavior.</p>
                            <a href="bird.php">
                                <button>SELECT</button>
                            </a>

                        </div>
                    </article>
                    <article>
                        <img  height="250px" src="images/dog1.jpg" alt="">
                        <div class="text">
                            <h3>DOGS</h3>
                            <p> Dogs are often referred to as man's best friend for their loyalty and companionship. When it comes to dog care, several essential factors should be considered. Firstly, providing a balanced diet with appropriate nutrition is vital for their overall health and well-being. High-quality dog food, tailored to their age, breed, and size, is readily available at our pet care shop. Regular exercise is also essential to keep dogs physically fit and mentally stimulated. Whether it's a daily walk or engaging playtime, exercise helps prevent obesity and promotes a healthy lifestyle. Additionally, dogs require proper grooming, including regular bathing, brushing, and nail trimming, to maintain their hygiene. Providing a comfortable and safe living environment, along with regular veterinary check-ups and vaccinations, completes the holistic care needed for dogs. </p>
                            <a href="dog.php">
                                <button class="bt1"href="">SELECT</button>
                            </a>

                        </div>
                    </article>
                </main>
            </div>
            <?php
            // put your code here
            ?>
    </body>
</html>
