<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSession
{
    public function handle($request, Closure $next)
{
    if (!Auth::check()) {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => 'Session expired'], 401);
        }
        
        // Set session flash
        session()->flash('session_expired', true);
        
        return redirect()->route('login');
    }

    return $next($request);
}

}
