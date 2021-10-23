<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Languages;
use App\Models\SiteSettings;
use GuzzleHttp\Psr7\Request;

use function PHPUnit\Framework\isEmpty;

// use Illuminate\Http\Request;
// use App\Models\Articles;
// use App\Models\Users;

class SiteSettingsController extends Controller
{

    public function getSiteSettingData()
    {

        $site_settings = SiteSettings::latest()->get();

        $languages = Languages::latest()->get();


        $currencies = Currency::latest()->get();

        return view(
            'admin.site_settings',
            compact('languages', 'currencies', 'site_settings')
        );

    }
    public function editSiteSettings()
    {

        $sitesetting = SiteSettings::find(1);
        // $sitesetting = new SiteSettings();
        $sitesetting->default_language = request("language");
        $sitesetting->default_currency = request("currency");
        $sitesetting->api_key = request("apikey");
        $sitesetting->app_url = request("appurl");
        $sitesetting->save();
        return redirect('/admin');
    }
}