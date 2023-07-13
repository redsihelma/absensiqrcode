<?php if( ! defined('BASEPATH'))
exit('No direct script access allowed');

class Download extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //load system
        $this->load->helper('download');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('GenBar');
    }
    function download($filename = NULL) {
        // load download helder
        $this->load->helper('download');
        // read file contents
        $data = file_get_contents(base_url('/uploads/qr_image/'.$filename));
        force_download($filename, $data);
    }
}
?>