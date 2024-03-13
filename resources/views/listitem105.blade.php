<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style105.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>List Item</title>
</head>
<body class="bg-red-100">
    <div class="container mx-auto p-4">
        <table class="table-auto border-collapse border border-gray-400">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">ID</th>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">Nama</th>
                    <th class="px-4 py-2 bg-gray-200 border border-gray-400">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $dataku)
                    <tr>
                        <td class="px-4 py-2 border border-gray-400">{{ $dataku['id'] }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $dataku['nama'] }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $dataku['harga'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
