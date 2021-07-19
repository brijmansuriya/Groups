<?php

namespace App\Http\Controllers;

use App\Models\AddgroupModel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    private $table = 'tbl_category';
    public function index()
    {
        $data['whatsapp'] = getdataw('tbl_group', 'type', 1, 'tbl_category');
        $data['telegram'] = getdataw('tbl_group', 'type', 2, 'tbl_category');
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
            $image->storeAs('/public/Media/Group', $image_name);
            $AddgroupModel->gimg = $image_name;
        }
        if ($Request->hasfile('gctype')) {
            $AddgroupModel->gctype = $Request->gctype;
        }

        $AddgroupModel->gname = $Request->gname;
        $AddgroupModel->url = $Request->url;
        $AddgroupModel->cat_id = $Request->cat_id;
        $AddgroupModel->type = $Request->type;
        $AddgroupModel->gmail = $Request->gmail;
        $AddgroupModel->save();

        return view('welcome');
    }
}
