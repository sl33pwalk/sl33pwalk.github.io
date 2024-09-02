<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прототип</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Подключение Inputmask через CDN -->
</head>

<body>
    <!-- где кафе меню каке бизнес ланчи галерея ланчей // доставка сроки // информация о компании // фос -->

    <div class="header">
        <div class="" style="background-color: #e3f2fd;">

            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                    <a class="navbar-brand" href="#">Логотип</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="">
                            <ul class="navbar-nav">

                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Меню</span></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="#">О нас</span></a>
                                </li>

                                <!-- <li class="nav-item active">
                                <a class="nav-link" href="#">Закажите прямо сейчас</span></a>
                            </li> -->


                            </ul>
                        </div>

                        <div class="">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="tel:1234567890">+7 (123) 456-78-90</a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
                                        Закажите прямо сейчас
                                    </a>
                                </li>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="row">
                                                    <h5 class="col-sm-12 modal-title pb-3" id="exampleModalLabel">Форма
                                                        обратной связи</h5>
                                                    <div class="col-sm-12">Заполните форму и в скором времени мы
                                                        свяжемся с Вами.</div>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="inputName3"
                                                                placeholder="Имя">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="tel" class="form-control" id="inputPhone3"
                                                                placeholder="+7 (___) ___-__-__">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10 ">
                                                            <button type="submit"
                                                                class="feedback__submit btn">Отправить</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>

                    </div>

                </nav>
            </div>
        </div>
    </div>

    <div class="main">

        <div class="cafe__head pb-5 slider">
            <div class="">
                <div class="swiper-container" style="overflow:hidden;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url('img/head.jpg');">
                            <div class="slide-content">
                                <h1 class="cafe__title">Прототип для кафе</h1>
                                <span class="cafe__desc">Попробуйте наши свежие десерты и кофе.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('img/slide.jpg');">
                            <div class="slide-content">
                                <h2 class="cafe__title_small">Акция: скидка 20% на завтраки!</h2>
                                <span class="cafe__desc">Каждое утро с 8:00 до 11:00.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('img/slide.jpg');">
                            <div class="slide-content">
                                <h2 class="cafe__title_small">Лучшие продукты для вас</h2>
                                <span class="cafe__desc">Мы используем только свежие и натуральные ингредиенты.</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>



        <div class="product mb-5">
            <div class="container">
                <h2 class="pb-5">Меню</h2>
                <div class="row gx-5 product__content">

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-4">
                        <div class="product__item__inner">
                            <a href="#" class="product__item__image" style="cursor: pointer;">
                                <img src="img/product.jpg" alt="Американо" class="image" loading="lazy">
                            </a>
                            <div class="product__item__body" style="cursor: pointer;">
                                <div class="product__item__content">
                                    <div class="product__item__name name">Американо</div>
                                    <div class="product__item__size size">300 мл</div>
                                    <div class="product__item__desc desc">Способ приготовления кофе, заключающийся в
                                        соединении определённого количества горячей воды и эспрессо</div>
                                    <div class="wrapper"></div>
                                </div>
                                <div class="product__item__foot foot simple noselect">
                                    <div class="product__item__price price"> 200&nbsp;₽ </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="product__more" href="#">Смотреть всё</a>
            </div>
        </div>

        <div class="about mb-5">
            <div class="container">
                <div class="row about__content">
                    <div class="col-xl-6">
                        <div class="about__info">
                            <h2 class="about__title pb-5">О нас</h2>
                            <span class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nam
                                architecto sint. Quae pariatur ipsam, eveniet itaque nam at, laborum, explicabo esse
                                repellat eaque laboriosam doloremque corporis consequuntur eum rem?</span>
                            <span class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nam
                                architecto sint. Quae pariatur ipsam, eveniet itaque nam at, laborum, explicabo esse
                                repellat eaque laboriosam doloremque corporis consequuntur eum rem?</span>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <img class="about__img" src="img/product.jpg" alt="О нас">
                    </div>
                </div>
            </div>
        </div>

        <div class="map mb-5">
            <div class=" pt-5 pb-5">
                <div style="position:relative;overflow:hidden;border:none;"><a
                        href="https://yandex.ru/maps/org/vkusno_i_tochka/115993990634/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Вкусно — и точка</a><a
                        href="https://yandex.ru/maps/55/tyumen/category/fast_food/184106386/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Быстрое питание в
                        Тюмени</a><iframe
                        src="https://yandex.ru/map-widget/v1/?ll=65.549743%2C57.147045&mode=poi&poi%5Bpoint%5D=65.549172%2C57.146989&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D115993990634&z=18.05"
                        height="500" frameborder="0" allowfullscreen="true"
                        style="position:relative;width:100%;"></iframe></div>
            </div>
        </div>



        <div class="feedback pb-5">
            <div class="container">
                <div class="row feedback__content">
                    <div class="col-xl-6">
                        <h2 class="pb-3">Закажите прямо сейчас</h2>
                        <form>
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-2 col-form-label">Имя</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName3" placeholder="Имя">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone3" class="col-sm-2 col-form-label">Телефон</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="inputPhone3"
                                        placeholder="+7 (___) ___-__-__">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <button type="submit" class="feedback__submit btn">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6">
                        <div class="about__info">
                            <h4 class="about__title">Доставка</h4>
                            <span class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nam
                                architecto sint. Quae pariatur ipsam, eveniet itaque nam at, laborum, explicabo esse
                                repellat eaque laboriosam doloremque corporis consequuntur eum rem?</span>
                            <h4 class="about__title">Самовывоз</h4>
                            <span class="about__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nam
                                architecto sint. Quae pariatur ipsam, eveniet itaque nam at, laborum, explicabo esse
                                repellat eaque laboriosam doloremque corporis consequuntur eum rem?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="cafe__footer pt-5">
        <div class="container">
            <footer class="">
                <div class="row d-flex justify-content-between">

                    <div class="col-xl-3 col-12 mb-4">
                        <h5 class="text-uppercase mb-4">График работы</h5>
                        <div class="cafe__worktime">
                            <div class="cafe__worktime__item">
                                <span class="cafe__day">Пн - Пт:</span>
                                <span class="cafe__time">08:00 - 23:00</span>
                            </div>

                            <div class="cafe__worktime__item">
                                <span class="cafe__day">Суббота:</span>
                                <span class="cafe__time">08:00 - 22:00</span>
                            </div>

                            <div class="cafe__worktime__item">
                                <span class="cafe__day">Воскресенье:</span>
                                <span class="cafe__time">08:00 - 21:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-12 mb-4">
                        <h5 class="text-uppercase mb-4">Контакты</h5>
                        <ul class="fa-ul pl-0" style="">
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-home"></i></span><span class="">Тюмень, ЦУМ, 2
                                    этаж</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                    class="">contact@cafe.com</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-phone"></i></span><span class=""><a
                                        href="tel:1234567890">+7 (123) 456-78-90</a></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top">
                    <p>© 2024 Прототип, Inc.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    <div class="phone-widget" id="phone__link">
        <svg class="phone-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.12-.27 11.72 11.72 0 004.3.82 1 1 0 011 1v3.58a1 1 0 01-1 1A19 19 0 013 5a1 1 0 011-1h3.58a1 1 0 011 1 11.72 11.72 0 00.82 4.3 1 1 0 01-.27 1.12l-2.2 2.2z" />
        </svg>
        <div class="phone-tooltip"><a href="tel:1234567890">+7 (123) 456-78-90</a></div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        $(document).ready(function () {
            $('#inputPhone3').inputmask({
                mask: '+7 (999) 999-99-99',
                placeholder: ' ',
                showMaskOnHover: false,
                showMaskOnFocus: false,
                onincomplete: function () {
                    $(this).val('');
                }
            });

            $('#phone__link').on("click", function () {
                console.log("clicked");
            })
        });
    </script>
</body>

</html>