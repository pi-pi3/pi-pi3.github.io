<?php
    $page = array();

    $page['subtitle'] = 'Bringing yellow stars and games together since 1998...';
    $page['name'] = '';

    $locale = array();
    $page['lang'] = $lang;
    if ($lang == 'en') {
        $page['nlang'] = 'de';

        $locale['home'] = 'home';
        $locale['games'] = 'Games';
        $locale['other'] = 'other';
        $locale['cv'] = 'Curriculum Vitae';
        $locale['about'] = 'About';
        $locale['contact'] = 'Contact';
    } else {
        $page['nlang'] = 'en';

        $locale['home'] = 'home';
        $locale['games'] = 'Spiele';
        $locale['other'] = 'Anderes';
        $locale['cv'] = 'Curriculum Vitae';
        $locale['about'] = 'Über mich';
        $locale['contact'] = 'Kontakt';
    }

    $template = array();
    $template['header'] = __DIR__ . '/header.php';
    $template['footer'] = __DIR__ . '/footer.php';
?>
