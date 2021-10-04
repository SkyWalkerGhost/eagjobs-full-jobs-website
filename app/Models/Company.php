<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class Company extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $guard = 'company';

    protected $table = 'companies';

    public $primaryKey = 'id';

    protected $fillable = [
        'identity_id',
        'name',
        'email',
        'password',
        'status',
        'website',
        'facebook',
        'about_company',
        'facebook',
        'photo',
        'remember_token',
    ];

    protected $hidden = [
            'password', 'remember_token',
        ];

    public function vacancy()
    {
        return $this->hasMany(Vacancy::class, 'company_id');
    }
}
