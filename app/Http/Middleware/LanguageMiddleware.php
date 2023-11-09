<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $subdomain = explode('.', $request->getHost())[0]; // Subdomain'ı al

        // Subdomain'e göre dil ayarları
        $locale = 'tr'; // Varsayılan dil
        if ($subdomain === 'en') {
            $locale = 'en';
        } elseif ($subdomain === 'ru') {
            $locale = 'ru';
        }

        // Uygulama dilini ayarla
        app()->setLocale($locale);

        // Dil ayarını oturumda sakla
        session()->put('locale', $locale);

        return $next($request);
    }
}
