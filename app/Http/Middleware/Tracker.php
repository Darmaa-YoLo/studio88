<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

class Tracker
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
        // $agent = new Agent();
        $agent=new CrawlerDetect();
        
        if ($agent->isCrawler()) {
            \Config::set('session.driver', 'array');
        }

        return $next($request);

        $geoip = geoip($request->ip());

        $countryCode = $geoip->iso_code;
        $countryName = $geoip->country;        
        $platform = $agent->platform();
        $browser = $agent->browser();

        DB::table('sessions')->insert([
            'country_code' => $countryCode,
            'country_name' => $countryName,
            'device_type' => $this->getDevice(),
            'platform' => $platform,
            'browser' => $browser,
            'created' => date('Y-m-d H:i:s')
        ]);

        $request->session()->put('tracked', true);

        return $next($request);
    }

    public function getDevice()
    {
        $agent = new Agent();
        $deviceType = '';
        
        if ($agent->isDesktop())
        {
            $deviceType = 'desktop';
        } elseif ($agent->isTablet())
        {
            $deviceType = 'tablet';
        } elseif($agent->isMobile()) {
            $deviceType = 'mobile';            
        }

        return $deviceType;
    }

}