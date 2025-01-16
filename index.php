<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="icon.ico" type="image/x-icon">
<link href="styles\style1.css" rel="stylesheet">
<?php 
require_once('Z:/home/localhost/www/test/wp-load.php');
get_header();
 ?>

<div class="topnav">
    <a class="active" href="index">Главная</a>
    <a href="images">Картинки</a>
    <a href="video">Видео</a>
    <a href="music">Музыка</a>  
</div>
<body>
    <h1><b>Главная страница<b></h1>
    <div id="content">
        <aside>
            <nav>
                <ul>
                    <li><a class="active" href="index">Главная</a></li>
                    <li><a href="images">Картинки</a></li>
                    <li><a href="video">Видео</a></li>
                    <li><a href="music">Музыка</a></li>
                </ul>
            </nav>
        </aside>
        <p>Это содержимое главной страницы.</p>
    </div>

    <?php get_footer(); ?>

</body>
</html>