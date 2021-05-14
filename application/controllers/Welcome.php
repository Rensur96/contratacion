<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
		Variables de session 
		$sess_data['login'] = TRUE;
        $sess_data['companyNit'] = $rows->NIT_COMPANY;
		$sess_data['companyName'] = $rows->COMPANY_NAME;
		
		$this->session->userdata('login')
		$this->session->userdata('companyName')
		$this->session->userdata('companyNit')
	*/
class Welcome extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('modelProductos');
    }
    public function index()
    {
        $productos = $this->modelProductos->getAll();
        $data['productos'] = $productos;
        $this->load->view('layout/header');
        $this->load->view('productos/index', $data);
        $this->load->view('layout/footer');
        $this->load->view('layout/modalcanjear');
    }
    public function save(){
        $codigo = $this->input->post('codigo');
        $nombre = $this->input->post('nombre');
        $proveedor = $this->input->post('proveedor');
		$valor = $this->input->post('valor');
        $existencia = $this->input->post('existencia');
        $this->modelProductos->saveProducto($codigo,$nombre,$proveedor,$valor,$existencia);
        header('location: '.base_url());
    }
    public function edit()
    {
        $id = $this->input->get('id');
        $result = $this->modelPremios->getById($id);
        $data['id'] = $result[0]->REWARD_ID;
        $data['points_required'] = $result[0]->POINTS_REQUIRED;
        $data['reward_name'] = $result[0]->REWARD_NAME;
        $data['date_published'] = $result[0]->DATE_PUBLISHED;
        $data['reward_description'] = $result[0]->REWARD_DESCRIPTION;
        $this->load->view('layout/header');
        $this->load->view('layout/aside');
        $this->load->view('premios/edit',$data);
        $this->load->view('layout/footer');
        $this->load->view('layout/modalcanjear');
    }
    public function update()
    {
        $tittle = $this->input->post('tittle');
        $description = $this->input->post('description');
        $points = $this->input->post('points');
        $id = $this->input->post('id');
        
        $this->modelPremios->updateReward($id,$tittle,$description,$points);
        header('location: '.base_url().'premios');
    }
}

?>