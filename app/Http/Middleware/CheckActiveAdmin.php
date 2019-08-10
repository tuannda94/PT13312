<?php

namespace App\Http\Middleware;

use Closure;

class CheckActiveAdmin
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
        // 1. Lay ra thong tin cua thang Admin da dang nhap
        $user = $request->user();

        // 2. Kiem tra user co active hay khong
        if ($user->is_active == 0) {
            // Neu khong quay ve man login
            return abort(403, 'Khong co quyen!');
        }

        // 3. Tiep tuc chuyen huong
        return $next($request);
    }
}
