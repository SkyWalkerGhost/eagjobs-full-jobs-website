<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Vacancy;

class CountingVacancyView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Vacancy::findOrFail($request->vacancy_id)->increment('vacancy_view');

        return $next($request);
    }
}
