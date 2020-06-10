<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="slide.css">
    <meta charset="utf-8">

    <title>HOME</title>
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
            padding: 35px;
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

    <ul class="liss" style="position:fixed; margin-top: 60px;">
        <li><a href="userhome.php">HOME</a></li>
        <li><a href="userabout.php">ABOUT</a></li>
        <li><a href="usercontact.php">CONTACT</a></li>
        <li><a href="useritm.php">PRODUCTS</a></li> 
        <li style="font-size:20px; color:yellow; text-shadow:2px 2px 2px red; padding-top:13px; padding-left:390px;">   <?php echo $_SESSION['usern']; ?></li>
        <li style="padding-left:20px; "><a href="Logout.php" style=" color:red;">LOGOUT</a></li>
        <li style="float:right"><a class="active" href="admins.php">ADMIN</a></li>


    </ul>


    <div class="mainhed" style="margin-top: 55px;">
        <br>



        <br>
        <div style="margin-top: 85px;">
            <h3 style="text-align: center; font-size: 40px;">-----Best Shop For You-----</h3>
            <ul style="list-style:  none; display: inline-block  ">

                <li class="itemsall">
                    <h3>Chockleti</h3>
                    <hr>
                    <img src="all/celeb.jpg" alt="">
                    <p>MRP --- 450/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>

                </li>

                <li class="itemsall">
                    <h3>Candey</h3>
                    <hr>
                    <img src="all/candy.jpg" alt="">
                    <p>price INR-545/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>

                <li class="itemsall">
                    <h3>cake</h3>
                    <hr>
                    <img src="all/chand.jpg" alt="">
                    <p>price INR-645/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>

                <li class="itemsall">
                    <h3>dairy</h3>
                    <hr>
                    <img src="all/choc.jpg" alt="">
                    <p>price INR-545/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>

                <li class="itemsall">
                    <h3>Chocko</h3>
                    <hr>
                    <img src="all/choco.jpg" alt="">
                    <p>price INR-345/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>cookies</h3>
                    <hr>
                    <img src="all/cookies.jpg.jpg" alt="">
                    <p>price INR-345/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>cooki</h3>
                    <hr>
                    <img src="all/cooki.jpg" alt="">
                    <p>price INR-345/-</p>
                    <a href="">
                        <h4>Order</h4>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>cup</h3>
                    <hr>
                    <img src="all/cup.jpg" alt="">
                    <p>price INR-345/-</p>
                    <a href="">
                        <h4>Order</h4>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>denny</h3>
                    <hr>
                    <img src="all/denny.jpg" alt="">
                    <p>price INR-345/-</p>
                    <a href="">
                        <h4>Order</h4>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>biscutes</h3>
                    <hr>
                    <img src="all/download (1).jpg" alt="">
                    <p>price INR-345/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>love</h3>
                    <hr>
                    <img src="stds/love.jpg" alt="">
                    <p>price INR-345/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>
                <li class="itemsall">
                    <h3>strabery</h3>
                    <hr>
                    <img src="stds/stay.jpg" alt="">
                    <p>price INR-345/-</p>

                    <a href="">
                        <h4>Order</h4>
                    </a>
                    </a>
                </li>


            </ul>
        </div>

    </div>



    <div id="footer">
        <p style="font-size: 25px;">Developer - Chanda</p>
        <p>Email ID --- WWW.ChnadaKhushwaha@gmail.com</p>
        <p>Phone --- +9189989897979</p>

    </div>
</body>

</html>