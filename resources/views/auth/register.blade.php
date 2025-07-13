@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">Register</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register.save') }}">
                    @csrf
                    <div class="mb-3">
                        <label>Name</label>
                        <input name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
                    <a href="/login" class="btn btn-link">Already have an account?</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
