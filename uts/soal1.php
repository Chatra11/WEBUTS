<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <?php
       $jumlah =NULL;
       if (isset($_POST['kirim'])&& isset($_POST['jumlah'])) {
        if(isset($_POST['jumlah'])){
            $jumlah = $_POST['jumlah'];
            echo "<h2><b>Jumlah List Adalah $jumlah:</b></h2>";
            for($i = 1;$i <= $jumlah;$i++){
                echo "<ul>";
                    echo "<li>$i</li>";
                echo "</ul>";
            }
        }
    }
        else{
            ?>
            <form action="" method ="post">
            Jumlah List:
            <br><br><br>
            <input type="text "name ="jumlah">
            <input type="submit"name ="kirim" value ="Submit">
        </form>
        <?php }   
    ?>
</body>
</html>