<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TypeModel;

class TypeController extends Controller
{
    private $table = 'tbl_category';
    public function __construct()
    {
        $this->TypeModel = new TypeModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $users = TypeModel::all();
        $data['type']=$users->toArray();
        
        return view('admin/type/index',$data);
    }
}
