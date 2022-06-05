@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Races</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('races.create') }}" class="btn btn-info">Add races</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Speed</td>
                    <td>Ability Score Increase</td>              
                    <td>Languajes</td>
                    <td>Proficencies</td>
                    <td>Traits</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($races as $race)
                    <tr>
                        <td>{{ $race->id }}</td>
                        <td>{{ $race->name }}</td>
                        <td>{{ $race->speed }}</td>
                        <td>{{ $race->ASI }}</td>
                        <td>{{ $race->languajes }}</td>
                        <td>{{ $race->proficencies }}</td>
                        <td>{{ $race->traits }}</td>
                        
                        <td><a href="{{ route('races.edit',$race->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('races.destroy', $race->id)}}" method="POST">
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
                    {{__("No Races in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection
