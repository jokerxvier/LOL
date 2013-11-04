<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions {
   	public function get_header($pagename=""){
		include('header.php');
		if ($pagename){
			return $pagename;
			}
	}
	
	public function get_footer($file='footer.php'){
		include($file);
	}
	
	public function get_sidebar($file=''){
		if(!$file){
			include('sidebar.php');
			}
		else{
			$sidebar_comp = 'sidebar-'.$file.'.php';
			include($sidebar_comp);
			}
	}
	
	public function get_page_name(){
		$currentFile = $_SERVER["SCRIPT_NAME"];
		$parts = Explode('/', $currentFile);
		$currentFile = $parts[count($parts) - 1];
		$parts = Explode('.', $currentFile);
		$page_name = $parts[0];
		if (preg_match('/-/',$page_name)){
			$page_name = substr($page_name,(strpos($page_name,'-')+1));
			return $page_name;
			}
			else{
				return $page_name;
				}
	}
	
	public function is_home(){
		$page = $this->get_page_name();
		if ($page == 'index'){
			return true;
			}
		else{
			return false;
			}
	}
	
	public function _e($string){
		echo $string;
	}

	public function set_state($param){
		$page = $this->get_page_name();
		if($page == $param){
			echo 'class="active"';
			}
	}
	
	public function check_url(){
		$page = $this->get_page_name();
		echo $page;
	}
	
}

/* End of file Functions.php */
