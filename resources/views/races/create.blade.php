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
		Create Spell
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
		<form method="POST" action="{{ route('races.store') }}">
            {{csrf_field()}}
		<div class="row"></div>
			<div class="col-sm-4">
            <a href="{{ route('races.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
			
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm"value="{{ old('speed') }}">
                <label for="speed">Speed:</label>
				<input type="number" name="speed" id="speed" class="form-control select2 input-sm" value="1" min="1">

                <label for="traits">Traits:</label>
				<input type="text" name="traits" id="traits" class="form-control select2 input-sm"value="{{ old('speed') }}">

				
                <label for="proficencies">Proficencies:</label>
				    <input type="text" name="proficencies" id="proficencies" class="form-control select2 input-sm" value="{{ old('proficencies') }}">
                <label for="languajes">Languajes:</label>
				    <input type="text" name="languajes" id="languajes" class="form-control select2 input-sm" value="{{ old('languajes') }}">

                
			
</div>

<div class="col-sm-4">
                    
                <h4>Ability Score Increase</h4>
            
				<label for="ASI">Option: <sub>    Press control to select multiple values</sub></label>
				
				<select id="ASI" class="form-control select2-container step2-select" id="ASI" name="ASI[] " multiple size = 6>
					<option value="S1">Strenght+1</option>
					<option value="D1">Dexterity+1</option>
					<option value="C1">Constitution+1</option>
					<option value="I1">Intelligence+1</option>
					<option value="W1">Wisdom+1</option>
					<option value="C1">Charisma+1</option>
					<option value="S2">Strenght+2</option>
					<option value="D2">Dexterity+2</option>
					<option value="C2">Constitution+2</option>
					<option value="I2">Intelligence+2</option>
					<option value="W2">Wisdom+2</option>
					<option value="C2">Charisma+2</option>
				</select>
</br>
				
			</div>
				
		</form>
	</div>
</div>

</div>
@endsection

