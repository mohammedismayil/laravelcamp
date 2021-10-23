@extends('adminlte::page')
@section('content')
    <form method="POST" action="/admin/editsitesettings">
        @csrf

        @foreach ($site_settings as $site_setting)
        <div>


            @if ($site_setting->key == 'default_language')
            <label> {{$site_setting->title}} </label>
            {{-- @php(dd($languages ?? '')) --}}
            <select name="languages" id="languages">
                @foreach ($languages ?? '' as $language)
                <option value="english">{{ $language->value }}</option>
                @endforeach


            </select>
            @elseif ($site_setting->key == 'default_currency')

            <label> {{$site_setting->title}} </label>
            {{-- @php(dd($languages ?? '')) --}}
            <select name="currency" id="currency">
                @foreach ($currencies ?? '' as $currency)
                <option value="currency">{{ $currency->value }}</option>
                @endforeach


            </select>
            @else

            <label> {{$site_setting->title}} </label>
    <input type="text" value="{{ $site_setting->value }}">

    @endif





        </div>


        @endforeach

        <button type="submit">Submit</button>

    </form>
@endsection
