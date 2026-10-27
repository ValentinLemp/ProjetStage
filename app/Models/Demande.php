<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class demande extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function statut(): BelongsTo
    {
        return $this->belongsTo(Statut::class);
    }

    protected $casts = [
        'dueDate' => 'date',
    ];
}
