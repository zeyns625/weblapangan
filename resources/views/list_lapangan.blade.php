<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Lapangan</title>

    <!-- ✅ Tambahkan baris ini -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
    
    <!-- Kontenmu di sini -->
    <div class="ml-10 mt-10 overflow-x-auto">
        <table class="table-auto w-full border border-gray-300 text-sm text-left text-gray-700">
            <thead class="bg-gray-200 text-gray-700 uppercase tracking-wider">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama Lapangan</th>
                    <th class="border px-4 py-2">Deskripsi Lapangan</th>
                    <th class="border px-4 py-2">Harga Lapangan</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($nama as $index => $item)
                <tr class="hover:bg-gray-100 transition duration-200">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $item }}</td>
                    <td class="border px-4 py-2">{{ $desc[$index] }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
