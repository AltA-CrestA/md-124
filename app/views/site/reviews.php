<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
    <script src="https://vk.com/js/api/openapi.js?168" type="text/javascript"></script>
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <title>Отзывы &mdash; Мастерская Дизайна</title>
</head>
<body>
<?php include ROOT . '/app/views/layouts/headerW.php'; ?>

<main class='wrapper'>
    <section class="review">
        <div id="vk_comments"></div>
    </section>
</main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<script type="text/javascript">
    VK.init({apiId: 7514089, onlyWidgets: true});
    VK.Widgets.Comments('vk_comments', { limit: 15, attach: "*"});
</script>
</body>
</html>