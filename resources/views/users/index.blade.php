@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Articulos</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('background.create') }}" class="btn btn-info">Add background</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Skill Proficencies</td>
                    <td>Tools Proficencies</td>
                    <td>Languajes</td>
                    <td>Equipment Proficencies</td>
                    <td>Traits</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($backgrounds as $background)
                    <tr>
                        <td>{{ $background->id }}</td>
                        <td>{{ $background->name }}</td>
                        <td>{{ $background->skills_prof }}</td>
                        <td>{{ $background->tools_prof }}</td>
                        <td>{{ $background->languajes }}</td>
                        <td>{{ $background->SE_prof }}</td>
                        <td>{{ $background->traits }}</td>
                        
                        <td><a href="{{ route('background.edit',$background->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('background.destroy', $background->id)}}" method="POST">
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
                    {{__("No Backgrounds in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection
