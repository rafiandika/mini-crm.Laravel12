<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard Mini CRM
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
                <!-- Welcome Message -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-900 mb-2">
                        Selamat datang di dashboard Mini CRM. Silakan pilih menu di bawah.
                    </p>
                </div>

                <!-- Navigasi Menu -->
                <div class="bg-white p-6 rounded-lg shadow flex flex-col sm:flex-row gap-4">
                    <Link
                        href="/companies"
                        class="flex-1 inline-block px-4 py-3 bg-blue-600 text-white text-center rounded hover:bg-blue-700 transition"
                    >
                        📁 Kelola Companies
                    </Link>
                    <Link
                        href="/employees"
                        class="flex-1 inline-block px-4 py-3 bg-green-600 text-white text-center rounded hover:bg-green-700 transition"
                    >
                        👥 Kelola Employees
                    </Link>
                </div>

                <!-- Statistik Sederhana -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">📊 Statistik Cepat</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>✅ 5 Perusahaan terdaftar</li>
                        <li>✅ 12 Karyawan aktif</li>
                        <li>✅ 3 Perusahaan baru bulan ini</li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
