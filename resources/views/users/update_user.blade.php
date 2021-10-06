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
        <input type="text" name="nomemploye" value="{{ $user->nomemploye }}">
      </div>
      <div class="">
          <label for="prenomemploye">prenom</label>
          <input type="text" name="prenomemploye" id="" value="{{ $user->prenomemploye }}">
      </div>
      <div class="">
        <label for="name">password</label>
        <input type="password" name="password" placeholder="****">
      </div>
      <div class="">
          <label for="numtel">numero de tel</label>
          <input type="text" name="numtel" value="{{ $user->numtel }}">
      </div>
      <div class="">
        <label for="name">role</label>
        <select name="role">
            <option value="Gérant">Gérant</option>
            <option value="Employée">Employée</option>
        </select>
      </div>
    <button type="submit" name="button">Modifier!</button>
  </form>

@endsection
