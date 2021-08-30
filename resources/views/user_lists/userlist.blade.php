{{-- @extends('layout') --}}
{{-- @section('content') --}}
<div>
    will show user list from database here ok
</div>

<div class="flex flex-wrap">



    @foreach ($users as $user)
        <div class="w-1/2 bg-red-500 h-32">
            {{ $user->email }}
            {{-- <li>{{$user->password}}</li> --}}
        </div>

    @endforeach
</div>
{{-- @endsection --}}
