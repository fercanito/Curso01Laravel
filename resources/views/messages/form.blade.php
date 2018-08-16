{!! csrf_field() !!}
@if($showFields)
  <p> <label for="nombre">
    Nombre
    <input type="text" class="form-control" name="nombre" 
      value="{{$message->nombre or old('nombre') }}">
    {!! $errors->first('nombre','<span class=error>:message</span>') !!}
  </label></p>

  <p> <label for="email">
    Email
    <input type="text" class="form-control" name="email" 
      value="{{ $message->email or old('email') }}">
    {!! $errors->first('email','<span class=error>:message</span>') !!}
  </label></p>
@endif

<p><label for="mensaje">
  Mensaje
  <textarea class="form-control" name="mensaje">{{ $message->mensaje or old('mensaje') }}</textarea>
  {!! $errors->first('mensaje','<span class=error>:message</span>') !!}
</label></p>

{{-- <input class="btn btn-primary" type="submit" value="{{ isset($btnText) ? $btnText : 'Guardar' }}"> | FORMA ANTIGUA A PHP 7 --}}
{{-- <input class="btn btn-primary" type="submit" value="{{ $btnText ?? 'Guardar' }}"> | FORMA PHP 7 O MAYOR--}}

{{-- Forma de laravel --}}
<input class="btn btn-primary" type="submit" value="{{ $btnText or 'Guardar' }}">