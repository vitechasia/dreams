<?php

namespace Vdes\Dreams;

class Dream {
    public static function css()
    {
        $renderCss = '<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">';
        return $renderCss;
    }

    public static function csslogin()
    {
        $renderCss = '<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">';
        return $renderCss;
    }

    public static function js()
    {
        $renderJs = '<script src="/assets/js/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/feather.min.js"></script>
        <script src="/assets/js/jquery.slimscroll.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>';
        return $renderJs;
    }

    public static function jslogin()
    {
        $renderJs = '<script src="/assets/js/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/feather.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/script.js"></script>';
        return $renderJs;
    }

}