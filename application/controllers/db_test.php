<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DB_test extends CI_Controller {

  /*
  *
  */
  function __construct(){
    parent::__construct();
    this->load->library("");
  }

  public function index()
  {
    $this->load->view("test_view");
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */