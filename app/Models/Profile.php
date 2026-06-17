<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'user_id', 
        'hamil_ke',
        'tanggal_lahir_bayi',
        'pendidikan', 
        'pekerjaan', 
        'hpht', 
        'bb_sebelum_hamil', 
        'bb_sekarang', 
        'masalah_kehamilan',
        'persetujuan_penelitian',
        'persetujuan_data',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
