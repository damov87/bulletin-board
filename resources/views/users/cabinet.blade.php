@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <a class="navbar-brand cabinet-links" href="{{ route('users.edit', [$user->id ?? '']) }}">
                        Edit Account Info
                    </a>
                    <a class="navbar-brand cabinet-links" href="{{ route('advertisements.create') }}">
                        Add Advertisement
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
