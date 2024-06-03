<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssetCategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("master/M_assetcategory");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["assetcategory"] = $this->M_assetcategory->getAll();
        $this->load->view("master/asset_category/v_list_category", $data);
    }

    public function add()
    {
        $assetcategory = $this->M_assetcategory;
        $validation = $this->form_validation;
        $validation->set_rules($assetcategory->rules());

        if ($validation->run()) {
            $assetcategory->save();
            //$this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("master/asset_category/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('master/assetcategory');
       
        $assetcategory = $this->M_assetcategory;
        $validation = $this->form_validation;
        $validation->set_rules($assetcategory->rules());

        if ($validation->run()) {
            $assetcategory->update();
            //$this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["assetcategory"] = $assetcategory->getById($id);
        if (!$data["assetcategory"]) show_404();
        
        $this->load->view("master/asset_category/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_assetcategory->delete($id)) {
            redirect(site_url('master/assetcategory'));
        }
    }
}

?>