<?php
session_start();

if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}

require_once "config.php";

$username = $password = $name = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else
    {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if(empty($error))
    {
        $sql = "SELECT id, email, passd, fullname FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;
        
        if(mysqli_stmt_execute($stmt))
        {
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt)==1)
            {
                mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password,$name);
                if(mysqli_stmt_fetch($stmt))
                {
                    if(password_verify($password, $hashed_password))
                    {
                        session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['name'] = $name;
                        $_SESSION['id'] = $id;
                        $_SESSION['loggedin'] = true;

                        header("location: welcome.php");   
                    }
                    else
                    {
                        echo "SOMETHING WENT WRONG";
                    }
                }
            }
        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Henny+Penny&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<style>
    body {
        display: flex;
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }


    .form1 {
        margin-top: 25vh;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.582);
        height: fit-content;
        padding-left: 5vw;
        padding-right: 6vw;
        padding-top: 5vh;
        padding-bottom: 5vh;
        border-radius: 100px;
        margin-left: 34vw;
        box-shadow: 0px 5px 30px black;
    }

    input {
        display: block;
        width: 350px;
        height: 40px;
        margin: 0px 0px;
        font-size: 20px;
        border: none;
        outline: none;
        background-color: transparent;
        border-bottom: 2px solid whitesmoke;
        color: rgb(253, 238, 238);
        font-family: 'Slabo 27px', serif;
        box-shadow: black;
        transform: translate(10%,0);
        margin-bottom: 20px;
    }

    button {
        align-items: center;
        margin-left: 20px;
        width: 350px;
        height: 40px;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: bolder;
        color: rgb(0, 0, 0);
        border-radius: 50px;
        outline: none;
        border: none;
        background-color: rgba(255, 255, 255, 0.541);
        transition: 00.8s;

    }

    h1 {
        margin-left: 1.4vw;
        align-items: center;
        color: white;
        font-size: 50px;
        font-family: 'Henny Penny', cursive;
    }

    ::placeholder {
        color: rgba(245, 245, 245, 0.514);
        font-family: 'Slabo 27px', serif;
    }

    button:hover{
        cursor: pointer;
        color: teal;
        background-color: black;
        box-shadow: 0 0 50px teal;
    }
    .mi .fa{
        margin-bottom: 0px;
        margin-right: 5px;
        color: ivory;
        padding-right: 20px;

    
    }
    .email{
        display: flex;
        margin-bottom: 30px;
    }
    .pass{
        display: flex;
        margin-bottom: 40px;
    }
    span{
        position: absolute;
        transform: translate(0,60%);
    }
    .fa{
        margin-bottom: 0px;
        margin-right: 5px;
        color: rgba(255, 255, 240, 0.651);
        padding-right: 20px;
    }
    .eye span{
        position: absolute;
        transform: translate(960%,80%);
        transition: 0.8s;
        cursor: pointer;
    }
    .eye:hover{
        color: lawngreen;
    }

</style>

<body>
    <div class="form1">'
        <h1>Make It Work</h1>
        <form action="#" method="post">
            <span><div class="mi"><i class="fa fa-envelope-o"></i></div></span>
            <input type="text" placeholder="Enter Email-ID" name="username" required>
            
            <span><div class="mi"><i class="fa fa-key" ></i></div></span>
                <div class="eye"><span class="eye">
                    <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                </span></div>
            <input type="password" placeholder="Enter Password" id = "password" name="password" required><br><br>
            <script>
                var state = false;
                function toggle()
                {
                    
                    
                    if(state)
                    {
                        
                        document.getElementById("password").setAttribute("type","password");
                        document.getElementById("eye").style.color="#808080";
                        state = false;
                    }
                    else
                    {
                        
                        document.getElementById("password").setAttribute("type","text");
                        document.getElementById("eye").style.color="#FFFFFF";
                        state = true;
                    }

                }     
            </script>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
