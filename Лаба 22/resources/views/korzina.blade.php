<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Katalog</title>
    @vite(['resources/css/katalog.css','resources/css/korzina.css'])
{{--    <link rel="stylesheet" href="css/katalog.css">--}}
{{--    <link rel="stylesheet" href="css/korzina.css">--}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="headerblack">
            <div class="container">
                <div class="header-container">
                    <div class="header-mail">

                        <p class="">Afterpay, Laybuy & Genoapay | Free Delivery New Zealand + Australia*</p>
                    </div>


                </div>
            </div>

            <div class="header-white">
                <div class="header-white-fhoto">
                    <img src="img/Logo.png" alt="" />
                </div>
                <div class="containerrr">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>


                <div class="container">
                    <div class="header-container-two">

                        <div class="header-container-item">
                            <div class="lines"></div>
                        </div>
                        <div class="header-container-item">
                            <nav class="nav">

                                <ul class="nav-list" id="menu">
                                    <li class="active"> <a href="index.blade.php">HOME</a></li>
                                    <li><a href="katalog.blade.php">SHOPE</a></li>
                                    <li> <a href="katalog.blade.php">FAQ'S</a></li>
                                    <li> <a href="katalog.blade.php">STOCKISTS</a></li>
                                    <li> <a href="katalog.blade.php">WHOLESALE</a></li>
                                    <li class="nav-list-item"> <a href="katalog.blade.php">CONTACT</a></li>
                                    <li>
                                        <img class="item-image" src="img/Group301.svg" alt="" />
                                    </li>

                                </ul>

                            </nav>


                        </div>

                    </div>
                </div>
                <div class="header-button">
                    <p>
                        <a href="#zav">
                            <img src="img/Znak.png" alt="Привет"></a>
                    </p>
                </div>
            </div>
    </header>
    <main>
        <div class="container">
            <div class="block">
                <div class="galv-txt">Карзина товаров</div>
                <div class="glav-block">
                    <div class="block-img"><img src="img/karzina/Group 369.svg" alt=""></div>
                    <div class="block-gtxt">Ваша корзина на данный момент пуста.</div>
                    <div class="block-ptxt">Прежде чем приступить к оформлению заказа, вы должны добавить некоторые товары в корзину. На странице "Каталог" вы найдете много интересных товаров.</div>
                    <div class="button-vhode">
                        <div class="katalog">
                            <a href="katalog.blade.php">Вернуться в каталог ></a>
                        </div>
                        <div class="katalog">
                            <button  id="zakaz">Заказать</button>
                        </div>
                        <div class="popup-container">
                            <div class="popup">

                                <div class="content">
                                    <div class="cont"> <h2>Чек покупки</h2>
                                        <span class="close-btn">&times;</span>
                                    </div>


                                    <p><strong>Имя покупателя:</strong> Иван Иванов</p>
                                    <p><strong>Адрес доставки:</strong> ул. Пушкина, д. 10, кв. 5</p>
                                    <p><strong>Название товара:</strong> Nike Fors</p>
                                    <p><strong>Цена товара:</strong> 120RUB</p>
                                    <p><strong>Количество:</strong>2</p>
                                    <button  id="pehat">Печать</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="podval">
        <div class="foter-img">
            <div class="foter-menu">
                <div class="foter-glmenu">
                    <h1 class="h-menu">GOOD4ME</h1>
                    <p class="p-menu">Good health is important, so all of our products have been carefully designed to bring out the best in you.</p>


                </div>
                <div class="foter-poisc">
                    <h1 class="h-menu">Keep In Touch</h1>
                    <p class="p-menu">Subscribe to receive new product updates, be the first to know about sales, and more.</p>
                    <input type="text" value="" class="some-input" placeholder="Enter your email address">

                </div>

                <div class="foter-podhmenu">
                    <h1 class="h-menu">MORE INFO</h1>
                    <p class="p-menu">Shipping & Delivery Refund Policy Partner Program Wholesale Portal You Buy, We Donate Privacy Policy Terms & Conditions</p>

                </div>


            </div>


            <div class="foter-polosa"></div>
            <div class="bloci">
                <div class="bloci-sslc">
                    <a href="#"> <img src="img/febok.svg" alt="#"></a>
                    <a href="#"><img src="img/Insta.svg" alt="#zav"></a>
                    <a href=""><img src="img/Tviter.svg" alt="#zav"></a>
                    <a href=""><img src="img/Phka.svg" alt="#zav"></a>
                    <a href=""><img src="img/youtube.svg" alt="#zav"></a>
                </div>
                <div class="bloci-nadpis">© 2021, GOOD4ME. Powered by Shopify</div>
                <div class="bloci-kartohki">
                    <a href="#"><img src="img/kartohki.svg" alt="#zav"></a>
                </div>

            </div>


        </div>

    </footer>

</div>
@vite(['resources/js/korzina.js'])
{{--<script src="js/korzina.js"></script>--}}
</body>
</html>
