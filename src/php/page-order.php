<?php
    /*
        Template Name: Order Page
    */
    $c_name         = $_POST["contact_name"];
    $c_email        = $_POST["contact_email"];
    $c_phone        = $_POST["contact_phone"];
    // $to = 'lid@izi-way.ru';
    $to = 'mr.kurenkov@gmail.com';
    $subject = 'Заявка с сайта lensvens.ru';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $content = "Имя: " . htmlspecialchars($c_name) . "<br>Email: " . htmlspecialchars($c_email) . "<br>Телефон: " .htmlspecialchars($c_phone);
    
    // $success = wp_mail( $to, $subject, $content, $headers );
    $success = 1;
?>

<!DOCTYPE html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />

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
                    <p>C уважением, команда IZIway.</p>
                <div>

                <div class="feedback__button">
                    <a class="button" href="#" onclick="window.history.go(-1); return false;">Вернутьсяна главную</a>
                </div>
            </div>
            
        <?php } else {?>
            
            <div class="feedback__content">
                <h1 class="feedback__title">Ошибка отправки</h1>

                <div class="feedback__text">
                    <p>Здравствуйте, <?php echo htmlspecialchars($c_name); ?>!<br> Что-то пошло не так и ваша заявка не может быть отправлена.</p>
                    <p>Пожалуйста попробуйте позже или свяжитесь с нашими менеджерами по телефону <a class="feedback__phone" href="tel:88002224608">8&nbsp;(800)&nbsp;222&nbsp;46&nbsp;08</a>.</p>
                    <p>C уважением, команда IZIway.</p>
                <div>

                <div class="feedback__button">
                    <a class="button" href="" onclick="window.history.go(-1); return false;">Вернутьсяна главную</a>
                </div>
            </div>
        <?php } ?>
    </section>

    <?php
        wp_footer();
    ?>
</body>
</html>