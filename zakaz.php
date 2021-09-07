<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="zakaz.css">
        <script href="index.js"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="animate.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/styles.css">
    <link rel="icon" type="svg" href="icon.svg" />
       
        <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
        <script type="text/javascript" src="/js/sweetalert.js"></script>
        <script type="text/javascript" src="/js/form.js"></script>

        
        <title>My dreams</title>
    </head>

    <body>
        <!-- START LOADER-->

            <?php require "preloader.php" ;?>

            <!--END LOADER-->


            <!-- HEADER-->

            <?php require "header.php" ;?>

            <!--END HEADER-->



       <main class="main-content">
            <div class="content-page">
                <div class="content-type">
                    <div class="content-first">
                        <h1 class="tittle-block">Оформити замовлення</h1>
                  
                        <div class="content-row">
                            <div class="table-left">
                                <h2 class="contact-main-table-h1">
                                    Всього
                                </h2>
                                <h2 class="contact-main-table-h2">
                                    0 ПОЗИЦІЙ(Ї) В КОШИКУ
                                </h2>
                            </div>
                            <div class="table-right">
                                <h2 class="contact-main-table-right">
                                    УВІЙТИ З:
                                </h2>
                                <a href=""><button id="button-face">Continue with Facebook</button></a>
                                <h2 class="contact-main-table-right">
                                    АДРЕСА ДОСТАВКИ
                                </h2>

                                <form action="" class="contact-form">
                                    <div class="group-form">
                                        <label for="name">Електронна Пошта</label>
                                        <input 
                                        type="text" name="name" id="name" title="Назва"
                                        value-class="input-text from-control" data-validate="{required:true}"
                                        >
                                    </div>
                                    <div class="group-form">
                                        <label for="email">Ім'я</label>
                                        <input type="email" name="email" id="email" title="Електронна пошта"
                                        value-class="input-text from-control" 
                                        data-validate="{required:true, 'validate-email':true}">
                                    </div>
                                    <div class="group-form">
                                        <label for="name">Прізвище</label>
                                        <input 
                                        type="text" name="name" id="name" title="Назва"
                                        value-class="input-text from-control" data-validate="{required:true}"
                                        >
                                    </div>
                                    <div class="group-form">
                                        <label for="email">Адреса (вулиця, номер будинку та квартири...) </label>
                                        <input type="email" name="email" id="email" title="Електронна пошта"
                                        value-class="input-text from-control" 
                                        data-validate="{required:true, 'validate-email':true}">
                                    </div>
                                    
                                    <div class="group-form">
                                        <label for="name">Місто</label>
                                        <input 
                                        type="text" name="name" id="name" title="Назва"
                                        value-class="input-text from-control" data-validate="{required:true}"
                                        >
                                    </div>
                                    <div class="group-form">
                                        <label for="email">Поштовий індекс (Необов’язково)</label>
                                        <input type="email" name="email" id="email" title="Електронна пошта"
                                        value-class="input-text from-control" 
                                        data-validate="{required:true, 'validate-email':true}">
                                    </div>
                                    
                                    <div class="group-form">
                                        <label for="name">Країна</label>
                                        <input 
                                        type="text" name="name" id="name" title="Назва"
                                        value-class="input-text from-control" data-validate="{required:true}"
                                        >
                                    </div>
                                    <div class="group-form" >
                                        <label for="email">Номер телефону </label>
                                        <input type="email" name="email" id="email" title="Електронна пошта"
                                        value-class="input-text from-control" 
                                        data-validate="{required:true, 'validate-email':true}">
                                    </div>
                                    <div id="under-line">

                                    </div>
                                    

                                    <h2 class="contact-main-table-bottom">
                                        СПОСОБИ ДОСТАВКИ
                                    </h2>

                                    <div id="form-order-bottom">
                                        <div class="" style="width: 50%;">
                                            Виберіть спосіб
                                        </div>
                                        <div class="" style="width: 20%;">
                                            Ціна
                                        </div>
                                        <div class="" style="width: 20%;">
                                            Назва методу
                                        </div>

                                    </div>
                                    <div id="form-order-bottom-bottom">
                                        <div class="" style="width: 50%;">
                                            <input name="dzen" type="radio" value="nedzen">
                                        </div>
                                        <div class="" style="width: 20%; color:#d1466e;">
                                            50,00 грн
                                        </div>
                                        <div class="" style="width: 20%; color:#38383871;">
                                            Нова Пошта
                                        </div>

                                    </div>
                                    <button type="submit" title="Підтвердити" class="sub-button">НАСТУПНЕ ></button>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </main>
       
    <footer>
     

    </footer>

    <div class="clear"></div>

    
    <!-- HEADER-->

        <?php require "footer-block.php" ;?>

    <!--END HEADER-->

    <div class="footer another-booter">
        <a href="index.php">БЕДРИК</a> © 2020. <p>Всі права захищено.</p>
    </div>


    <script src="/jquery-smooth-scrolling-master/jquery.smoothscroll"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="/paginathing-master/paginathing.js"></script>

    </body>
</html>
         