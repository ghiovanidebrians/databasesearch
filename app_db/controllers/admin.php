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
        $id_del         = isset($_GET['del'])?$_GET['del']:NULL;
        
        if($gallery != NULL)
        $this->admin_model->set_gellery($gallery);
        if($id_del != NULL)
        $this->admin_model->del_gellery($id_del);
        
        $data['gallery']       = $this->admin_model->get_gellery();
        
        $this->load->view('admin/header');
        $this->load->view('admin/gallery', $data);
        $this->load->view('admin/footer');
    }
    
    public function insert()
    {
        $this->load->model('admin_model');
        if(isset($_POST['species']))
        {
            $data = array(
                'species' => isset($_POST['species'])?$_POST['species']:"" ,
                'author' => isset($_POST['author'])?$_POST['author']:"" ,
                'source' => isset($_POST['source'])?$_POST['source']:"",
                'description' => isset($_POST['description'])?$_POST['description']:"",
                'collector' => isset($_POST['collector'])?$_POST['collector']:"",
                'habitat' => isset($_POST['habitat'])?$_POST['habitat']:"",
                'image' => isset($_POST['gellery'])?$_POST['gellery']:"",
                'category' => isset($_POST['category'])?$_POST['category']:"",
            );
            $this->admin_model->insert_item_data($data);
        }
        
        $data['gellery']       = $this->admin_model->get_gellery();
        $data['category']       = $this->admin_model->get_category();
        
        $this->load->view('admin/header');
        $this->load->view('admin/insert', $data);
        $this->load->view('admin/footer');
    }
    
    public function konfigupload()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/upload',array('error' => ''));
        $this->load->view('admin/footer');
    }
    
    public function unzip()
    {
        $this->load->model('admin_model');
        $name_gallery               = $_POST['gallery_name'];
        $config['upload_path']      = './assets/uploads/';
	$config['allowed_types']    = 'zip';
	$config['max_size']	    = '10000000000000000';
	$this->load->library('upload', $config);
	if ( ! $this->upload->do_upload('zipimage'))
	{
		$error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/header');
                $this->load->view('admin/upload', $error);
                $this->load->view('admin/footer');
	}
	else
	{
                $arr_file              = array();
                //insert to Db
                $this->admin_model->set_gallery($name_gallery);
                
		$data = array('zipimage' => $this->upload->data());
		$zip = new ZipArchive;
		$file = $data['zipimage']['full_path'];
		chmod($file,0777);
                
                //create directory
                mkdir('./assets/uploads/'.$name_gallery.'/', 0777, true);
		
                if ($zip->open($file) === TRUE) {
    			$zip->extractTo('./assets/uploads/'.$name_gallery.'/');
                	$zip->close();
                        chmod($file,0777);
                        
                        //get file in directory        
                        $In_dir                = glob('./assets/uploads/'.$name_gallery.'/*');
    			foreach($In_dir as $in)
                        {
                            array_push($arr_file,$in);
                        }
                        $data['file']          = $arr_file;
                        //end
                        $data['gal']       = $name_gallery;
                        
                        $data['error']         = "Data berhasil di Upload";
		} else {
    			$data['error']         = "Data gagal di Upload";
		}
                $this->load->view('admin/header');
                $this->load->view('admin/upload', $data);
                $this->load->view('admin/footer');

	}
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/welcome.php */
