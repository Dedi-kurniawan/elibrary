


<div class="form-group form-float {!! $errors->has('kode_jurusan') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('kode_jurusan', 'kode jurusan') !!}
		 {!! Form::text('kode_jurusan', null, ['class'=>'form-control', 'placeholder' => 'kode jurusan']) !!}
		 {!! $errors->first('kode_jurusan', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('jurusan') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('jurusan', 'jurusan') !!}
		 {!! Form::text('jurusan', null, ['class'=>'form-control', 'placeholder' => 'jurusan']) !!}
		 {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
</div>
	</div>


	
		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}



	 
                                