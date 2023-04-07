<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    //notifications
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    //showing chirps
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
