<?php

namespace App\Repositories\Company;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class CompanyRepository
{
    public function __construct(Request $request, Company $company, Vacancy $vacancy,)
    {
        $this->request  = $request;
        $this->company  = $company;
        $this->vacancy  = $vacancy;
    }

    public function myVacancy()
    {
        return $this->vacancy->with([
            'company', 
            'payment', 
            'category', 
            'location', 
            'language', 
            'experience', 
            ])
            ->where('job_status', Vacancy::PENDING_STATUS)
            ->where('company_id', auth()->guard('company')->id())
            ->latest()
            ->paginate(10);
    }

    public function showOrder()
    {
        return $this->vacancy->with([
            'company', 
            'payment', 
            'category', 
            'location', 
            'language', 
            'experience', 
            ])
            ->where('order_id', $this->request->order_id)
            ->where('company_id', auth()->guard('company')->id())
            ->latest()
            ->firstOrFail();
    }

    public function getAuthCompany()
    {
        return $this->company->where('id', auth()->guard('company')->id())->firstOrFail();
    }

    public function imagePath()
    {
        return public_path() . '/storage' . str_replace('public', "", auth()->guard('company')->user()->photo);
    }

    public function checkImageExists()
    {
        return $this->request->hasFile('photo') 
                ? $this->request->file('photo')->store('public/logo') 
                : auth()->guard('company')->user()->photo;
    }

    public function removeOrUpdateImage()
    {
        if($this->request->hasFile('photo')) {

            if(File::exists($this->imagePath())) {
                File::delete($this->imagePath());
            }
        }
    }

    public function updateCompanyProfile()
    {
        $this->removeOrUpdateImage();

        return $this->getAuthCompany()->update([
            'website'           => $this->request->website,
            'facebook'          => $this->request->facebook,
            'about_company'     => $this->request->about_company,
            'photo'             => $this->checkImageExists(), 
        ]);
    }
}
