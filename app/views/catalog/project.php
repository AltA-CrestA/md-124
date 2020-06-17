<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <title>Item</title>
</head>
<body>
<?php include ROOT . '/app/views/layouts/headerW.php'; ?>
<main class="wrapper">

    <section class="product">
        <div class="product__content">
            <div class="product__content-image">
                <img src="/app/templates/img/download/kitchen/1.png" alt="" class="minimized">
            </div>
            <div class="product__content-text">
                <h2>Наименование</h2>
                <ul>
                    <li><span>Корпус:</span> Lorem ipsum dolor sit amet.</li>
                    <li><span>Фасад:</span> Lorem ipsum dolor.</li>
                    <li><span>Фурнитура:</span> Lorem ipsum dolor sit amet, consectetur.</li>
                    <li><span>Столешница:</span> Lorem ipsum.</li>
                    <li><span>Ручки:</span> Lorem ipsum dolor.</li>
                    <li><span>Мойка:</span> Lorem ipsum.</li>
                    <li><span>Подсветка:</span> Lorem ipsum dolor.</li>
                    <li><span>А так же:</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deleniti earum id officiis tenetur! Ea eligendi eum impedit, necessitatibus provident quae quaerat quasi reprehenderit voluptate?</li>
                </ul>
                <div class="product__content-text-btn">
                    <a href="#popup" class="popup-link">Узнать стоимость</a>
                </div>
            </div>
    </section>

</main>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
</body>
</html>