<?php
spl_autoload_register("loader");
function loader ($classname)
{
    $path="class/";
    $ext=".php";
    $fullpath=$path.$classname.$ext;
    require_once $fullpath;
}