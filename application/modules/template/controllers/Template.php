<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function admin($record)
	{
		$this->load->view('admin',$record);
	}

	public function home($record)
	{
		$this->load->view('home',$record);
	}
	
		public function dash($record)
	{
		$this->load->view('dash',$record);
	}
	
	public function dubai($record){
	    $this->load->view('dubai',$record);
	}

	public function package($record){
	    $this->load->view('pack',$record);
	}
	public function package2($record){
	    $this->load->view('pack2',$record);
	}
	public function package3($record){
	    $this->load->view('pack3',$record);
	}
	public function package4($record){
	    $this->load->view('pack4',$record);
	}
	public function package5($record){
	    $this->load->view('pack5',$record);
	}
	public function package6($record){
	    $this->load->view('pack6',$record);
	}
	
	public function packagethank($record){
	    $this->load->view('packthank',$record);
	}
	
		public function packagethank1($record){
	    $this->load->view('packagethank1',$record);
	}
		public function packagethank2($record){
	    $this->load->view('packagethank2',$record);
	}
	
		public function packagethank3($record){
	    $this->load->view('packagethank3',$record);
	}
	
	public function spitipackage($record){
	    $this->load->view('spitipack',$record);
	}
	public function spitipackage2($record){
	    $this->load->view('spitipack2',$record);
	}
	public function spitipackage3($record){
	    $this->load->view('spitipack3',$record);
	}
	
		public function bhutan($record){
	    $this->load->view('bhutan',$record);
	}
	
		public function bhutan1($record){
	    $this->load->view('bhutan1',$record);
	}
	
	
		public function kheer($record){
	    $this->load->view('kheer',$record);
	}
	
		public function kheer1($record){
	    $this->load->view('kheer1',$record);
	}
	
	
	public function download_csv($record)
	{

  		$this->load->dbutil();
		$this->load->helper('file');
		$this->load->helper('download');
		$delimiter = ",";
		$newline = "\r\n";
		$filename = $record['filename'];
		$resultdata = $record['resultdata'];
		$result = $this->csv_from_result($resultdata, $delimiter, $newline);
	   	force_download($filename, $result);

	}

	public function csv_from_result($data, $delim = ',', $newline = "\n", $enclosure = '"')
	{	

		$out = '';
		// First generate the headings from the table column names
		foreach ($data[0] as $name=>$value)
		{
		  $out .= $enclosure.str_replace($enclosure, $enclosure.$enclosure, $name).$enclosure.$delim;
		  //break;
		}

		$out = substr($out, 0, -strlen($delim)).$newline;

		// Next blast through the result array and build out the rows
		foreach ($data as $row)
		{
		  $line = array();
		  foreach ($row as $item)
		  {
			$line[] = $enclosure.str_replace($enclosure, $enclosure.$enclosure, $item).$enclosure;
		  }
		  $out .= implode($delim, $line).$newline;
		}
			return $out;
	}
}
