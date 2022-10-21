<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
       protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
        'status',
        'createdBy'
    ];

    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%');
        }
    }
}
