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
		Create User
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
		<form method="POST" action="{{ route('users.store') }}">
            {{csrf_field()}}

			<div class="col-sm-4">
            <a href="{{ route('users.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
            
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ old('name') }}">

                <label for="tools_prof">First Name:</label>
				<input type="text" name="tools_prof" id="tools_prof" class="form-control select2 input-sm" value="{{ old('tools_prof') }}">

				
                <label for="SE_prof">Second Name:</label>
				    <input type="text" name="SE_prof" id="SE_prof" class="form-control select2 input-sm" value="{{ old('SE_prof') }}">
                <label for="languajes">Email:</label>
				    <input type="text" name="languajes" id="languajes" class="form-control select2 input-sm" value="{{ old('languajes') }}">

                <label for="traits">Phone:</label>
				    <input type="text" name="traits" id="traits" class="form-control select2 input-sm" value="{{ old('traits') }}">
					
					
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

               
            
        

        
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

           
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        
</div>

           
		</form>
	</div>
</div>

</div>
@endsection

