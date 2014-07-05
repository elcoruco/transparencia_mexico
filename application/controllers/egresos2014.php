<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Egresos2014 extends CI_Controller {

  /*
  *
  */
  function __construct(){
    parent::__construct();
    $this->load->model("ramos_model", "ramos");
  }

  public function index()
  {
    
  }
}

/* End of egresos2014.php */
/* Location: ./application/controllers/egresos2014.php */
