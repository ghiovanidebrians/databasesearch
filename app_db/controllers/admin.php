<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  admin class for application  */
/*  author  : ahmad luky ramdani */

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('admin_model');
        $cat        = isset($_POST['category'])?$_POST['category']:"";
        $desc       = isset($_POST['description'])?$_POST['description']:"";
        $id_del     = isset($_GET['del'])?$_GET['del']:NULL;
        
        if($cat != NULL)
        $this->admin_model->set_category($cat,$desc);
        if($id_del != NULL)
        $this->admin_model->del_category($id_del);
        
        $data['category']       = $this->admin_model->get_category();
        
        $this->load->view('admin/header');
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer');
    }
    
    public function konfigallery()
    {
        $this->load->model('admin_model');
        $gallery        = isset($_POST['gallery'])?$_POST['gallery']:"";
        $id_del     = isset($_GET['del'])?$_GET['del']:NULL;
        
        if($gallery != NULL)
        $this->admin_model->set_gellery($gallery);
        if($id_del != NULL)
        $this->admin_model->del_gellery($id_del);
        
        $data['gallery']       = $this->admin_model->get_gellery();
        
        $this->load->view('admin/header');
        $this->load->view('admin/gallery', $data);
        $this->load->view('admin/footer');
    }
    
    public function konfig()
    {
        $this->load->model('admin_model');
        
        $data['category']       = $this->admin_model->get_category();
        
        $this->load->view('admin/header');
        $this->load->view('admin/konfig', $data);
        $this->load->view('admin/footer');
    }
    
    public function konfigupload()
    {
    
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/welcome.php */
