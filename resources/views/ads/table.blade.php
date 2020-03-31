@foreach($advertisements as $advertisement)
    <tr>
        <td>{{ $advertisement->id }}</td>
        <td>{{ $advertisement->title }}</td>
        <td>{{ $advertisement->user->name }} {{ $advertisement->user->last_name }}</td>
    </tr>
@endforeach

