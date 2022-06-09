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
		Create Item List
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
		<form method="POST" action="{{ route('item_list.store') }}">
            {{csrf_field()}}

			<div class="col-sm-4">
            <a href="{{ route('item_list.index')}}" class="btn bg-navy">Back</a>
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
			
				<label for="items_id">Items:</label>
				<select id="items_id" class="form-control" name="items_id" style="width: 100%;">
					@foreach($items as $item)
					<option value="{{$item->id}}">{{$item->name}}</option>
					@endforeach
				</select>
                
            
            </div>
           
		</form>
	</div>
</div>

</div>
@endsection

