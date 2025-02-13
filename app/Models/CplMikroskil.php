<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CplMikroskil extends Model
{
    use HasFactory;

    protected $table = 'mikroskill';

    protected $fillable = [
        'id_kampus',
        'name',
        'sks',
    ];

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'id_kampus');
    }
}
