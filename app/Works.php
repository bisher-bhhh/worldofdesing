<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;
class Works extends Model
{
    protected $table = 'works';
    protected $fillable = ['title','lang','categories_id','start_date','end_date','location','clients','description','image'];
   
    public function getCategoriesIdAttribute($value){
        return unserialize($value);
    }
    public function images()
    {
        return $this->hasMany(Images::class, 'project_id');
    }
   
}
