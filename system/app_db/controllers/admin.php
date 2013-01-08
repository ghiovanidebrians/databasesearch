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
        $cat     = isset($_POST['category'])?$_POST['category']:"";
        $desc    = isset($_POST['description'])?$_POST['description']:"";
        $id_del    = isset($_GET['del'])?$_GET['del']:NULL;
        if($cat != NULL)
        $this->admin_model->set_category($cat,$desc);
        if($id_del != NULL)
        $this->admin_model->del_category($id_del);
        $data['category']       = $this->admin_model->get_category();
        
        $this->load->view('admin/header');
        $this->load->view('admin/home', $data);
        $this->load->view('admin/footer');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/welcome.php */
