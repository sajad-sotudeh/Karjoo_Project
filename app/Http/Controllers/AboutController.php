<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller {

    public function store(ContactFormRequest $request)
    {
		return Redirect::route('simpleResult', [$request->job_title, $request->city]);
    }

}