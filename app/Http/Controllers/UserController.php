<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Services\Conversor;

class UserController extends Controller
{
   public function getIndex(){
        return view('index');
   }
   
   public function postIndex(Request $request){
    $request->validate([
        'real' => 'required',
        'romano' => 'required'
    ]);

    $data = $request->only('real' , 'romano');

    $conversor = new Conversor();
      
        $itensConvertidos[] =  $conversor->decimalParaRomano($data['real']);
        $itensConvertidos[] = $conversor->romanoParaDecimal($data['romano']);
       
        return redirect()->route('index')->with('itensConvertidos', $itensConvertidos);
    
   }
}
