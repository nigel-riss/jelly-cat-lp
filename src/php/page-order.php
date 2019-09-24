<?php
    /*
        Template Name: Order Page
    */
    $SITE_KEY = "6LdCXLkUAAAAAHeruL3pKhlpsPkQ9_FRr64PKI9t";
    $SECRET_KEY = "6LdCXLkUAAAAAKQUierw8GRZXo4mbxC3YyMGlxv2";

    // Getting POST data
    $c_name         = $_POST["contact_name"];
    $c_email        = $_POST["contact_email"];
    $c_phone        = $_POST["contact_phone"];
    $g_recaptcha    = $_POST["g-recaptcha-response"];
    // Checking if not a robot
    function getCaptcha($secretToken) {
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . "6LdCXLkUAAAAAKQUierw8GRZXo4mbxC3YyMGlxv2" . "&response=" . $secretToken);
        $return = json_decode($response);
        // print_r($return);
        return ($return->success == true && $return->score > 0.5);
    }

    if (getCaptcha($g_recaptcha)) {
        $to = 'lid@jellycat.store';
        // $to = 'mr.kurenkov@gmail.com';
        
        $subject = 'Заявка с сайта jellycat.online';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $content = "Имя: " . htmlspecialchars($c_name) . "<br>Email: " . htmlspecialchars($c_email) . "<br>Телефон: " .htmlspecialchars($c_phone);
        
        $success = wp_mail( $to, $subject, $content, $headers );
        // $success = 1;
    }
?>

<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

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

    <?php wp_head(); ?>
</head>

<body>
    <section class="feedback">
        <?php if ($success == 1) { ?>
            <div class="feedback__content">
                <h1 class="feedback__title">Заявка отправлена</h1>

                <div class="feedback__text">
                    <p>Здравствуйте, <?php echo htmlspecialchars($c_name); ?>!<br> Ваша заявка успешно отправлена.</p>
                    <p>Благодарим Вас за интерес к франшизе. Наши менеджеры в скором времени отправят на Ваш почтовый адрес подробную презентацию и чуть позже свяжутся с Вами.</p>
                    <p>C уважением, команда Jelly Cat.</p>
                <div>

                <div class="feedback__button">
                    <a class="button" href="#" onclick="window.history.go(-1); return false;">Вернуться на сайт</a>
                </div>
            </div>

            <script>
                yaCounter55447654.reachGoal('zayavka');
                ga('send', 'event', 'form', 'submit', 'zayavka');
            </script>
            
        <?php } else {?>
            
            <div class="feedback__content">
                <h1 class="feedback__title">Ошибка отправки</h1>

                <div class="feedback__text">
                    <p>Здравствуйте, <?php echo htmlspecialchars($c_name); ?>!<br> Что-то пошло не так и ваша заявка не может быть отправлена.</p>
                    <p>Пожалуйста попробуйте позже или свяжитесь с нашими менеджерами по телефону <a class="feedback__phone" href="tel:88002224608">8&nbsp;(800)&nbsp;222&nbsp;46&nbsp;08</a>.</p>
                    <p>C уважением, команда Jelly Cat.</p>
                <div>

                <div class="feedback__button">
                    <a class="button" href="" onclick="window.history.go(-1); return false;">Вернуться на сайт</a>
                </div>
            </div>
        <?php } ?>
    </section>

    <?php
        wp_footer();
    ?>
</body>
</html>
