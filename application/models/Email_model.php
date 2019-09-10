<?php defined('BASEPATH') OR exit(' No direct scripit access allowed');

/**
 * 
 */
class Email_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

public function send_mail($to,$from,$subject,$data){
	
		$config = [        
 
			];
            
	$this->load->library('email', $config);

            

        $this->email->from($from,'THOTeam');
        $this->email->to($to);

        $this->email->subject($subject);
        $message = $data;
        $this->email->message($message);
         
     
        if ($this->email->send()) {
              return true;
        }
        else{
            echo $this->email->print_debugger(); die;
            return false;
        }

}



}