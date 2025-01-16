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
    <a href="video">Видео</a>
    <a class="active" href="music">Музыка</a>  
</div>
<body>
    <h1><b>Музыка<b></h1>
    <div id="content">
        <aside>
            <nav>
                <ul>
                    <li><a href="index">Главная</a></li>
                    <li><a href="images">Картинки</a></li>
                    <li><a href="video">Видео</a></li>
                    <li><a class="active" href="music">Музыка</a></li>
                </ul>
            </nav>
        </aside>
        <p>Это содержимое страницы с музыкой.</p>
        <audio controls>
            <source src="<?php echo get_template_directory_uri(); ?>/music/music.mp3" type="audio/mpeg">
            Ваш браузер не поддерживает аудио.
        </audio>
    </div>

    <?php get_footer(); ?>

</body>
</html>