@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Weapon List</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('weapon_list.create') }}" class="btn btn-info">Add Item List</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>PJ Name</td>
                    <td>Weapon Name</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($weapon_list as $weapon_lists)
                    <tr>
                        <td>{{ $weapon_lists->id }}</td>
                        <td>{{ $weapon_lists->PJ->name }}</td>
                        <td>{{ $weapon_lists->weapon->name }}</td>
                        <td><a href="{{ route('weapon_list.edit',$weapon_lists->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('weapon_list.destroy', $weapon_lists->id)}}" method="POST">
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
                    {{__("No item_lists in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection