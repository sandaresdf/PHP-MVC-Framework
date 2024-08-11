<?php

    class Home extends Controller {

        public function __construct() {

        }

        public function index() {

            $data = [
                'title' => 'PHP MVC Framework',
            ];
            
            $this->view('home/index', $data);
        }

        public function about() {

            $data = [
                'title' => 'About Us'
            ];

            $this->view('home/about', $data);
        }
    }