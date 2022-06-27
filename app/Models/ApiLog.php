<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    use HasFactory;
    public $incrementing = true;

    protected $fillable = ['ip_adress', 'method', 'endpoint', 'data'];

    protected $attributes = [
        'ip_adress' => '1234',
        'method' => 'method',
        'endpoint' => '8629',
        'data' => 'test',
    ];

    protected $table = 'api_logs';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
}
