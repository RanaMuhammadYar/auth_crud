
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary text-white">Dashboard</div>
            <div class="card-body">
                <h5>Welcome, {{ Auth::user()->name }}!</h5>

                <a href="{{ route('profile.edit') }}" class="btn btn-warning btn-sm mb-3">Edit Profile</a>

                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
