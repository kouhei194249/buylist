<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'price',
        'rank',
        'other',
    ];
   
   public function getPaginateByLimit(int $limit_count = 10)
   {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
   }
   

   
   //Categoryに対するリレーション

   //「1対多」の関係なので単数系に
   public function category()
   {
        return $this->belongsTo('App\Category');
   } 
   
   
}
