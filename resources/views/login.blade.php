<form action="{{ route('login') }}" method="POST">
    @csrf
    @if ($errors->any())
        @foreach($errors as $error)
            {{ $error }}
        @endforeach
    @endif
    <h3>connexion au magasin</h3>
    <div class="">
        <label for="">nom</label>
        <input type="text" name="name" value="">
    </div>
    <div class="">
        <label for="">password</label>
        <input type="password" name="password" value="">
    </div>

  <button type="submit" name="button">se connecter!</button>
</form>
