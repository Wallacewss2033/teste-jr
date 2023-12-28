<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeePosition extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'job_id',
        'collaborator_id',
        'performance_note',
    ];

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
}
