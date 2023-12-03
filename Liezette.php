<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liezette Aparri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="Liezette.php" method="post">
                    <input type="submit" name="logout" value="Logout" id="logout">
                  </form>
            <div class="container-info">
                    <div class="info">
                        <img src="images/IMG_20231203_183233_937.jpg" class="pic">
                    </div>
                    <div class="info-text">
                        <h2>Liezette</h2>
                        <p><span class="it">INFORMATION TECHNOLOGY STUDENT</span></p>
                        <hr>
                        <p> Good day! I am Liezette C. Aparri, 19 years old. I am currently studying at Quezon City University taking Bachelor of Science in Information Technology. Some of my hobbies are playing badminton and playing guitar. Hope you had a great time visiting my website. Have a great day ahead!.
                        <div><a href="#more"><button class="morebtn" >More about this person</button></a></div>
                    </div>
            </div>

            <section id="more">
                <div class="more-content">
                    <div class="title"><h2>More about this person</h2></div>
                    <div class="hobbies">
                    <h4>Hobbies:</h4>

                    - Singing<br>
                    - Playing guitar<br>
                    - Playing badminton<br>

                    <h4>Dream Places:</h4>

                    - Japan<br>
                    - South Korea<br> 
                    - Switzerland<br>
                    </div>
                    <div class="moretxt">
                    <h4><b>Genre (R&B and Rock):</b></h4>
                    - The Most Beautiful Thing - Bruno Major<br>
                    - Regent's Park - Bruno Major <br>
                    - She Chose Me - Bruno Major<br>
                    <div class="contacttxt">
                        <h4><strong>Contact Info</strong></h4>
                        Email : aparriliezette@gmail.com<br>
                        Phone Number : 09151136337
                    </div>
                    </div>
                </div>
            </section>
</body>
</html>

<?php 

       if(isset($_POST["logout"])){
        session_destroy();
        header("Location: main.php");
       }

?>