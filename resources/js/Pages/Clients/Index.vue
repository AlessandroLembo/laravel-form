<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Lista Clienti</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1>Tabella Clienti</h1>
                <div class="flex justify-end m-2 p-2">
                    <Link href="/Clients/Create" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                    Nuovo Cliente</Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
