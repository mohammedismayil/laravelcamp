@extends('adminlte::page')
@extends('layout')
@section('content')
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Holy smokes!</strong>
    <span class="block sm:inline">Something seriously bad happened.</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </span>
  </div>
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
