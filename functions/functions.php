<?php 

    $conn = mysqli_connect("localhost","root","","skripsi_spk_ahp");

    // get data from database
    function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while( $tanaman = mysqli_fetch_assoc($result)){
            $rows[] = $tanaman;
        }
        return $rows;
    }
    
    function registrasi($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]); // fungsi ini untuk menambahkan kutip di databasenya
        $password2 =mysqli_real_escape_string($conn,$data["password2"]); // fungsi ini untuk menambahkan kutip di databasenya

        // cek username sudah ada atau belum
        $result = mysqli_query($conn,"SELECT username FROM admin WHERE username ='$username'");

        if(mysqli_fetch_assoc($result) ){
            echo "
            <script>
                alert('Maaf username sudah terdaftar');
            </script>
            ";
            return false;
        }

        // cek konfirmasi password 
        if( $password !== $password2 ){
            echo "
            <script>
                alert('password anda tidak sama');
            </script>
            ";
            return false;
        }

        // enkripsi password
        $password = password_hash($password,PASSWORD_DEFAULT);

        // tambahkan username ke database
        mysqli_query($conn,"INSERT INTO admin VALUES('','$username','$password')");

        return mysqli_affected_rows($conn);
    }
?>
