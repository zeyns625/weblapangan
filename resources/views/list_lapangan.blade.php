<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Lapangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-md rounded-xl">
        <h1 class="text-2xl font-bold mb-4 text-center">Daftar Lapangan</h1>

        <table class="w-full text-sm text-left border border-gray-300">
            <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Lapangan</th>
                    <th class="border px-4 py-2">Deskripsi</th>
                    <th class="border px-4 py-2">Harga</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($data as $index => $item)
                <tr class="hover:bg-gray-100">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $item->nama }}</td>
                    <td class="border px-4 py-2">{{ $item->deskripsi }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-md rounded-xl">
        <h2 class="text-xl font-semibold mb-4 text-center">Input Lapangan Baru</h2>

        <form method="POST" action="{{ route('lapangan.simpan') }}" class="space-y-4">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium">Nama</label>
                <input type="text" id="nama" name="nama" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="mt-1 block w-full border border-gray-300 rounded-md p-2"></textarea>
            </div>

            <div>
                <label for="harga" class="block text-sm font-medium">Harga</label>
                <input type="number" id="harga" name="harga" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md shadow">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</body>
</html>
