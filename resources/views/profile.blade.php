@extends('master')
@section('content')
<div class="container">
    <h1>Profile page</h1>
    @if (Auth::check())
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
    @else
        <p>You are not logged in.</p>
    @endif

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

</div>

@endsection