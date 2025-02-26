<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class department extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];
    public function employee():HasMany
    {
        return $this->hasMany(employee::class);
    }
}
