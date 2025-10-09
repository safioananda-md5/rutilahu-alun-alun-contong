<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BatchItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'batch_items';

    protected $fillable = [
        'batch_id',
        'submission_id',
        'rank',
    ];

    public function batch()
    {
        return $this->belongsTo(batch::class);
    }

    public function submission()
    {
        return $this->belongsTo(submission::class);
    }
}
