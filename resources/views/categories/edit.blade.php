@extends('admin_template')

@section('content')
<style>
	.uper {
		margin-top: 20px;
	}
</style>
<div class="card uper">
	<div class="card-header">
        <h1>
		Create Categories
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
		<form method="POST" action="{{ route('categories.update', $categories->id) }}">
            {{csrf_field()}}
            {!! method_field('put') !!}
		<div class="row">
			<div class="col-sm-4">
            <a href="{{ route('categories.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ $categories->id }}">

                <label for="archetype">Archetype:</label>
				<input type="text" name="archetype" id="archetype" class="form-control select2 input-sm" value="{{ $categories->archetype }}">

				<label for="armor_prof">Armor Proficencies:</label>
				<input type="text" name="armor_prof" id="armor_prof" class="form-control select2 input-sm" value="{{ $categories->armor_prof }}">

				<label for="weapon_prof">Weapon Proficencies:</label>
				<input type="text" name="weapon_prof" id="weapon_prof" class="form-control select2 input-sm" value="{{$categories->weapon_prof }}">
                <label for="tools_prof">Tools Proficencies:</label>
				<input type="text" name="tools_prof" id="tools_prof" class="form-control select2 input-sm" value="{{ $categories->tools_prof }}">

                <label for="SE_prof">Starting Equipment:</label>
				    <input type="text" name="SE_prof" id="SE_prof" class="form-control select2 input-sm" value="{{ $categories->SE_prof }}">
               
                <label for="traits">Traits:</label>
				    <input type="text" name="traits" id="traits" class="form-control select2 input-sm" value="{{ $categories->traits }}">
			
</div>

		<div class="col-sm-4">
                    <h4>Hit Dice</h4>
            
				<label for="hitdice">Options: </label>
				
				<select id="hitdice" class="form-control select2-container step2-select" id="hitdice" name="hitdice">
					<option value="1d6">1d6</option>
					<option value="1d8">1d8</option>
					<option value="1d10">1d10</option>
					<option value="1d12">1d12</option>
				</select>
            
        </div>
        <div class="col-sm-4">
                    <h4>Saving Throws Proficencies</h4>
            
				<label for="ST_prof">Options:   <sub>    Press control to select multiple values</sub></label>
				
				<select id="ST_prof" class="form-control select2-container step2-select" id="ST_prof" name="ST_prof[]" multiple size = 8>
					<option value="Strength">Strength</option>
					<option value="Dexterity">Dexterity</option>
					<option value="Constitution">Constitution</option>
					<option value="Intelligence">Intelligence</option>
					<option value="Wisdom">Wisdom</option>
					<option value="Charisma">Charisma</option>
				</select>
            
        </div>
            
            
			
		<div class="col-sm-4">
            <h4>Skill Proficencies</h4>
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
            
           
		</form>
	</div>
</div>

</div>
@endsection

