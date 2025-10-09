<?php

namespace App\Models;

use App\Models\BatchItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Batch extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'batches';

    protected $fillable = [
        'name',
        'year',
        'month',
        'status',
    ];

    public function batchitem()
    {
        return $this->hasMany(BatchItem::class);
    }
}
