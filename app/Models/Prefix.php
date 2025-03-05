<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 3fef48bc14544366ee69680f689bd460d547a870

class Prefix extends Model
{
    //
<<<<<<< HEAD
    protected $table = 'prefixes';
    protected $fillable = ['name'];
=======

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
>>>>>>> 3fef48bc14544366ee69680f689bd460d547a870
}
