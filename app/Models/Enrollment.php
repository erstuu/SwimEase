<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';
    protected $primaryKey = 'enrollments_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'enrollments_id',
        'user_id',
        'class_id',
        'tanggal_daftar',
        'status_pembayaran',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->enrollments_id = Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function swimmingClass()
    {
        return $this->belongsTo(Swimming_Class::class, 'class_id');
    }
}
