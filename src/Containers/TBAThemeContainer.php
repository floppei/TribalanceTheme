<?php

namespace TBATheme\Containers;

use Plenty\Plugin\Templates\Twig;

class TBAThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('TBATheme::content.TBATheme');
    }
}