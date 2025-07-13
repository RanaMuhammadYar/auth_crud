@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info text-white">Edit Profile</div>
            <div class="card-body">
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Name</label>
                        <input name="name" value="{{ old('name', $user->name) }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Phone</label>
                        <input name="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control">{{ old('bio', $user->bio) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Avatar</label>
                        @if($user->avatar)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $user->avatar) }}" width="100">
                            </div>
                        @endif
                        <input type="file" name="avatar" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Update Profile</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
