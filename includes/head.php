<?php
	$runMode = 'DEV';
	if ($runMode == 'DEV') {
		// Set database/server info
		$strDBServer = '192.168.42.97';
		$strHost = 'http://192.168.42.97';
		$siteRoot = 'http://192.168.42.97/organickidsla.com';
	} else {
		$strDBServer = 'localhost';
		$strHost = 'http://www.organickidsla.com';
		$siteRoot = 'http://www.organickidsla.com';
	}
	$strDB = 'organ66_CIS';
	$strUser = 'organ66_organic';
	$strPass = 'ntecmb7nt';
?>