@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Usuarios</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('users.create') }}" class="btn btn-info">Add user</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Second Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                   
                    <td>Actived</td>
                    <td>Deleted</td>
                    <td>Type</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->secondname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->actived }}</td>
                        <td>{{ $user->deleted }}</td>
                        <td>{{ $user->type }}</td>
                        <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                  <button class="btn btn-danger" type="submit" onclick="return confirm('¿Está seguro?')">Delete</button>
                </form>
            </td>
                @if($user->actived=='0')
                <td>
                    <form action="{{ route('activar', $user->id)}}" method="POST">
                    {{csrf_field()}}
                    {!! method_field('post') !!}
                        <button class="btn btn-primary" type="submit">Activar</button>
                    </form>
                    </td>
                    @else
                    <td>
                    <form action="{{ route('desactivar', $user->id)}}" method="POST">
                    {{csrf_field()}}
                    <button class="btn btn-primary" type="submit">Desactivar</button>
                    </form>
                    </td>
                @endif
            </tr>
                
            @endforeach
                </br>
                </br>
                
                
    
            </tbody>
        </table>

    </div>
</div>


@endsection
