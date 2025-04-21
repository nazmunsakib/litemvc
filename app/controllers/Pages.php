<?php 

class Pages extends Controllers{
    public function __construct(){
       
    }

    public function index(){
        $data = [
            'title' => 'Welcome! to Home.'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'Welcome! to About.'
        ];

        $this->view('pages/about', $data);
    }
}