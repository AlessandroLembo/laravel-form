<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage()

const clients = computed(() => page.props.auth.clients)

</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">Lista Clienti</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4 text-2xl">#</th>
                                            <!-- giro su un oggetto specifico per stampare le proprietà, nome delle colonne -->
                                            <th v-for="(client, key) in clients[0]" :key="client" scope="col"
                                                class="px-6 py-4 text-2xl">{{ key
                                                }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- giro sull'array dei clienti e ne stampo i dati -->
                                        <tr v-for="client in clients" :key="client.id"
                                            class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4"></td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium text-lg">{{ client.id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-lg">{{ client.codice }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-lg">{{ client.nome }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-lg">{{ client.email }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-lg">{{ client.telefono }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-lg">{{ client.partita_iva }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <Link href="/Clients/Create"
                        class="px-4 py-2 mt-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                    Nuovo Cliente</Link>
                </div>


            </div>
        </div>
    </AuthenticatedLayout>
</template>
