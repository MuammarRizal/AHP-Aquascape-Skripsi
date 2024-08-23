<?php 
session_start();
require('functions/functions.php');

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn,"SELECT username FROM admin WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username 
    if($key === hash('sha256',$row['username'])){
        $_SESSION['login'] = true;
    }
}

// cek session
if(isset($_SESSION["login"])){
    header("Location:index.php");
    exit;
}

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

         $result = mysqli_query($conn,"SELECT * FROM admin where username = '$username'");

        //  cek username
         if(mysqli_num_rows($result) === 1){

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password,$row["password"])){

                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if( $_POST["rememberme"] ){

                    // buat cookie

                    setcookie('id',$row["username"],time()*60);
                    setcookie('key',hash('sha256',$row["username"]),time()*60);

                }

                header("Location: index.php");
                exit;
            }

         }
         $error = true;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous"
  /><link rel="stylesheet" href="./css/custom/style.css" />
    <title>Login</title>
</head>
<body>

    <div class="box-form">
    <div class="right">
            <form action="" method="post">
                <h5>Login</h5>
                <p>
                Don't have an account? <a href="registrasi.php">Create Your Account</a> it takes
                less than a minute
                </p>
                <div class="inputs" style="margin-bottom: 10px;">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <br />
                <input type="password" name="password" id="password" placeholder="Password" required>
                </div>

                <?php if( isset($error)) : ?>
                    <span class="password-wrong" style="color: red;">Salah kombinasi username dan password</span>
                <?php endif; ?>  
                
                <br /><br />

                <div class="remember-me--forget-password">
                <!-- Angular -->
                <label style="margin-left:0px;">
                    <input type="checkbox" name="rememberme" id="rememberme" >
                    <span class="text-checkbox">Remember me</span>
                </label>
                
                </div>

                <br />
                
                    <button type="submit" name="login" class="login-button" >Login</button>
                
            </form>
        </div>     
        
        
        <div class="left">
          <div class="overlay">
            <div class="text-group">
                <h1>Aquascape</h1>
                <p>
                Aquascape merupakan seni menata tanaman air dalam akuarium yang semakin populer di kalangan pecinta ikan hias.
                <br>Keindahan aquascape terletak pada pemilihan dan penataan tanaman yang tepat.
                </p>
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
    </div>
    
</body>
</html>