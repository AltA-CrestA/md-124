<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app/templates/css/style.min.css">
    <title>Проект — Мастерская Дизайна</title>
</head>
<body>
<?php use md124\models\Project;

include ROOT . '/app/views/layouts/headerW.php'; ?>
<main class="wrapper">

    <?php if ($categoryUrl == 'kitchen'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                        <li><span>Столешница:</span> <?php echo Project::getTabletop($project); ?></li>
                        <li><span>Ручки:</span> <?php echo Project::getHandles($project); ?></li>
                        <li><span>Мойка:</span> <?php echo Project::getWashing($project); ?></li>
                        <li><span>Подсветка:</span> <?php echo Project::getBacklight($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($categoryUrl == 'bathroom'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                        <li><span>Столешница:</span> <?php echo Project::getTabletop($project); ?></li>
                        <li><span>Мойка:</span> <?php echo Project::getWashing($project) ?></li>
                        <li><span>Подсветка:</span> <?php echo Project::getBacklight($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($categoryUrl == 'closet' || $categoryUrl == 'wardrobe'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($categoryUrl == 'hall'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                        <li><span>Столешница:</span> <?php echo Project::getTabletop($project); ?></li>
                        <li><span>Мойка:</span> <?php echo Project::getProp($project); ?></li>
                        <li><span>Подсветка:</span> <?php echo Project::getBacklight($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($categoryUrl == 'bedroom'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                        <li><span>Столешница:</span> <?php echo Project::getTabletop($project); ?></li>
                        <li><span>Подсветка:</span> <?php echo Project::getBacklight($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($categoryUrl == 'lounge'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                        <li><span>Столешница:</span> <?php echo Project::getTabletop($project); ?></li>
                        <li><span>Подсветка:</span> <?php echo Project::getBacklight($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($categoryUrl == 'children'): ?>
        <section class="product">
            <div class="product__content">
                <div class="product__content-image">

                    <?php if (empty($project['image-1'])): ?>
                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="">

                    <?php else: ?>

                        <div class="popularItem__content-slider">
                            <div class="popularItem__content-slider-buttons">
                                <button class="popularItem__content-slider-buttons-prev">
                                    <img src="/app/templates/img/left.svg" alt="" />
                                </button>
                                <button class="popularItem__content-slider-buttons-next">
                                    <img src="/app/templates/img/right.svg" alt="" />
                                </button>
                            </div>
                            <div class="popularItem__content-slider-track">
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image']; ?>" alt="" class="minimized">
                                </div>
                                <div class="popularItem__content-slider-track-item">
                                    <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-1']; ?>" alt="" class="minimized">
                                </div>

                                <?php if (!empty($project['image-2'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-2']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($project['image-3'])): ?>
                                    <div class="popularItem__content-slider-track-item">
                                        <img src="/app/templates/img/<?= $categoryUrl . '/' . $project['image-3']; ?>" alt="" class="minimized">
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="product__content-text">
                    <h2>Описание</h2>
                    <ul>
                        <li><span>Корпус:</span> <?php echo Project::getCore($project); ?></li>
                        <li><span>Фасад:</span> <?php echo Project::getFacade($project); ?></li>
                        <li><span>Фурнитура:</span> <?php echo Project::getFurniture($project); ?></li>
                        <li><span>Столешница:</span> <?php echo Project::getTabletop($project); ?></li>
                        <li><span>Подсветка:</span> <?php echo Project::getBacklight($project); ?></li>
                    </ul>
                    <div class="product__content-text-btn">
                        <a href="#popup" class="popup-link">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>
</body>
</html>