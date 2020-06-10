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
<?php include ROOT . '/app/views/layouts/headerW.php'; ?>
<main class='wrapper'>
    <section class="room">
        <div class="room__content">
            <div class="room__content-item">
                <div class="room__content-item-up">
                    <div class="room__logo">
                        <img src="/app/templates/img/1.png" alt="">
                    </div>
                    <div class="room__text">
                        <h2><?php echo $categoriesId['name']; ?></h2>
                        <p>
                            Гармоничное сочетание современных материалов, новомодной техники в стилизованном индустриальном интерьере - все это "Мастерская дизайна".
                        </p>
                    </div>
                </div>
                <div class="room__content-item-down">

                    <?php foreach ($categoryProjectsBathroom as $bathroom): ?>
                        <div class="room__box">
                            <div class="room__box-image">
                                <img src="/app/templates/img/download/<?php echo $bathroom['image']; ?>" alt="" class="minimized">
                            </div>
                            <div class="room__box-text">
                                <h2><?php echo $bathroom['name']; ?></h2>
                                <ul>
                                    <li><span>Корпус:</span> <?php echo $bathroom['core']; ?></li>
                                    <?php if (!empty($bathroom['facade'])): ?>
                                        <li><span>Фасад:</span> <?php echo $bathroom['facade']; ?></li>
                                    <?php endif; ?>
                                    <li><span>Фурнитура:</span> <?php echo $bathroom['furniture']; ?></li>
                                    <?php if (!empty($bathroom['tabletop'])): ?>
                                        <li><span>Столешница:</span> <?php echo $bathroom['tabletop']; ?></li>
                                    <?php endif; ?>
                                    <?php if (!empty($bathroom['text'])): ?>
                                        <li><span>А так же:</span> <?php echo $bathroom['text']; ?></li>
                                    <?php endif; ?>
                                </ul>
                                <div class="room__box-text-btn">
                                    <a href="#popup" class="popup-link">Узнать стоимость</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
</main>
<!-- Форма-->
<?php include ROOT . '/app/views/layouts/popup.php'?>
<!-- Конец Формы-->
<!-- Футер-->
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<!-- Конец Футера-->
<script src="/app/templates/plugins/jquery/jquery.min.js"></script>
<script src="/app/templates/js/script.js"></script>
</body>
</html>
