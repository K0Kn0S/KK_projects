<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;


class DataController extends Controller
{


    //Data funkcijas
    public function showALLData()
    {
        //return "Visi dati no db";
        $data = new Data();
       return view('allData',['data'=>$data->orderBy('id','asc')->get()]);
    }

    public function delete($id)
        {
            Data::find($id)->delete();
            return redirect()->to('/data/allData');
            
            }

             public function details($id)
            {
             $dati = new Data;
             return view('details',['data' => $dati->find($id)]);
                }


public function newsubmit(request $dati){
        //return dd();

        $validation = $dati->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|max:20',
            'subject' => 'required|min:3|max:20',
            'message' => 'required|min:3|max:2048'
        ]);


        $data = new Data();
        $data->name = $dati->input('name');
        $data->subject = $dati->input('subject');
        $data->email = $dati->input('email');
        $data->message = $dati->input('message');
        $data->save();

        return redirect('/contacts')->with('success','Ziņojums tika nosūtīts');
    }


     public function edit($id){
    $data = new Data;
    return view('dataView', ['data' => $data->find($id)]);

    }
   
    public function editSubmit($id, Request $dati)
    {
        $data = Data::find($id);

        $data->name = $dati->input('name');
        $data->subject = $dati->input('subject');
        $data->email = $dati->input('email');
        $data->message = $dati->input('message');

        $data->save();

    return redirect('/data/allData')->with('success', 'Ziņojums bija veiksmīgs');
    }


    

}

