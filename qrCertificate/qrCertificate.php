<?php

// Load de PHP QR code Generator
require_once("../phpqrcode/qrlib.php");


class qrCertificate{
	
	//The elements that will be printed on the certificate
	private $backgroundImg = 'qrCertificate/templateBackground.jpg';
	private $acknowledge = "This acknowledge that";
	private $name = "Name Last Name";
	private $achievement = "has successfully completed the course XYZ";
	private $qr = "www.github.com";
	private $date= "July<br>2017";
	
	//Will receive all elements, allready in html format, in one string
	public static $html;
	
	//Magic function to set the elements
	public	function __set ($name,$value){
		$this->$name = $value;
	}

	//Put all elements inside the $html then call the template page
	public function render(){
		qrCertificate::$html="";
		
		//Runs all atributes(elements) of the class
		foreach($this as $key => $value) {
			
			//If we dealing with the QR element, create a qrcode.png then use this image inside the div. Add "QR VALIDATION" text to the div.
			if($key=="qr"){
				QRcode::png($key, "qrCertificate/qrcode.png");
				qrCertificate::$html.='<div id=qrCertificate-qr> <img  width=100mm src="qrCertificate/qrcode.png"><br>QR VALIDATION</div>';
			}
			//Insert the backgroud image inside a div
			elseif ($key=="backgroundImg"){
				qrCertificate::$html.= '<img  width="100%"  height="100%" src="'.$value.'"/>';
			}
			//Insert all other elements, as text, inside a div.
			else{
				qrCertificate::$html.= "<div id=qrCertificate-$key>$value</div>";
			}
		}
		//Call the template page. The $html variable is static and will be used on the page.
		include('qrCertificate/template.php');
	}
}