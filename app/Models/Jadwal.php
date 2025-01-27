<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_jadwal',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function swimmingClass()
    {
        return $this->belongsTo(Swimming_Class::class, 'class_id');
    }
}
