<?php
require_once __DIR__.'/lib/vendor/autoload.php';
use \Symfony\Component\Translation\{Translator, Loader\PhpFileLoader};



$translator = new Translator('en');
$translator->addLoader('php', new PhpFileLoader());
$translator->addResource('php', __DIR__.'/translations/messages+intl-icu.en.php', 'en');

echo $translator->trans('say_hello', ['name' => 'Fabien']),  "\n";
echo $translator->trans('say_hello', ['name' => 'Symfony']), "\n";
