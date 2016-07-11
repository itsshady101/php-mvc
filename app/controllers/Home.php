<?php

class Home extends Controller {
	
    public function index($name = []) {
        $user = $this->model('User');
        $user->name = $name[0];
        
        $this->view('home/index', ['name' => $user->nameṬ]);
    }

    // Not to be used in realworld
    // In real world creating is done by Post Request not Get =D
    public function create($details = []) {
    	User::create([
    		'username' => $details[0],
    		'email' => $details[1]
    	]);
    }
}