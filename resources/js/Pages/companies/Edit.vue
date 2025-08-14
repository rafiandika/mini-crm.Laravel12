<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { Head, useForm } from '@inertiajs/vue3'

const props = defineProps({
  company: Object,
})

const form = useForm({
  name: props.company.name,
  email: props.company.email,
  address: props.company.address,
  website: props.company.website,
  logo: null,
})

function submit() {
  form.post(`/companies/${props.company.id}`, {
    _method: 'put',
  })
}
</script>

<template>
  <Head title="Edit Perusahaan" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="text-xl font-semibold text-gray-800">Edit Perusahaan</h2>
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
          <label>Logo (optional)</label>
          <input type="file" @change="e => form.logo = e.target.files[0]" class="border p-2 w-full" />
        </div>

        <button
          type="submit"
          class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700"
        >
          Update
        </button>
      </form>
    </div>
  </AuthenticatedLayout>
</template>
