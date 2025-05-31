<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\noodles;
class ProjectController extends Controller
{
    public function noodles()
    {
        $noodles1 = noodles::all();
        return view("noodles",compact('noodles1')); 
    }
    public function delete(Request $link)
    {
        noodles::destroy($link->id);
        return redirect('noodles');
    }
    public function dasbord()
    {
        return view('dashbord'); 
    }

    function add(Request $link)
    {
        $H = new noodles ;
        $H->noodlesName=$link->input;
        $H->price=$link->price;
        $H->save();
        return redirect('noodles');
        
    }
    
    function update(Request $link)
    {
        $E = $link->id;
        $noodles = noodles::find($E);
        $name = $noodles->noodlesName;
        $price = $noodles->price;
        return view("updateForm",compact('E','name','price'));

    }
    function edit(Request $link)
    {
        $noodles = noodles::find($link->noodlesid);
        $noodles->noodlesName=$link->noodlesname;
        $noodles->save();
        return redirect('noodles');
    }

    
}
