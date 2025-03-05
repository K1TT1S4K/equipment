<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Title extends Model
{
    //
    public function equipments() : HasMany {
        return $this->hasMany(Equipment::class);
    }
}
