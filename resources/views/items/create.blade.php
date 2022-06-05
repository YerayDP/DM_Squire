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
		Create Item
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
		<form method="POST" action="{{ route('items.store') }}">
            {{csrf_field()}}

			<div class="col-sm-4">
            <a href="{{ route('items.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
            
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ old('name') }}">

                <label for="weight">Weight:</label>
				<input type="number" name="weight" id="weight" class="form-control select2 input-sm" value="1" min="1">
				
                
                <label for="AC">Armor Class:</label>
				    <input type="number" name="AC" id="AC" class="form-control select2 input-sm" min="0" value="0">
			
</div>
			
            
           
		</form>
	</div>
</div>

</div>
@endsection

