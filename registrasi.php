<?php 
session_start();
require('functions/functions.php');
if(isset($_POST["registrasi"])){
    if(registrasi($_POST) > 0){
        echo "
        <script>
            alert('Registrasi berhasil');
        </script>
        ";
        
        // header("Location:login.php");
    }else{
        echo "
        <script>
            alert('Registrasi Gagal');
        </script>
        ";
    }
}

; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"
  /><link rel="stylesheet" href="./css/custom/style.css" />
</head>
<body>
   
    <div class="box-form">    
        <div class="left">
            <div class="overlay">
            <div class="text-group">
                <h1>Aquascape</h1>
                <p>
                Tanaman aquascape memiliki berbagai kebutuhan, seperti tingkat cahaya,<br> kebutuhan CO2, kesehatan tanaman, dan nutrisi, yang harus dipenuhi agar tanaman dapat tumbuh dengan baik.</p>
                
            </div>
            <span>
              <p>Follow my social Media</p>
              <a href="https://www.instagram.com/mmr_rizal/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/in/muammar-rizal-492020255/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href="https://x.com/MmrRizal"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="https://github.com/MuammarRizal"><i class="fa fa-github" aria-hidden="true"></i></a>
            </span>
          </div>
        </div>

        <div class="right">
            <form action="" method="post">
                <h5>Register</h5>
                <p>
                By registering, you agree to our Terms, Privacy Policy and Cookie Policy.                </p>
                <div class="inputs">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <br />
                <input type="password" name="password" id="password" placeholder="Password" required>
                <br />
                <input type="password" name="password2" id="password2" placeholder="Ulangi Password" required>
                </div>
                <br />
                <button type="submit" name="registrasi">Register</button>
                <br><br><br>
                <p >Sudah punya akun ? <a href="login.php">Masuk</a></p>
            </form>
        </div>     
      
    </div>
</body>
</html>