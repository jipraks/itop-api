<?php

	include('apifunction.php');
	
	$itopApi = new itopApi;
	
/** GET Function Test **/
	
	/**
	$api	= $itopApi->get("Incident","1620");
	echo "<pre>";
	print_r($api);
	echo "</pre>";
	**/
	
	
/** ASSIGN (Stimulus) Function Test **/
	
	/* $param['comment']	= "Assigned from API";
	$param['stimulus']	= "ev_assign";
	$param['class']		= "Incident";
	$param['key']		= "1620";
	
	$fields['team_id']	= "39";
	$fields['agent_id']	= "3";
	
	$api				= $itopApi->stimulus($param,$fields);
	
	echo "<pre>";
	print_r($api);
	echo "</pre>"; */
	
	
/** RESOLVE (Stimulus) Function Test **/

	/* $param['comment']	= "Resolved from API";
	$param['stimulus']	= "ev_resolve";
	$param['class']		= "Incident";
	$param['key']		= "1653";
	
	$fields['solution']	= "PC Sudah terinstall iReap";
	
	$api				= $itopApi->stimulus($param,$fields);
	
	echo "<pre>";
	print_r($api);
	echo "</pre>"; */

?>