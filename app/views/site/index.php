<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <title>Главная &mdash; Мастерская Дизайна</title>
</head>
<body>
<?php include ROOT . '/app/views/layouts/header.php'; ?>
<main>

    <!-- Основная секция -->
    <section class='mainSection' data-parallax="scroll" data-image-src="/app/templates/img/02.jpg" data-speed="0.5">
        <div class="mainSection__content" id="inline-popups">
            <h1>Мебель на заказ в Красноярске</h1>
            <p>Изготовление корпусной мебели любой сложности под заказ</p>
            <a href="/projects">Каталог</a>
        </div>
    </section>

    <!-- О компании -->
    <section class='aboutUsSection'>
        <div class="aboutUsSection__content">
            <h2>О компании</h2>
            <div class="aboutUsSection__content__text">
                <p>
                    Наша компания занимается производством мебели более 5 лет - мы изготавливаем кухни,
                    мебельные гарнитуры для спален, гостиных и любых другим помещений.
                </p>
                <br>
                <ul>
                    <li>Возможность для наших клиентов</li>
                    <li>
                        Различные материалы и технологии - корпусная мебель, модели из массива дерева,
                        варианты из ЛДСП и МДФ, натуральный камень
                    </li>
                    <li>Красивое оформление - обшивка шпоном, покрытие эмалью</li>
                    <li>Изготовление на заказ, реализация авторских проектов и вариантов дизайнов</li>
                    <li>Оптимальные расценки благодаря собственному производству</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Наши проекты -->
    <section class='progectUsSection'>
        <div class="progectUsSection__content">
            <h2>Наши проекты</h2>
            <div class="progectUsSection__content-item totalItem">
                <div class="item">
                    <picture><source srcset="/app/templates/img/progectAll/1.webp" type="image/webp"><img src="/app/templates/img/progectAll/1.png" alt=""></picture>
                </div>
                <div class="item">
                    <picture><source srcset="/app/templates/img/progectAll/2.webp" type="image/webp"><img src="/app/templates/img/progectAll/2.png" alt=""></picture>
                </div>
                <div class="three item">
                    <picture><source srcset="/app/templates/img/progectAll/4.webp" type="image/webp"><img src="/app/templates/img/progectAll/4.png" alt=""></picture>
                </div>
            </div>
            <div class="progectUsSection__content-button">
                <a href="/projects">Смотреть больше</a>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class='catalogSection'>
        <div class="catalogSection__content">
            <h2>Преимущества нашей компании</h2>
            <div class="catalogSection__content-item">
                <div class="catalogSection__content-item-box">
                    <h6 class="one"><i class="fas fa-check-double"></i></h6>
                    <p>Высокотехнологичная обработка используемых материалов</p>
                </div>
                <div class="catalogSection__content-item-box">
                    <h6><i class="fas fa-drafting-compass compass two"></i></h6>
                    <p>Индивидуальный подход к проектированию и изготовлению заказов</p>
                </div>
                <div class="catalogSection__content-item-box ">
                    <h6><i class="fas fa-award three"></i></h6>
                    <p>Гарантия качества на всех этапах производства</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Обратная форма связи -->
    <section class='formSection'>
        <div class="formSection__content">
            <div class="formSection__content__form">
                <label for="name">Ваше имя</label>
                <input type="name">
            </div>
            <div class="formSection__content__form">
                <label for="phone">Ваш тел<span>.</span><span class='phoneReturn'>ефон</span></label>
                <input type="phone">
            </div>
            <div class="formSection__content__form">
                <label for="message">Сообщение</label>
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="formSection__content__formBtn">
                <button>Отправить</button>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<script src="/app/templates/plugins/jquery/jquery.min.js"></script>
<script src="/app/templates/plugins/paralax/parallax.min.js"></script>
<script src="/app/templates/js/script.min.js"></script>
</body>
</html>
