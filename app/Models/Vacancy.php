<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Vacancy extends Model
{
    use HasFactory;

    const STANDARD_VACANCY      = 'Standard';
    const VIP_VACANCY           = 'VIP';
    const GOLD_VACANCY          = 'GOLD';
    const PRIME_VACANCY         = 'PRIME';
    const PENDING_STATUS        = 'pending';
    const APPROVED_STATUS       = 'approved';
    const DEFAULT_PRICE         = 5;
    const VIP_PRICE             = 10;
    const GOLD_PRICE            = 15;
    const PRIME_PRICE           = 20;
    const DEFAULT_SALARY        = 300;

    protected $table = 'vacancies';

    public $primaryKey = 'id';
    
    protected $fillable = [
        'order_id',
        'name',
        'education',
        'salary',
        'work_schedule',
        'job_description',
        'qualification_requirements',
        'vacancy_type',
        'amount_price',
        'category_id',
        'experience_id',
        'language_id',
        'location_id',
        'company_id',
        'job_status',
        'vacancy_view',
        'start_time',
        'end_time',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class, 'vacancy_id', 'id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
    
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function location()
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
    
    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'language_id');
    }

    public function experience()
    {
        return $this->hasOne(Experience::class, 'id', 'experience_id');
    }

    public function vacancyName()
    {
        if(Str::length($this->name) > 70) {
            return Str::limit($this->name, 70);
        } else {
            return $this->name;
        }
    }
}
