<?php

namespace App\Http\Controllers\Consument\DataResearch;

use User;
use App\Model\Research;
use App\Model\Sector;
use App\Model\Regency;
use App\Model\Reqstat;
use App\Model\Rescstat;
use Illuminate\Http\Request;
use Illuminate\Http\Request\StoreResearchRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ResearchController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest');

    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        
	 //$researchs = Research::all();
	 //$researchs = Research::with('user')->find();
	 //$researchs = Research::with('user')->find(Auth::user()->id);
	 //$researchs = Research::with('user')->get();
	 //$researchs = Research::with('user')->get()->first();
        
        return view('consument.request_data.index', compact('researchs'));


        /*$researchs = Research::all();

        return $researchs;

        return view('researchs', array('researchs' => $researchs));*/
        //return view('consument.data_research.index');
    }

    public function journal()
    {
        return view('consument.data_research.journal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $researchs = new research;
         $selopt = [
                    'sectors'        => Sector::pluck('name','id'),
                    'regencys'       => Regency::pluck('name','id'),
                    'reqstats'       => Reqstat::pluck('name','id'),
                    'rescstats'      => Rescstat::pluck('name','id'),

                  ];

        return view('consument.request_data.create')->with($selopt);
    }

private function uploadFile(Request $request){
	$pathString = "proposal";
	$pubPath = public_path($pathString);
	if(!empty($request->file('proposal_file'))){
		$fileName = $request->('proposal_file')->getClientOriginalName();
		$request->file('proposal_file')->move($pubPath, $fileName);
		return asset($pathString.'/'.$fileName);
	}
	return asset('proposal/sample.pdf');
}



    public function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'user_id'                    => 'required|integer',
            'title_research'             => 'required|string|unique',
            'purpose'                    => 'required|string',
            'sector_id'                  => 'required|integer',
            'case_study'                 => 'required|string',
            'abstraction'                => 'required|string',
            'guarantor'                  => 'required|string',
            'regency_id'                 => 'required|integer',
            'reqstat_id'                 => 'required|integer',
          //'rescstat_id'                => 'required|integer',
            'proposal_file'              => 'required|file',
            'description_data_requested' => 'required|string',
          //'research_file'              => 'nullable|string',
          ]);

//Store data to database
$proposal = $this->uploadFile($request);
Research::create([
'proposal' => $photo
	]);

//Auth::user()->researchs()->create($request->all());

//Redirect
return back()->withMessage('Pengajuan telah dikirim!');
}

          /*   
            ]);
            $research->user_id          = $request->user_id;
            $research->title_research   = $request->title_research;
            $research->purpose          = $request->purpose;
            $research->sector_id        = $request->sector_id;
            $research->case_study       = $request->case_study;
            $research->abstraction      = $request->abstraction;
            $research->guarantor        = $request->guarantor;
            $research->regency_id       = $request->regency_id;
            $research->reqstat_id       = $request->reqstat_id;
            $research->proposal_file    = $request->proposal_file;
            $research->description_data_requested = $request->description_data_requested;

            $research->save();*/
            //return redirect('consument.request.info'));






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
       
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
