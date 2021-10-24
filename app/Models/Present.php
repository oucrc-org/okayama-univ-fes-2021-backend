<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Present
 *
 * @property string $id
 * @property string $name
 * @property string $image_path
 * @property integer $required_stamps
 * @property integer $stock
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Present extends Model
{
    protected $fillable = [
        'name',
        'image_path',
        'required_stamps',
        'stock',
    ];
}
