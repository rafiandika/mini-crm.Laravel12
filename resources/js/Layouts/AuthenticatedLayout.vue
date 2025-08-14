<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const mobileMenuOpen = ref(false)
</script>

<template>
  <div class="min-h-screen bg-gray-50 text-gray-800">
    <!-- Navbar -->
    <header class="bg-white shadow sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <h1 class="text-xl sm:text-2xl font-bold text-blue-600">Mini CRM</h1>

        <!-- Desktop nav -->
        <nav class="hidden md:flex space-x-6">
          <Link
            href="/dashboard"
            class="text-gray-700 hover:text-blue-600 transition font-medium"
          >Dashboard</Link>
          <Link
            href="/companies"
            class="text-gray-700 hover:text-blue-600 transition font-medium"
          >Companies</Link>
          <Link
            href="/employees"
            class="text-gray-700 hover:text-blue-600 transition font-medium"
          >Employees</Link>
        </nav>

        <!-- Mobile menu button -->
        <button
          class="md:hidden focus:outline-none"
          @click="mobileMenuOpen = !mobileMenuOpen"
        >
          <svg
            class="w-6 h-6 text-gray-700"
            xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              v-if="!mobileMenuOpen"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
            <path
              v-else
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>

      <!-- Mobile menu -->
      <div v-if="mobileMenuOpen" class="md:hidden bg-white shadow-md px-4 py-3 space-y-2">
        <Link
          href="/dashboard"
          class="block text-gray-700 hover:text-blue-600 transition font-medium"
        >Dashboard</Link>
        <Link
          href="/companies"
          class="block text-gray-700 hover:text-blue-600 transition font-medium"
        >Companies</Link>   
        <Link
          href="/employees"
          class="block text-gray-700 hover:text-blue-600 transition font-medium"
        >Employees</Link>
      </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
      <slot />
    </main>
  </div>
</template>
