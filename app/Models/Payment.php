<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;

    const PAYABLE_STATUS        = 'გადასახდელი';
    const PAYED_STATUS          = 'გადახდილია';
    
    protected $table = 'payments';

    public $primaryKey = 'id';
    
    protected $fillable = [
        'vacancy_id',
        'company_id',
        'payment_status',
        'payment_time',
    ];

    public function vacancy()
    {
        return $this->hasOne(Vacancy::class, 'id', 'vacancy_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}
