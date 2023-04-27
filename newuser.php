<?php
require_once "config.php";

$username = $password = $confirm_password = $mobile = $name = "";
$username_err = $password_err = $confirm_password_err = "";


if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {   
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
            mysqli_stmt_close($stmt);

        }
    }

   

// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}
//name
$name = trim($_POST['name']);
$mobile = trim($_POST['mobno']);


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (email, passd, fullname, mobile_no)  VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_name, $param_mob);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_name = $name;
        $param_mob = $mobile;

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
        mysqli_stmt_close($stmt);
    }
    
}
mysqli_close($conn);
}

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="validate.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Henny+Penny&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Henny+Penny&family=IBM+Plex+Serif:wght@200&family=Slabo+27px&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url('bg.jpg');
        background-position: center;
        background-size: cover;
        display: flex;
        align-items: center;
    }
    .form1 {
        margin-top: 0.5vh;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.582);
        height: fit-content;
        padding-left: 5vw;
        padding-right: 5vw;
        padding-top: 3vh;
        padding-bottom: 5vh;
        border-radius: 100px;
        margin-left: 34vw;
        box-shadow: 0px 5px 30px black;
    }
    input {
        display: block;
        width: 350px;
        height: 40px;
        margin: 20px;
        font-size: 20px;
        border: none;
        outline: none;
        background-color: transparent;
        border-bottom: 2px solid whitesmoke;
        color: rgb(253, 238, 238);
        font-family: 'Slabo 27px', serif;
        margin-bottom: 20px;
    }

    ::placeholder {
        color: rgba(245, 245, 245, 0.493);
        font-family: 'Slabo 27px', serif;
    }

    h1 {
        margin-top: 4px;
        margin-left: 5.4vw;
        align-items: center;
        color: white;
        font-size: 50px;
        font-family: 'Henny Penny', cursive;
        margin-bottom: 10px;
    }

    .btn4 {
        align-items: center;
        margin-top: 20px;
        margin-left: 20px;
        padding-bottom: 10px;
        width: 350px;
        height: 40px;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: bolder;
        color: whitesmoke;
        border-radius: 50px;
        outline: none;
        border: none;
        transition: 0.8s;
        background-color: rgba(82, 82, 82, 0.5);

    }
    .btn5 {
        align-items: center;
        
        margin-left: 20px;
        padding-bottom: 10px;
        width: 130px;
        height: 40px;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: bolder;
        color: whitesmoke;
        border-radius: 50px;
        outline: none;
        border: none;
        transition: 0.8s;
        background-color: rgba(82, 82, 82, 0.5);

    }

    .btn4:hover{
        cursor: pointer;
        color: goldenrod;
        background-color: black;
        box-shadow: 0 0 50px goldenrod;
    }

    .btn5:hover{
        cursor: pointer;
        color: teal;
        background-color: black;
        box-shadow: 0 0 50px teal;
    }
    .random{
        display: flex;
        flex-direction: column;
    }

    .random2{
        margin-top: 30px;
        display: flex;
        color: whitesmoke;
        margin-left: 40px;
    }

    .random3{
        margin-top: 10px;
    }
</style>
<body>
    <div class="form1">'
        <h1>Sign-Up</h1>
        <form action="" method="post">
            <input type="text" placeholder="Full Name" name="name" >
            <input type="text" placeholder="Email ID" name="username" >
            <input type="text" placeholder="Mobile Number" name="mobno" >
            <input type="password" placeholder="Password" name="password" >
            <input type="password" placeholder="Confirm Password" name="confirm_password" >
          <div class="random"><button class="btn4" type="submit">Continue</button>
        </form>
    </div>
    <div class="random2"> <div class="random3">Already have an Account?</div><button class="btn5" type="submit" onclick="location.href = 'login.php'">Login</button></div> </div>
</body>

</html>