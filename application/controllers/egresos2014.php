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
    $this->load->view("egresos_federacion_view");
  }

  public function ramos_json(){
    $ramos = $this->ramos->get();
    $this->output->set_content_type("application/json");
    $this->output->set_output(json_encode($ramos));
  }
}

/* End of egresos2014.php */
/* Location: ./application/controllers/egresos2014.php */
