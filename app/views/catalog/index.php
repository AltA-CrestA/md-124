<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <title>Наши проекты &mdash; Мастерская Дизайна</title>
</head>
<body>
<?php include ROOT . '/app/views/layouts/header.php'; ?>
<main class='wrapper'>
    <section class="pAmainSection">
        <div class="pAmainSection__content">
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/1.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/2.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/3.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/4.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/5.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/6.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/7.png" alt="">
            </div>
            <div class="pAmainSection__content-item">
                <img src="/app/templates/img/progectAll/8.png" alt="">
            </div>
        </div>
    </section>
    <section class="firsprogect">
        <div class="firsprogect__content">
            <h2>Выберете категорию</h2>
            <div class="firsprogect__content-item">

                <?php foreach ($categoryList as $category): ?>
                <div class="one">
                    <a href="/projects/<?php echo $category['url']; ?>">
                        <img src="/app/templates/img/download/<?php echo $category['img']; ?>" alt="">
                        <h3><?php echo $category['name']; ?></h3>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
</main>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<script src="/app/templates/plugins/jquery/jquery.min.js"></script>
<script src="/app/templates/js/script.min.js"></script>
</body>
</html>
