<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
		 

	//  public function send(){

	// 	$this->load->library('email');
    //     $this->email->from('patelpratik5992@gmail.com', 'pratik');
    //     $this->email->to('divyesh.cognisun@gmail.com');
    //     $this->email->subject('This is my subject');
    //     $this->email->message('This is my message');
	// 	$this->email->send();
		
	// 	if($this->email->send()){
	// 		echo "Success";
	// 	}
	// 	else{
	// 		echo "Wrong";
	// 	}
	//  }


}
