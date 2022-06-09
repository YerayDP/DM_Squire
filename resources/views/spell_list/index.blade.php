@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Spell List</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('spell_list.create') }}" class="btn btn-info">Add Spell List</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>PJ Name</td>
                    <td>Spell Name</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($spell_list as $spell_lists)
                    <tr>
                        <td>{{ $spell_lists->id }}</td>
                        <td>{{ $spell_lists->PJ->name }}</td>
                        <td>{{ $spell_lists->spells->name }}</td>
                        
                        <td><a href="{{ route('spell_list.edit',$spell_lists->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('spell_list.destroy', $spell_lists->id)}}" method="POST">
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
