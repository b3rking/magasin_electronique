@extends('app')
@section('page', 'nouveau utilisateur')
@section('content')

  <form action="{{ route('users.store') }}" method="post">
    @csrf
    <h2>creer un nouveau utilisateur</h2>
    @if($errors->any())
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    @endif
    <div class="">
      <label for="name">nom</label>
      <input type="text" name="name">
    </div>
    <div class="">
      <label for="name">password</label>
      <input type="text" name="password">
    </div>
    <div class="">
      <label for="name">role</label>
      <select name="role_id">
        @foreach($roles as $role)
          <option value="{{ $role->id }}">{{ $role->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" name="button">Creer un user!</button>
  </form>

@endsection
