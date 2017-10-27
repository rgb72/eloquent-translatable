<?php

namespace Rgb72\Translatable;

class Singleton {

    protected static $instance;

    private $locale;

    protected function __construct() {
        static::$instance = $this;
    }

    public static function getInstance() {
        if(is_null(static::$instance)) new static;
        return static::$instance;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
        return $this;
    }

    public function getLocale() {
        return $this->locale;
    }

}