@extends('admin_template')

@section('content')


<div class="card uper" style="min-height: 1669.19px">

    <div class="card-header">
        <h3 class="card-title">Categories</h3>
    </div>

    <div class="card-body">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <div class="pull-left">
            <div class="btn-group">
                <a href="{{ route('categories.create') }}" class="btn btn-info">Add categories</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Archetype</td>
                    <td>Hit Dice</td>
                    <td>Armor_prof</td>
                    <td>Weapon_prof</td>
                    <td>Saving Throws Proficencies</td>
                    <td>Skill Proficencies</td>
                    <td>Tools Proficencies</td>
             
                    <td>Starting Equipment</td>
                    <td>Traits</td>
                    <td colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->archetype }}</td>
                        <td>{{ $category->hitdice }}</td>
                        <td>{{ $category->armor_prof }}</td>
                        <td>{{ $category->weapon_prof }}</td>
                        
                        <td>{{ $category->ST_prof }}</td>
                        <td>{{ $category->skills_prof }}</td>
                        <td>{{ $category->tools_prof }}</td>
                        <td>{{ $category->SE_prof }}</td>
                        <td>{{ $category->traits }}</td>
                        
                        <td><a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>

                <form action="{{ route('categories.destroy', $category->id)}}" method="POST">
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                  <button class="btn btn-danger" type="submit" onclick="return confirm('¿Are you sure?')">Delete</button>
                </form>
            </td>
                    </tr>
                @empty
                </br>
                </br>
                <div class="alert alert-danger">
                    {{__("No categories in the database")}}
                </div>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


@endsection
