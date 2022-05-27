<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kode extends Model
{
    use HasFactory;

    protected $table = "kodes";

    public function bajus(){
        return $this->hasMany(baju::class,'kodeBaju');
    }
}
