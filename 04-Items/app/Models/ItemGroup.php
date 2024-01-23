<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ItemGroup
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ItemGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemGroup query()
 * @mixin \Eloquent
 */
class ItemGroup extends Model
{
    use HasFactory;

    protected $fillable = ["name"];
}
