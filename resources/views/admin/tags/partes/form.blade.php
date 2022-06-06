
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de la etiqueta', 'required']) !!}    

      @error('name')
          <span class="text-danger">{{ $message }}</span>
          
      @enderror
    </div>
    <div class="form-group">
      {!! Form::label('slug', 'Slug') !!}
      {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Ingrese el slug de la etiqueta', 'required', 'readonly']) !!} 
      @error('name')
      <span class="text-danger">{{ $message }}</span>
      
      @enderror
      
    </div>
      
      <div class="form-group">

          {!! Form::label('color', 'color') !!}
          {!! Form::select( 'color', $colors, null, ['class'=> 'form-control'] ) !!}
          

           @error('color')
      <span class="text-danger">{{ $message }}</span>
      
      @enderror

      </div>

      