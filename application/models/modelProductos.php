<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class modelProductos extends CI_Model {
    public function __construct()
    {
         $this->load->database();
    } 
    public function getAll()
    {
        $query = $this->db->query('Select * from INARTECT_.productos');
        return $query->result();
    }
    public function saveProducto($codigo,$nombre,$proveedor,$valor,$existencia){
        try {
            $query = $this->db->query("INSERT INTO PRODUCTOS (CODIGO,NOMBRE,PROVEEDOR,VALOR,EXISTENCIA) VALUES ('".$codigo."','".$nombre."',".$proveedor.",".$valor.",".$existencia.")");

        } catch (\Throwable $th) {
            echo $th;
        }
     
        return true;
    }
}

?>