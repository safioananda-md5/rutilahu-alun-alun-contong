<?php

namespace App\Models;

use App\Models\User;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submission extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'submissions';

    protected $fillable = [
        'submission_id',
        'user_id',
        'address',
        'no_rt',
        'no_rw',
        'revenue',
        'asset',
        'dependents',
        'building_area',
        'building_legality',
        'roof_condition',
        'wall_condition',
        'floor_condition',
        'certificate_of_domicile',
        'certificate_of_ownership',
        'statement_of_nodispute',
        'statement_of_neverreceivedassistance',
        'statement_of_sellthehouse',
        'statement_of_incomebelowminimumwage',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function survey()
    {
        return $this->hasMany(Survey::class);
    }
}
