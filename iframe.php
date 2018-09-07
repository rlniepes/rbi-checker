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


		ob_start();
    var_dump( get_headers('https://www.icis.com/contact/request-a-free-demo-of-the-lng-market-intelligence-soasdasdlution/?commodity=lng&channel=energy&cmpid=EMP|ENER|CHHER-2018-0108-GLOBAL-europeangashubreportjulylngmis&sfid=7012X000001qF2E&') );

		foreach( $html->find('a') as $i => &$a ) {
			
			$attr = get_headers( $a->href );


			switch( $attr[0] ) {
				case "HTTP/1.1 302 Found":
				$a->setAttribute('class', 'good-link');
				$a->href = str_replace("Location: ", "", $attr[3]); 




				break;

			  case "HTTP/1.0 404 Not Found":
				$a->setAttribute('class', 'error-link');
			  break;
			}

		}

		$_html = ob_get_clean();


		$html->find('body',0)->innertext = '<div class="details-container"><div class="details-inner"><div class="details-position"><pre>' . $_html .  '</pre></div></div></div>' . $html->find('body',0)->innertext;

		return $html;

	}



	public function run() {
		echo $this->getHtml();
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

