<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chart extends Model
{
    use HasFactory;
    protected $table = "char";
    protected $primaryKey = "id";
    protected $guarded = [''];

    /**
     * Get the user that owns the Chart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the layout for the Chart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function layout(): BelongsTo
    {
        return $this->belongsTo(layout::class, 'product_id', 'id');
    }
}
