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
    
    /**
     * @author: RupeshT
     * Created Date : 10-Feb-2021
     * Purpose: To send dynamic email on success of lead insert
     *  */
	public function send_dynamic_email($userinsert=null){
        $this->send_sms($userinsert['phone'],$userinsert['destination']);

        // echo '<pre>';print_r($userinsert);
        $message=$this->load->view('dynamic_success_email',$userinsert,TRUE);
        $this->email->from('info@adventourist.in', 'Adventourist');     
        $this->email->to($userinsert['email']);
        $this->email->subject('[Alert] About your ' . $userinsert['destination'] . ' Trip'); 
        $this->email->set_mailtype("html");
        $this->email->message($message);
        if($this->email->send()) 
           echo 1;                  
        else 
            echo $this->email->print_debugger();
	}

    /**
     * @author: RupeshT
     * Created Date : 14-Feb-2021
     * Purpose: To send SMS on success of lead insert
     *  */
    public function send_sms($mob=null,$destination=''){
        if(!empty($mob) && !empty($destination)){

            // $numbers = array(918082014212);
            $numbers = array('91' . $mob);
            $msg = "Greetings from Adventourist. Thank you so much for giving us a chance to plan your ". $destination ." trip. Our travel expert will get in touch with you soon. For any assistance call us: +91-9930400694.";
            
            // Message details
            $apiKey  = urlencode('Ut69uUslDgI-AF3nfTCtEtcmXyzxSao1ZZeTr6XqbQ');
            $sender  = urlencode('ADVTOT');
            $message = rawurlencode($msg);
            $numbers = implode(',', $numbers);
    
            // Prepare data for POST request
            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
    
            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
    
            // Process your response here
            // echo $response;
        }
    }
}
