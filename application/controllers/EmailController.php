<?php
class EmailController extends CI_Controller{

    public function send(){
        $this->load->library('email');
        $this->email->from('patelpratik5992@gmail.com', 'pratik');
        $this->email->to('divyesh.cognisun@gmail.com');
        $this->email->subject('This is my subject');
        $this->email->message('Hello Cognisun..............');
        $this->email->send();

    
    }
}

?>



