<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventory extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inventory_model');
    }

    public function index()
    {
        $search = $this->input->get('search');
        if (!$search) {
            $data['produks'] = $this->Inventory_model->select();
        } else {
            $data['produks'] = $this->Inventory_model->search($search);
        }
        $data['search'] = $search;
        parent::view('inventory', $data);
    }

    public function create()
    {
        $data = [];
        parent::view('inventory_crud', $data);
    }

    public function insert()
    {
        $data = $this->input->post();
        $ret = $this->Inventory_model->add($data);
        $message = parent::create_response($ret);
        $this->session->set_flashdata('message', $message);
        redirect(site_url('/'));
    }

    public function edit($id)
    {
        $data['produk'] = $this->Inventory_model->select_where($id);
        parent::view('inventory_crud', $data);
    }

    public function update($id)
    {
        $data = $this->input->post();
        $data['id'] = $id;
        $ret = $this->Inventory_model->update($data);
        $message = parent::update_response($ret);
        $this->session->set_flashdata('message', $message);
        redirect(site_url('/'));
    }

    public function destroy($id)
    {
        $ret = $this->Inventory_model->destroy($id);
        $message = parent::destroy_response($ret);
        redirect(site_url('/'));

    }

}
