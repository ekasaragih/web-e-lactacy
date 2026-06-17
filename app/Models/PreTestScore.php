<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreTestScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'knowledge_score',
        'sikap_score',
        'motivasi_score',
        'self_efficacy_score',
        'niat_score',
        'dukungan_sosial_score',
        'taken_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
