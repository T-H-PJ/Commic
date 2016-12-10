<?php

/*vào controller này trc khi vào chương trình*/

class Migrate extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->load->library('migration');

        if($this->migration->current() === FALSE){
            show_error($this->migration->error_string());
        }
    }
}