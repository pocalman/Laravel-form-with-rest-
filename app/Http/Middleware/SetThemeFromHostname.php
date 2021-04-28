<?php

namespace App\Http\Middleware;

use Closure;
use Theme;

class SetThemeFromHostname
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
        // dd(request()->getHttpHost());
        switch(request()->getHttpHost()){
            // case 'guide.qfq.com':
            case 'guide.qfq.local':
                Theme::Set('qfq');
                break;
            case 'guide.electrogene.ca':
            case 'collection.lienmultimedia.ca':
            case 'collection.lienmultimedia.local':
            default:
                Theme::Set('colnum');
                break;

        }
        return $next($request);
    }
}
