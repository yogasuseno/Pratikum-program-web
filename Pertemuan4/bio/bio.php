<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Bio PHP no database, YOGA</title>
</head>
<body class="modif">
    <table border=0>
        <form action="Hasil.php" method="POST">
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><input type=text name=NPM></td>
        </tr>
  
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type=text name=Nama></td>
        </tr>
  
        <tr>
            <td>Lama Study</td>
            <td>:</td>
            <td><input type=text name=yahun size=5>Tahun<input type=text name=Bulan size=5>Bulan</td>
        </tr>
    
        <tr>
            <td>IPK Terakhir</td>
            <td>:</td>
            <td><input type=text name=IPK size=5></td>
        </tr>
   
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <input type=radio name="jurusan" value="TI">Teknik Informatika
                <input type=radio name="jurusan" value="Elektro">Teknik Elektro
                <input type=radio name="jurusan" value="Sipil">Teknik Sipil
            </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td><input type="submit" name="submit" value="INPUT DATA">
            <input type="reset" name="reset" value="BERSIH"></td>
        </tr>

        
        
</table>
</form>
</body>
</html>
</body>
</html>