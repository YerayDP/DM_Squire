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
		Edit Event
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
        <form method="POST" action="{{ route('event.update', $events->id) }}">
        {{csrf_field()}}
        {!! method_field('put') !!}
        <div class="col-sm-4">
            <a href="{{ route('event.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
            
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{$events->name }}">

                <label for="info">Info:</label>
				<input type="text" name="info" id="info" class="form-control select2 input-sm" value="{{ $events->info }}">

				
</br>
</br>
				<label for="date_start">Starting date:</label>
				    <input type="date" name="date_start" id="date_start" class="form-control select2 input-sm" value="{{ $events->date_start}}">
                <label for="date_end">Ending date:</label>
				    <input type="date" name="date_end" id="date_end" class="form-control select2 input-sm" value="{{ $events->date_end }}">

            
            </div>
			
            
           


        </form>
    </div>
</div>
</div>
@endsection