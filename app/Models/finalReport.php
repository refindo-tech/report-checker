<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finalReport extends Model
{
    use HasFactory;

    protected $table = 'final_reports';

    protected $fillable = [
        'user_id',
        'status',
        'berkas',
        'feedback',
        'nilai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
