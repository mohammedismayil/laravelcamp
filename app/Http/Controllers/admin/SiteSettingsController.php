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

        $sitesetting = SiteSettings::get();
        // dd(request());
        $sitesetting[0]->value = request("default_language");
        $sitesetting[1]->value = request("default_currency");
        $sitesetting[2]->value = request("google_api_key");
        $sitesetting[3]->value = request("app_url");
        $sitesetting[0]->save();
        $sitesetting[1]->save();
        $sitesetting[2]->save();
        $sitesetting[3]->save();
        return redirect('/admin/site_settings');
    }
}
