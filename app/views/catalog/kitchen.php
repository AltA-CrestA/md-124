<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <title>Progect</title>
</head>
<body>
<?php include ROOT .  '/app/views/layouts/headerW.php'; ?>
<main class='wrapper'>
    <section class="room">
        <div class="room__content">
            <div class="room__content-item">
                <div class="room__content-item-up">
                    <div class="room__logo">
                        <img src="/app/templates/img/1.png" alt="">
                    </div>
                    <div class="room__text">
                        <h2>Кухни</h2>
                        <p>
                            Гармоничное сочетание современных материалов, новомодной техники в стилизованном индустриальном интерьере - все это "Мастерская дизайна".
                        </p>
                    </div>
                </div>
                <div class="room__content-item-down">

                    <?php foreach ($categoryProjectsKitchen as $kitchen): ?>
                        <div class="room__box">
                            <div class="room__box-image">
                                <img src="/app/templates/img/download/<?php echo $kitchen['image']; ?>" alt="" class="minimized">
                            </div>
                            <div class="room__box-text">
                                <h2><?php echo $kitchen['name']; ?></h2>
                                <ul>
                                    <li><span>Корпус:</span> <?php echo $kitchen['core']; ?></li>
                                    <hr>
                                    <li><span>Фасад:</span> <?php echo $kitchen['facade']; ?></li>
                                    <hr>
                                    <li><span>Фурнитура:</span> <?php echo $kitchen['furniture']; ?></li>
                                    <hr>
                                    <?php if (!empty($kitchen['tabletop'])): ?>
                                        <li><span>Столешница:</span> <?php echo $kitchen['tabletop']; ?></li>
                                        <hr>
                                    <?php endif; ?>
                                    <?php if (!empty($kitchen['handles'])): ?>
                                        <li><span>Ручки:</span> <?php echo $kitchen['handles']; ?></li>
                                        <hr>
                                    <?php endif; ?>
                                    <?php if (!empty($kitchen['washing'])): ?>
                                        <li><span>Мойка:</span> <?php echo $kitchen['washing']; ?></li>
                                        <hr>
                                    <?php endif; ?>
                                    <?php if (!empty($kitchen['backlight'])): ?>
                                        <li><span>Подсветка:</span> <?php echo $kitchen['backlight']; ?></li>
                                        <hr>
                                    <?php endif; ?>
                                    <?php if (!empty($kitchen['text'])): ?>
                                        <li><span>А так же:</span> <?php echo $kitchen['text']; ?></li>
                                        <hr>
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
<!-- Форма -->
<div id="popup" class="popup">
    <div class="popup__body ">
        <div class="popup__content">
            <div class="else">
                <a href="#" class="popup__clouse close-popup">&#10006;</a>
                <h2>Заполните форму обратной связи, и мы свяжемся с вами, чтобы воплотить ваши самые смелые идеи!</h2>
                <h2 class="result-popup"></h2>
                <div class="popup__item">
                    <input type="text" placeholder="Ваше имя" name="name-popup" id="name-popup">
                    <input type="tel" placeholder="Ваш телефон" name="phone-popup" id="phone-popup">
                    <textarea name="message-popup" id="message-popup" cols="30" rows="10" placeholder='Сообщение'></textarea>
                    <div class="popup__item-formBtn">
                        <button type="submit" name="submit-popup" id="submit-popup">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<script src="/app/templates/plugins/jquery/jquery.min.js"></script>
<script src="/app/templates/js/script.min.js"></script>
</body>
</html>
