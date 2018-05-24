<?php
namespace Daw\models\classes;
use Daw\models\classes\Db;

 
class Table extends Db
{

  private $db;
  private $conector;
  private $consulta;
  function __construct()
  {
    $this->db=new Db();
    $this->db->conectar();
    $this->conector=$this->db->getConector();
  }
  public function findAll($tabla)
  {
    $this->consulta="SELECT * FROM $tabla";
    $resultado=$this->conector->query( $this->consulta);
    return $resultado;
  }

  public function find($query)
  {
    $this->consulta=$query;
    $resultado=$this->conector->query($this->consulta);
    return $resultado;
  }

  public function insert($query)
  {
    $this->consulta=$query;
    $resultado=$this->conector->query($this->consulta);
    return $resultado;
  }

  public function update($query)
  {
    $this->consulta=$query;
    $resultado=$this->conector->query($this->consulta);
    return $resultado;
  }

  public function delete($query)
  {
    $this->consulta=$query;
    $resultado=$this->conector->query($this->consulta);
    return $resultado;
  }
}
 ?>
