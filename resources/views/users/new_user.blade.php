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
      <input type="text" name="nomemploye">
    </div>
    <div class="">
        <label for="prenomemploye">prenom</label>
        <input type="text" name="prenomemploye" id="">
    </div>
    <div class="">
      <label for="name">password</label>
      <input type="password" name="password">
    </div>
    <div class="">
        <label for="numtel">numero de tel</label>
        <input type="text" name="numtel">
    </div>
    <div class="">
      <label for="name">role</label>
      <select name="role">
          <option value="Gérant">Gérant</option>
          <option value="Employée">Employée</option>
      </select>
    </div>
    <button type="submit" name="button">Creer un user!</button>
  </form>

@endsection
