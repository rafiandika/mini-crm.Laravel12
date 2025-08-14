<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Kelola Perusahaan
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        <a href="{{ route('companies.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Perusahaan</a>

        <table class="w-full mt-6 border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Alamat</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td class="border px-4 py-2">{{ $company->name }}</td>
                        <td class="border px-4 py-2">{{ $company->email }}</td>
                        <td class="border px-4 py-2">{{ $company->address }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('companies.edit', $company) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('companies.destroy', $company) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
