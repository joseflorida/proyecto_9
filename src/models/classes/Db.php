<?php
namespace Daw\models\classes;
use Daw\config\Config;
use Mysqli;

class Db
{
  private $server;
  private $user;
  private $pass;
  private $db;
  //Propiedad conector
 private $conector;
 private $config;
  function __construct()
  {
    $config=new Config("localhost","root","","juegos");
    $this->server=$config->getHost();
    $this->user=$config->getUser();
    $this->pass=$config->getPass();
    $this->db=$config->getDb();
  }
  function conectar()
  {
    $conectorTmp = new Mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conectorTmp->connect_errno)
    {
      $this->conector=false;
    }
    else
    {
      $this->conector=$conectorTmp;
    }
  }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }

    public function getDb()
    {
        return $this->db;
    }

    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }

    public function getConector()
    {
        return $this->conector;
    }

    public function setConector($conector)
    {
        $this->conector = $conector;
        return $this;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig($config)
    {
        $this->config = $config;
        return $this;
    }
}
 ?>
