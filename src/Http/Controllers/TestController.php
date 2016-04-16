<?php 

namespace Packages\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller {
	/**
	* Display an object with a Welcome Status
	*
	* @return Response
	*/
	public function home() {
		return "Hello World";
	}
 
}
 