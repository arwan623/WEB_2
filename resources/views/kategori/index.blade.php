<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Data Buku</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <h1>Manajemen data Buku</h1>
        <div class="nav">
            <ul>
                <li><a href="/kategori">Kategori</a></li>
                <li><a href="/penerbit">Penerbit</a></li>
                <li><a href="/buku">Buku</a></li>
            </ul>
        </div>
        <h3>Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allKategori as $key => $r)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $r->id) }}" method="POST"></form>
                            <a href="{{ route('kategori.show', $r->id) }}" class="tombol">Detail</a>
                            <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        <div class="footer">&copy; 2026 Arwan</div>
    </div>
</body>
</html>