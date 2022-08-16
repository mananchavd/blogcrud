<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\premodel;
class precontroller extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index'); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$adata=premodel::select('select * from predata');

        //return view('alldata',['adata' => $adata]);

        $alldata=premodel::all();
        return view('alldata',compact('alldata'));
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

            'firstname' => 'required',
            'lastname' => 'required',
            'fathername' => 'required',
            'mothername' =>'required',
            'gender' =>'required',
            'emailfm' =>'required',
            'homephone' =>'required',
            'phone' =>'required',
            'address' =>'required',
            'state' =>'required',
            'religion' =>'required',
            //'image' => 'image|max:2048'
        ]);

        /*print_r($image= $request->file('image'));
        $image_name=rand() . '.' .$image->getClientOriginalExtension(); //rand function will generate the random no. for image....
        $image->move(public_path('images'),$image_name); //this move function will move the image inside the public folder & create new folder with name=images. 
*/
             
       /* $inputdata=array(
            'firstname' =>  $request->firstname,
            'lastname' =>   $request->lastname,
            'fathername' => $request->fathername,
            'mothername' => $request->mothername,
            'gender' =>     $request->gender,
            'emailfm' =>    $request->emailfm,
            'homephone' =>  $request->homephone,
            'phone' =>      $request->phone,
            'address' =>    $request->address,
            'state' =>      $request->state,
            'religion' =>   $request->religion,
           // 'image' =>      $request->image_name
        );*/
        $data=premodel::create($request->all());
          //we are using array.so that input_data var will insert data.
        return view('show',['data' => $data]);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$data=premodel::find($id);
        //return view('show',compact('data'));
        
        $alldata=premodel::all();
        return view('alldata',compact('alldata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=premodel::find($id);
        return view('editdata',compact('data'));
        
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

        $data = $request->all();
        //return $data;
        

        $request->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'fathername' => 'required',
            'mothername' =>'required',
            'gender' =>'required',
            'emailfm' =>'required',
            'homephone' =>'required',
            'phone' =>'required',
            'address' =>'required',
            'state' =>'required',
            'religion' =>'required',
        ]);
    
        $data=premodel::whereId($id)->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'fathername' => $data['fathername'],
            'mothername' =>$data['mothername'],
            'gender' =>$data['gender'],
            'emailfm' => $data['emailfm'],
            'homephone' =>$data['homephone'],
            'phone' =>$data['phone'],
            'address' =>$data['address'],
            'state' =>$data['state'],
            'religion' =>$data['religion'],
        ]);
        return redirect()->route('generalreg.index');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $dltid=premodel::find($id)->delete();
        return redirect()->route('generalreg.index');
    }
}
