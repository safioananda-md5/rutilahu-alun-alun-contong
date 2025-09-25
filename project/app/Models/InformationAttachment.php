<?php

namespace App\Models;

use App\Models\Information;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformationAttachment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'information_attachments';

    protected $fillable = [
        'information_id',
        'filename'
    ];

    public function information()
    {
        return $this->belongsTo(Information::class);
    }
}
