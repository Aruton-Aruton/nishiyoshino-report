<!-- header内での繰り返しに使うクラスの処理 -->

<?php

class NavItem
{
    private $url__name;
    private $nav__title;

    public function __construct($url__name, $nav__title)
    {
        $this->nav__title = $nav__title;
        $this->url__name = $url__name;
    }

    public function getNavTitle()
    {
        return $this->nav__title;
    }

    public function getUrlName()
    {
        if (strstr($_SERVER['REQUEST_URI'], 'index')) {
            echo $this->url__name;
        } else {
            echo 'index.php' . $this->url__name;
        }
    }
}

?>