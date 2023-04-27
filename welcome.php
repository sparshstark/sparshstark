<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) 
{
    header("location: login.php");
}


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>MakeItWork</title>
</head>
<style>
    body {
        margin: 0px 0px;
        background-color: rgba(10, 10, 10, 0.822);

    }

    header {
        display: flex;
    }

    .navbar {
        display: inline-flex;
        background-color: black;
        width: 100vw;
        box-shadow: 0 0 50px whitesmoke;
        z-index: 1;
    }

    .logo {
        margin: 0px;
        padding-left: 10px;
    }

    .item1 {
        display: flex;
        align-items: center;
        position: relative;
        font-family: 'Lato', sans-serif;
        font-size: 20px;
        padding-top: 1.5vh;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 9.375px;
        color: honeydew;
        font-weight: bold;
        transition: 0.8s ease-in-out;
        cursor: pointer;
    }

    .item2 {
        display: flex;
        margin-top: 0px;
        align-items: center;
        position: relative;
        margin-bottom: 0px;
        font-family: 'Lato', sans-serif;
        font-size: 20px;
        padding-top: 1.5vh;
        padding-left: 23.5px;
        padding-right: 23.5px;
        padding-bottom: 9.375px;
        color: honeydew;
        font-weight: bold;
        transition: 0.8s ease-in-out;
        cursor: pointer;
    }

    .name1 {
        margin-top: 23px;
        margin-bottom: 5px;
        margin-bottom: 0px;
        padding-left: 25px;
        font-size: 1.25rem;
        font-family: 'Mochiy Pop P One', sans-serif;
        color: rgba(245, 245, 245, 0.815);
        text-shadow: 0 0 5px green,
            0 0 10px green,
            0 0 15px green;
        transition: 0.8s ease-in-out;
    }


    @keyframes animate {
        0% {
            filter: hue-rotate(0deg);
        }

        100% {
            filter: hue-rotate(360deg);
        }

    }


    .brandname {
        margin-left: 2px;
        display: block;
        padding-left: 5px;
        margin-right: 1vw;
    }

    .item1 i {
        color: rgba(240, 255, 240, 0.712);
        height: 10px;
        margin-right: 5px;
        transform: translate(-20%, -45%);
    }

    .item2 i {
        color: rgba(240, 255, 240, 0.712);
        height: 10px;
        margin-right: 5px;
        transform: translate(-20%, -45%);
    }

    .blank1 {
        width: 12.3vw;
        padding: 0 16px 0 8px;
        margin: 0;
    }

    .blank2 {
        width: 12.3vw;
        padding: 0 16px 0 16px;
        margin: 0;
    }

    .blank3 {
        width: 12.3vw;
        padding: 0 16px 0 16px;
        margin: 0;
    }

    .blank4 {
        width: 12.3vw;
        padding: 0 16px 0 16px;
        margin: 0;
    }

    .user {
        display: flex;
        float: right;
        max-width: 220px;
        margin-top: 0px;
        align-items: center;
        text-align: center;
        position: static;
        margin-left: 25px;
        margin-bottom: 0px;
        font-family: 'Dancing Script', cursive;
        font-size: 25px;
        padding-top: 1.5vh;
        padding-left: 22.5px;
        padding-right: 10px;
        padding-bottom: 9.375px;
        color: honeydew;
        font-weight: bold;
        transition: 0.8s ease-in-out;
        z-index: 1;
        right: flex-end;

    }

    .container1 {
        display: inline-flex;
    }

    .information {
        margin-top: 5vh;
        margin-left: 1vw;
        display: flex;
        background-color: turquoise;
        width: 69vw;
        height: 80vh;
        border-top-right-radius: 220px;
        border-bottom-left-radius: 220px;
        /*border: 5px solid turquoise;*/
        z-index: 8;
    }

    .professional {
        width: 34.5vw;
        border: 5px solid turquoise;
        border-bottom-left-radius: 220px;
        background-image: url("brand.jpg");
        background-size: cover;
        cursor: pointer;
        transition: 0.4s;
    }

    .professional:hover {
        transform: scale(1.025);
        box-shadow: 0 0 5px rgb(0, 119, 255),
                    0 0 10px rgb(0, 119, 255),
                    0 0 15px rgb(0, 119, 255);
    }

    .local {
        border-top-right-radius: 220px;
        border-top: 5px solid turquoise;
        border-bottom: 5px solid turquoise;
        border-right: 5px solid turquoise;
        width: 34.5vw;
        background-image: url("l2.jpg");
        background-size: cover;
        cursor: pointer;
        transition: 0.4s;
    }

    .local:hover {
        transform: scale(1.025);
        border-left: 5px solid turquoise;
        box-shadow: 0 0 5px rgb(0, 119, 255),
                    0 0 10px rgb(0, 119, 255),
                    0 0 15px rgb(0, 119, 255);
    }


    p:hover {
        transition: 00.8s ease-in-out;
        transform: scale(1.1);
    }

    .details {
        display: flex;
        flex-direction: column;
        background-image: url("pinksky.jpg");
        background-size: cover;
        margin-top: 5vh;
        margin-right: 1vw;
        width: 26vw;
        border-radius: 40px;
        border: 5px solid rgb(38, 0, 255);
        background-color: #FFE7C7;
        height: 80vh;
        margin-left: 2vw;
        margin-right: 1px;
    }

    .cap {
        display: flex;
        height: 11vh;
        width: 26vw;
        align-items: center;
        justify-content: center;
        font-family: 'Corinthia', cursive;
        font-size: 4rem;
    }

    .cap3 {
        margin-top: 3vh;
        display: flex;
        height: 11vh;
        width: 26vw;
        align-items: center;
        justify-content: center;
        font-family: 'Corinthia', cursive;
        font-size: 2.3rem;
    }

    .name {
        margin-top: 2vh;
        display: flex;
        margin-top: 5vh;
        align-items: center;
        justify-content: center;
        font-family: 'Acme', sans-serif;
        font-size: 2rem;
    }

    .logout{
        display: flex;
        height: 5vh;
        justify-content: center;
        align-items: center;
        margin-top: 4vh;
        margin-left: 4vw;
    }
    .update{
        display: flex;
        justify-content: center;
        align-items: center;
        
        
    }

    .btn2{
        padding : 10px 20px;
        position: fixed;
        background: none;
        border: 3px solid black;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: 1000;
        color: black;
        cursor: pointer;
        transition: 0.8s;
        border-radius: 25px;
        z-index: 3;
        transform: translate(-40%, 0);
    }    

    .btn1{
        padding : 10px 20px;
        position: fixed;
        background: none;
        border: 3px solid black;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: 1000;
        color: black;
        cursor: pointer;
        transition: 0.8s;
        border-radius: 25px;
        z-index: 3;
        transform: translate(15%, 0);
    }    

    .btn2:hover{
        color:#00E4FF;
        background-color: white;
        box-shadow: 0 0 50px #00E4FF,
                    0 0 100px #00E4FF;
        transform: scale(1.2);
        transform: translate(-40%, 0);
    }

    .btn1:hover{
        color:#00E4FF;
        background-color: white;
        box-shadow: 0 0 50px #00E4FF,
                    0 0 100px #00E4FF;
        transform: scale(1.2);
        transform: translate(15%, 0);
    }



    .user i {
        color: rgba(240, 255, 240, 0.712);
        height: 10px;
        margin-right: 8px;
        transform: translate(-20%, -75%);
    }

    .logo img {
        height: 90px;
        transition: 0.5s ease-in-out;
        margin-top: 7px;
        transition: 0.8s ease-in-out;
    }

    .blank1 img {
        border-radius: 20px;
        box-shadow: 0 0 5px honeydew;

    }

    .blank2 img {
        border-radius: 20px;
        box-shadow: 0 0 5px honeydew;
    }

    .blank3 img {
        border-radius: 20px;
        box-shadow: 0 0 5px honeydew;
    }

    .blank4 img {
        border-radius: 20px;
        box-shadow: 0 0 5px honeydew;
    }

    .logo img:hover {
        transform: scale(1.2);
    }

    .name1:hover {
        transform: scale(1.2);
        animation: animate 5s linear infinite;
    }

    .item1:hover {
        background-color: teal;
    }

    .item2:hover {
        background-color: teal;
    }

    ::placeholder {
        color: gray;
        font-size: 25px;
        font-family: 'IBM Plex Serif', serif;
        transform: translate(0, -20%);
    }

    .form12{
        display: flex;
        flex-direction: column;
        margin-left: 0vw;
        padding: 0;
        transform: translate(-20%, 0);
    }
    input {
    
        display: block;
        width: 14vw;
        height: 20px;
        margin: 0px 0px;
        margin-left: 0vw;
        font-size: 40px;
        border: none;
        outline: none;
        background-color: transparent;
        border-bottom: 2px solid black;
        color: black;
        font-family: 'Acme', sans-serif;
        box-shadow: black;
        transform: translate(10%,0);
        margin-bottom: 20px;
    }
    a{
        text-decoration: none;
        color: thistle;
    }
</style>

<body>
    <header>
        <nav class="navbar">
            <ul class="logo"><img src="logo.png" alt=""></ul>
            <div class="brandname">
                <ul class="name1">Make It <br> &nbsp;&nbsp;Work</ul>
            </div>
            <ul class="item1" onclick="location.href='about.html'"><i class="fa fa-info"></i>About Us</ul>
            <ul class="item2" onclick="location.href='contact.html'"><i class="fa fa-address-book"></i>Contact Us</ul>
            <ul class="blank1">
                <img src="https://source.unsplash.com/250x92/?friends" alt="">
            </ul>
            <ul class="blank2">
                <img src="https://source.unsplash.com/250x92/?workplace" alt="">
            </ul>
            <ul class="blank3">
                <img src="https://source.unsplash.com/250x92/?worker" alt="">
            </ul>
            <ul class="blank4">
                <img src="https://source.unsplash.com/250x92/?laptop" alt="">
            </ul>
            <ul class="user">
                <i class="fa fa-user"></i>
                <?php echo "Welcome " . $_SESSION["name"]; ?>
            </ul>
        </nav>
    </header>
    <div class="container1">
        <div class="information">
            <div class="professional" onclick="location.href='pro.html'"></div>

            <div class="local" onclick="location.href='local.html'"></div>
        </div>
        <div class="details">
            <div class="cap">“Positivity always wins”</div>
            <div class="name">
                <?php
                require_once "config.php";
                echo "USER ID : MIW007iS".$_SESSION['id'];
                echo "<br><br>";
                echo "Name : ".$_SESSION['name'];
                echo "<br><br>";
                echo "email : ".$_SESSION['username'];
                echo "<br>";
                ?>
            </div>
            <div class="logout">
                   <button type="submit" class="btn2" onclick="location.href = 'logout.php'">LOGOUT</button>   
            </div>

            <div class="cap3">Change Password :</div>
        
            <div class="update">
                <form action="#" class="form12"  method="POST">
                    <input type="password" placeholder="Enter New Password" name="pass" required>
                    <input type="password" placeholder="Re-Enter New Password" name="newpass" required>
                    <div class="logout">
                        <button type="submit" class="btn1">UPDATE</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require_once "config.php";
$id = $_SESSION['id'];

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(trim($_POST['pass']) !=  trim($_POST['newpass']))
    {
        $password_err = "Passwords should match";
    }
    if(empty(trim($_POST['pass'])))
    {
        $password_err = "Password cannot be blank";
    }
    elseif(strlen(trim($_POST['pass'])) < 5)
    {
        $password_err = "Password cannot be less than 5 characters";
    }
    else
    {
        $password = trim($_POST['pass']);
    }
    if(empty($password_err))
    {
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET passd='$param_password' where id=$id";
        if($util = mysqli_query($conn,$sql))
        {
            $alert = "<script>alert('Password Updated Successfully')</script>";
            echo $alert;

        }

    }
    else
    {
        $alert = "<script>alert('Your password does not match the Parameters')</script>";
        echo $alert;
    }
}
?>
