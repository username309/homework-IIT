<?php
add_action('send_headers', function() {
    header('Content-Type: text/html; charset=UTF-8');
});

// Регистрация пользовательских маршрутов
function custom_pages_routes() {
    add_rewrite_rule('index/?$', '/test/index.php', 'top');
    add_rewrite_rule('images/?$', '/test/index.php?page_id=images', 'top');
    add_rewrite_rule('video/?$', '/test/index.php?page_id=video', 'top');
    add_rewrite_rule('music/?$', '/test/index.php?page_id=music', 'top');
}
add_action('init', 'custom_pages_routes');

// Обновление правил перезаписи
function custom_pages_flush_rewrite() {
    custom_pages_routes();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'custom_pages_flush_rewrite');

add_action('template_redirect', function() {
    if (isset($_GET['page_id'])) {
        switch ($_GET['page_id']) {
            case 'images':
                include get_template_directory() . '/images.php';
                exit;
            case 'video':
                include get_template_directory() . '/video.php';
                exit;
            case 'music':
                include get_template_directory() . '/music.php';
                exit;
        }
    }
});
?>