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
		Edit Weapon List
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
        <form method="POST" action="{{ route('weapon_list.update', $weapon_list->id) }}">
        {{csrf_field()}}
        {!! method_field('put') !!}
        <div class="col-sm-4">
            <a href="{{ route('weapon_list.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
            
                
				<label for="PJ_id">PJ:</label>
				<select id="PJ_id" class="form-control" name="PJ_id" style="width: 100%;">
					@foreach($pjs as $pj)
					<option value="{{$pj->id}}">{{$pj->name}}</option>
					@endforeach
				</select>
			
				<label for="weapon_id">Weapons:</label>
				<select id="weapon_id" class="form-control" name="weapon_id" style="width: 100%;">
					@foreach($weapons as $weapon)
					<option value="{{$weapon->id}}">{{$weapon->name}}</option>
					@endforeach
				</select>
                
            
            </div>


        </form>
    </div>
</div>
</div>
@endsection