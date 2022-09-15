<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from php</title>
</head>
<style>
    .error{
        color:red;
    }
</style>
<body>
    <?php
    $namaErr ="";
    $nama ="";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        If(empty($_POST["nama"])){
            $namaErr ="nama tidak boleh kosong!";
        }
    }
    
    ?>
</body>


<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label>Nama Lengkap</label> <br>
    <input type="text" name="nama">
    <br>
    <span style="color: red;"> <?php echo $namaErr; ?> <br> </span>
    <br>
    <button type= "submit">input</button>
</form> 








</html>