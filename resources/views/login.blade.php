
<form action="{{ route('authenticate') }}" method="POST">
    @csrf
    
    <h3>connexion au magasin</h3>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    @endif
    <div class="">
        <label for="">nom</label>
        <input type="text" name="nomemploye">
    </div>
    <div class="">
        <label for="">password</label>
        <input type="password" name="password">
    </div>

  <button type="submit">se connecter!</button>
</form>
