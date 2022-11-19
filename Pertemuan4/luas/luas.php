<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bg_color="black">
    <form actiton="" method="post">
    <table border=0>
        <tr>
            <td>Panjang Persegi Panjang
            <td>:
            <td><input type="text" name="panjang"><br>
        </tr>
        <tr>
            <td>Lebar Persegi Panjang
            <td>:
            <td><input type="text" name="lebar"><br>
        </tr>
        <tr>
            <td><input type="submit" name="input-data" value=Input>
               
        </tr>
    </table>
    </form>
    <h5> Hasil Perhitungan Luas Persegi Panjang </h5>
    <?php
        if (isset ($_POST["input-data"]))
        {
            $panjang=$_POST["panjang"];
            $lebar=$_POST["lebar"];
            $luas= $panjang*$lebar;
            echo "Panjang Persegi Panjang Adalah : $panjang <br>";
            echo "Lebar Persegi Panjang Adalah : $lebar <br>";
            echo "Rumus : $panjang * $lebar <br>";
            echo "Hasil : $luas";
        }
    ?>
</body>
</html>