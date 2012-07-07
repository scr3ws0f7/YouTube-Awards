<?php
require_once 'sys/init.php';

$key = 'ASDU@jsaojadsx';
$yt = 'screws0ft';
$pas = 1;
$eroare = false;

if( isset($_POST['submit']) )
{
	//verificare dacă este key-ul la fel.
	$adresa = 'http://gdata.youtube.com/feeds/api/users/'.$_POST['yt'].'?alt=json';
	
	//youtube api call
	$curl_request = curl_init();
	curl_setopt_array($curl_request, array(
		CURLOPT_URL => $adresa,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => false
	));
	//preluarea rezultatului in format json
	$rezultat = curl_exec($curl_request);
	curl_close($curl_request);
	
	//prelucrare json -> array
	$json_array = json_decode($rezultat, true);
	
	$eroare = !preg_match('#'.$key.'#', $json_array['entry']['content']['$t']);
	
	$pas = 2;
}









$Smarty->assign('key', $key);
$Smarty->assign('yt', $yt);
$Smarty->assign('pas', $pas);
$Smarty->assign('eroare', $eroare);
$Smarty->display('autentificare.tpl');













