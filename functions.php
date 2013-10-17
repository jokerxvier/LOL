<?php
function get_header($pagename=""){
	include('header.php');
	if ($pagename){
		return $pagename;
		}
	}
function get_footer($file='footer.php'){
	include($file);
	}
function get_sidebar($file=''){
	if(!$file){
		include('sidebar.php');
		}
	else{
		$sidebar_comp = 'sidebar-'.$file.'.php';
		include($sidebar_comp);
		}
	}
function get_page_name(){
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
function is_home(){
	$page = get_page_name();
	if ($page == 'index'){
		return true;
		}
	else{
		return false;
		}
	}
function _e($string){
	echo $string;
	}
function set_state($param){
	$page = get_page_name();
	if($page == $param){
		echo 'class="active"';
		}
	}
function check_url(){
	$page = get_page_name();
	echo $page;
	}
	
function test(){

}
#PS ?>

