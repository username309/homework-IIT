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
    <a href="images">Картинки</a>
    <a class="active" href="video">Видео</a>
    <a href="music">Музыка</a>  
</div>
<body>
    <h1><b>Видео<b></h1>
    <div id="content">
        <aside>
            <nav>
                <ul>
                    <li><a href="index">Главная</a></li>
                    <li><a href="images">Картинки</a></li>
                    <li><a class="active" href="video">Видео</a></li>
                    <li><a href="music">Музыка</a></li>
                </ul>
            </nav>
        </aside>
        <p>Это содержимое страницы с видео.</p>
        <video poster="<?php echo get_template_directory_uri(); ?>/images/preview.jpg" controls width="640" height="360">
            <source src="<?php echo get_template_directory_uri(); ?>/videos/video.mp4" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
    </div>

    <?php get_footer(); ?>

</body>
</html>