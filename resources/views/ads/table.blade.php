@foreach($advertisements as $advertisement)
    <tr>
        <td>{{ $advertisement->id }}</td>
        <td>{{ $advertisement->user->name }} {{ $advertisement->user->last_name }}</td>
        <td><img src="{{ $advertisement->image }}" style="height: 150px; width: auto;" id="main" alt="alt text"></td>
        <td>{{ $advertisement->title }}</td>
        <td>{{ $advertisement->description }}</td>
        <td>{{ $advertisement->created_at }}</td>
        <td><a class="btn btn-success" href="{{ route('advertisements.show', [$advertisement->id]) }}" role="button" title="@lang('Show')">Show</a></td>
    </tr>
@endforeach