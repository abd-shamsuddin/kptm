<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vot extends Model
{
    use HasFactory;

    protected $fillable = [
        'sequence_id',
        //'account_code',
        //'account_vot',
    ];

    public function invoiceLines(): HasMany
    {
        return $this->hasMany(InvoiceLine::class, 'vot_id');
    }

    public function sequence(): BelongsTo
    {
        return $this->belongsTo(Sequence::class);
    }


}
