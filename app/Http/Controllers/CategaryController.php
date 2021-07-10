<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\CategaryModel;

class CategaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categary = $this->CategaryModel->GetData($Request);
        return view('admin/categary/index');
    }
    public function add()
    {
        return view('admin/categary/add');
    }
    public function save(Request $Request)
    {
        $Request->validate([
            'Categary'=>'required',
            'Slug'=>'required|unique:categary,slug'.$Request->post('id'),   
        ]);

        $id=$Request->id;
        if($id!=''){
            $this->CategaryModel->updateRecord($Request);
            $message='updated Successfully';
        }
       else{
            $this->CategaryModel=new CategaryModel();
            $id=$this->CategaryModel->insert($Request);
            $message='Added Successfully';
       }
       $Request->session()->flash('message',$message);
       return redirect('admin/categary');
    }

    
}
