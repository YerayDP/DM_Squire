@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Spells</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('spells.create') }}" class="btn btn-info">Add spell</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>School</td>
                    <td>Level</td>
                    <td>Casting Time</td>
                    <td>Range</td>
                    <td>Components</td>
                    <td>Duration</td>
                    <td>Description</td>
                    <td>Spell Damage</td>
                    <td>Spell Damage at Higher Leves</td>
                    <td>Spell lists</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($spells as $spell)
                    <tr>
                        <td>{{ $spell->id }}</td>
                        <td>{{ $spell->name }}</td>
                        <td>{{ $spell->school }}</td>
                        <td>{{ $spell->level }}</td>
                        <td>{{ $spell->casting_time }}</td>
                        <td>{{ $spell->range }}</td>
                        <td>{{ $spell->components }}</td>
                        <td>{{ $spell->duration }}</td>
                        <td>{{ $spell->description }}</td>
                        <td>{{ $spell->spellDMG }}</td>
                        <td>{{ $spell->spellAHL }}</td>
                        <td>{{ $spell->spellList }}</td>
                        
                        <td><a href="{{ route('spells.edit',$spell->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('spells.destroy', $spell->id)}}" method="POST">
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
                    {{__("No spells in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection
