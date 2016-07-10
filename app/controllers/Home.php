<?php

class Home extends Controller {
    public function index($name = []) {
        print_r($name);
    }
}