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
        'image_path',
        'other',
    ];
   
   public function getPaginateByLimit(int $category_box, int $limit_count = 10)
   {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->where("category_id", $category_box)->paginate($limit_count);
   }
   

   
   //Categoryに対するリレーション

   //「1対多」の関係なので単数系に
   public function category()
   {
        return $this->belongsTo('App\Category');
   } 
   
   
}
