
{!! Form::hidden('user_id', Auth::user()->id) !!}

<div class="form-group form-float {!! $errors->has('kode') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('kode', 'Kode') !!}
		 {!! Form::text('kode', null, ['class'=>'form-control', 'placeholder' => 'Masukan kode']) !!}
		 {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
</div>
	</div>


<div class="form-group form-float {!! $errors->has('judul') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('judul', 'Judul') !!}
		 {!! Form::text('judul', null, ['class'=>'form-control', 'placeholder' => 'Judul']) !!}
		 {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
</div>
	</div>
	
<div class="form-group form-float {!! $errors->has('deskripsi') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('deskripsi', 'deskripsi') !!}
		 {!! Form::textarea('deskripsi', null, ['class'=>'form-control', 'placeholder' => 'deskripsi']) !!}
		 {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('cover') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('cover', 'Cover') !!}
		 {!! Form::file('cover', null, ['class'=>'form-control', 'placeholder' => 'Cover']) !!}
		 {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
		 <label class="help-info">Cover harus berekstensi .jpg atau .png</label>
</div>
	</div>

<div class="form-group form-float {!! $errors->has('author') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('author', 'Author') !!}
		 {!! Form::text('author', null, ['class'=>'form-control', 'placeholder' => 'author']) !!}
		 {!! $errors->first('author', '<p class="help-block">:message</p>') !!}
</div>
	</div>

	<div class="form-group form-float {!! $errors->has('type') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('type', 'Type') !!}
		 {!! Form::text('type', null, ['class'=>'form-control', 'placeholder' => 'type']) !!}
		 {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('file') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('file', 'E-book') !!}
		 {!! Form::file('file', null, ['class'=>'form-control', 'placeholder' => 'E-book']) !!}
		 {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
		 <label class="help-info">E-book harus berekstensi .pdf</label>
</div>
	</div>

<div class="form-group form-float ">
	<div class="form-line">
			{!! Form::label('category_id', 'Materi') !!}
      {!! Form::select('category_id', App\Category::pluck('kategory', 'id'), null, ['class' => 'form-control show-tick', 'data-live-search'=> true]) !!}

      @if ($errors->has('category_id'))
             <span class="help-block">
             {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
             </span>
      @endif
</div>
	</div>

<div class="form-group form-float ">
	<div class="form-line">
			{!! Form::label('status', 'Status') !!}
     {!! Form::select('status', ['1' => 'Free', '2' => 'Premium'], null, ['class' => 'form-control show-tick', 'data-live-search'=> true]) !!}

      @if ($errors->has('category_id'))
             <span class="help-block">
             {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
             </span>
      @endif
</div>
	</div>



	
		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}


	

	 
                                