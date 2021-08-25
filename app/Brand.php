<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model // đủ phương thức : thêm., sửa xóa,.. cập nhật trong class Model
{
    protected $table = 'brands';
    //public $timestamps = false;
}
