<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTestScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'knowledge_score',
        'motivasi_score',
        'self_efficacy_score',
        'niat_score',
        'keterampilan_score',
        'perilaku_score',
        'taken_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
