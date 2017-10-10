


<div class="form-group form-float {!! $errors->has('kategory') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('kategory', 'Kategori') !!}
		 {!! Form::text('kategory', null, ['class'=>'form-control', 'placeholder' => 'Masukan Kategori']) !!}
		 {!! $errors->first('kategory', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float ">
	<div class="form-line">
			{!! Form::label('faculty_id', 'Jurusan') !!}
      {!! Form::select('faculty_id', App\Faculty::pluck('jurusan', 'id'), null, ['class' => 'form-control show-tick', 'data-live-search'=> true]) !!}

      @if ($errors->has('faculty_id'))
             <span class="help-block">
             {!! $errors->first('faculty_id', '<p class="help-block">:message</p>') !!}
             </span>
      @endif
</div>
	</div>


	
		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}


	

	 
                                