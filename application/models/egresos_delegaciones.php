<?php if(! defined('BASEPATH')) exit('Generado aquí en el hackatón, no sean mala onda');

/**
* Egresos delegacionales
*
* @author elcoruco
*/
class Egresos_delegacionales extends CI_Model{
  public $db = "egresos_delegaciones";
  
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
