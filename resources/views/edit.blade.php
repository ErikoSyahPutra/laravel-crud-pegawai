<!DOCTYPE html>
<html>
<head>
  <title>Edit Pegawai</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8">
    <div class="border border-gray-300 p-6 rounded-lg">
        <h2 class="text-2xl font-semibold mb-4 ml-6">Edit Pegawai</h2>

        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post" class="space-y-4">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div>
                <label for="nama" class="block font-medium text-gray-700 ml-7">Nama</label>
                <input type="text" id="nama" name="nama" required="required" value="{{ $p->pegawai_nama }}" class="form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="jabatan" class="block font-medium text-gray-700 ml-7">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}" class="form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="umur" class="block font-medium text-gray-700 ml-7">Umur</label>
                <input type="number" id="umur" name="umur" required="required" value="{{ $p->pegawai_umur }}" class="form-input mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="alamat" class="block font-medium text-gray-700 ml-7">Alamat</label>
                <textarea id="alamat" name="alamat" required="required" class="form-textarea mt-1 ml-6 block w-64 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $p->pegawai_alamat }}</textarea>
            </div>
            <div>
                <input type="submit" value="Simpan Data" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 ml-6 rounded">
            </div>
            <a href="/pegawai" class="block mt-4 text-blue-500 ml-6 hover:text-blue-700">Kembali</a>
        </form>
        @endforeach
    </div>
    <div class="w-1/2">
        <div class="border border-gray-300 p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Kelompok 6</h2>
            <p class="text-gray-900">Membuat CRUD Pegawai</p>
        </div>
    </div>
</div>

</body>
</html>
