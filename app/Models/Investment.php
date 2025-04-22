<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function packageModel()
    {
        return $this->belongsTo(\App\Models\Package::class, 'package');
    }


}
