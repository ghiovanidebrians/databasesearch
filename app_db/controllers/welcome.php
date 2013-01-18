<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  main class for application  */
/*  author  : ahmad luky ramdani */

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
    }
    public function index($key=NULL)
    {
        //$this->load->model('gen');   
        //$this->gen->gen_data_exp();
        
        $this->load->model('welcome_model');
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
    
    public function category($cat=NULL)
    {
        $this->load->model('welcome_model');
        $this->load->helper('text');
        
        $data['key']         = isset($_GET['search'])?$keysearch=$_GET['search']:"";
        $data['category']    = $cat;
        $data['species']     = $this->welcome_model->get_data_all();
        $this->load->view('header');
        $this->load->view('category', $data);
        $this->load->view('footer');
    }
    
    public function images($category, $gallery)
    {                                 
        $this->load->model('welcome_model');
        $data['species']   = $this->welcome_model->get_data_spesies($category,$gallery);
        $this->load->view('header');
        $this->load->view('image_collection', $data);
        $this->load->view('footer');
    }
    
    public function search($category=NULL)
    {
        $data['key']       = $keysearch         = $_GET['keycode']; #get key
        $data['category']  = $category;
        
        $this->load->model('welcome_model');
        $this->load->helper('text');
        $data['species']   = $this->welcome_model->get_data_all_search($keysearch,$category);
        $this->load->view('header');
        $this->load->view('category', $data);
        $this->load->view('footer');
    }
    
    public function about()
    {
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
