<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingFonnte extends Model
{
    use HasFactory;
    protected $guard = 'web';
    protected $table = 'setting_fonnte';
    protected $primaryKey = 'id';
    protected $fillable = [
        'token',
        'no_hp',
        'id_group'
    ];
}
