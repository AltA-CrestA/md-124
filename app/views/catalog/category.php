<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <title><?php echo $categoriesId['name']; ?> &mdash; Мастерская Дизайна</title>
</head>
<body>
<?php include ROOT .  '/app/views/layouts/headerW.php'; ?>
<main class='wrapper'>
    <section class="room">
        <div class="room__content">
            <div class="room__content-item">
                <div class="room__content-item-up">
                    <div class="room__text">
                        <h2><?php echo $categoriesId['name']; ?></h2>
                        <p>
                            <?php echo $categoriesId['description']; ?>
                        </p>
                        <a href="#popup" class="popup-link">Заказать</a>
                    </div>
                </div>
                <div class="room__content-item-down">
                    <div class="room__box">

                        <?php if ($categoriesId['url'] == 'kitchen'): ?>
                            <?php foreach ($categoryProjectsKitchen as $kitchen): ?>
                                    <div class="room__box-image">
                                        <img src="/app/templates/img/download/<?php echo $kitchen['image']; ?>" alt="" class="minimized">
                                    </div>
                            <?php endforeach; ?>
                        <?php elseif ($categoriesId['url'] == 'bathroom'): ?>
                            <?php foreach ($categoryProjectsBathroom as $bathroom): ?>
                                <div class="room__box-image">
                                    <img src="/app/templates/img/download/<?php echo $bathroom['image']; ?>" alt="" class="minimized">
                                </div>
                            <?php endforeach; ?>
                        <?php elseif ($categoriesId['url'] == 'closet'): ?>
                            <?php foreach ($categoryProjectsCloset as $closet): ?>
                                <div class="room__box-image">
                                    <img src="/app/templates/img/download/<?php echo $closet['image']; ?>" alt="" class="minimized">
                                </div>
                            <?php endforeach; ?>
                        <?php elseif ($categoriesId['url'] == 'hall'): ?>
                            <?php foreach ($categoryProjectsHall as $hall): ?>
                                <div class="room__box-image">
                                    <img src="/app/templates/img/hall/<?php echo $hall['image']; ?>" alt="" class="minimized">
                                </div>
                            <?php endforeach; ?>
                        <?php elseif ($categoriesId['url'] == 'bedroom'): ?>
                            <?php foreach ($categoryProjectsBedroom as $bedroom): ?>
                                <div class="room__box-image">
                                    <img src="/app/templates/img/bedroom/<?php echo $bedroom['image']; ?>" alt="" class="minimized">
                                </div>
                            <?php endforeach; ?>
                        <?php elseif ($categoriesId['url'] == 'lounge'): ?>
                            <?php foreach ($categoryProjectsLounge as $lounge): ?>
                                <div class="room__box-image">
                                    <img src="/app/templates/img/lounge/<?php echo $lounge['image']; ?>" alt="" class="minimized">
                                </div>
                            <?php endforeach; ?>
                        <?php elseif ($categoriesId['url'] == 'children'): ?>
                            <?php foreach ($categoryProjectsChildren as $children): ?>
                                <div class="room__box-image">
                                    <img src="/app/templates/img/children/<?php echo $children['image']; ?>" alt="" class="minimized">
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Футер-->
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<!-- Конец Футера-->

</body>
</html>
