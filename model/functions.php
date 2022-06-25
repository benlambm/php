<?php

function auto_load_emp($className)
{
    require $className.'.php';
}

spl_autoload_register('auto_load_emp');