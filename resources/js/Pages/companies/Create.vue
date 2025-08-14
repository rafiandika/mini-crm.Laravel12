<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, useForm } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  email: '',
  address: '',
  website: '',
  logo: null,
})

function submit() {
  form.post('/companies')
}
</script>

<template>
  <Head title="Tambah Perusahaan" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold text-gray-800">Tambah Perusahaan</h2>
    </template>

    <div class="p-6">
      <form @submit.prevent="submit" class="space-y-4">
        <div>
          <label>Nama</label>
          <input v-model="form.name" type="text" class="border p-2 w-full" />
          <div v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</div>
        </div>

        <div>
          <label>Email</label>
          <input v-model="form.email" type="email" class="border p-2 w-full" />
          <div v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</div>
        </div>

        <div>
          <label>Alamat</label>
          <input v-model="form.address" type="text" class="border p-2 w-full" />
        </div>

        <div>
          <label>Website</label>
          <input v-model="form.website" type="url" class="border p-2 w-full" />
        </div>

        <div>
          <label>Logo</label>
          <input type="file" @change="e => form.logo = e.target.files[0]" class="border p-2 w-full" />
        </div>

        <button
          type="submit"
          class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
          Simpan
        </button>
      </form>
    </div>
  </AuthenticatedLayout>
</template>
