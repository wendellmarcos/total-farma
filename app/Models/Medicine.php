<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

        protected $fillable = [
            'name',
            'description',
            'price',
            'manufacturer',
            'expiration_date',
            'stock',
        ];
    
        protected $casts = [
            'expiration_date' => 'date',
            'price' => 'decimal:2',
        ];


    

}
