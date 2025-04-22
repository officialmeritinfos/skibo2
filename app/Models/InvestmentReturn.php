<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentReturn extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function investmentModel()
    {
        return $this->belongsTo(\App\Models\Investment::class, 'investment');
    }

}
