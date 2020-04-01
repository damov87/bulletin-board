@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-centered">{{ $advertisement->title }}</h1>
        </div>

        <div class="col-md-8 offset-md-2">
            <img src="{{ $advertisement->image }}" class="img-centered">
        </div>

        <div class="col-md-8 offset-md-2">
            <span class="description">{{ $advertisement->description }}</span>
        </div>

        <div class="col-md-8 offset-md-2">
            <h4>Author: {{ $advertisement->user->name }} {{ $advertisement->user->last_name }}</h4>
        </div>

        <div class="col-md-8 offset-md-2">
            <span class="publication">Publication date: {{ ucfirst (utf8_encode ($advertisement->created_at->formatLocalized('%d %B %Y, %H:%M:%S'))) }}</span>
        </div>

    </div>
@endsection