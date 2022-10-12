<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'quantity','amount','quantity','user','order','status','refno','CMS0023',
    ];
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('refno','like','%'.request('search').'%')
            ->orWhere('number','like','%'.request('search').'%');
        }
    }
        

}
