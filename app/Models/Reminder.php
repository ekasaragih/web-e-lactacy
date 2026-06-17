<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $table = 'reminders';
    
    protected $fillable = [
        'user_id',
        'tanggal', 
        'nama_alarm',
        'jam', 
        'hari', 
        'deskripsi', 
        'snooze', 
        'max_snooze', 
        'aktif',
        'dismissed_at',
        'snooze_until',
    ];
}
