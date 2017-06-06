<?php

namespace App\Http\Controllers\Consument\Auth;


use App\User;
use App\Model\Gender;
use App\Model\Religion;
use App\Model\Card;
use App\Model\Segmentation;
use App\Model\Position;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Session;
//
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }
   
    protected function validator(array $data){
        return Validator::make($data, [
            'name'               => 'required|string|max:255',
            'pob'                =>'required|string',   
            'dob'                =>'required|date',
			'gender_id'          =>'required|integer',
			'religion_id'        =>'required|integer',
			'segmentation_id'    =>'required|integer',
			'card_id'            =>'required|integer',
			'card_numb'          =>'required|string|max:20',
			'position_id'        =>'required|integer',
			'address'            =>'required|string',
			'telp_numb'          =>'required|string|max:12',
			'photo'              =>'required|image|max:1000',
			'email'              => 'required|string|email|max:255|unique:users',
            'password'           => 'required|string|min:6|confirmed',
        ]); }

private function uploadFile(Request $request){
    $pathString = "images";
    $pubPath = public_path($pathString);
    if(!empty($request->file('photo'))){
        $fileName = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move($pubPath, $fileName);
        return asset($pathString.'/'.$fileName);}
    return asset('images/default-avatar.jpg');
}

//protected function create(array $data){
public function create(Request $request){
        $photo = $this->uploadFile($request);

        return User::create([
            'name'           => $data['name'],
            'pob'            => $data['pob'],
            'dob'            => $data['dob'],
			'gender_id'      => $data['gender_id'],
			'religion_id'    => $data['religion_id'],
			'segmentation_id'=> $data['segmentation_id'],
			'card_id'        => $data['card_id'],
			'card_numb'      => $data['card_numb'],
			'position_id'    => $data['position_id'],
			'address'        => $data['address'],
			'telp_numb'      => $data['telp_numb'],
			'photo'          => $photo['photo'],
            'email'          => $data['email'],
            'password'       => bcrypt($data['password']),
        ]);
        Redirect::back()->with('message','Register Succesfully, Please Login'); }
	

public function showRegistrationForm()
    {
$jreng = [
        'genders'        => Gender::pluck('name','id'),
        'religions'      => Religion::pluck('name','id'),
        'cards'          => Card::pluck('name','id'),
        'segmentations'  => Segmentation::pluck('name','id'),
        'positions'      => Position::pluck('name','id'),
];
        return view('auth.register')->with($jreng);
    }
}
