<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Mcp\Request;

class Major extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'desc',
    'slug',
    'icon',
    'status',
];


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function imagUrl()
    {
        if ($this->image && filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        } elseif ($this->image) {
            return asset('storage/' . ltrim($this->image, '/'));
        } else {
            return asset('client/assets/images/major.jpg');
        }
    }
}
