<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, Link } from '@inertiajs/vue3'

const props = defineProps({
  companies: Array,
})
</script>

<template>
  <Head title="Daftar Perusahaan" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold text-gray-800">Daftar Perusahaan</h2>
    </template>

    <div class="py-6">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
          <div class="flex justify-end mb-4">
            <Link
              href="/companies"
              class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
            >
              ➕ Tambah Perusahaan
            </Link>
          </div>

          <table class="w-full table-auto border-collapse">
            <thead>
              <tr class="bg-gray-100 text-left">
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Website</th>
                <th class="border px-4 py-2">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="company in companies" :key="company.id">
                <td class="border px-4 py-2">{{ company.name }}</td>
                <td class="border px-4 py-2">{{ company.email }}</td>
                <td class="border px-4 py-2">
                  <a
                    :href="company.website"
                    target="_blank"
                    class="text-blue-600 hover:underline"
                  >
                    {{ company.website }}
                  </a>
                </td>
                <td class="border px-4 py-2">
                  <Link
                    :href="`/companies/${company.id}/edit`"
                    class="text-blue-600 hover:underline"
                  >
                    ✏️ Edit
                  </Link>
                </td>
              </tr>
              <tr v-if="companies.length === 0">
                <td colspan="4" class="text-center py-4">Belum ada data perusahaan</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
