@extends('adminlte::page')
@section('content')
    <form method="POST" action="/admin/editsitesettings">
        @csrf
        <div>
            <div>
                <p>Default language</p>

            </div>
            <div>
                <select name="language" id="language">
                    @foreach ($site_settings as $site_setting)
                    @if (!($loop->first))
                    <option value="inr">{{ $site_setting->languages }}</option>
                    @endif
                    @endforeach
                </select>

            </div>

        </div>
        <div>
            <div>
                <p>Default Currency</p>

            </div>
            <div class="">
                <select name="currency" id="currency">

                    @foreach ($site_settings as $site_setting)
                    @if (!($loop->first))
                    <option value="inr">{{ $site_setting->currency }}</option>
                    @endif
                    @endforeach

                </select>

            </div>

        </div>

        <p>API Key</p>

        <input type="text" name="apikey" id="apikey" value="{{ $site_settings[0]->api_key }}">

        <p>App URL</p>

        <input type="text" name="appurl" id="appurl" value="{{ $site_settings[0]->app_url }}">


        <button type="submit">Submit</button>

    </form>
@endsection
