<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <title>Контакты &mdash; Мастерская Дизайна</title>
</head>
<body>
<?php include ROOT . '/app/views/layouts/header.php'; ?>
<main class='wrapper'>
    <section class="mainContact" data-parallax="scroll" data-image-src="/app/templates/img/cont.png" data-speed="0.2">
        <h2>Контакты</h2>
    </section>
    <section class="contact">
        <h3>Звоните или приезжайте к нам в офис. Подпишитесь на нас в соцсетях. Или заполните форму обратной связи, мы свяжемся с вами в кратчайшие сроки.</h3>
        <div class="contact__content">
            <div class="contact__contant">
                <div class="contact__contant-form">
                    <div class="contact__contant-form-item">
                        <div class="result-contact"></div>
                    </div>
                    <div class="contact__contant-form-item">
                        <input type="text" name="name-contact" id="name-contact" placeholder='Ваше имя'>
                    </div>
                    <div class="contact__contant-form-item">
                        <input type="tel" name="phone-contact" id="phone-contact" placeholder='Ваше телефон'>
                    </div>
                    <div class="contact__contant-form-item">
                        <input type="email" name="email-contact" id="email-contact" placeholder='Ваше email'>
                    </div>
                    <div class="contact__contant-form-item">
                        <textarea name="message-contact"  placeholder='Ваше сообщение' id="message-contact" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="contact__contant__icons">
                    <div class="contact__contant__icons-icon">
                        <div class="contact__contant__icons-icon-image">
                            <img src="/app/templates/img/contacts/house1.png" alt="">
                        </div>
                        <div class="contact__contant__icons-icon-text">
                            <h5>Красноярск</h5>
                            <p>Шахтеров 65, ТЦ КОНТИНЕНТ, 2 этаж</p>
                        </div>
                    </div>
                    <div class="contact__contant__icons-icon">
                        <div class="contact__contant__icons-icon-image">
                            <img src="/app/templates/img/contacts/mobile1.png" alt="">
                        </div>
                        <div class="contact__contant__icons-icon-text">
                            <h5>+7 983 269-39-53</h5>
                            <p>Ежедневно с 10:00-20:00</p>
                        </div>
                    </div>
                    <div class="contact__contant__icons-icon">
                        <div class="contact__contant__icons-icon-image">
                            <img src="/app/templates/img/contacts/email1.png" alt="">
                        </div>
                        <div class="contact__contant__icons-icon-text">
                            <h5>md_124@mail.ru</h5>
                            <p>Присылайте нам свой запрос в любое время!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__contant-form-item">
            <button type="submit" name="submit-contact" id="submit-contact">Отправить сообщение</button>
        </div>
    </section>
    <section class='max'>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abaf226e55eee3fac9dd16648ca268f05adbbc45f82e76600b1ce4636e032971c&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    </section>
</main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>

</body>
</html>