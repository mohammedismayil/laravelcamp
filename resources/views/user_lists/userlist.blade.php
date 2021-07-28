
{{-- @extends('layout') --}}
{{-- @section('content') --}}
<div>
    will show user list from database here
</div>

<div>

    @foreach ($users as $user)
    <div>
        <li>{{$user->email}}</li>
        {{-- <li>{{$user->password}}</li> --}}
    </div>

    @endforeach
</div>
{{-- @endsection --}}
