<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="container">
            <form action="{{ route('subscribe') }}" method="post">
                @csrf
                    <div class="form-group">

                        <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                        placeholder="Masukan email" value="{{old('email')}}">


                        @if ($errors->has('email'))

                            <div class="invalid-feedback">

                                {{$errors->first('email')}}

                            </div>

                        @endif

                    </div>


                   

                <input type="submit" class="btn-primary" value="Subscribe">
            </form>
        </div>
</body>
</html>

