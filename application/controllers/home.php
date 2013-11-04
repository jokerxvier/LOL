<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()	
	{		
			
		$data['pagename'] = 'Home';
		$this->load->helper('form');		
		$this->load->helper('url');
		$this->load->library('functions');
		$this->load->library('template');
		
		
		$this->template->add_css('library/js/combox/jquery.selectBox.css');
		$this->template->add_css('library/css/screen.css');			
		$this->template->write_view('header','header',$data,TRUE);
		$this->template->write_view('content','home');
		$this->template->write_view('footer','footer');
		
		$this->template->render();		
	}			
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */