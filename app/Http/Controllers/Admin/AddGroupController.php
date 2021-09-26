<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AddGpModel;
use DB;
use Illuminate\Http\Request;

class AddGroupController extends Controller
{

    private $table = 'tbl_category';
    private $table2 = 'tbl_group';
    public function __construct()
    {
        // $this->AddGpModel = new AddGpModel();
        $this->middleware('auth');
    }
    public function AdminAddGroup()
    {
        $AddGpModel = new AddGpModel();
        $data['group'] = $AddGpModel->GetDataAll('tbl_group', 'tbl_category');
        return view('admin/group/index', $data);
    }

    public function AdminGroupAdd($id = '')
    {
        if ($id != '') {
            $result['id'] = $id;
            $result['category'] = getdata('tbl_category');
            $result['data'] = DB::table($this->table2)->where('id', $id)->get()->first();
            return view('admin/group/add', $result);
        }
        $data['id'] = '';
        $data['category'] = getdata('tbl_category');
        return view('admin/group/add', $data);
    }

    public function save(Request $Request)
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

        $AddGpModel = new AddGpModel();
        if ($Request->hasfile('gimg')) {
            $image = $Request->file('gimg');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->move(public_path('Gimg'), $image_name);
            $AddGpModel->gimg = $image_name;
        }
        if ($Request->hasfile('gctype')) {
            $AddGpModel->gctype = $Request->gctype;
        }

        $AddGpModel->gname = StringRepair($Request->gname);
        $AddGpModel->url = StringRepair($Request->url);
        $AddGpModel->cat_id = StringRepair($Request->cat_id);
        $AddGpModel->type = StringRepair($Request->type);
        $AddGpModel->gmail = StringRepair($Request->gmail);
        $AddGpModel->save();

        return redirect('admin/addgroup');

    }

    public function delete($id)
    {
        $result = is_delete($this->table2, $id);
        return redirect('admin/addgroup');
    }

}
