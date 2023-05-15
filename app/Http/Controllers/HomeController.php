<?php

namespace App\Http\Controllers;

use App\Models\Usermeta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $datas = Usermeta::all();
        return view('home', compact('datas'));
    }

    public function usermeta(Request $request){
        // check validate
        $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'phone' => 'required',
            'address' => 'required|max:150',
        ],
        [
            'fname.required' => 'The father name field is required.',
        ]
    );
        
        // insert data
        $insert = new Usermeta();
        $insert->name = $request->name;
        $insert->fname = $request->fname;
        $insert->phone = $request->phone;
        $insert->address = $request->address;
        $insert->save();

        return back()->with('success', 'User meta data successfully inserted');
    }

    // view data
    public function userview($id){
        $data = Usermeta::find($id);
        return view('view', compact('data'));
    }

    // delete data
    public function userdelete($id){
        $data = Usermeta::find($id);
        $data->delete();
        return back()->with('successdelete', 'User meta data successfully delete');
    }

    // edite data
    public function useredite($id){
        $data = Usermeta::find($id);
        return view('edite', compact('data'));
    }
    public function usereupdate(Request $request, $id){
        // check validate
        $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'phone' => 'required',
            'address' => 'required|max:150',
        ],
        [
            'fname.required' => 'The father name field is required.',
        ]
    );
    
        $data = Usermeta::find($id);
        // update data
        $data->name = $request->name;
        $data->fname = $request->fname;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();

        return back()->with('success', 'User meta data successfully Updated');
    }
}