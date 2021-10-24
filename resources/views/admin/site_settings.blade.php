@extends('adminlte::page')
@section('content')
    <form method="POST" action="/admin/editsitesettings">
        @csrf

        @foreach ($site_settings as $site_setting)
            <div>


                @if ($site_setting->key == 'default_language')
                    <label> {{ $site_setting->title }} </label>
                    <select name="default_language" id="default_language">
                        @foreach ($languages ?? '' as $language)
                            <option value="default_language">{{ $language->value }}</option>
                        @endforeach
                    </select>
                @elseif ($site_setting->key == 'default_currency')

                    <label> {{ $site_setting->title }} </label>
                    <select name="default_currency" id="default_currency">
                        @foreach ($currencies ?? '' as $currency)
                            <option value="currency">{{ $currency->value }}</option>
                        @endforeach
                    </select>
                @else
                    <label> {{ $site_setting->title }} </label>
                    <input type="text" id="{{ $site_setting->key }}" value="{{ $site_setting->value }}" name="{{ $site_setting->key }}">
                @endif
            </div>


        @endforeach

        <button type="submit">Submit</button>

    </form>
@endsection
