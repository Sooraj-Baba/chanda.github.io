<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="slide.css">
    <title>About</title>
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



            <section id="content">
                <article class="module-a">
                    <h2>About us</h2>
                    <p>We are autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat consuetudium le mirum. um dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam libeum dolor
                        sit amet, consectetuer adipiscing elit. </p>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                        eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    <figure class="image-a">
                        <img src="stds/std3.jpg" alt="stds" width="100%;" height="483">
                        <figcaption>Sarah Parker, the boss :)</figcaption>
                    </figure>
                </article>
                <div class="module-b">
                    <h2>Our team:</h2>
                    <article class="double-b">
                        <div>
                            <h3>Jennifer, 32</h3>
                            <figure><img src="stds/placeholder-c.png" alt="stds" width="88" height="88"></figure>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dyamicus, qui sequitur mutationem
                                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.</p>
                        </div>
                        <div>
                            <h3>Jennifer, 32</h3>
                            <figure><img src="stds/placeholder-c.png" alt="stds" width="88" height="88"></figure>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dyamicus, qui sequitur mutationem
                                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.</p>
                        </div>
                    </article>
                    <h2>Testimonals:</h2>
                    <article class="double-b">
                        <div>
                            <h3>Jennifer, 32</h3>
                            <figure><img src="stds/placeholder-c.png" alt="stds" width="88" height="88"></figure>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dyamicus, qui sequitur mutationem
                                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.</p>
                        </div>
                        <div>
                            <h3>Jennifer, 32</h3>
                            <figure><img src="stds/placeholder-c.png" alt="stds" width="88" height="88"></figure>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dyamicus, qui sequitur mutationem
                                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima.</p>
                        </div>
                    </article>
                </div>
            </section>




        </div>



        <div id="footer">
            <p style="font-size: 25px;">Developer - Chanda</p>
            <p>Email ID --- WWW.ChnadaKhushwaha@gmail.com</p>
            <p>Phone --- +9189989897979</p>

        </div>
</body>

</html>