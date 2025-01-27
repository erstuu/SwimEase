<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Ini harus ditambahkan
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable  // Pastikan model User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'email',
        'no_telepon',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'role',
        'status',
        'password',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid(); // Generate UUID for primary key
        });
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class, 'user_id', 'id');
    }
}
