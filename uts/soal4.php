<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <?php
       $nama = $pass = NULL;
       if (isset($_POST['kirim'])&& isset($_POST['nama'])&&isset($_POST['pass'])) {
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
        }
        if(isset($_POST['pass'])){
            $pass = $_POST['pass'];
        }
        $user ="admin";
        $sandi ="gajah";
        if(!strcasecmp($user,$nama)&&!strcasecmp($sandi, $pass)){
            echo "<h2>Selamat Datang Admin</h2>";
        }
        else{
            echo "<h2>Username atau password yang anda masukan salah !!!!</h2>";
        }
    }
        else{
            ?>
            <form action="" method ="post">
            Username:
            <br><br> 
            <input type="text "name ="nama"><br>
            <br>
            Password:
            <br><br>
            <input type="password" name="pass" ><br>
            <br>
            <input type="submit"name ="kirim" value ="Login">
        </form>
        <?php }   
    ?>
</body>
</html>