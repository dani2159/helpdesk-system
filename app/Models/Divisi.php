<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $guard = 'web';
    protected $table = 'divisis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_group',
        'nama_divisi',
        'keterangan',
    ];
}
