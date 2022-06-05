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
		Create Weapon
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
		<form method="POST" action="{{ route('weapons.store') }}">
            {{csrf_field()}}
		<div class="row">
			<div class="col-sm-4">
            <a href="{{ route('weapons.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>

				
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ old('name') }}">

                <label for="properties">Properties:</label>
				<input type="text" name="properties" id="properties" class="form-control select2 input-sm" value="{{ old('properties') }}">

                <label for="weight">Weight:</label>
				<input type="number" name="weight" id="weight" class="form-control select2 input-sm" min="0"value="0">
			
</div>

		

        <div class="col-sm-4">
		</br>
		</br>
</br>
</br>
					<label for="N">Number of dices:</label>
				    <input type="number" name="N" id="N" class="form-control select2 input-sm" value="{{ old('N') }}" min="1"default="1">

                <h4>Dice type</h4>
            
				<label for="D">Option:</label>
				
				<select id="D" class="form-control select2-container step2-select" id="D" name="D">
					<option value="d4">D4</option>
					<option value="d6">D6</option>
					<option value="d8">D8</option>
					<option value="d10">D10</option>
					<option value="d12">D12</option>
				</select>
				<h4>Type</h4>
            
				<label for="type">Option:</label>
				
				<select id="type" class="form-control select2-container step2-select" id="type" name="type">
					<option value="Simple">Simple</option>
					<option value="Martial">Martial</option>
				</select>
            
        </div>
            
		<input type="hidden" name="DMG" id="DMG" class="form-control select2 input-sm" value="{{ old('DMG') }}">	
           
		</form>
	</div>
</div>

</div>
@endsection

