<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="svg" href="icon.svg" />
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <title>БЕДРИК - Відгуки</title>

        <style type="text/css">
            .breadcr-top-section{
                padding: 0 65px;
                margin-top: 40px;
            }
            .breadcr-top-section ul{
                display: flex;
                flex-direction: row;
            }
            .breadcr-top-section ul li{
                list-style: none;
                margin-right: 7px;
                color: #333;
                font-family: sans-serif;
                font-size: 15px;
                font-weight: normal;
            }
            .breadcr-top-section ul li a{
                text-decoration: none;
                color: #d1466e;
            }
        </style>
    </head>

    <body>
        <!-- START LOADER-->

            <?php require "preloader.php" ;?>

            <!--END LOADER-->


            <!-- HEADER-->

            <?php require "header.php" ;?>

            <!--END HEADER-->


    <div class="breadcr-top-section">
        <ul>
            <li>
                <a href="/index.php">
                    Головна сторінка
                </a>
            </li>
            <li>
                | Відгуки покупців | Інтернет-магазин "Бедрик"
            </li>
        </ul>
    </div>

    <div class="clear"></div>


    
    <!-- HEADER-->

        <?php require "footer-block.php" ;?>

    <!--END HEADER-->

    <div class="footer another-booter" style="margin-top: 0 !important;">
        <a href="index.php">БЕДРИК</a> © 2020. <p>Всі права захищено.</p>
    </div>

    <script src="/jquery-smooth-scrolling-master/jquery.smoothscroll"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>

    </body>
</html>
         