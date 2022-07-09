<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emails extends MX_Controller {

	private $_data = array();
	function __construct() {
	    parent::__construct();	
        $this->load->library(array('email'));
	}
	public function email_confirmation($userinsert=null)
	{
        $message=$this->load->view('email_confirmation',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['to']);
        $this->email->subject('Email Confirmation mail from Adventourist'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) 
        {
           echo 1;                  
        }
        else 
        {
            echo $this->email->print_debugger();
        }
       
	}


public function package_email($userinsert=null)
	{
        $message=$this->load->view('packageemail',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        // $this->email->to('rupeshtiwari1998@gmail.com');
        $this->email->to($userinsert['to']);
        $this->email->subject('[Alert] Your Leh Ladakh trip'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) 
        {
            echo 1;                  
        }
        else 
        {
            echo $this->email->print_debugger();
        }
       
	}

    public function lead_email($userinsert=null)
    {
        $message=$this->load->view('leademail',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['to']);
        $this->email->subject('[Alert] Your Itinerary Trip!'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) 
        {
           echo 1;                  
        }
        else 
        {
            echo $this->email->print_debugger();
        }
       
    }
	
	public function package_email1($userinsert=null)
	{
        $message=$this->load->view('kasolemail',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['to']);
        $this->email->subject('[Alert] Your Kasol-Kheerganga trip trip'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) 
        {
           echo 1;                  
        }
        else 
        {
            echo $this->email->print_debugger();
        }
       
	}
	
	public function package_email2($userinsert=null)
	{
        $message=$this->load->view('bhutanemail',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['to']);
        $this->email->subject(' [Alert] Your wallpaper trip to Bhutan'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) 
        {
           echo 1;                  
        }
        else 
        {
            echo $this->email->print_debugger();
        }
       
	}
	
	
    public function loginCredential($userinsert=null)
    {
        $message=$this->load->view('loginCredential',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['to']);
        $this->email->subject('Login Credential - Adventourist'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
       
        if($this->email->send()) 
        {
           echo  1;
           
        }
        else 
        {
            echo $this->email->print_debugger();
            
        }
    }
    
        public function forgotmail($userinsert=null)
    {
        $message=$this->load->view('forgotpassword',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['to']);
        $this->email->subject('Forgot Password Mail - Adventourist'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
       
        if($this->email->send()) 
        {
           echo  1;
           
        }
        else 
        {
            echo $this->email->print_debugger();
            
        }
    }
    
}
