<?php include('nav__items.php'); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P5M3CKF');</script>
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="2020年9月から2021年5月まで、奈良県の西吉野柿選果場でアルバイトをしていた時の活動記録です。">
    <title>柿とぬくもりの里 西吉野 (2020-2021)</title>
    <link rel="icon" type="image/png" sizes="512x512" href="favicon.png">
    <!-- jQuery読み込み -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Swiper読み込み -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.0-alpha.31/swiper-bundle.min.js" integrity="sha512-Q+8OUI8Z5gjDXj73qEXD1tmp3Peyvvby30K9oYlhmZe3EXE21XvMUOlnxA+CHXEfcKY0NL4MMghTzbkeFBW8SQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.0-alpha.31/swiper-bundle.css" integrity="sha512-1lfjash6aoyEojts4qbfr/dCBluaWHP052n0vaMRKMzYs3lQ4WwhKNblQZ7g5GHuAsISsOSqCO8iE2QCQVXSsQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- fontAwesome読み込み -->
    <script src="https://kit.fontawesome.com/97459cb0a2.js" crossorigin="anonymous"></script>

    <!-- CSS読み込み -->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.min.css">

    <!-- AOS読み込み -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5M3CKF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- header -->
    <header class="header">
        <div class="inner header__inner">
            <div class="header__container">
                <div class="header-title">
                    <a href="index.php">柿とぬくもりの里 西吉野 <span class="header__date">(2020- 2021)</span></a>
                </div>
                <nav class="nav header__nav">
                    <ul class="nav__menu">
                        <?php foreach ($nav__items as $nav__item) : ?>
                            <li class="nav-menu__item"><a href="<?php echo $nav__item->getUrlName(); ?>"><?php echo $nav__item->getNavTitle(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- header -->