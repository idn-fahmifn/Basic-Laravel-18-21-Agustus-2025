<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Umur</title>
</head>

<body>
    <h1>Form Umur Kamu</h1>
    <span>Masukan umur kamu dibawah : </span>

    {{-- menampilkan error --}}
    @if ($errors->any())
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
    @endif
    @if (session('fail'))
        <span>{{ session('fail') }}</span>
    @endif

    <form action="{{ route('umur.proses') }}" method="post">
        @csrf
        <div class="">
            <label for="">Nama Kamu</label>
            <input type="text" name="nama" required>
        </div>
        <div class="">
            <label for="">Umur</label>
            <input type="number" name="umur" required>
        </div>
        <div class="">
            <button type="submit">Masuk</button>
        </div>
    </form>

</body>

</html>
