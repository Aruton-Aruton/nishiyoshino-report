<!-- footer -->
<footer class="footer">
    <div class="inner footer__inner">
        <div class="footer__container">
            <div class="footer-img">
                <img src="./image/カッキー.png" alt="西吉野のキャラクター『カッキー』の画像です">
            </div>
            <div class="nav footer__nav">
            <ul class="nav__menu">
                        <?php foreach ($nav__items as $nav__item) : ?>
                            <li class="nav-menu__item"><a href="<?php echo $nav__item->getUrlName(); ?>"><?php echo $nav__item->getNavTitle(); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>
        <div class="footer-copyright">
            Copyright &copy;柿とぬくもりの里 西吉野 (2020- 2021) <span class="footer__enter">All Rights Reserved.</span>
        </div>
        <div class="toTop" id="top-btn">
            <i class="fas fa-chevron-up toTop-angle"></i>
            <p class="toTop-text">トップへ<br>戻る</p>
        </div>
    </div>
</footer>
<!-- footer -->
<script src="./js/main.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>