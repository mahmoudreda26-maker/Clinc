<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Major extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
        public function imagUrl()
        {
            if($this->image && filter_var($this->image,FILTER_VALIDATE_URL)){
                return $this->image;
            }elseif( $this->image){
                return asset("storage/{$this->image}");
            }else{
                return asset("client/assets/images/major.jpg");
            }
        }
}
