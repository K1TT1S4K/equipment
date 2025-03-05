<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipment extends Model
{
    //

    public function equipment_documents() : HasMany {

        return $this->hasMany(Equipment_document::class);
    }
}
