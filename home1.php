<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Acme&family=Henny+Penny&family=Slabo+27px&display=swap" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Make It Work</title>
</head>
<body>
<style>
    body {
        background-image: url('1489187.jpg');
        background-position: center;
        background-size: cover;
        margin: 0px 0px;
    }


    .center {
        display: inline-flex;
        z-index: 0;
    }

    .center img {
        display: inline-flex;
        height: 300px;
        font-size: 5em;
        color: none;
        margin-left: 41.8vw;
        margin-top: 32.5vh;
        position: relative;
        transition: 3s ease-in-out;


    }

    .btn1{
        padding : 10px 16px;
        margin-left : 12.6vw;
        background: none;
        border: 3px solid white;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        color: white;
        cursor: pointer;
        transition: 0.8s;
        border-radius: 25px;
        position: fixed;
        z-index: 2;
    }       
    .btn2{
        margin-top: 0.6vh;
        padding : 10px 20px;
        margin-left : 81vw;
        position: fixed;
        background: none;
        border: 3px solid white;
        font-size: 20px;
        font-family: 'IBM Plex Serif', serif;
        font-weight: 1000;
        color: white;
        cursor: pointer;
        transition: 0.8s;
        border-radius: 25px;
        z-index: 3;
    }    
    
    footer{
        color: blanchedalmond;
    }

    .center img:hover {
        transform: scale(1.4) rotate3d(1, 1, 1, 360deg);
    }

    .btn1:hover{
        color:#00E4FF;
        background-color: white;
        box-shadow: 0 0 50px #00E4FF,
                    0 0 100px #00E4FF;
        transform: scale(1.2);
    }

    .btn2:hover{
        color:#00E4FF;
        background-color: white;
        box-shadow: 0 0 50px #00E4FF,
                    0 0 100px #00E4FF;
        transform: scale(1.2);
    }
    footer{
        background-color: rgba(0, 0, 0, 0.541);
        color: rgb(255, 255, 255);
        margin-top: 30vh;
        font-family: 'IBM Plex Serif', serif;
        width: 100%;
        height: 5%;
    }
    .foot{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 5%;
        bottom: 0;
    }
</style>

<body>
    <div class="center">
        <img src="logo.png" alt="">
    </div>
    <div class="button1">
        <a href="newuser.php"><button class = "btn1">SIGN-UP</button></a>
    </div>
    <div class="button2">
        <a href="login.php"><button class = "btn2">LOGIN</button></a>
    </div>
    <footer class="foot"><p>All Rights Reserved &reg; Copyright &copy; Make It Work  </p></footer>
</body>
</html>