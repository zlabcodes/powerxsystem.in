<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function show() {
        $seo = [
            'title' => 'PowerX Systems | Inverters, Batteries, Solar Solutions & Water Purifiers in Payyanur, Kannur',
            'description' => 'PowerX Systems offers top-quality inverters, batteries, solar water heaters, and water purifiers in Payyanur, Kannur since 1998. Trusted sales & service for V-Guard, Luminous, Kent & more.',
            'keywords' => 'inverters Payyanur, solar water heaters Kannur, water purifiers Kerala, battery sales, solar inverters, V-Guard, Luminous, Kent, PowerX Systems Kannur',
            'author' => 'PowerX Systems Team',
            'robots' => 'index, follow',
            'og_title' => 'PowerX Systems - Your Trusted Power & Water Solutions Provider in Kannur',
            'og_description' => 'Discover reliable inverters, solar solutions, and water purifiers with PowerX Systems in Payyanur, Kerala. Serving since 1998.',
            'og_image' => asset('images/meta/social.png'),
            'og_url' => url('/'),
            'twitter_title' => 'PowerX Systems Payyanur - Power & Water Solutions',
            'twitter_description' => 'Quality inverters, solar heaters, and purifiers since 1998 in Kannur, Kerala.',
            'twitter_image' => asset('images/meta/social.png'),
        ];

        return view('pages.home', compact('seo'));
    }
}
