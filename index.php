
<?php
if(isset($_POST['submit'])){
        #success
}else{
        echo "your name sucks we couldn submit it";
}
?>
<html>
<head>
        <title>Belajar PHP</title>
</head>
<style>
        *{
                font-family: sans-serif;
        }
        .container{
                height:24rem;
                width:100%;
                display:flex;
                justify-content: center;
                align-items:center;
        }
        .holder{
                display:flex;
                flex-direction: column;
        }
        .hero{
                position: relative;
                left: 30%;
                top: 30px;
        }
        .holder input[type="text"]{
                height: 30px;
                background: transparent;
                border: none;
                outline: none;
                font-size:20x;
                border-bottom: 2px solid green;
        }
        .holder input[type="submit"]{
                display: block;
                height: 32px;
                font-size:larger;
                color:rgb(190, 108, 81);
                border:rgb(224, 17, 17);
                width: 250px;
                outline: bisque;
        }
        .footer{
                position:relative;
                left: 250px;
                top:50px;
        }
</style>
<body>
        <h1 class="hero">
               <?php echo "The user name is " . $_POST['name'] ?>
        </h1>
        <div class="container">
                <div class="holder">
                        <form action="index.php" method="POST">
                                <div class="wrapper">
                                        <input type="text"; placeholder="Enter USername" name="name">
                                </div>
                                <br>
                                <br>
                                <div class="wrapper">
                                        <input type="submit" value="submit" name="submit">
                                </div>
                        </form>
                </div>
        </div>
        <h4 class="footer">Made With<span> vv </span> by Rizki Mubarak</h4>

</body>
</html>
