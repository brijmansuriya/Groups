<?php

namespace App\Models\Admin;

use Auth;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddGpModel extends Model
{
    use HasFactory;
    public $table = "tbl_group";

    public function insert($request)
    {
        $category = StringRepair($request->category);
        $Slug = StringRepair($request->Slug);
        $date = date("Y-m-d H:i:s");
        $readings = DB::table('tbl_group')->insertGetId([
            'name' => $category,
            'Slug' => $Slug,
            'isdelete' => 0,
            'updated_at' => $date,
            'created_at' => $date,
            'created_by' => Auth::user()->id,
        ]);
        return $readings;
    }

    public function updateRecord($request)
    {
        $category = $request->category;
        $Slug = $request->Slug;
        $id = $request->id;
        $date = date("Y-m-d H:i:s");
        $ipmpid = DB::table('tbl_group')->where('id', $id)->update([
            'name' => $category,
            'Slug' => $Slug,
            'updated_at' => $date,
            'created_at' => $date,
            'isdelete' => 0,
        ]);
    }

    //add on

    public function getdataw($tabul, $colume, $condition, $table2)
    {
        $result = DB::table($tabul)
            ->leftJoin($table2, $tabul . '.cat_id', '=', $table2 . '.id')
            ->select($tabul . '.*', $table2 . '.*')
            ->where($tabul . '.' . $colume, $condition)
            ->orderBy($tabul . '.id', 'DESC')
            ->paginate(8);
        return $result;
    }
    public function getdatat($tabul, $colume, $condition, $table2)
    {
        $result = DB::table($tabul)
            ->leftJoin($table2, $tabul . '.cat_id', '=', $table2 . '.id')
            ->select($tabul . '.*', $table2 . '.*')
            ->where($tabul . '.' . $colume, $condition)
            ->orderBy($tabul . '.id', 'DESC')
            ->paginate(8);
        return $result;
    }
    public function GetDataAll($tabul, $table2)
    {
        $result = DB::table($tabul)
            ->leftJoin($table2, $tabul . '.cat_id', '=', $table2 . '.id')
            ->select($tabul . '.*', $table2 . '.name')
             ->where($tabul . '.isdelete' , 0)
            ->orderBy($tabul . '.id', 'DESC')
            ->get();
            
        return $result;
    }
}
