<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sessions extends Model
{
    use HasFactory;

    protected $fillable = [
        'formation_id',
        'date_sessions',
        'lieu',
        'formateur_id'

    ];

    public function formations(): BelongsToMany {
        return $this->belongsToMany(Formation::class);
    }

    public function formateur(): BelongsTo {
        return $this->belongsTo(Formateur::class);

    }
}
