<?php

namespace App\Http\Middleware;

use Closure;
use App;

class checkip
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
        $model  = new \App\permission();

        $permission = $model->getIPv4();

        foreach($permission as $item){
            if ($item->ipv4 == $_SERVER["REMOTE_ADDR"]){
                return $next($request);
            }
        }


        return \redirect('/?a='.json_encode($permission));
    }
}
