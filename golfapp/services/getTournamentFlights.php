<?php
require_once "config.php";
require_once "dfwlaogolf.php";


$dfw = new DfwLaoGolf("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
if (isset($_GET['id']) == true)
{
	$dfw->getTournamentFlights($_GET['id']);
}
$dfw = null;

?>