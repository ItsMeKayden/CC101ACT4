<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jallaine Cencia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="Liezette.php" method="post">
                    <input type="submit" name="logout" value="Logout" id="logout">
                  </form>
            <div class="container-info">
                    <div class="info">
                        <img src="images/received_1431309007472440.jpeg " class="pic">
                    </div>
                    <div class="info-text">
                        <h2>Jallaine</h2>
                        <p><span class="it">INFORMATION TECHNOLOGY STUDENT</span></p>
                        <hr>
                        <p> Hello, Good day! My name is Jallaine S. Cencia, 19 years old and a college student of Quezon City University with a course of Bachelor of Science Information Technology and living in Novaliches, Quezon City. Thank you for visiting my website, have a good day!.
                        <div><a href="#more"><button class="morebtn" >More about this person</button></a></div>
                    </div>
            </div>

            <section id="more">
                <div class="more-content">
                    <div class="title"><h2>More about this person</h2></div>
                    <div class="hobbies">
                 <h4>Hobbies:</h4>

                        - Watching movies<br>
                        -Reading Books<br>
                        -Singing/Dancing<br>

                       <h4>Dream Places:</h4>

                        -Japan<br>
                        -South Korea<br>
                        -Paris, France
                    </div>
                    <div class="moretxt">
                    <h4><b>Music Genre (Korean Pop):</b></h4>
                    - Love scenario- IKON<br>
                    - Pink Venom- Black pink<br>
                    - Perfect Night- Le Sserafim<br>
                    <div class="contacttxt">
                        <h4><strong>Contact Info</strong></h4>
                        Email : cenciajallaine123@gmail.com<br>
                        Phone Number : 09302589868
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