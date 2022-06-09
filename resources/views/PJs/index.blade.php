@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">PJs</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('PJs.create') }}" class="btn btn-info">Add PJ</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Level</td>
                    <td>Alignment</td>
                    <td>Inspiration</td>
                    <td>STR</td>
                    <td>DEX</td>
                    <td>CON</td>
                    <td>INTE</td>
                    <td>WIS</td>
                    <td>CHARI</td>
                    <td>User Mail</td>
                    <td>Category Name</td>
                    <td>Race Name</td>
                    <td>Background Name</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($PJs as $PJ)
                    <tr>
                        <td>{{ $PJ->id }}</td>
                        <td>{{ $PJ->name }}</td>
                        <td>{{ $PJ->level }}</td>
                        <td>{{ $PJ->alignment }}</td>
                        <td>{{ $PJ->inspiration }}</td>
                        <td>{{ $PJ->STR }}</td>
                        <td>{{ $PJ->DEX }}</td>
                        <td>{{ $PJ->CON }}</td>
                        <td>{{ $PJ->INTE }}</td>
                        <td>{{ $PJ->WIS }}</td>
                        <td>{{ $PJ->CHARI }}</td>
                        <td>{{ $PJ->user->email}}</td>
                        <td>{{ $PJ->category->name}}</td>
                        <td>{{ $PJ->race->name }}</td>
                        <td>{{ $PJ->background->name }}</td>
                        
                        <td><a href="{{ route('PJs.edit',$PJ->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('PJs.destroy', $PJ->id)}}" method="POST">
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
