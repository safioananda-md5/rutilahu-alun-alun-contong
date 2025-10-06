<?php

namespace App\Models;

use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surveys';

    protected $fillable = [
        'submission_id',
        'picname'
    ];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
