<?php
    /*
        Template Name: Home Page
    */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/apple-touch-icon.png?v=rMJBgWrjnK">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon-32x32.png?v=rMJBgWrjnK">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon-16x16.png?v=rMJBgWrjnK">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/site.webmanifest?v=rMJBgWrjnK">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/safari-pinned-tab.svg?v=rMJBgWrjnK" color="#5bbad5">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon/favicon.ico?v=rMJBgWrjnK">
    <meta name="apple-mobile-web-app-title" content="Jelly Cat">
    <meta name="application-name" content="Jelly Cat">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-config" content="<?php bloginfo('stylesheet_directory'); ?>/favicon/browserconfig.xml?v=rMJBgWrjnK">
    <meta name="theme-color" content="#ffffff">
    <!-- /Favicon -->

    <!-- v-credit.su -->
    <script type="text/javascript" src="https://v-credit.su/services/easycredit/inc.js"></script>
    <!-- /v-credit.su -->

    <?php wp_head(); ?>

    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdCXLkUAAAAAHeruL3pKhlpsPkQ9_FRr64PKI9t"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdCXLkUAAAAAHeruL3pKhlpsPkQ9_FRr64PKI9t', {action: 'homepage'}).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>
    <!-- /reCaptcha -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55447654, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55447654" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140014106-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-140014106-3');
    </script>
    <!-- /Global site tag (gtag.js) - Google Analytics -->


    <title>Купить франшизу Jelly Cat</title>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header__deco">
            <div class="deco-layer deco-layer--header deco-layer--dots">
                <div class="dot dot--m dot--pur dot--3"></div>
                <div class="dot dot--l dot--org dot--4"></div>
            </div>
            <div class="deco-layer deco-layer--header deco-layer--dots-2">
                <div class="dot dot--s dot--org dot--1"></div>
                <div class="dot dot--s dot--red dot--2"></div>
            </div>
            <div class="deco-layer deco-layer--header deco-layer--cats">
                <div class="cat cat--pur-1"></div>
                <div class="cat cat--slp-1"></div>
                <div class="blob blob--3"></div>
                <div class="cat cat--sml-1"></div>
            </div>
            <div class="deco-layer deco-layer--header deco-layer--blobs">
                <div class="blob blob--1"></div>
                <div class="blob blob--2"></div>
            </div>
        </div>
        <div class="header__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-white.svg" alt="Логотип франшизы Jelly Cat" /></div>
        <div class="header__caption">
            <h1 class="header__title">Jelly Cat — франшиза интернет магазина сладостей со всего мира</h1>
            <p class="header__text">Яркие, вкусные, запоминающиеся, притягательные. Это&nbsp;выделяет нас на&nbsp;рынке сладостей и&nbsp;является весомым конкурентным преимуществом.</p>
        </div>
        <div class="header__button"><a class="button contact-button" href="#">Узнать подробнее</a></div>
    </header>


    <!-- Main -->
    <main>
        <!-- Format -->
        <section class="format">
            <div class="format__deco">
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--l dot--org dot--7"></div>
                    <div class="dot dot--l dot--pur dot--8"></div>
                </div>
                <div class="deco-layer deco-layer--dots-2">
                    <div class="dot dot--s dot--red dot--5"></div>
                    <div class="dot dot--s dot--red dot--6"></div>
                </div>
                <div class="deco-layer deco-layer--images">
                    <div class="deco deco--ok"></div>
                    <div class="deco deco--fb"></div>
                    <div class="deco deco--vk"></div>
                    <div class="deco deco--inst"></div>
                </div>
            </div>
            <header class="format__header">
                <h2 class="section-title" data-entrance="from-right" data-entrance-delay="100">Формат магазина <br>Jelly Cat</h2>
                <p class="section-subtitle" data-entrance="from-left" data-entrance-delay="100">Jelly Cat — интернет–магазин сладостей и&nbsp;сладких подарков. В&nbsp;вашем распоряжении будут такие площадки, как: сайт–магазин, VK, Instagram, Facebook, Ok.ru</p>
            </header>
        </section>

        <!-- Who Suit -->
        <section class="who-suit">
            <div class="who-suit__deco">
                <div class="deco-layer deco-layer--images">
                    <div class="deco deco--bean-1"></div>
                    <div class="deco deco--bean-2"></div>
                    <div class="deco deco--bean-3"></div>
                    <div class="deco deco--bean-4"></div>
                </div>
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--xl dot--org dot--9"></div>
                </div>
            </div>
            <header class="who-suit__header">
                <h2 class="section-title section-title--light">Кому подойдёт <br>такой бизнес</h2>
            </header>
            <div class="who-suit__content">
                <article class="role" data-entrance="from-bottom" data-entrance-delay="100">
                    <div class="role__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/employer.svg" alt="Иконка предпринимателя" /></div>
                    <h3 class="role__title">Предпринимателям</h3>
                    <p class="role__desc">Создать ещё один источник дохода и&nbsp;зарабатывать в&nbsp;разы больше</p>
                </article>
                <article class="role" data-entrance="from-bottom" data-entrance-delay="350">
                    <div class="role__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/mother.svg" alt="Иконка мамы" /></div>
                    <h3 class="role__title">Мамам в декрете</h3>
                    <p class="role__desc">Начать собственное дело, при этом зарабатывая находясь рядом с&nbsp;семьёй</p>
                </article>
                <article class="role" data-entrance="from-bottom" data-entrance-delay="600">
                    <div class="role__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/student.svg" alt="Иконка студента" /></div>
                    <h3 class="role__title">Студентам</h3>
                    <p class="role__desc">Для тех, кто хочет перестать жить за&nbsp;счёт родителей и&nbsp;перестать изматывать себя на&nbsp;копеечных подработках</p>
                </article>
            </div>
            <div class="who-suit__button">
                <a class="button button--red contact-button" href="#">Мне подходит</a>
            </div>
        </section>

        <!-- For You -->
        <section class="for-you">
            <header class="for-you__header">
                <h2 class="section-title section-title--purple">Этот бизнес для Вас, <br>если Вы:</h2>
            </header>
            <div class="for-you__content">
                <article class="quality" data-entrance="fade" data-entrance-delay="100">
                    <div class="quality__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/hand.svg" alt="Иконка руки с монетой" /></div>
                    <h3 class="quality__title">Хотите начать своё&nbsp;дело без&nbsp;внушительных затрат</h3>
                </article>
                <article class="quality" data-entrance="fade" data-entrance-delay="350">
                    <div class="quality__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/money.svg" alt="Иконка стопки монет" /></div>
                    <h3 class="quality__title">Настроены изменить своё финансовое положение</h3>
                </article>
                <article class="quality" data-entrance="fade" data-entrance-delay="600">
                    <div class="quality__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/laugh.svg" alt="Иконка смеющихся людей" /></div>
                    <h3 class="quality__title">Любите общение <br>с&nbsp;людьми</h3>
                </article>
                <article class="quality" data-entrance="fade" data-entrance-delay="850">
                    <div class="quality__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/shield.svg" alt="Иконка щита" /></div>
                    <h3 class="quality__title">Развиваетесь и&nbsp;любите <br>узнавать новое</h3>
                </article>
                <article class="quality" data-entrance="fade" data-entrance-delay="1100">
                    <div class="quality__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/development.svg" alt="Иконка графика" /></div>
                    <h3 class="quality__title">Несёте ответственность <br>за&nbsp;свою жизнь</h3>
                </article>
            </div>
        </section>

        <!-- Advantages -->
        <section class="advantages">
            <div class="advantages__deco">
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--xl dot--org dot--10"></div>
                    <div class="dot dot--l dot--org dot--11"></div>
                    <div class="dot dot--l dot--pur dot--12"></div>
                </div>
                <div class="deco-layer deco-layer--images">
                    <div class="deco deco--choops-1"></div>
                    <div class="deco deco--choops-2"></div>
                    <div class="deco deco--bean-5"></div>
                </div>
                <div class="deco-layer deco-layer--blobs">
                    <div class="blob blob--4"></div>
                    <div class="blob blob--5"></div>
                </div>
            </div>
            <header class="advantages__header">
                <h2 class="section-title section-title--light">Преимущества <br>Jelly Cat</h2>
            </header>
            <div class="advantages__content">
                <ul class="feature-list">
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="100">
                        <strong>1 месяц на&nbsp;полную окупаемость и&nbsp;выход на&nbsp;прибыль</strong>
                    </li>
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="300">Опыт основателей в&nbsp;бизнесе более 10&nbsp;лет</li>
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="500">Обучающая информация и&nbsp;брендбук компании — 1&nbsp;час работы в день, можно совмещать с&nbsp;учёбой и&nbsp;работой</li>
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="700">Быстрая поддержка по&nbsp;любым вопросам</li>
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="900">Постоянно обновляющийся каталог качественной продукции от&nbsp;производителя</li>
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="1100">Отлаженная и&nbsp;быстрая логистика. Приём заказов круглосуточно</li>
                    <li class="feature feature--adv" data-entrance="fade" data-entrance-delay="1300">Доход позволит Вам нанять менеджера и&nbsp;только забирать деньги с&nbsp;бизнеса, бизнес станет для&nbsp;Вас пассивным заработком</li>
                </ul>
            </div>
            <div class="advantages__button"><a class="button contact-button" href="#">Узнать подробнее</a></div>
        </section>

        <!-- You Get -->
        <section class="u-get">
            <div class="u-get__deco">
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--xl dot--pur dot--101"></div>
                    <div class="dot dot--l dot--pur dot--102"></div>
                    <div class="dot dot--m dot--org dot--103"></div>
                    <div class="dot dot--s dot--red dot--104"></div>
                </div>
            </div>
            <header class="u-get__header">
                <h2 class="section-title section-title--purple">Что вы получите после приобретения франшизы</h2>
            </header>
            <div class="u-get__content">
                <ul class="feature-list feature-list--get">
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="100">Готовую бизнес–модель с&nbsp;доходностью от&nbsp;50&nbsp;000₽ в&nbsp;месяц</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="300">Обучающие материалы и поддержку 24/7</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="500">Продвижение от профессионалов в Instagram. В холдинг JAST входит федеральная сеть маркетинговых агентств</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="700">Фирменный стиль компании, логотипы, визитки, каталоги продукции</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="900">Бесплатная и быстрая доставка товара через ответственного менеджера по закупкам</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="1100">Персональный менеджер, который решит любую проблему в любое время суток</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="1300">Доступ к огромному ассортименту сладостей + постоянное пополнение</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="1500">Скрипты ведения переговоров</li>
                    <li class="feature feature--get" data-entrance="fade" data-entrance-delay="1700">Маркетинговая поддержка, привлечение целевых пользователей, настройка рекламных кампаний</li>
                </ul>
            </div>
        </section>

        <!-- Opening -->
        <section class="opening">
            <div class="opening__deco">
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--xl dot--red dot--13"></div>
                    <div class="dot dot--s dot--wht dot--105"></div>
                </div>
                <div class="deco-layer deco-layer--images">
                    <div class="deco deco--bean-6"></div>
                    <div class="deco deco--bean-7"></div>
                    <div class="deco deco--candy-1"></div>
                </div>
                <div class="deco-layer deco-layer--blobs">
                    <div class="blob blob--6"></div>
                    <div class="blob blob--7"></div>
                </div>
            </div>
            <header class="opening__header">
                <h2 class="section-title section-title--light">При открытии <br>бизнеса</h2>
            </header>
            <div class="opening__content">
                <p class="work-part" data-entrance="from-left" data-entrance-delay="100"><span class="work-part__percent">80%</span> работы мы сделаем за&nbsp;Вас: <br>создадим Instagram магазин, поможем в&nbsp;его продвижении и&nbsp;направим поток&nbsp;клиентов.</p>
                <p class="work-part" data-entrance="from-right" data-entrance-delay="500"><span class="work-part__percent work-part__percent--crimson">20%</span> работы останется за Вами: <br>обрабатывать входящие заявки и&nbsp;получать доход.</p>
            </div>
            <div class="opening__button"><a class="button contact-button button--red" href="#">Узнать подробнее</a></div>
        </section>

        <!-- Economy -->
        <section class="economy">
            <p class="economy__text" data-entrance="from-top" data-entrance-delay="100"><span class="economy__value">до <strong>700&nbsp;000</strong> ₽</span> вы сможете заработать <br>за&nbsp;год, работая с нами</p>
            <div class="economy__button"><a class="button contact-button button--red" href="#">Начать зарабатывать</a></div>
        </section>

        <!-- Prices -->
        <section class="prices">
            <div class="prices__deco">
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--xl dot--pur dot--14"></div>
                    <div class="dot dot--l dot--org dot--15"></div>
                    <div class="dot dot--s dot--wht dot--106"></div>
                </div>
                <div class="deco-layer deco-layer--images">
                    <div class="deco deco--candy-2"></div>
                    <div class="deco deco--bean-8"></div>
                </div>
                <div class="deco-layer deco-layer--blobs">
                    <div class="blob blob--101"></div>
                </div>
            </div>
            <header class="prices__header">
                <h2 class="section-title section-title--light">Стоимость франшизы <span class="hidden creditgoods">Jelly Cat Франшиза</span></h2>
            </header>
            <p class="prices__count"><strong class="creditprice">65&nbsp;000</strong> ₽</p>
            <div class="prices__buttons">
                <a class="button button--260 gocredit" href="javascript:void(0);" data-entrance="from-left" data-entrance-delay="100">Купить в кредит</a>
                <a class="button button--260 contact-button" href="#" data-entrance="from-right" data-entrance-delay="500">Купить</a></div>
        </section>

        <!-- Remote -->
        <section class="remote">
            <div class="remote--deco">
                <div class="deco-layer deco-layer--dots">
                    <div class="dot dot--s dot--org dot--107"></div>
                    <div class="dot dot--l dot--red dot--108"></div>
                    <div class="dot dot--xl dot--pur dot--109"></div>
                </div>
            </div>
            <header class="remote__header">
                <h2 class="section-title">Удалённый контроль бизнеса</h2>
                <p class="section-subtitle section-subtitle--dark">Бизнес полностью автоматизирован, не&nbsp;требует от&nbsp;вас содержания офиса и&nbsp;штата. В&nbsp;среднем, по&nbsp;истечению двух месяцев с&nbsp;момента старта, наши партнёры делегируют управление бизнесом.</p>
            </header>
            <div class="remote__button"><a class="button contact-button button--red" href="#">Оставить заявку</a></div>
        </section>

        <!-- About -->
        <section class="about">
            <div class="about__deco">
                <div class="deco-layer deco-layer--about deco-layer--cats">
                    <div class="cat cat--slp-2" data-entrance="from-bottom" data-entrance-delay="10"></div>
                    <div class="cat cat--pur-2" data-entrance="from-bottom" data-entrance-delay="500"></div>
                </div>
            </div>
            <header class="about__header">
                <h2 class="section-title section-title--light">О нас пишут</h2>
            </header>
            <div class="about__quotes">
                <article class="quote" data-entrance="from-left" data-entrance-delay="100">
                    <p class="quote__text">Компании Jast Holding мало места на&nbsp;рынке России, и&nbsp;она выходит на&nbsp;страны СНГ</p>
                    <p class="quote__signature">Forbes</p>
                </article>
                <article class="quote" data-entrance="from-right" data-entrance-delay="500">
                    <p class="quote__text">Как бизнес-идеи калининградцев зарабатывают миллионы по&nbsp;всему миру</p>
                    <p class="quote__signature">Комсомольская правда</p>
                </article>
            </div>
            <div class="about__content">
                <article class="ref" data-entrance="from-bottom" data-entrance-delay="100">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/forbes.svg" alt="Forbes" height="30" />
                </article>
                <article class="ref" data-entrance="from-bottom" data-entrance-delay="300">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/beboss.png" alt="БиБосс" height="35" />
                </article>
                <article class="ref" data-entrance="from-bottom" data-entrance-delay="500">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/24-mir.svg" alt="24 мир" height="45" />
                </article>
                <article class="ref" data-entrance="from-bottom" data-entrance-delay="700">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/businessmens.svg" alt="Бизнесменс" height="20" />
                </article>
                <article class="ref ref--spc" data-entrance="from-bottom" data-entrance-delay="900">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/rbk.svg" alt="РБК" height="23" />
                </article>
                <article class="ref" data-entrance="from-bottom" data-entrance-delay="1100">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/top-franchise.png" alt="TopFranchise.ru" height="23" />
                </article>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__content">
            <div class="footer__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-pink.svg" alt="Логотип Jelly Cat" /></div>
            <p class="footer__contacts">
                ООО «ВИР ХОЛДИНГ» 
                <br>Россия, г. Калининград 
                <br>ул. Театральная, 35, офис&nbsp;616
            </p>
            <a class="footer__phone" href="tel:88002224608">8&nbsp;(800)&nbsp;222&nbsp;46&nbsp;08</a>
        </div>

        <div class="footer__google">
            <!-- Нажимая на кнопку «Отправить», вы даёте согласие на обработку персональных данных 
            <br>* - поля обязательные для заполнения
            <br> -->
            <br>Этот сайт защищён reCAPTCHA и&nbsp;Google. <a href="https://policies.google.com/privacy">Политика конфиденциальности</a> и&nbsp;<a href="https://policies.google.com/terms">условия использования</a> применяются.
        </div>

        <div class="footer__legals"><a class="footer__policy" href="#">Политика конфиденциальности</a>
            <p class="footer__copy">Jelly Cat © 2019</p>
        </div>
    </footer>

    <!-- Contact Popup -->
    <div class="contact-popup contact-popup--hidden contact-button">
        <button class="contact-popup__close"></button>
        <div class="contact-popup__cover"></div>
        <div class="contact-popup__form">
            <form class="form" action="<?php echo esc_url(home_url('/')); ?>order/" method="post">
                <h2 class="form__title">Оставьте заявку</h2>
                <div class="form__input-grp">
                    <input class="form__input" type="text" name="contact_name" placeholder="Имя" required="required" />
                </div>
                <div class="form__input-grp">
                    <input class="form__input" type="email" name="contact_email" placeholder="Email" required="required" />
                </div>
                <div class="form__input-grp">
                    <input class="form__input" type="tel" name="contact_phone" placeholder="Телефон" required="required" />
                </div>
                <input class="form__input" type="hidden" name="g-recaptcha-response" id="g-recaptcha-response" />
                <input class="form__submit" type="submit" value="Отправить" />
                <p class="form__text">Мы не передаем Вашу персональную информацию третьим лицам</p>
            </form>
        </div>
    </div>

    <!-- Policy Popup -->
    <div class="policy-popup policy-popup--hidden"><button class="policy-popup__close"></button>
        <div class="policy-popup__content">
            <h2>Политика конфиденциальности</h2>
            <p>Соблюдение Вашей конфиденциальности важно для нас. По этой причине, мы разработали Политику Конфиденциальности, которая описывает, как мы используем и храним Вашу информацию. Пожалуйста, ознакомьтесь с нашими правилами соблюдения конфиденциальности и сообщите нам, если у вас возникнут какие-либо вопросы.</p>
            <h3>Сбор и использование персональной информации</h3>
            <p>Под персональной информацией понимаются данные, которые могут быть использованы для идентификации определенного лица либо связи с ним.</p>
            <p>От вас может быть запрошено предоставление вашей персональной информации в любой момент, когда вы связываетесь с нами.</p>
            <p>Ниже приведены некоторые примеры типов персональной информации, которую мы можем собирать, и как мы можем использовать такую информацию.</p>
            <p>Какую персональную информацию мы собираем:</p>
            <ul>
                <li>Когда вы оставляете заявку на сайте, мы можем собирать различную информацию, включая ваши имя, номер телефона, адрес электронной почты и т.д.</li>
            </ul>
            <p>Как мы используем вашу персональную информацию:</p>
            <ul>
                <li>Собираемая нами персональная информация позволяет нам связываться с вами и сообщать об уникальных предложениях, акциях и других мероприятиях и ближайших событиях.</li>
                <li>Время от времени, мы можем использовать вашу персональную информацию для отправки важных уведомлений и сообщений.</li>
                <li>Мы также можем использовать персональную информацию для внутренних целей, таких как проведения аудита, анализа данных и различных исследований в целях улучшения услуг предоставляемых нами и предоставления Вам рекомендаций относительно наших услуг.</li>
                <li>Если вы принимаете участие в розыгрыше призов, конкурсе или сходном стимулирующем мероприятии, мы можем использовать предоставляемую вами информацию для управления такими программами.</li>
            </ul>
            <h3>Раскрытие информации третьим лицам</h3>
            <p>Мы не раскрываем полученную от Вас информацию третьим лицам.</p>
            <p>Исключения:</p>
            <ul>
                <li>В случае если необходимо — в соответствии с законом, судебным порядком, в судебном разбирательстве, и/или на основании публичных запросов или запросов от государственных органов на территории РФ — раскрыть вашу персональную информацию. Мы также можем раскрывать информацию о вас если мы определим, что такое раскрытие необходимо или уместно в целях безопасности, поддержания правопорядка, или иных общественно важных случаях.</li>
                <li>В случае реорганизации, слияния или продажи мы можем передать собираемую нами персональную информацию соответствующему третьему лицу – правопреемнику.</li>
            </ul>
            <h3>Защита персональной информации</h3>
            <p>Мы предпринимаем меры предосторожности — включая административные, технические и физические — для защиты вашей персональной информации от утраты, кражи, и недобросовестного использования, а также от несанкционированного доступа, раскрытия, изменения и уничтожения.</p>
            <h3>Соблюдение вашей конфиденциальности на уровне компании</h3>
            <p>Для того чтобы убедиться, что ваша персональная информация находится в безопасности, мы доводим нормы соблюдения конфиденциальности и безопасности до наших сотрудников, и строго следим за исполнением мер соблюдения конфиденциальности.</p>
        </div>
    </div>

    <?php wp_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/scripts.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/scroll-entrance.js"></script>
</body>

</html>
