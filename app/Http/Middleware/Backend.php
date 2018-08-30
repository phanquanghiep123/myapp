<?php
namespace App\Http\Middleware;
use App;
use Closure;
class Backend
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin = session('_USER');
        if($admin == null || @$admin->is_sys != 1) return redirect()->route("backend.getlogin");
        return $next($request);
    }
}
