<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/templates/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <title>Главная &mdash; Мастерская Дизайна</title>
</head>
<body>
<?php include ROOT . '/app/views/layouts/header.php'; ?>
<main class="wrapper">

    <!-- Основная секция -->
    <section class='mainSection'>
        <div class="mainSection__content" >
            <h1>Мебель на заказ в Красноярске</h1>
            <p>Изготовление корпусной мебели любой сложности под заказ</p>
            <a href="/projects">Каталог</a>
        </div>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                    <picture><source srcset="/app/templates/img/mainslider/1.webp" type="image/webp"><img src="/app/templates/img/mainslider/1.png"  alt="..."></picture>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <picture><source srcset="/app/templates/img/mainslider/2.webp" type="image/webp"><img src="/app/templates/img/mainslider/2.png"  alt="..."></picture>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <picture><source srcset="/app/templates/img/mainslider/3.webp" type="image/webp"><img src="/app/templates/img/mainslider/3.jpg"  alt="..."></picture>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <picture><source srcset="/app/templates/img/mainslider/4.webp" type="image/webp"><img src="/app/templates/img/mainslider/4.jpg"  alt="..."></picture>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <picture><source srcset="/app/templates/img/mainslider/5.webp" type="image/webp"><img src="/app/templates/img/mainslider/5.jpg"  alt="..."></picture>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- О компании -->
    <section class='aboutUsSection'>
        <div class="aboutUsSection__content">
            <h2>О компании</h2>
            <div class="aboutUsSection__content__text">
                <p>	
					Мы успешно работаем на рынке уже более 10 лет
				</p>
				<p>	
					Мы выполняем заказы любой сложности и стараемся создавать интерьеры вне времени, но с учетом современных тенденций. <br> Каждый наш проект-это не просто мебельное обустройство, это возможность реализовать Ваши смелые фантазии, учесть все бытовые потребности, показать свой характер и создать максимальный комфорт для жизни.
				</p>
				<p>	
					При изготовлении нашей продукции мы используем материалы и комплектующие ведущих производителей. <br> Мы гарантируем высокое качество и доступные цены
				</p>
				<p>	
					Сделаем бесплатный 3D проект и выезд замерщика на дом. <br> Даём возможность купить нашу мебель в рассрочку до 6 месяцев и без % <br>Более подробную информацию уточняйте у нашего менеджера
				</p>
            </div>
        </div>
    </section>

    <!-- Наши проекты -->
    <section class='progectUsSection'>
        <div class="progectUsSection__content">
            <h2>Наши проекты</h2>
            <div class="bar">
                <div class="slider">
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/1.svg" type="image/webp"><img src="/app/templates/img/slider/1.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/2.svg" type="image/webp"><img src="/app/templates/img/slider/2.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/3.svg" type="image/webp"><img src="/app/templates/img/slider/3.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/4.svg" type="image/webp"><img src="/app/templates/img/slider/4.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/5.svg" type="image/webp"><img src="/app/templates/img/slider/5.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/6.svg" type="image/webp"><img src="/app/templates/img/slider/6.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/7.svg" type="image/webp"><img src="/app/templates/img/slider/7.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/8.svg" type="image/webp"><img src="/app/templates/img/slider/8.svg" alt=""></picture>
                    </div>
                    <div class="slider__item">
                        <picture><source srcset="/app/templates/img/slider/9.svg" type="image/webp"><img src="/app/templates/img/slider/9.svg" alt=""></picture>
                    </div>
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
                <div class="catalogSection__content-item-box wow bounceInLeft">
                    <picture><source srcset="/app/templates/img/us_progect/tick1.webp" type="image/webp"><img src="/app/templates/img/us_progect/tick1.png" alt=""></picture>
                    <p>Мы используем благородные, премиальные материалы</p>
                </div>
                <div class="catalogSection__content-item-box wow bounceInRight">
                    <picture><source srcset="/app/templates/img/us_progect/light-bulb1.webp" type="image/webp"><img src="/app/templates/img/us_progect/light-bulb1.png" alt=""></picture>
                    <p>Каждый наш проект-это произведение искусства, возможность реализовать Ваши смелые фантазии, учесть все потребности.</p>
                </div>
                <div class="catalogSection__content-item-box wow bounceInLeft">
                    <picture><source srcset="/app/templates/img/us_progect/information1.webp" type="image/webp"><img src="/app/templates/img/us_progect/information1.png" alt=""></picture>
                    <p>Отправьте нам заявку на расчет проекта, и вы убедитесь - наши цены ниже, чем у других производителей. Возможна рассрочка без процентов и участия банка.</p>
                </div>
                <div class="catalogSection__content-item-box wow bounceInRight">
                    <p>Срок изготовления от 14 дней</p>
                </div>
                <div class="catalogSection__content-item-box wow bounceInLeft">
                    <p>Мы следим за качеством мебели и предоставляем гарантию</p>
                </div>
                <div class="catalogSection__content-item-box wow bounceInRight">
                    <p>Вызов замерщика и создание профессионального 3D проекта мебели</p>
                </div>
            </div>
            <div class="catalogSection__content-button">
                <a href="#popup" class="popup-link">ЗАКАЗАТЬ ЗАМЕР</a>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/app/views/layouts/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
