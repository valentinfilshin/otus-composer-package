# Тестовый пакет

Описание тестового пакета

## Требования

- PHP 7.0

## Установка

composer require valentin-filshin/otus-composer-package

## Использование

<?php

use ValentinFilshin\OtusComposerPackage\StringProcessor;

require_once __DIR__ . '/vendor/autoload.php';

$stringProcessor = new StringProcessor();
echo $stringProcessor->getLength('Hello world');
