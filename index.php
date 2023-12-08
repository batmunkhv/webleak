<?php require("register.class.php");?>
<?php
    if(isset($_POST["submit"])){
        $user= new RegisterUser($_POST['username'],$_POST['password']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" entype="multipart/form-data" autocomplete="off" >
        <h2>Register form</h2>
        <h4>Both field are <span>required</span></h4>

        <label for="">Username</label>
        <input type="text" name="username">

        <label for="">Password</label>
        <input type="text" name="password">

        <button type="submit" name="submit">Register</button>
        <p class="error"></p>
        <p class="success"></p>
    </form>
</body>
</html>