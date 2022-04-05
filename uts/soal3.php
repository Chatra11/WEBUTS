<!DOCTYPE html>
<html lang="en">
<head>
    <title>soal 3</title>
    <style>
        td{
            border:1px solid;
        }
        .smal{
            width: 50px;
            height: 50px;
        }
        .med{
            width: 100px;
            height: 100px;
        }
        .high{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        Pilih Ukuran:
        <br><br>
        <select name="ukuran" >
            <option value="kecil">kecil</option>
            <option value="sedang">sedang</option>
            <option value="besar">besar</option>
        </select>
        <input type="submit"name = "kirim" value ="pilih">
        <br><br>
    </form>
    <?php
        $pilih = "";
        $gambar = "<img src = persegi.png>";
        if(isset($_POST['ukuran'])){
            $pilih = $_POST['ukuran'];
            if($pilih == "kecil"){
                echo "<td class =\"smal\"></td>";
            }
            if($pilih == "sedang"){
                echo "<td class =\"med\"></td>";
            }
            if($pilih == "besar"){
                echo "<td class =\"high\"></td>";
            }
        }
    ?>
</body>
</html>