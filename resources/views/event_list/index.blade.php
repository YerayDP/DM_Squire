@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Events Lists</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('event_list.create') }}" class="btn btn-info">Add event</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>User Mail</td>
                    <td>Event Name</td>
                    <td>Rate</td>
                    <td>Commentary</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($events_list as $event_list)
                    <tr>
                        <td>{{ $event_list->id }}</td>
                        <td>{{ $event_list->user->email}}</td>
                        <td>{{ $event_list->event->name}}</td>
                        <td>{{ $event_list->rate }}</td>
                        <td>{{ $event_list->commentary }}</td>
                        
                        
                        <td><a href="{{ route('event_list.edit',$event_list->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('event_list.destroy', $event_list->id)}}" method="POST">
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                  <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro?')">Delete</button>
                </form>
            </td>
                    </tr>
                @empty
                </br>
                </br>
                <div class="alert alert-danger">
                    {{__("No events in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection
