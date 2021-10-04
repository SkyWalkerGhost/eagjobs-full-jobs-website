<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public $primaryKey = 'id';
    
    protected $fillable = ['name'];

    public function categoryName()
    {
        if(Str::length($this->name) > 18) {
            return Str::limit($this->name, 18);
        } else {
            return $this->name;
        }
    }
}
