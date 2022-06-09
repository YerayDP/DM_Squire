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
		Create Event
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
		<form method="POST" action="{{ route('event.store') }}">
            {{csrf_field()}}

			<div class="col-sm-4">
            <a href="{{ route('event.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
            
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ old('name') }}">

                <label for="info">Info:</label>
				<input type="text" name="info" id="info" class="form-control select2 input-sm" value="{{ old('info') }}">

				
</br>
</br>
				<label for="date_start">Starting date:</label>
				    <input type="date" name="date_start" id="date_start" class="form-control select2 input-sm" value="{{ old('date_start') }}">
                <label for="date_end">Ending date:</label>
				    <input type="date" name="date_end" id="date_end" class="form-control select2 input-sm" value="{{ old('end_date') }}">

            
            </div>
			
            
           
		</form>
	</div>
</div>

</div>
@endsection

