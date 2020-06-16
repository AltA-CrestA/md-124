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

<!--    ФРОНТАЛЬНАЯ СЕКЦИЯ  -->

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

    <!--    КАТЕГОРИИ  -->

    <section class="firsprogect">
        <div class="firsprogect__content">
            <h1>Что мы делаем?</h1>
            <div class="firsprogect__content-item">

                <?php foreach ($categoryList as $category): ?>
                    <div class="grid<?php echo $category['id']; ?> catalogIMG">
                        <a href="/projects/<?php echo $category['url']; ?>">
                            <img src="/app/templates/img/category/<?php echo $category['img']; ?>" alt="">
                        </a>
                        <h2>
                            <a href="/<?php echo $category['url']; ?>"><?php echo $category['name']; ?></a>
                        </h2>
                        <p><?php echo $category['text']; ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>

</body>
</html>
