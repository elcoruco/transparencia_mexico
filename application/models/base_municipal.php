<?php if(! defined('BASEPATH')) exit('Generado aquí en el hackatón, no sean mala onda');

/**
* Postcodes_model
*
* @author elcoruco
*/
class Base_municipal extends CI_Model{
  public $db = "base_municipal_idh";
  
  public function __construct()
  {
    parent::__construct();
  }

  /*
  * return all
  *
  * @access public
  * @return object
  */
  public function get(){
    $query = $this->db->get($this->$db);
    return $query->result_array();
  }

}
