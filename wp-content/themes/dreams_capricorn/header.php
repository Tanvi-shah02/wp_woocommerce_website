<!doctype html>
<html class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <script>
        if (/*@cc_on!@*/false) {
            document.documentElement.className+=' ie10';
        }
    </script>
    <!--<![endif]-->

    <?php

        wp_head();

    ?>



</head>

<body <?php body_class() ;?> >

<header id="header" class="header bg-white">
    <?php get_template_part( 'template-parts/header/top', 'header' ); ?>
    <?php get_template_part( 'template-parts/header/mainmenu', 'header' ); ?>
</header>

