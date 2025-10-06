<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RTRW extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rtrws';

    protected $fillable = [
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
