<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
 
		function show($view, $data=array()){
 
			$CI = & get_instance();
 
			// Load header
			$CI->load->view('template/header',$data);
 
			// Load content
			$CI->load->view($view,$data);
 
			// Load footer
			$CI->load->view('template/footer',$data);
 
			// Scripts
			$CI->load->view('template/scripts',$data);
		}
}
 
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
