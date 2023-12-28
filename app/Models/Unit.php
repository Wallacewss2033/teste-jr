<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'business_name',
        'social_reason',
        'cnpj',
    ];

    public function collaborators(): HasOne
    {
        return $this->hasOne(Collaborator::class);
    }
}
