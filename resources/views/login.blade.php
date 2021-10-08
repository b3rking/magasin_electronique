<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }

        button {
            border: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 3px;
            font-size: 1.1rem;
            text-transform: capitalize;
            background: rgb(68, 68, 68);
            color: white;
        }

        form div {
            margin: 10px auto;
        }

        label {
            margin-right: 20px;
            font-size: 1.2rem;
            text-transform: capitalize;
        }

        input {
            border: none;
            background: rgb(82, 82, 82, 0.3);
            padding: 5px 7px;
            font-size: 1.2rem;
            border-radius: 5px;
            color: rgb(36, 36, 36);
        }

        input::focus, input::active {
            background: rgba(119, 119, 119, 0.397);
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 15px auto;
            width: 35%;
            border-radius: 5px;
            box-shadow: 0 0 2rem .1rem rgba(119, 119, 119, 0.281);
        }

        h3 {
            font-size: 1.6rem;
        }

        .form-box {
            width: 98%;
            margin: 10rem auto;
        }
    </style>
</head>
<body>
    <div class="form-box">
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
    </div>
</body>
</html>

