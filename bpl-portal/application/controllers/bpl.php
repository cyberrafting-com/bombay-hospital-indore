<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpl extends CI_Controller {

	public  function __construct() {
  		parent::__construct();
        clear_cache();
	}

	public function index(){
       $this->load->view('bpl_portal');
    }

}    
