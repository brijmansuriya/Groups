<?php

namespace App\Models\Admin;


use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    protected  $table="tbl_type";
    // public $timestamps = false;
    // protected $dateFormat = 'U';
    protected $attributes = [
        'delayed' => false,
    ];
}
