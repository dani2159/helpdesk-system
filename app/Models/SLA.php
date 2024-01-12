<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SLA extends Model
{
    use HasFactory;

    protected $guard = 'web';
    protected $table = 'sla';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'response',
        'resolution',
        'warning'
    ];


}
