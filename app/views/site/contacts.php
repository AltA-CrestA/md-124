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
<?php include ROOT . '/app/views/layouts/headerW.php'; ?>
<main class='wrapper'>
    <section class="contact">
        <div class="contact__content">
            <h2>
                Следите за последними новостями в наших социальных сетях.
                Приезжайте к нам в офис. Или заполните форму обратной связи,
                и мы свяжемся с вами, чтобы воплотить ваши самые смелые идеи!
            </h2>
            <div class="contact__content-item">
                <div class="contact__content-item-box">
                    <i class="fas fa-map-signs iconCont"></i>
                    <div class="item__title">
                        <h3>Красноясрск</h3>
                        <h4>ул. Мира, д.102, корп. 3</h4>
                    </div>
                </div>
                <div class="contact__content-item-box">
                    <i class="fas fa-mobile-alt iconCont"></i>
                    <div class="item__title">
                        <a href="tel:+73912093953">8 (391) 209 39 53</a>
                        <h4>пн-пт 10:00-20:00</h4>
                    </div>
                </div>
                <div class="contact__content-item-box">
                    <i class="far fa-envelope iconCont"></i>
                    <div class="item__title">
                        <a href="mailto:info@mebel-lab.ru"> info@mebel-lab.ru</a>
                        <h4>Присылайте свой запрос<br> в любое время!</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='formSection'>
        <div class="formSection__content">
            <div class="formSection__content__form">
                <div class="result-contact"></div>
            </div>
            <div class="formSection__content__form">
                <label for="name-contact">Ваше имя</label>
                <input type="text" name="name-contact" id="name-contact">
            </div>
            <div class="formSection__content__form">
                <label for="phone-contact">Ваш тел<span>.</span><span class='phoneReturn'>ефон</span></label>
                <input type="tel" name="phone-contact" id="phone-contact">
            </div>
            <div class="formSection__content__form">
                <label for="message-contact">Сообщение</label>
                <textarea name="message-contact" id="message-contact" cols="30" rows="10"></textarea>
            </div>
            <div class="formSection__content__formBtn">
                <button type="submit" name="submit-contact" id="submit-contact">Отправить</button>
            </div>
        </div>
    </section>
    <section class='max'>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abaf226e55eee3fac9dd16648ca268f05adbbc45f82e76600b1ce4636e032971c&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    </section>

</main>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<script src="/app/templates/plugins/jquery/jquery.min.js"></script>
<script src="/app/templates/js/script.js"></script>
</body>
</html>