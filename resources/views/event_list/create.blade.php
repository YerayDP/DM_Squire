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
		Create Event List
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
		<form method="POST" action="{{ route('event_list.store') }}">
            {{csrf_field()}}

			<div class="col-sm-4">
            <a href="{{ route('event_list.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
				<label for="rate">Rate:</label>
				<input type="number" name="rate" id="rate" class="form-control select2 input-sm" value="1" min="1" max ="5">

                <label for="commentary">Commentary:</label>
				<input type="text" name="commentary" id="commentary" class="form-control select2 input-sm" value="{{ old('commentary') }}">

			<label for="user_id">User:</label>
				<select id="user_id" class="form-control" name="user_id" style="width: 100%;">
					@foreach($users as $user)
					<option value="{{$user->id}}">{{$user->fisrtname}} {{$user->email}}</option>
					@endforeach
				</select>
			
				<label for="event_id">Event:</label>
				<select id="event_id" class="form-control" name="event_id" style="width: 100%;">
					@foreach($events as $event)
					<option value="{{$event->id}}">{{$event->name}}</option>
					@endforeach
				</select>
                
               
				
</br>
</br>
				
            
            </div>
			
            
           
		</form>
	</div>
</div>

</div>
@endsection

