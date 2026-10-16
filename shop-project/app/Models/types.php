<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'description'])]
class types extends Model
{
    /** @use HasFactory<\Database\Factories\TypesFactory> */
    use HasFactory;
    protected function casts(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
        ];
    }
    
}
