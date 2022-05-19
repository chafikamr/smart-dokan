<?php

namespace APP\LIB;
class template
{
    public static function getHeader()
    {
        echo 'template heaser';
    }
    public static function getView($view)
    {
        static::getHeader();
        echo $view;
        static::getFooter();
           
    }
    public static function getFooter()
    {
        echo  'template footer';
    }
}