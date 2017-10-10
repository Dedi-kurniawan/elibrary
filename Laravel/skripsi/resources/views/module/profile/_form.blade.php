<div class="form-group form-float {!! $errors->has('nim') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('nim', 'nim/nidn') !!}
		 {!! Form::text('nim', null, ['class'=>'form-control', 'placeholder' => 'Masukan nim']) !!}
		 {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('name') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('name', 'name') !!}
		 {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Masukan name']) !!}
		 {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('email') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('email', 'email') !!}
		 {!! Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Masukan email']) !!}
		 {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('password') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('password', 'password') !!}
		 {!! Form::password('password', null, ['class'=>'form-control', 'placeholder' => 'password']) !!}
		 {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
	</div>


<div class="form-group form-float {!! $errors->has('tempat_lahir') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('tempat_lahir', 'tempat_lahir') !!}
		 {!! Form::text('tempat_lahir', null, ['class'=>'form-control', 'placeholder' => 'Masukan tempat_lahir']) !!}
		 {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
</div>
	</div>


<div class="form-group form-float {!! $errors->has('tanggal_lahir') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('tanggal_lahir', 'tanggal_lahir') !!}
		 {!! Form::date('tanggal_lahir', null, ['class'=>'form-control', 'placeholder' => 'Masukan tanggal_lahir']) !!}
		 {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('alamat') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('alamat', 'alamat') !!}
		 {!! Form::text('alamat', null, ['class'=>'form-control', 'placeholder' => 'Masukan alamat']) !!}
		 {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('photo') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('photo', 'photo') !!}
		 {!! Form::file('photo', null, ['class'=>'form-control', 'placeholder' => 'Masukan photo']) !!}
		 {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
	</div>


<div class="form-group form-float ">
	<div class="form-line">
			{!! Form::label('faculty_id', 'Jurusan') !!}
	<select password="faculty_id" class="form-control show-tick" data-live-search="true" >
            <option>--Pilih Jurusan--</option>    
            @foreach($faculty as $fa)
            <option value="{{ $fa->id }}">{{ $fa->jurusan }} </option>
            @endforeach
      @if ($errors->has('faculty_id'))
             <span class="help-block">
             {!! $errors->first('faculty_id', '<p class="help-block">:message</p>') !!}
             </span>
      @endif
      </select>
</div>
	</div>


<div class="form-group form-float ">
	
		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

</div>
	

	 
                                