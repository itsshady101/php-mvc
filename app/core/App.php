<?php

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();
        print_r($url);
    }

    /**
     * @return array|bool
     * Explode and sanitize the $_GET[url]
     */
    public function parseUrl() {
        if(isset($_GET['url'])) {
            return $url = explode( '/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return false;
    }
}