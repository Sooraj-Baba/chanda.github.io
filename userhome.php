<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>


    <title>HOME</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        

        .sld
{

 width:100%;
 height:552px;   
background:url(stds/log.jpg);
background-size:cover;
animation:slide 12s infinite;
}
@keyframes slide
{
25%
   {
    background:url(stds/std1.jpg);
    background-size:cover;
   }
40%
   {
    background:url(stds/std.jpg);
    background-size:cover;
   }
75%
  {
    background:url(stds/bakery.jpg);
    background-size:cover;
  }
100%
  {
    background:url(stds/bakery-5.jpg);
    background-size:cover;
  }
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

            width: 100%;
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
    </style>
</head>

<body>
    <div id="example1">
        <h1>ONLINE BAKERY SHOP</h1>

    </div>

    <ul class="liss" style="position:fixed;">
        <li><a href="userhome.php">HOME</a></li>
        <li><a href="userabout.php">ABOUT</a></li>
        <li><a href="usercontact.php">CONTACT</a></li>
        <li><a href="useritm.php">PRODUCTS</a></li>
        <li style="font-size:20px; color:yellow; text-shadow:2px 2px 2px red; padding-top:13px; padding-left:390px;">   <?php echo $_SESSION['usern']; ?></li>
        <li style="padding-left:20px; "><a href="Logout.php" style=" color:red;">LOGOUT</a></li>

        <li style="float:right"><a class="active" href="admins.php">ADMIN</a></li>
    </ul>
            

            <div style="margin-top: 115px;" class="sld">
<h1 style="box-shadow:3px 2px 3px white; font-size: 60px; position: absolute;; top:50%; left: 20%; color:whitesmoke; text-shadow:10px 30px 40px black;"> The Best Desired Bakery Shop </h1>
        </div>
<marquee style="text-shadow:2px 2px 2px darkblue; font-size:25px; background-color: chocolate; color: white;" behavior="alternate" direction="left">***This is bakery shop project that developed by ChandaKhushwaha TERI PG College***</marquee>

    <div id="footer">
        <p style="font-size: 25px;">Developer - Chanda</p>
        <p>Email ID --- WWW.ChandaKhushwaha@gmail.com</p>
        <p>Phone --- +9189989897979</p>

    </div>
</body>

</html>