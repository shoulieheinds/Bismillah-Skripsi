<?php
namespace App\Http\Controllers\Consument\Auth;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use Session;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function upload()
    {
    	//getting all of the post data
    	$file = array('photo' => Input::file('photo'));

    	//setting up rules
    	$rules = array('photo' => 'required|image|max:1000',); 

    	//doing the validation passting post data, rules and the messages
    	$Validator = Validator::make($file, $rules);
    	if ($Validator->fails()) {
    		//send back to the page with input data and errors
    		return Redirect::to('register')->withInput()->withErrors($Validator);
    	}
    	else{
    		//checking file is valid
    		if(Input::file('photo')->isValid()){
    			$destinationPath ='images'; //upload path
    			$extension = Input::file('photo')->getClientOriginalExtension(); //gettting image extension
    			$fileName =rand(11111,99999).'.'.$extension; //renaming image
    			Input::file('photo')->move($destinationPath, $fileName); //uploading file to given path

    			//sending back with message
    			Session::flash('success', 'Upload successfully');
    			return Redirect::to('login');
    		}
    		else{
    			//sending back with error message
    			Session::flash('error','Uploaded file is not valid');
    			return Redirect::to('register');
    		}
    	}
    }
}
