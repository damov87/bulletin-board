@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($advertisements as $advertisement)
            {{ $advertisement->title }}
        @endforeach
    </div>

    {{--    {{ $advertisements->links() }}--}}
@endsection