<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebillet extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
