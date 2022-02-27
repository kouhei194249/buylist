<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getPaginateByLimit(int $limit_count = 10)
    {
      // updated_atで降順に並べたあと、limitで件数制限をかける
      return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

//thingに対するリレーション

//「1対多」の関係なので'posts'と複数形に
    public function things()   
    {
      return $this->hasMany('App\Thing');  
    }
  
}
