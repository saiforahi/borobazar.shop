<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckAnswers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request,Closure $next)
    {
        if(User::where('cell',$request->cell)->exists() && User::where('cell',$request->cell)->first()->donars->blood_group==$request->bloodGroup){
            return $next($request);
        }
        return back()->withErrors('অনুগ্রহ করে সঠিক তথ্য দিন');
    }
}
