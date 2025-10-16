<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amats;

class AmatsController extends Controller

{
     public function showALLAmats()
    {
        $Amatsdata = new Amats();
       return view('allAmats',['Amatsdata'=>$Amatsdata->orderBy('id','asc')->get()]);
    }

    public function AmatsDetails($id)
            {
            $Amatsdata = new Amats();
            return view('Amatsdetails',['Amatsdata' => $Amatsdata->find($id)]);
                }

                 public function AmatsDelete($id)
            {
                Amats::find($id)->delete();
                return redirect()->to('/data/allDarbinieks');
                }


     public function AmatsEdit($id){
    $Amatsdata = new Amats;
    return view('AmatsView', ['Amatsdata' => $Amatsdata->find($id)]);

        }

     public function AmatseditSubmit($id, Request $Amats){
    
        $Amatsdata = Amats::find($id);

        $Amatsdata->Nosaukums = $Amats->input('Nosaukums');
   
    
        $Amatsdata->save();

    return redirect('/data/allAmats')->with('success', 'Ziņojums bija veiksmīgs');
    }
}
