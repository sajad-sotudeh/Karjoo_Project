<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class simpleResultController extends Controller
{
    public function show($a,$b=null){
		
		$client = new Client();
		$body['simpleQuery'] = $a;
		$body['userID'] = 14;
		$body['options'] = array( 'city'=>$b );
        // $res = $client->post('http://localhost:9998/Search/getSearchResults', [ 'body' => json_encode($body) ]);
		$res = $client->post('http://localhost:9998/Search/getSearchResults',[
              'json' => ['simpleQuery' => $a, 'userID' => 14, 'options' => array ('city'=>'Tehran') ]
           ]);
       // $result = $res->getBody();
        //dd($body);
        $result = json_decode($res->getBody());
		return view('resultPage')->with('result', $result);
	}
}
