<?php 

class Pages extends Controllers{
    public function __construct(){
        
    }

    public function index(){

        $data = [
            'title' => 'LiteMVC'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'LiteMVC'
        ];

        $this->view('pages/about', $data);
    }
}