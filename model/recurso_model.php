<?php
class recurso_model{
    private $db;
    private $recurso;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->recurso=array();
    }
    public function get_recurso(){
        $consulta=$this->db->query("select recdescripcion from recursos;");
        while($filas=$consulta->fetch_assoc()){
            $this->recurso[]=$filas;
        }
        return $this->recurso;
    }
}
?>

