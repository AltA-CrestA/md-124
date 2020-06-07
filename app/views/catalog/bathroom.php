<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <title>Ванны &mdash; Мастерская Дизайна</title>
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
                        <h2>Ванны</h2>
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
                                    <hr>
                                    <?php if (!empty($bathroom['facade'])): ?>
                                        <li><span>Фасад:</span> <?php echo $bathroom['facade']; ?></li>
                                        <hr>
                                    <?php endif; ?>
                                    <li><span>Фурнитура:</span> <?php echo $bathroom['furniture']; ?></li>
                                    <hr>
                                    <?php if (!empty($bathroom['tabletop'])): ?>
                                        <li><span>Столешница:</span> <?php echo $bathroom['tabletop']; ?></li>
                                        <hr>
                                    <?php endif; ?>
                                    <?php if (!empty($bathroom['text'])): ?>
                                        <li><span>А так же:</span> <?php echo $bathroom['text']; ?></li>
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
<!-- Popup itself -->
<div id="popup" class="popup">
    <div class="popup__body ">
        <div class="popup__content">
            <div class="mainPopup">
                <a href="#" class="popup__clouse close-popup">&#10006;</a>
                <div class="popup__first">
                    <div class="popup__first-img">
                        <img src="/app/templates/img/progectAll/4.png" alt="">
                    </div>
                    <div class="popup__first-text">
                        <h2>Наименование</h2>
                        <ul>
                            <li><span>Корпус:</span> Аллюминевый</li>
                            <hr>
                            <li><span>Фасад:</span> Аллюминевый</li>
                            <hr>
                            <li><span>Фурнитура:</span> Аллюминевый</li>
                            <hr>
                            <li><span>Столешница:</span> Аллюминевый</li>
                            <hr>
                            <li><span>Ручки:</span> Аллюминевый</li>
                            <hr>
                            <li><span>Мойка:</span> Аллюминевый</li>
                            <hr>
                            <li><span>Подсветка:</span> Аллюминевый</li>
                            <hr>
                            <li><span>А так же:</span> Аллюминевый</li>
                            <hr>
                        </ul>
                        <div class="button__know">
                            <a href="#popup2" class="popup-link">Залупиться в залупу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Форма -->
<div id="popup2" class="popup">
    <div class="popup__body ">
        <div class="popup__content">
            <div class="else">
                <a href="#" class="popup__clouse close-popup">&#10006;</a>
                <h2>Заполните форму обратной связи, и мы свяжемся с вами, чтобы воплотить ваши самые смелые идеи!</h2>
                <div class="popup__item">
                    <input type="name" placeholder='Ваше имя'>
                    <input type="phone" placeholder='Ваш телефон'>
                    <textarea name="message" id="" cols="30" rows="10" placeholder='Сообщение'></textarea>
                    <div class="popup__item-formBtn">
                        <button>Отправить</button>
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
