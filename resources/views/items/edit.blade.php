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
		Edit Item
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
		<form method="POST" action="{{ route('items.update', $items->id) }}">
        {{csrf_field()}}
            {!! method_field('put') !!}

			<div class="col-sm-4">
            <a href="{{ route('items.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Edit</button>
            
</br>
</br>
</br>
            
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ $items->name }}">

                <label for="weight">Weight:</label>
				<input type="number" name="weight" id="weight" class="form-control select2 input-sm" value="{{ $items->weight }}" min="1">
				
                
                <label for="AC">Armor Class:</label>
				    <input type="number" name="AC" id="AC" class="form-control select2 input-sm" value="{{ $items->AC }}" min="0">
			
</div>
			
            
           
		</form>
	</div>
</div>

</div>
@endsection

