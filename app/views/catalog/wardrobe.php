<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <title>Progect</title>
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
                        <h2>Шкафы</h2>
                        <div class="popup__first-imgMIN">
                            <img src="/app/templates/img/progectAll/4.png" alt="">
                        </div>
                        <p>
                            Гармоничное сочетание современных материалов, новомодной техники в стилизованном индустриальном интерьере - все это "Мастерская дизайа".
                        </p>
                    </div>
                </div>
                <div class="room__content-item-down">
                    <div class="room__box">
                        <a href="#popup" class="popup-link">
                            <img src="/app/templates/img/progectAll/1.png" alt="">
                        </a>
                    </div>
                    <div class="room__box">
                        <a href="#popup">
                            <img src="/app/templates/img/progectAll/2.png" alt="">
                        </a>
                    </div>
                    <div class="room__box">
                        <a href="#popup">
                            <img src="/app/templates/img/progectAll/3.png" alt="">
                        </a>
                    </div>
                    <div class="room__box">
                        <a href="#popup">
                            <img src="/app/templates/img/progectAll/4.png" alt="">
                        </a>
                    </div>
                    <div class="room__box">
                        <a href="#popup">
                            <img src="/app/templates/img/progectAll/5.png" alt="">
                        </a>
                    </div>
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
