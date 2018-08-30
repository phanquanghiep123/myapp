<?php
namespace App\Http\Middleware;
use App;
use Closure;
class Frontend
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
        $USER = session('_USERFRONTEND');
        if($USER == null ) return redirect()->route("frontend.getlogin");
        return $next($request);
    }
}
