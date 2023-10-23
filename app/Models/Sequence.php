<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sequence extends Model
{
    use HasFactory;

    protected $fillable = [
        'sequence',
        'category',
        'account_vot',
    ];

    public function vots(): HasMany
    {
        return $this->hasMany(Vot::class, 'sequence_id');
    }
}
