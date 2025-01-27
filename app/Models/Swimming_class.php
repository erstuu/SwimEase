<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Swimming_Class extends Model
{
    protected $table = 'swimming_class';
    protected $primaryKey = 'id_class';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_class',
        'jadwal_id',
        'deskripsi',
        'kelas',
        'instruktur',
        'kuota',
        'harga',
        'status',
    ];

    // Relasi ke jadwal
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id_jadwal');
    }

    // Relasi ke pendaftaran (enrollments)
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'class_id', 'id_class');
    }
}
