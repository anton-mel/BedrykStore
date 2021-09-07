<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="deliver.css">
        <script href="index.js"></script>
        <meta charset="utf-8">

        <link rel="icon" type="svg" href="icon.svg" />
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        
        <title>БЕДРИК - Доставка</title>

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

            .content-main-deliver{
                margin-top: 40px;
                flex-direction: column;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .content-main-deliver h1{
                font-family: Calibri, sans-serif;
                font-size: 40px;
                color: #333;
                text-transform: uppercase;
                font-weight: 900;
                margin-bottom: 60px;
            }
            .sections-deliver{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .row-sect-deliver{
                margin-bottom: 20px;
                width: 100vw;
            }
            .row-box-deliver{
                padding: 0 300px;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }
            .photo-deliver{
                flex-shrink: 0;
                width: 200px;
                position: relative;
                height: 200px;
            }
            .text-deliver{
                font-family: sans-serif;
                color: #333;
                display: flex;
                flex-shrink: 2;
                padding-right: 100px;
                line-height: 35px;
                font-size: 17px;
                display: flex;
                flex-direction: column;
            }
            .text-deliver h3{
                font-size: 18px;
                text-transform: uppercase;
                color: #d1466e;
                font-weight: 750;
            }            
            .text-deliver h4{
                font-size: 15px;
                margin-top: 20px;
                text-transform: uppercase;
                color: #333;
                font-weight: 750;
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
                    | Доставка дитячого одягу поштою | Інтернет-магазин "Бедрик"
                </li>
            </ul>
        </div>

        <div class="content-main-deliver">
            <h1>Доставка дитячого одягу  поштою</h1>

            <div class="sections-deliver">
                <div class="row-sect-deliver">
                    <div class="row-box-deliver">
                        <div class="text-deliver">Ми дбаємо про наших клієнтів,
                        тому використовуємо максимально зручні
                        і швидкі способи доставки . Упаковуєм
                        дитячий одяг у крафт коробки, тому можите
                        бути впевнені в цілісності доставки.
                        Ми не несем відповідальності за затримку
                        доставки поштовими службами.</div>
                        <div class="photo-deliver" style="background: url(images-group/delivery-1.png); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    </div>
                </div>
            </div>
            
            <div class="sections-deliver">
                <div class="row-sect-deliver">
                    <div class="row-box-deliver">
                        <div class="text-deliver">

                            <h3>Доставка здійснюється одним із способів:</h3>
                            <p style="margin-top: 40px;">Самовивіз. смт. Локачі вул. Перемоги 10. Ви можете забрати товар в магазині в день замовлення, вже через годину після його оформлення.</p>

                            <h4>Ми працюємо:</h4>
                            <i style="line-height: 25px;"> Пн.-Пт. з 10.00 до 18.00<br>
                                Сб. з 10.00 до 16.00<br>
                                Нд. вихідний </i>

                        </div>
                        <div class="photo-deliver" style="background: url(images-group/delivery-2.jpg); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    </div>
                </div>
            </div>

            <div class="sections-deliver" style="margin-top: 40px;">
                <div class="row-sect-deliver">
                    <div class="row-box-deliver">
                        <div class="text-deliver">Через відділення «Нова пошта» Україною.
                                    При оформленні замовлення до 15.00 , 
                                    відправляється в той же день, якщо замовлення
                                    оформлене після 15.00 відправлення буде наступного дня.
                                    У суботу та неділю замовлення не відправляються.
                                    Ви можите оплатити замовлення при отриманні на
                                    відділенні «Нової пошти» чи на карту. Вартість
                                    доставки «Новою поштою» складає в середньому
                                    40-50 грн. За переказ грошей «Нова пошта»
                                    стягує 2% від суми +20 грн. Термін доставки 1-3
                                    робочих дні в залежності від регіону. 
                                    Після відправлення повідомимо Вам номер декларації.
                                    Ми не несемо відповідальності за затримку
                                    доставки «Нова пошта».</div>
                        <div class="photo-deliver" style="background: url(images-group/delivery-3.png); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    </div>
                </div>
            </div>

            <div class="sections-deliver" style="margin-top: 40px;">
                <div class="row-sect-deliver">
                    <div class="row-box-deliver">
                        <div class="text-deliver">Через відділення «Укрпошта» по Україні.
                                     Відправлення здійснюються кожного дня,
                                     крім суботи та неділі. Термін доставки 
                                     відправлення «Укрпоштою» становить 3-5 робочих 
                                     днів. Вартість доставки від 19 грн до 2 кг., 
                                     більше 2 кг від 38 грн. . Ми не несемо 
                                     відповідальності за затримку доставки «Укр пшта»</div>
                        <div class="photo-deliver" style="background: url(images-group/delivery-4.png); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                    </div>
                </div>
            </div>

        </div>

    <div class="line"><p></p></div>

    <!-- GMAILS -->

    <?php require "gmails.php"; ?>
            
    <!-- END GMAILS -->

    
    <!-- HEADER-->

        <?php require "footer-block.php" ;?>

    <!--END HEADER-->

    <div class="footer another-booter" style="margin-top: 0 !important;">
        <a href="index.php">БЕДРИК</a> © 2020. <p>Всі права захищено.</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
    </body>
</html>