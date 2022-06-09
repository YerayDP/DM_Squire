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
		Edit Background
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
        <form method="POST" action="{{ route('spells.update', $spells->id) }}">
            {{csrf_field()}}
            {!! method_field('put') !!}
		<div class="row"></div>
			<div class="col-sm-4">
            <a href="{{ route('spells.index')}}" class="btn bg-navy">Back</a>
			<button type="submit" class="btn btn-success">Create</button>
            
</br>
</br>
</br>
			<input type="hidden" name="spellDMG" id="spellDMG" class="form-control select2 input-sm" value="{{ $spells->spellDMG }}">	
			<input type="hidden" name="spellAHL" id="spellAHL" class="form-control select2 input-sm" value="{{ $spells->spellAHL }}">	
			
			<input type="hidden" name="components" id="components" class="form-control select2 input-sm" value="{{$spells->id}}">
                
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" class="form-control select2 input-sm" value="{{ $spells->name }}">

                <label for="range">Range:</label>
				<input type="number" name="range" id="range" class="form-control select2 input-sm" value="{{ $spells->range }}"min="1"default="1">

				
                <label for="duration">Duration:</label>
				    <input type="text" name="duration" id="duration" class="form-control select2 input-sm" value="{{$spells->duration}}">
                <label for="description">Description:</label>
				    <input type="text" name="description" id="description" class="form-control select2 input-sm" value="{{ $spells->description }}">

                
			
</div>

<div class="col-sm-4">
                    <h4>Schools</h4>
            
				<label for="school">Options:  </label>
				
				<select id="school" class="form-control select2-container step2-select" id="school" name="school">
					<option value="Abjuration">Abjuration</option>
					<option value="Conjuration">Conjuration</option>
					<option value="Divination">Divination</option>
					<option value="Enchantment">Enchantment</option>
					<option value="Evocation">Evocation</option>
					<option value="Illusion">Illusion</option>
                    <option value="Necromancy">Necromancy</option>
                    <option value="Transmutation">Transmutation</option>
				</select>
               
            
            
           
			
            <h4>Level</h4>
            
				<label for="level">Options:   </label>
				
				<select id="level" class="form-control select2-container step2-select" id="level" name="level">
					<option value="Cantrip">Cantrip</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="9th">9th</option>
				</select>
                
            
			
                    <h4>Casting Time</h4>
            
				<label for="casting_time">Options:  </label>
				
				<select id="casting_time" class="form-control select2-container step2-select" id="casting_time" name="casting_time">
					<option value="Action">Action</option>
					<option value="Bonus">Bonus</option>
					<option value="Reaction">Reaction</option>
				</select>
               
				<h4>Components	</h4>
            
			<label for="componentsT">Options:  <sub>    Press control to select multiple values</sub></label>
			
			<select id="componentsT" class="form-control select2-container step2-select" id="componentsT" name="componentsT[]" multiple size = 3>
				<option value="V">V</option>
				<option value="S">S</option>
				<option value="M">M</option>
			
			</select>
            <label for="Cdescription">Material component description:</label>
				    <input type="text" name="Cdescription" id="Cdescription" class="form-control select2 input-sm" value="{{$spells->Cdescription}}">
            </div>
		<div class="col-sm-4">
                    
            

			
            
			
			

                <h4>Spell Damage(Type of dice)</h4>
            
				<label for="D">Option:</label>
				
				<select id="D" class="form-control select2-container step2-select" id="D" name="D">
					<option value="d4">D4</option>
					<option value="d6">D6</option>
					<option value="d8">D8</option>
					<option value="d10">D10</option>
					<option value="d12">D12</option>
				</select>
</br>
				<label for="N">Spell Damage(Number of dices):</label>
				    <input type="number" name="N" id="N" class="form-control select2 input-sm" value="{{$N}}" min="1"default="1">
					</br>
					</br>
                <h4>Spell Damage At higher levels (Type of dice)</h4>
            
				<label for="DAHL">Option:</label>
				
				<select id="DAHL" class="form-control select2-container step2-select" id="DAHL" name="DAHL">
					<option value="d4">D4</option>
					<option value="d6">D6</option>
					<option value="d8">D8</option>
					<option value="d10">D10</option>
					<option value="d12">D12</option>
				</select>
				</br>
				<label for="NAHL">Spell Damage At higher levels (Number of dices):</label>
				    <input type="number" name="NAHL" id="NAHL" class="form-control select2 input-sm" value="{{$NAHL}}" min="1" default="1">
					<h4>Spell List</h4>
            
			<label for="spellList">Option:<sub>    Press control to select multiple values</sub></label>
			
			<select id="spellList" class="form-control select2-container step2-select" id="spellList" name="spellList[]"multiple size = 3>
			@foreach($categories as $category)
				<option value="{{$category->name}}">{{$category->name}}</option>
			@endforeach
			</select>
			</div>
				
		</form>
    </div>
</div>
</div>
@endsection