<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';

    public $primaryKey = 'id';
    
    protected $fillable = [
        'order_id',
        'payment_id',
        'vacancy_id',
        'company_id',
        'invoice_send_time',
    ];

    public function vacancy()
    {
        return $this->hasOne(Vacancy::class, 'id', 'vacancy_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'vacancy_id');
    }
}
