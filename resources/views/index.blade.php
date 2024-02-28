<!DOCTYPE html>
<html>
<head>
 <title>CRUD Pegawai</title>
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

 <div class="border border-gray-300 mx-3 p-4 rounded-lg">

    <h2 class="text-2xl font-semibold mt-5 mb-2">Membuat CRUD Pegawai Kelompok 6</h2>

    <h3 class="text-lg font-normal mb-2">Data Pegawai Kantor</h3>

    <table class="w-half border-collapse border border-gray-300">
        <tr>
            <th class="border border-gray-300 px-4 py-2">Nama</th>
            <th class="border border-gray-300 px-4 py-2">Jabatan</th>
            <th class="border border-gray-300 px-2 py-2">Umur</th>
            <th class="border border-gray-300 px-4 py-2">Alamat</th>
            <th class="border border-gray-300 px-4 py-2 w-1/6">Opsi</th>
        </tr>

        @foreach($pegawai as $p)
        <tr>
            <td class="border border-gray-300 px-4 py-2">{{ $p->pegawai_nama }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $p->pegawai_jabatan }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $p->pegawai_umur }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $p->pegawai_alamat }}</td>
            <td class="border border-gray-300 px-4 py-2">
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded border border-gray-300">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1.5 px-3 rounded border border-gray-300">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="/pegawai/tambah" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-2 ml-3 rounded border border-gray-300 block w-max mt-5"> Tambah Pegawai Baru</a>
 </div>
</body>
</html>