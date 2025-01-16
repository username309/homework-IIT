<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="icon.ico" type="image/x-icon">
<link href="styles\style1.css" rel="stylesheet">
<?php
require_once('Z:/home/localhost/www/test/wp-load.php');
get_header(); 
?>

<div class="topnav">
    <a href="index">Главная</a>
    <a class="active" href="images">Картинки</a>
    <a href="video">Видео</a>
    <a href="music">Музыка</a>  
</div>
<body>
    <h1><b>Картинки<b></h1>
    <div id="content">
        <aside>
            <nav>
                <ul>
                    <li><a href="index">Главная</a></li>
                    <li><a class="active" href="images">Картинки</a></li>
                    <li><a href="video">Видео</a></li>
                    <li><a href="music">Музыка</a></li>
                </ul>
            </nav>
        </aside>
        <p>Это содержимое страницы с картинками.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" width="353" height="470">
        <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" width="353" height="470">
        <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" width="640" height="470">

    </div>

    <?php get_footer(); ?>

</body>
</html>