<!-- header内で繰り返し表示するナビのアイテム配列 -->

<?php include('classes/nav__item.php');

$nav__items = [
    $about =  new NavItem("#about", "サイトについて"),
    $info = new NavItem("#info", "活動記録"),
    $extra = new NavItem("#extra", "おまけ")
];

?>