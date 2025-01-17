<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!auth()->check()) {
            return redirect('user/login');
        }

        if ($role === 'admin' && auth()->user()->user_role !== 'admin') {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        return $next($request);
    }
}
?>
