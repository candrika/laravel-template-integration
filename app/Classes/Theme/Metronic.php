<?php

namespace App\Classes\Theme;

class Metronic
{
    public static $attrs;
    public static $classes;

    public static function addAttr($scope, $name, $value)
    {
        self::$attrs[$scope][$name] = $value;
    }

    public static function addClass($scope, $class)
    {
        self::$classes[$scope][] = $class;
    }

    public static function printAttrs($scope)
    {
        $attrs = [];

        if (isset(self::$attrs[$scope]) && !empty(self::$attrs[$scope])) {
            foreach (self::$attrs[$scope] as $name => $value) {
                # code...
                $attrs[] = $name . '="' . $value . '"';
            }
        }

        echo '';
    }

    public static function printClasses($scope, $full=true)
    {
        if ($scope == 'body') {
            self::$classes[$scope][] = 'page-loading';
        }

        if (isset(self::$classes[$scope]) && !empty(self::$classes[$scope])) {
            $classes = implode(' ', self::$classes[$scope]);

            if ($full) {
                echo 'class="'. $classes .'"';
            } else {
                echo ' ' . $classes . ' ';
            }
        } else {
            echo '';
        }
    }

    /**
     * Print Google fonts
     */
    public static function getGoogleFontsInclude()
    {
        if (config('layout.resources.font.google.families')) {
            $fonts = config('layout.resources.font.google.families');
            echo '<link rel="stylesheet" href="https://font.googleapis.com/css?family=' . impolde('|', $fonts) . '">';
        }

        echo '';
    }

    /**
     * walk recursive array with callback
     * @param array $array
     * @param callable $callback
     * @return array  
     */
    public static function arrayWalkCallback(array &$array, callable $callback)
    {
        foreach ($array as $k => &$v) {
            if (is_array($v)) {
                $callback($k, $v, $array);
                self::arrayWalkCallback($v, $callback);
            }
        }

        return $array;
    }

    /**
     * convert css file path to RTL file
     */
    public static function rtlCssPath($css_path)
    {
        $css_path = substr_replace($css_path, '.rtl.css', -4);

        return $css_path;
    }

    /**
     * Initialize theme CSS files
     */
    public static function initThemes()
    {

        $themes = [];

        $themes[] = 'css/themes/layout/header/base/' . config('layout.header.selft.theme') . '.css';
        $themes[] = 'css/themes/layout/header/menu/' . config('layout.header.menu.destop.submenu.theme') . '.css';
        $themes[] = 'css/themes/layout/aside/' . config('layout.aside.selft.theme') . '.css';

        if (config('layout.aside.self.display')) {
            $themes[] = 'css/themes/layout/brand/' . config('layout.brand.self.theme') . '.css';
        } else {
            $themes[] = 'css/themes/layout/brand/' . config('layout.brand.self.theme') . '.css';
        }

        return $themes;
    }

    /**
     * Get SVG content
     * @param string $filepath
     * @param string $class
     * 
     * @return string|string[]|null
     */
    public static function getSvg($filepath, $class=null){
        if(!is_string($filepath) || !file_exists($filepath)){
            return '';
        }

        $svg_content =file_get_contents($filepath);

        $dom = new \DOMDocument();
        $dom->loadXML($svg_content);

        $xpath = new \DOMXPath($dom);
        foreach ($xpath->query('//comment') as $comment) {
            # code...
            $comment->parentNode->removeChild($comment);
        }

        $title = $dom->getElementsByTagName('title');
        if($title['length']){
            $dom->documentElement->removeChild($title[0]);
        }

        $desc = $dom->getElementsByTagName('desc');
        if($desc['length']){
            $dom->documentElement->removeChild($desc[0]);
        }

        $defs =$dom->getElementsByTagName('defs');
        if($defs['length']){
            $dom->documentElement->removeChild($defs[0]);
        }

        $g = $dom->getElementsByTagName('g');
        foreach($g as $el){
            $el->removeAttribute('id');
        }

        $mask = $dom->getElementsByTagName('mask');
        foreach($mask as $el){
            $el->removeAttribute('id');
        }

        $rect = $dom->getElementsByTagName('rect');
        foreach($rect as $el){
            $el->removeAttribute('id');
        }

        $mask = $dom->getElementsByTagName('mask');
        foreach($mask as $el){
            $el->removeAttribute('id');
        }

        $path = $dom->getElementsByTagName('path');
        foreach($path as $el){
            $el->removeAttribute('id');
        }

        $circle = $dom->getElementsByTagName('circle');
        foreach($circle as $el){
            $el->removeAttribute('id');
        }

        $use = $dom->getElementsByTagName('use');
        foreach($use as $el){
            $el->removeAttribute('id');
        }

        $polygon = $dom->getElementsByTagName('polygon');
        foreach($polygon as $el){
            $el->removeAttribute('id');
        }

        $ellipse = $dom->getElementsByTagName('ellipse');
        foreach($ellipse as $el){
            $el->removeAttribute('id');
        }

        $string = $dom->saveXML($dom->documentElement);

        // remove empty lines
        $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/","\n",$string);

        $cls = array('svg-icon');
        if(!empty($class)){
            $cls =array_merge($cls,explode(' ',$class));
        }
        // dd($cls);
        // var_dump($cls);
        // die;
        // foreach ($cls as $c) {
        //     # code...
        // }
        echo '<span class="'.implode(' ',$cls).'"><!--begin::Svg Icon | path:'.$filepath.'-->'.$string.'<!--end::Svg Icon--></span>';
    }

    /**
     * Check if $path provided is SVG
     */
    public static function isSVG($path){
        if(is_string($path)){
            return substr(strchr($path,'.'), 1)=== 'svg';
        }

        return false;
    }
}
