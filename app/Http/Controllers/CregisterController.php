<?php

namespace App\Http\Controllers;
use App\models\Cregister;
use Illuminate\Http\Request;

class CregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Clinic.Cregister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cname' => 'required|max:100',
            'cemail' => 'required|email|unique',
            'cphone' => 'required|max:20',
            'Password' => 'required|confirmed|min:6',
            'Password_confirmation' => 'required'
        ]);

        $cemail = Pregister::where('cemail', '=', $request->input('Cemail'))->first();
        if($cemail === null)
        {
            $cpassword = $request->Password;
            $cconfirm = $request->Password_confirmation;
            $cuser = signup::create(array(
                'cname'=> $_REQUEST['pname'], 
                'cemail'=> $_REQUEST['cemail'],
                'cphone'=> $_REQUEST['cphone'], 
                'Password' => encrypt($cpassword),
                'Password_confirmation' => encrypt($cconfirm)
                ));
            
                $request->session()->put([
                    'id' => $cuser->id,
                    'loggedIn'=>true,
                    ]
                );
                
                return redirect('/book')->with('message', '* You are register successfully *');
        }
        else
        {
            return redirect()->back()->with('error', ' * This account is already exist * ')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
