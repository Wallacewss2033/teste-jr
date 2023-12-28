<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'position'
    ];

    public function collaborators(): BelongsToMany
    {
        return $this->belongsToMany(Collaborator::class)
            ->using(EmployeePosition::class)
            ->withPivot(
                'job_id',
                'collaborator_id',
                'performance_note'
            );
    }
}
