<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\TypeModel;
use DB;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    private $table = 'tbl_type';
    public function __construct()
    {
        // $TypeModel = new TypeModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data['type'] = TypeModel::all();
        return view('admin/type/index', $data);
    }
    public function add($id = '')
    {
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = DB::table($this->table)->where('id', $id)->first();
           
            return view('admin/type/add', $result);
        }
        $result['id'] = '';
        return view('admin/type/add', $result);
    }
    public function save(Request $Request)
    {
        $Request->validate([
            'type_name' => 'required',
        ]);

        $id = $Request->id;
        if ($id != '') {
            $TypeModel = TypeModel::find($id);
            $TypeModel->type_name = StringRepair($Request->type_name);
            $TypeModel->save();
            $message = 'updated Successfully';
        } else {
            $TypeModel = new TypeModel();
            $TypeModel->type_name = StringRepair($Request->type_name);
            $TypeModel->save();
            $message = 'Added Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/type');
    }
    // public function delete($id)
    // {
    //     $TypeModel = TypeModel::find($id);
    //     $TypeModel->delete();
    //     $message = 'Delete Successfully';
    //     session()->flash('message', $message);
    //     return redirect('admin/type');
    // }
    public function disabled($id)
    {
        $TypeModel = TypeModel::find($id);
        
        if($TypeModel->disable==0){
            $TypeModel->disable = 1;
            $TypeModel->save();
        }else{
            $TypeModel->disable = 0;
            $TypeModel->save();
        }
        // $message = 'Delete Successfully';
        // session()->flash('message', $message);
        return redirect('admin/type');
    }
}
