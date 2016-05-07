<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class simpleResultController extends Controller
{
    public function show( $query, $city = null ){		
		$client = new Client();
		 $user_inputs[0] = $query;
		 $user_inputs[1] = $city;
		// $body['options'] = array( 'city'=> $city );
		$sResult = $client->post('http://localhost:9998/Search/getSearchResults',[
              'json' => ['simpleQuery' => $query, 'userID' => 14, 'options' => array ('city'=>'Tehran') ]
           ]);
       // $result = $res->getBody();
        //dd($body);
      $sResultArray = json_decode($sResult->getBody());
		return view('resultPage')->with('result', $sResultArray)->with('user_inputs', $user_inputs);
	}
}
