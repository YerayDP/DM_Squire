@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Weapons</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('weapons.create') }}" class="btn btn-info">Add weapons</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Properties</td>
                    <td>DMG</td>
                    <td>Weight</td>
                    <td>Type</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($weapons as $weapon)
                    <tr>
                        <td>{{ $weapon->id }}</td>
                        <td>{{ $weapon->name }}</td>
                        <td>{{ $weapon->properties }}</td>
                        <td>{{ $weapon->DMG }}</td>
                        <td>{{ $weapon->weight }}</td>
                        <td>{{ $weapon->type }}</td>
                        <td><a href="{{ route('weapons.edit',$weapon->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('weapons.destroy', $weapon->id)}}" method="POST">
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
                    {{__("No weaponss in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection
