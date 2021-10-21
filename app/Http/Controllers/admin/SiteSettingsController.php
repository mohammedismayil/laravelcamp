<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSettings;
use GuzzleHttp\Psr7\Request;

// use Illuminate\Http\Request;
// use App\Models\Articles;
// use App\Models\Users;

class SiteSettingsController extends Controller
{

    public function getSiteSettingData()
    {

        $site_settings = SiteSettings::latest()->get();

        if ($site_settings == null) {

            $empty_site_settings = new SiteSettings();

            $empty_site_settings->default_language = "";
            $empty_site_settings->default_currency = "";
            $empty_site_settings->api_key = "";
            $empty_site_settings->app_url = "";


            return view(
                'admin.site_settings',
                ['site_settings' => $empty_site_settings]
            );
        } else {
            return view(
                'admin.site_settings',
                ['site_settings' => $site_settings]
            );
        }

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
