<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Darbinieks;

class DarbController extends Controller
{
    
    public function showALLDarbinieks()
    {
        $ddata = new Darbinieks();
        return view('allDarbinieks',['ddata'=>$ddata->orderBy('id','asc')->get()]);
    }

    public function Darbiniekudelete($id)
            {
                Darbinieks::find($id)->delete();
                return redirect()->to('/data/allDarbinieks');
                }


    public function Darbiniekudetails($id)
            {
                
            $ddata = new Darbinieks();
            return view('Darbiniekudetails',['ddata' => $ddata->find($id)]);
                }

   
    
    public function Dedit($id){
    $ddata = new Darbinieks;
    return view('darbinieksView', ['ddata' => $ddata->find($id)]);

    }

    
    public function DeditSubmit($id, Request $darb)
    {
    
        $ddata = Darbinieks::find($id);

        $ddata->Vards = $darb->input('Vards');
        $ddata->Uzvards = $darb->input('Uzvards');
        $ddata->Dzimsanas_gads = $darb->input('Dzimsanas_gads');
        $ddata->Tel_numurs = $darb->input('Tel_numurs');
    
        $ddata->save();

    return redirect('/data/allDarbinieks')->with('success', 'Ziņojums bija veiksmīgs');
    }
}


