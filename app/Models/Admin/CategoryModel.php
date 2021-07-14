<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class CategoryModel extends Model
{
    use HasFactory;
    public $table="tbl_category";

   
    // public function getIpmpData($request)
    // {
    //     $categorydata=DB::table('tbl_category')->where('isdelete',0)->orderBy('id', 'DESC')->get();
        
    //     return $categorydata;
    // }
    public function insert($request)
    {
        $category=StringRepair($request->category);
        $Slug=StringRepair($request->Slug);
            
        $date=date("Y-m-d H:i:s");
       
        $readings=DB::table('tbl_category')->insertGetId([
            'name'=>$category,
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
        $category=$request->category;
        $Slug=$request->Slug;
        $id=$request->id;
       
       
        $date=date("Y-m-d H:i:s");
        $ipmpid=DB::table('tbl_category')->where('id',$id)->update([
            'name'=>$category,
            'Slug'=>$Slug,
            'updated_at'=>$date,
            'created_at'=>$date,
            'isdelete'=>0,
        ]);
    }
}
