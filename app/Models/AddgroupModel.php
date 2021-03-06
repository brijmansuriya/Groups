<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class AddgroupModel extends Model
{
    use HasFactory;
    public $table = "tbl_group";

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
            ->select($tabul . '.*', $table2 . '.*')
            // ->where($tabul . '.' . $colume, $condition)
            ->orderBy($tabul . '.id', 'DESC')
            ->get();
        return $result;
    }

}
