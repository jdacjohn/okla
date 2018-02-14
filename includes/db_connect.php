<?php
  $dbconn=mysql_connect("$strDBServer","$strUser","$strPass") or die("Could not connect to " . $strDBServer . "  " . mysql_error());
	//print("Connected to Server. <br />");
  if (!empty($dbconn)) {	
    // select the database
    $dbinst=mysql_select_db("$strDB",$dbconn) or die(" Coud not connect to Database " . $strDB);
    //print("Connected to database.<br />");
	}
?>