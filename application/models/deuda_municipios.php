<?php if(! defined('BASEPATH')) exit('Generado aquí en el hackatón, no sean mala onda');

/**
* Postcodes_model
*
* @author elcoruco
*/
class Deuda_municipios extends CI_Model{
  public $db = "deuda_por_municipio";
  
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
