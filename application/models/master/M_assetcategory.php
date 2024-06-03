<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_assetcategory extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        
    }

    private $_table = "msassetcategory";
    public $category_id;
    public $category_name;
    public $group_id;
    public $group_name;
    public $depre;
    public $createuser;
    public $createdate;

    public function rules()
    {
        return [
            ['field' => 'categoryid',
            'label' => 'Category ID',
            'rules' => 'required'],

            ['field' => 'categoryname',
            'label' => 'Category Name',
            'rules' => 'required'],
            
            ['field' => 'groupid',
            'label' => 'Group ID',
            'rules' => 'required'],

            ['field' => 'groupname',
            'label' => 'Group Name',
            'rules' => 'required'],

            ['field' => 'depre',
            'label' => 'Deprecitation',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["Category_ID" => $id])->row();
    }

    public function save()
    {
        $user = get_cookie('AmsUserName');
        $post = $this->input->post();
        $this->category_id = $post["categoryid"];
        $this->category_name = $post["categoryname"];
        $this->group_id = $post["groupid"];
        $this->group_name = $post["groupname"];
        $this->depre = $post["depre"];
        $this->createuser = $user;
        $this->createdate = date('Y.m.d');
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->category_name = $post["categoryname"];
        $this->group_id = $post["groupid"];
        $this->group_name = $post["groupname"];
        $this->depre = $post["depre"];
        return $this->db->update($this->_table, $this, array('Category_ID' => $post['categoryid']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("Category_ID" => $id));
    }
}	


?>