<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CategoryModel;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $table = 'tbl_category';

    public function __construct()
    {
        // $this->categoryModel = new CategoryModel();
        $this->middleware('auth');
    }
    public function index()
    {
        
        $result['categorydata'] = DB::table('tbl_category')->where('isdelete', 0)->orderBy('id', 'DESC')->get();

        return view('admin/category/index', $result);
    }
    public function add($id = '')
    {
        if ($id != '') {
            $result['id'] = $id;
            $result['data'] = DB::table($this->table)->where('id', $id)->get()->first();
            return view('admin/category/add', $result);
        }
        $result['id'] = '';
        return view('admin/category/add',$result);

    }
    public function save(Request $Request)
    {

        $Request->validate([
            'category' => 'required',
            'Slug' => 'required|unique:tbl_category,slug,' . $Request->id,

        ]);

        $id = $Request->id;
        if ($id != '') {
            
            $this->categoryModel->updateRecord($Request);
            $message = 'updated Successfully';
        } else {
            $this->categoryModel = new categoryModel();
            $id = $this->categoryModel->insert($Request);
            $message = 'Added Successfully';
        }
        $Request->session()->flash('message', $message);
        return redirect('admin/category');
    }
    public function delete($id)
    {
        $result = is_delete($this->table, $id);

        pr($result);
        return redirect('Process/');
    }

}
