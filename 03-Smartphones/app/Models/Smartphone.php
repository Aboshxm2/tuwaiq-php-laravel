<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Smartphone
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone query()
 * @mixin \Eloquent
 */
class Smartphone extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "color"
    ];
}
