<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'completed'
    ];

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $casts = [
        'completed' => 'boolean',
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
