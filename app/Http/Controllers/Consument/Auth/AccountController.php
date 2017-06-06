<?php

namespace App\Http\Controllers\Consument\Auth;
use App\User;
use App\Model\Gender;
use App\Model\Religion;
use App\Model\Card;
use App\Model\Segmentation;
use App\Model\Position;
//use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');

    }
       public function index()
	{
$users = User::with('gender');


     /* $users = DB::table('users')
            ->join('genders','users.id', '=', 'genders.user_id')
            ->join('religions', 'users.id', '=', 'religions.user_id')
            ->join('cards', 'users.id', '=', 'cards.user_id')
            ->join('segmentations', 'users.id', '=', 'segmentations.user_id')
            ->join('positions','users.id', '=', 'positions.user_id')
            ->select('users.*', 'genders.name','religions.name','cards.name','segmentations.name','positions.name')
            ->get();*/
    

    //$user = User::all();
    /*$jreng = [
        'genders'        => Gender::pluck('name','id'),
        'religions'      => Religion::pluck('name','id'),
        'cards'          => Card::pluck('name','id'),
        'segmentations'  => Segmentation::pluck('name','id'),
        'positions'      => Position::pluck('name','id'),
];*/
        
    
    return view('consument.profile.index');
/* 

        return view('consument.profile.index', compact(['name','pob','dob','gender_id','religion_id','segmentation_id','card_id','card_numb','position_id','address','telp_numb','photo','email','password']))->with($jreng);*/
    }


    public function editAccount()
    {
        $accounts = [
        'address'        => Gender::pluck('name','id'),
        'religions'      => Religion::pluck('name','id'),
        'cards'          => Card::pluck('name','id'),
        'segmentations'  => Segmentation::pluck('name','id'),
        'positions'      => Position::pluck('name','id'),
];
        
        return view('consument.profile.edit')->with($accounts);
    }

    public function updateAccount(Request $request)
    {
        $user =Auth::User();
        $user -> address =Request::input('address');
        $user -> telp_numb =Request::input('telp_numb');
    
            /*if (!Request::input('password') == '') {
            $user -> password = bcrypt(Request::input('password'));
            }*/
     
            if ($request->has('password')) $user -> password = bcrypt($request->input('password'));
        
        $user ->save();
}
      /*  Flash::message('Your Account has been updated!');
        return Redirect:to(route('show.account'));
*/
        /*single line
        $user->update($request->has('password') ? $request->all() : $request->except(['password']));*/
    }

