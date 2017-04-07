<?php

namespace TribalanceTheme\Theme\Theme\Containers;

use Plenty\Plugin\Templates\Twig;

class TribalanceThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('TribalanceTheme::content.TribalanceTheme');
    }
}