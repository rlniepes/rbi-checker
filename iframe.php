<?php 

require("simple_html_dom.php");

$method = $_SERVER['REQUEST_METHOD'];





class Check {

	public function getHtml() {

		$url = isset($_POST['url']) ? $_POST['url'] : "";

		if( $url == "" ) {
			return false;
		}


		$html = file_get_html($url);
		$html->find('head',0)->innertext = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="media/js/scripts.js"></script><link rel="stylesheet" href="media/css/styles.css" />' . $html->find('head',0)->innertext;

		foreach( $html->find('a') as $i => &$a ) {
			$a->setAttribute('class', 'normallink');
			$attr = get_headers( $a->href );

			if( $attr[0] == "HTTP/1.1 302 Found" ) {
				$a->href = str_replace("Location: ", "", $attr[3]); 
			}

		}

		echo $html;

	}



	public function run() {
		$this->getHtml();
	}

}




switch ($method) {
	case 'POST':
	$check = new Check();
	$check->run();
	break;	
	
	default:
	# code...
	echo 'Nothing to test.';
	break;
}

