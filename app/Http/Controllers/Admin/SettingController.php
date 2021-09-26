<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SettingModel;
use DB;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $table = 'tbl_type';

    public function __construct()
    {
        //$TypeModel = new TypeModel();
        $this->middleware('auth');
    }

    public function websitename()
    {
        $result['wname'] = DB::table('tbl_setting')->where('key','appname')->first();

        $result['id'] = 1;
        return view('admin/setting/website_name',$result);
    }
    public function websitenamesave(Request $Request)
    {
        $Request->validate([
            'websitename' => 'required',
        ]);

        $id = $Request->id;
        if ($id != '') {
            $SettingModel = SettingModel::find($id);
            $SettingModel['vel'] = StringRepair($Request->websitename);
            $SettingModel->save();
            $message = 'updated Successfully';
        } 
        $Request->session()->flash('message', $message);
        return redirect('admin/setting/websitename');
    }
   
}
