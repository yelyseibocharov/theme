<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php wp_head() ?>
</head>

<header>
    <div class="header__wrapper">
        <div class="header__wrapper__top">
            <p class="header__tag"> </p>
        </div>
        <div class="header__wrapper__bottom">
            <?php wp_nav_menu( array(
                'theme_location' => 'head',
                'container' => null,
                'menu_class' => 'header__wrapper__bottom') ); ?>
        </div>
    </div>
</header>
