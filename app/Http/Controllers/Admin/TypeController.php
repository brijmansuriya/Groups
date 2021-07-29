<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TypeModel;
use DB;
class TypeController extends Controller
{
    private $table = 'tbl_type';
    public function __construct()
    {
        $this->TypeModel = new TypeModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data['type'] = TypeModel::all();
        return view('admin/type/index',$data);
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
}
