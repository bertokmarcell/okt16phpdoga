<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['time'])]
class basket extends Model
{
    /** @use HasFactory<\Database\Factories\BasketFactory> */
    use HasFactory;
    protected function casts(): array
    {
        return [
            'time' => 'datetime',  
        ];
    }
}
