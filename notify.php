<?php

//header(':', true, 200);
//header('X-PHP-Response-Code: 200', true, 200);

require_once "ipn_asnad.php";

$ipn = new Asnad_notify();
$ipn->account_secret_code = "S000000000000";


switch($_GET['loc']){
	case 'log':
		$ipn->log();
	break;
	case 'download':
	default:
		echo $ipn->specified_download_link();

}

