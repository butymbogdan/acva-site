<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body>
<section class="header">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><h1>AcvaTeca</h1></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'header_menu',
                        'container' => 'false',
                        'menu_class' => 'nav navbar-nav', 
                        )); 
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="avatar">
                                <?php 
                                    global $post;
                                    $url = get_avatar_url( $post, "size=35&default=mystery");
                                    $img = '<img alt="" src="'. $url .'">';
                                    echo $img;
                                 ?>
                            </span>
                                UserName
                                <span class="caret"></span>
                            </a>
                                <?php
                                    if ( is_user_logged_in() ) {
                                        echo '<ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Адмінпанель</a></li>
                                                <li><a href="#">ПС (0|1)</a></li>
                                                <li><a href="#">Вибране</a></li>
                                                <li class="divider"></li>
                                                <li>
                                                <a href="<?php echo wp_logout_url(); ?>" title="Выход">
                                                    Выход
                                                </a>
                                                </li>
                                            </ul>';
                                        }
                                    else {
                                        echo '<div class="dropdown-menu" role="menu"></div>';
                                    }
                                ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>