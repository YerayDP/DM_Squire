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
        <form method="POST" action="{{ route('spell_list.update', $spell_list->id) }}">
        {{csrf_field()}}
        {!! method_field('put') !!}
        
            
                
<div class="col-sm-4">
            <a href="{{ route('spell_list.index')}}" class="btn bg-navy">Back</a>
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
			
				<label for="spells_id">Spells:</label>
				<select id="spells_id" class="form-control" name="spells_id" style="width: 100%;">
					@foreach($spells as $spell)
					<option value="{{$spell->id}}">{{$spell->name}}</option>
					@endforeach
				</select>
                
            
            </div>
			
            
           


        </form>
    </div>
</div>
</div>
@endsection