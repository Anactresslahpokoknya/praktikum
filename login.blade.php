<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 500px">
                <div class="card-body">
                    <h4 class="h4 mb-3">Mangga di antos ka sumpinganana</h4>

                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-success" role="alert">
                            gagal registrasi
                        </div>
                    @endif

                    <form action="{{ url('masyarakat/login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">USERNAME</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="USERNAME">
                            @error('username')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">PASSWORD</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="PASSWORD">
                            @error('password')
                                <div class="form-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2" type="submit">Login</button>
                            <button class="btn form-control btn-outline-succes mb-2" type="reset">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
