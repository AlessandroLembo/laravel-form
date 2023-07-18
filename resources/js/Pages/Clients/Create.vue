<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="New Client" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">Aggiungi nuovo cliente</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <section>
                    <div
                        class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <form>
                            <div class="grid grid-cols-2 gap-4">
                                <!--Codice cliente input-->
                                <div class="mb-6">
                                    <label for="code-client">Codice
                                        Cliente
                                    </label>
                                    <input type="text" class="w-full rounded px-3" id="code-client" />
                                </div>

                                <!--Partita Iva input-->
                                <div class="mb-6">
                                    <label for="vat-number">Partita
                                        Iva
                                    </label>
                                    <input type="text" class="w-full rounded px-3" id="vat-number" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <!--Nome Cliente input-->
                                <div class="mb-6">
                                    <label for="name">Nome
                                        Cliente
                                    </label>
                                    <input type="text" class="w-full rounded px-3" id="name" />
                                </div>

                                <!--Email input-->
                                <div class="mb-6">
                                    <label for="email">Email
                                    </label>
                                    <input type="text" class="w-full rounded px-3" id="email" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 items-center">
                                <!--Telefono cliente input-->
                                <div class="mb-6">
                                    <label for="phone">Contatto Telefonico
                                    </label>
                                    <input type="text" class="w-full rounded px-3" id="phone" />
                                </div>
                                <!--Submit button-->
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="h-2/4 px-4 py-2 bg-cyan-500 hover:bg-cyan-600 text-white rounded">Registra
                                        Cliente</button>
                                </div>
                            </div>


                        </form>
                    </div>

                </section>

                <div class="flex justify-end m-2 p-2">
                    <Link href="/Clients" class="px-4 py-2 mt-4 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                    Tabella Clienti</Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
