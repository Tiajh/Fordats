<!DOCTYPE html>
<html>

<head>
    <title>Layanan</title>
</head>

<body>
    <h1>Layanan Kami</h1>

    @if(session('Berhasil'))
        <div style="color: brown-600;">{{ session('Berhasil') }}</div>
    @endif

    <!-- method : menentukan cara data dikirim 
    // action : menentukan ke mana data dikirim (url/route)-->
    <form method="POST" action="{{ route(Layanan.store) }}">

        @csrf 
        <!--untuk melindungi dari serangan csrf.
        wajib ada agar form dianggap valid-->
                <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

    </body>
</html>
