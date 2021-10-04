<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyReview extends Model
{
    use HasFactory;

    protected $table = 'company_reviews';

    public $primaryKey = 'id';
    
    protected $fillable = ['point', 'vacancy_id'];
}
