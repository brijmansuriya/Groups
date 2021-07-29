<?php

namespace App\Http\Controllers;

use App\Models\AddgroupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AddgroupModelExport;
class FrontendController extends Controller
{
    private $table = 'tbl_category';

    public function __construct()
    {
        // $this->middleware('auth');
        $this->AddgroupModel=new AddgroupModel();
    }

    public function index()
    {
        // $AddgroupModel = New AddgroupModel();
        $data['whatsapp'] = $this->AddgroupModel->getdataw('tbl_group', 'type', 1, 'tbl_category');
        $data['telegram'] = $this->AddgroupModel->getdatat('tbl_group', 'type', 2, 'tbl_category');
        return view('welcome', $data);
    }

   

    public function addGroup()
    {
        $data['category'] = getdata('tbl_category');
        return view('AddGroup', $data);
    }

  

    public function savegroup(Request $Request)
    {

        
        if ($Request->has('gctype')) {
            $Request->validate([
                'gname' => 'required',
                'url' => 'required|unique:tbl_group,url',
                'gimg' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'cat_id' => 'required',
                'type' => 'required',
                'gctype' => 'required',
            ]);
        } else {
            $Request->validate([
                'gname' => 'required',
                'url' => 'required|unique:tbl_group,url',
                'gimg' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'cat_id' => 'required',
                'type' => 'required',
            ]);
        }
   
        $AddgroupModel = new AddgroupModel();
        if ($Request->hasfile('gimg')) {
            $image = $Request->file('gimg');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->move(public_path('Gimg'), $image_name);
            $AddgroupModel->gimg = $image_name;
        }
        if ($Request->hasfile('gctype')) {
            $AddgroupModel->gctype = $Request->gctype;
        }

        $AddgroupModel->gname = StringRepair($Request->gname);
        $AddgroupModel->url = StringRepair($Request->url);
        $AddgroupModel->cat_id = StringRepair($Request->cat_id);
        $AddgroupModel->type = StringRepair($Request->type);
        $AddgroupModel->gmail = StringRepair($Request->gmail);
        $AddgroupModel->save();

        $data['whatsapp'] = $this->AddgroupModel->getdataw('tbl_group', 'type', 1, 'tbl_category');
        $data['telegram'] = $this->AddgroupModel->getdatat('tbl_group', 'type', 2, 'tbl_category');
        return view('welcome', $data);
        
    }

   
}
