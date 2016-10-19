<?php namespace App;

use Library\Router;
use Library\ErrorHandler;

// define our routes

// Basic front end pages
Router::get('/', function(){
	echo 'Bronco Yes';
	exit;
});

//Setup 404 event handler
ErrorHandler::Hook(array('Exception','UnknownException','BaseException','SQLException'),function($exception){
	if(ErrorHandler::isDebug()){
		echo '500 Internal Error';
		\Library\Printout::write($exception);
		exit;
	} else{
		echo '500 Internal Error';
		exit;
	}
});

ErrorHandler::Hook(array('RouteException'), function($exception) {
	if(ErrorHandler::isDebug()){
		echo '404 Not Found';
		\Library\Printout::write($exception);
		exit;
	} else {
		echo '404 Not found';
		exit;
	}
});

?>