<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Medicine extends Model
{

    use HasFactory;
        protected $fillable = [
            'name',
            'description',
            'price',
            'manufacturer',
            'expiration_date',
            'stock',
            'categories_id'
        ];
    
        protected $casts = [
            'expiration_date' => 'date',
            'price' => 'decimal:2',
        ];

        public function categories()
    {
        return $this->belongsTo(Categories::class,'categories_id', 'id');
    }


    

}
