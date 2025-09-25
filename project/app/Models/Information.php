<?php

namespace App\Models;

use App\Models\InformationAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'informations';

    protected $fillable = [
        'title',
        'slug',
        'body',
        'small_thumbnail',
        'big_thumbnail'
    ];

    public function attachment()
    {
        return $this->hasMany(InformationAttachment::class);
    }
}
