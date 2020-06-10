<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="slide.css">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        #example1 {
            background-image: url(stds/h.jpg), url(stds/std3.jpg);
            background-position: right bottom, left top;
            background-repeat: no-repeat, repeat;
            padding: 15px;
            top: 0px;
            position: fixed;
            width: 100%;
        }
        
        #example1 h1 {
            text-align: center;
            font-size: 75px;
            color: white;
            text-shadow: 4px 3px 7px black, 0 0 40px blue, 0 0 25px darkblue;
        }
        
        .liss {
            list-style-type: none;
            margin: 0;
            width: 100%;
            padding: 0;
            overflow: hidden;
            background-color: darkblue;
        }
        
        li {
            float: left;
        }
        
        li a {
            display: block;
            color: white;
            font-size: 20px;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
            background-color: limegreen;
        }
        
        .active {
            background-color: #4CAF50;
        }
        
        #reg {
            background-color: white;
            height: 80px;
            width: 100%;
            line-height: 80px;
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            color: pink;
        }
        
        #form {
            background-color: white;
            height: 340px;
            width: 56%;
            border: 1px solid green;
        }
        
        .zoom {
            transition: transform 0.5s;
        }
        
        .zoom:hover {
            transform: scale(1.1);
        }
        
        #slideimage {
            background-size: cover;
            width: 100%;
            height: 475px;
        }
        
        h2 {
            text-align: center;
            color: darkblue;
            font-weight: 800px;
            font-size: 40px;
        }
        
        .mainhed {
            background-image: url(all/log.jp);
            background-color: lightblue;
            background-size: cover;
        }
        
        .itemsall img {
            height: 260px;
            width: 260px;
        }
        
        .itemsall {
            float: left;
            padding: 4px;
        }
        
        .itemsall h3 {
            text-align: center;
            color: yellow;
            background-color: darkblue;
        }
        
        .itemsall h4 {
            color: yellow;
            font-size: 23px;
            text-align: center;
            background-color: black;
        }
        
        .itemsall p {
            text-align: center;
            color: red;
        }
        
        #names {
            text-align: center;
            color: blue;
            font-size: 60px;
            text-shadow: 2px 3px 2px lime;
            text-transform: uppercase;
            background-color: rgba(0, 0, 0, 0.6);
        }
        
        #footer {
            background-color: #726E6D;
            height: 180px;
            width: 100%;
            text-align: center;
            font-weight: bold;
            color: white;
            line-height: 60px;
        }
        
        #footer p {
            text-shadow: 2px 2px 2px red;
        }
        .input{
            width:240px;
            height:30px;
            border-radius:6px;
        }
    </style>
</head>

<body>
    <div id="example1">
        <h1>ONLINE BAKERY SHOP</h1>

    </div>

    <ul class="liss" style="position:fixed; margin-top: 60px;">
        <li><a href="home.html">HOME</a></li>
        <li><a href="ABOUT.html">ABOUT</a></li>
        <li><a href="Contact.php">CONTACT</a></li>
        <!-- <li><a href="Allitm.html">PRODUCTS</a></li> -->

        <li><a href="login.php">LOGIN</a></li>
        <li><a href="register.php">SIGNUP-ORDER</a></li>
        <li style="float:right"><a class="active" href="admins.php">ADMIN</a></li>
    </ul>


    <div class="mainhed" style="margin-top: 55px;">
        <br>



        <br>
        <div style="margin-top: 85px;">

<br><br>

        <center>
    <form action="" method="POST" class="form">
                <br>
                <h1 style="font-size:40px;">Customer Login</h1>
                <br>
                <br>

<input type="text" placeholder="username" class="input" name="usernam" value="" ><br><br>
<input type="text" placeholder="password" class="input" name="passwor" value="" ><br><br>
<input type="submit" name="sc" style="font-size:30px; background-color:green; width:80px; " value="login" class="sub"><br>
</form>

</center>
<br><br>
<p style="text-align:center; font-size:20px;">Don't have an account <a href="register.php">Register</a></p>

<br><br><br> <br><br><br> <br><br>
<br><br><br> <br><br><br> <br><br>
        </div>



        <div id="footer">
            <p style="font-size: 25px;">Developer - Chanda</p>
            <p>Email ID --- WWW.ChnadaKhushwaha@gmail.com</p>
            <p>Phone --- +9189989897979</p>

        </div>
</body>

</html>
<?php

include 'connection.php';
error_reporting(0);

if(isset($_POST['sc']))
{
    $use= $_POST['usernam'];
    $pwd= $_POST['passwor'];
    $query= "SELECT * FROM chanda WHERE usernames ='$use' && passs ='$pwd'";
    $data= mysqli_query($conn,$query);
    $total= mysqli_num_rows($data);
    if($total == 1){
          $_SESSION['usern'] = $use;
          header('location:userhome.php');
    }else{
 ?>

<script>
    alert('username or password wrong!!');
</script>
<?php

}
}
?>

