@extends('admin_template')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
    <h1>
		Edit Background
    </h1>
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="POST" action="{{ route('background.update', $backgrounds->id) }}">
        {{csrf_field()}}
        {!! method_field('put') !!}
<div class="col-sm-4">
<a href="{{ route('background.index')}}" class="btn bg-navy">Back</a>
<button type="submit" class="btn btn-success">Update</button>

</br>
</br>
</br>

    
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ $backgrounds->name }}">

    <label for="tools_prof">Tools Proficencies:</label>
    <input type="text" name="tools_prof" id="tools_prof" class="form-control select2 input-sm" value="{{ $backgrounds->tools_prof }}">

    
    <label for="SE_prof">Starting Equipment:</label>
        <input type="text" name="SE_prof" id="SE_prof" class="form-control select2 input-sm" value="{{ $backgrounds->SE_prof }}">
    <label for="languajes">Languaje:</label>
        <input type="text" name="languajes" id="languajes" class="form-control select2 input-sm" value="{{ $backgrounds->languajes }}">

    <label for="traits">Traits:</label>
        <input type="text" name="traits" id="traits" class="form-control select2 input-sm" value="{{ $backgrounds->traits }}">

</div>

<div class="col-sm-8">
        <h4>Skill Proficencies</h4>
<div class="col-xs-7">
    <label for="skills_prof">Options:   <sub>    Press control to select multiple values</sub></label>
    
    <select id="skills_prof" class="form-control select2-container step2-select" id="skills_prof" name="skills_prof[]" multiple size = 8>
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>
    </div>
</div>

</div>


        </form>
    </div>
</div>
</div>
@endsection