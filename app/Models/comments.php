<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'post_id', 'comment'
    ];
    public function user()
    {
        return $this->belongsTo(User);
    }
}
