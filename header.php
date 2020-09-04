<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme - Zeus</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
    <div class="container">
        <div class="row header__wrapper">

<!--            <div class="menu-burgue">-->
<!--                <a href="#" title="">-->
<!--                    <span class="bar1"></span>-->
<!--                    <span class="bar2"></span>-->
<!--                    <span class="bar3"></span>-->
<!--                </a>-->
<!--            </div>-->

            <a class="navbar-brand" href="#">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </a>

            <nav class="m-auto navbar-primary">
                <ul>

                    <li>
                        <a href="">Home</a>
                    </li>

                    <li>
                        <a href="">About Us</a>
                    </li>
                    <li>
                        <a href="">Services</a>
                    </li>
                    <li>
                        <a href="">News</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>

                </ul>
            </nav>

            <div class="handle-contact">
                <ul>
                    <li>
                        <a href="#"
                            <i class="fas fa-phone-alt"></i>(11) 12345-6789</li>
                        </a>

                    <span>|</span>
                    <li>
                        <a href="#">
                            <i class="far fa-envelope"></i> info@zeus.com.br
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>