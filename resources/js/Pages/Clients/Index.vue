<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage()

const clients = computed(() => page.props.auth.clients)
console.log(clients);
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Lista Clienti</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-between">
                    <h1>Tabella Clienti</h1>
                    <div class="p-2">
                        <Link href="/Clients/Create" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                        Nuovo Cliente</Link>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <!-- giro su un oggetto specifico per stampare le proprietà, nome delle colonne -->
                                            <th v-for="(client, key) in clients[0]" :key="client" scope="col"
                                                class="px-6 py-4">{{ key
                                                }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="client in clients" :key="client.id"
                                            class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4"></td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ client.id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ client.codice }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ client.nome }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ client.email }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ client.telefono }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ client.partita_iva }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
