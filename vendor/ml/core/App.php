<?php


namespace ml\core;


class App
{
    public static $app;

    public function __construct()
    {
        session_start();
    }
}