<?php
$con = mysql_connect("localhost", "root", "");
$c = mysql_select_db("pentest", $con);
if ( !$c ) exit( 'connection failed: ' . mysql_connect_error() );

@define(BASE_URL, "http://localhost/projetos/caronte/");
