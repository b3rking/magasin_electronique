@extends('app')
@section('page', 'profile de $user->name')
@section('content')

  <form action="{{ route('users.update', $user->id) }}" method="post">
    @csrf
    @method('put')
    <h2>modifier {{ $user->name }}</h2>
    @if($errors->any())
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    @endif
    <div class="">
      <label for="name">nom</label>
      <input type="text" name="name" value="{{ $user->name }}">
    </div>
    <div class="">
      <label for="name">password</label>
      <input type="password" name="password" value="********">
    </div>
    <div class="">
      <label for="name">role</label>
      <select name="role_id">
        @foreach($roles as $role)
          <option value="{{ $role->id }}" {{ ($role->id === $user->role_id) ? "selected" : "" }}>{{ $role->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" name="button">Modifier!</button>
  </form>

@endsection
