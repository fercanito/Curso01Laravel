{!! csrf_field() !!}
<p> 
  <label for="nombre">
  Nombre
  <input type="text" class="form-control" name="name" value="{{ $user->name or old('name') }}">
  {!! $errors->first('name','<span class=error>:message</span>') !!}
  </label>
</p>
<p>
  <label for="email">
    Email
    <input type="text" class="form-control" name="email" value="{{ $user->email or old('email') }}">
    {!! $errors->first('email','<span class=error>:message</span>') !!}
  </label>
</p>


@unless ($user->id) {{-- A menos tenga un id de usuario no me muestre estos campos --}}

<p> 
  <label for="password">
  Password
  <input type="password" class="form-control" name="password" value="{{ $user->password or old('password') }}">
  {!! $errors->first('password','<span class=error>:message</span>') !!}
  </label>
</p>

<p> 
  <label for="password_confirmation">
  Password Confirm
  <input type="password" class="form-control" name="password_confirmation" value="{{ $user->password or old('password') }}">
  {!! $errors->first('password_confirmation','<span class=error>:message</span>') !!}
  </label>
</p>

@endunless

<div class="checkbox">
    @foreach ($roles as $id => $name)
    <label>	
      <input 
        type="checkbox" 
        value="{{ $id }}" 
        {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
        name="roles[]" 
        id="roles">
      {{ $name }}
    </label>
    @endforeach	
</div>
{!! $errors->first('roles','<b><span class=error>:message</span></b>') !!}		
<hr>