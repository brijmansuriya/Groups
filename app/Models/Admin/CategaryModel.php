<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class CategaryModel extends Model
{
    use HasFactory;
    public $table='tbl_categary';

    public function GetData(){
        $categarydata=DB::table($this->table)->where('isdelete',0)->orderBy('id', 'DESC')->get();
        return $categarydata;
    }
    public function insert($request)
    {
        $Categary=StringRepair($request->Categary);
        $Slug=StringRepair($request->Slug);
            
        $date=date("Y-m-d H:i:s");
       
        $readings=DB::table($this->table)->insertGetId([
            'name'=>$Categary,
            'Slug'=>$Slug,
            'isdelete'=>0,
            'updated_at'=>$date,
            'created_at'=>$date,
            'created_by'=>Auth::user()->id,
        ]);
        return $readings;
    }

    public function updateRecord($request)
    {
        $user_id=$request->user_id;
        $item_id=$request->item_id;
        $process=$request->process;
        $machine_id=$request->machine_id;
       
        $ipmpid=DB::table($this->table)->where('id',$id)->update([
            'appuser_id'=>$user_id,
            'item_id'=>$item_id,
            'process_id'=>$process,
            'machine_id'=>$machine_id,
            'is_delete'=>0,
        ]);
    }
}
