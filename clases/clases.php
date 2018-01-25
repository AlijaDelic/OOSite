<?php
function classLoader($c)
{
    require_once "clases/{$c}.php";
}

spl_autoload_register('classLoader');
