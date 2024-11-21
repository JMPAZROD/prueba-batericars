<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    use HasFactory;

    /**
     * Get the Users() for the publication .
     */
    public function Users()
    {
        return $this->hasMany('App\Models\User','id_city','id');
    }
}
