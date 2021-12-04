@extends('adminlte::page')
@section('content')

<div>

    Add a seeder
</div>

<form method="POST" action="/seeders/createSeeder">
    @csrf
    <label>select a seeder </label>
<select id="seeder" name="Seeder">
    <option value="posts">Posts</option>
    <option value="users">Users</option>
    <option value="articles">Articles</option>

  </select>
<div>
    <label>Choose the count </label>
    <input type="number" id="count" value="0" name="count">
</div>
<div>
    <button type="submit">
        Add
    </button>
</div>
</form>


@endsection

