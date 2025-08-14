<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 leading-tight">
            Kelola Perusahaan
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        <a href="{{ route('companies.create') }}"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition">
            + Tambah Perusahaan
        </a>

        <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full border-collapse">
                <thead class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Nama</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Alamat</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($companies as $company)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-3">{{ $company->name }}</td>
                            <td class="px-6 py-3">{{ $company->email }}</td>
                            <td class="px-6 py-3">{{ $company->address }}</td>
                            <td class="px-6 py-3 flex items-center justify-center gap-3">
                                <a href="{{ route('companies.edit', $company) }}"
                                   class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('companies.destroy', $company) }}" method="POST"
                                      onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
