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
		Create Player Characters
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
		<form method="POST" action="{{ route('PJs.store') }}">
            {{csrf_field()}}

			<div class="col-sm-4">
            <a href="{{ route('PJs.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
            
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ old('name') }}">

                
                <label for="level">Level:</label>
				    <input type="number" name="level" id="level" class="form-control select2 input-sm" value="1" min="1">
						
					<h4>Alignments</h4>
					<label for="alignment">Options:  </label>
    
    <select id="alignment" class="form-control select2-container step2-select" id="alignment" name="alignment">
        <option value="Lawful Good">Lawful Good</option>
        <option value="Neutral Good">Neutral Good</option>
        <option value="Chaotic Good">Chaotic Good</option>
        <option value="Lawful Neutral">Lawful Neutral</option>
        <option value="Neutral Neutral">Neutral Neutral</option>
        <option value="Chaotic Neutral">Chaotic Neutral</option>
		<option value="Lawful Good">Lawful Evil</option>
        <option value="Neutral Evil">Neutral Evil</option>
        <option value="Chaotic Evil">Chaotic Evil</option>
    </select>
	</div>
	<div class="col-sm-4">
		<h4>Stats:<sub>   Standart values:(8/10/12/13/14/15)</sub></h4>
		<label for="STR">STR:</label>
			<input type="number" name="STR" id="STR" class="form-control select2 input-sm" value="1">
		<label for="DEX">DEX:</label>
			<input type="number" name="DEX" id="DEX" class="form-control select2 input-sm" value="1">
		<label for="CON">CON:</label>
			<input type="number" name="CON" id="CON" class="form-control select2 input-sm" value="1"
		<label for="INTE">INTE:</label>
			<input type="number" name="INTE" id="INTE" class="form-control select2 input-sm" value="1">
		<label for="WIS">WIS:</label>
			<input type="number" name="WIS" id="WIS" class="form-control select2 input-sm" value="1">
		<label for="CHARI">CHARI:</label>
			<input type="number" name="CHARI" id="CHARI" class="form-control select2 input-sm" value="1">
	</div>
	<label for="inspiration">Inspiration:</label>
		<input type="checkbox" name="inspiration" id="inspiration">
	<div class="col-sm-4">
				
					<label for="user_id">User:</label>
					<select id="user_id" class="form-control" name="user_id" style="width: 100%;">
						@foreach($users as $user)
						<option value="{{$user->id}}">{{$user->email}}</option>
						@endforeach
					</select>
				
					<label for="category_id">Category:</label>
					<select id="category_id" class="form-control" name="category_id" style="width: 100%;">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
				
					<label for="rtace_id">Race:</label>
					<select id="race_id" class="form-control" name="race_id" style="width: 100%;">
						@foreach($races as $race)
						<option value="{{$race->id}}">{{$race->name}}</option>
						@endforeach
					</select>
				
					<label for="background_id">Background:</label>
					<select id="background_id" class="form-control" name="background_id" style="width: 100%;">
						@foreach($backgrounds as $background)
						<option value="{{$background->id}}">{{$background->name}}</option>
						@endforeach
					</select>
		</div>
				

            
            </div>
			
            
           
		</form>
	</div>
</div>

</div>
@endsection

