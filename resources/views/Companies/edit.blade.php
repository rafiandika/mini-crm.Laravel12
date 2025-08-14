<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit Perusahaan</h2>
    </x-slot>

    <div class="py-6 px-4">
        <form action="{{ route('companies.update', $company) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label>Nama</label>
                <input type="text" name="name" value="{{ $company->name }}" class="w-full border px-2 py-1" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ $company->email }}" class="w-full border px-2 py-1" required>
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="address" value="{{ $company->address }}" class="w-full border px-2 py-1">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
