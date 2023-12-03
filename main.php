<?php 
session_start();

if(isset($_POST["login"])) {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {

        if ($_POST["username"] === "Liezette" && $_POST["password"] === "Liezette") {
            $_SESSION["username"] = "Liezette";
            $_SESSION["password"] = "Liezette";
            header("Location: Liezette.php");
        } else if ($_POST["username"] === "Jallaine" && $_POST["password"] === "Jallaine") {
            $_SESSION["username"] = "Jallaine";
            $_SESSION["password"] = "Jallaine";
            header("Location: Jallaine.php");
        } else {
            echo "Invalid username/password";
        }

    } else {
        echo "No username/password";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Activity</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="accs">
            <h5>Account List</h5>
            <p>
                <span>Liezette Aparri</span> <br>
                User : Liezette <br>
                Pass : Liezette <br><br>

                <span>Jallaine Cencia</span> <br>
                User : Jallaine <br>
                Pass : Jallaine <br>
            </p>
        </div>
        <div class="login-form">
            <header><h1>Login Page</h1></header>
            <form action="" method="post">
                <div class="input">
                    <label for="username">Username : <br></label>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>

                <div class="input">
                    <label for="password">Password : <br></label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <div class="submit">
                    <input type="submit" name="login" id="login" placeholder="Login" required>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
