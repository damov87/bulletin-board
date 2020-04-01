@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($advertisements as $advertisement)
        <div class="row">
            <div class="col-4">
                <img src="{{ $advertisement->image }}" class="img-centered smaller">
                <div style="text-align: center">{{ ucfirst (utf8_encode ($advertisement->created_at->formatLocalized('%d %B %Y, %H:%M:%S'))) }}</div>
            </div>
            <div class="col">
                <h1>{{ $advertisement->title }}</h1>
                <span>{{ $advertisement->description }}</span>
                <h4 style="text-align: right; margin-right: 2rem;">Author: {{ $advertisement->user->name }} {{ $advertisement->user->last_name }}</h4>
                <a class="btn btn-primary" href="{{ route('advertisements.show', [$advertisement->id]) }}" role="button" style="margin-top: -2rem" title="@lang('View')">View</a>
            </div>

        </div>
            <hr>
        @endforeach
    </div>
    <div id="pagination" style="margin-left: 25rem" class="box-footer">
        {{ $advertisements->links() }}
    </div>
@endsection