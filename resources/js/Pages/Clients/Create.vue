<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { reactive } from 'vue';

// defineProps({ errors: Object });

const form = reactive({
    codice: '',
    partita_iva: '',
    nome: '',
    email: '',
    telefono: ''
})

function addClient() {
    router.post('/Clients', form)
}
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
                        <form @submit.prevent="addClient">

                            <div class="grid grid-cols-2 gap-4">
                                <!--Codice cliente input-->
                                <div class="mb-6">
                                    <label for="code-client">Codice
                                        Cliente
                                    </label>
                                    <input class="w-full rounded px-3" id="code-client" v-model="form.codice" />
                                    <div v-if="$page.props.errors.codice" class="text-red-800 text-xl">
                                        {{ $page.props.errors.codice }}</div>
                                </div>

                                <!--Partita Iva input-->
                                <div class="mb-6">
                                    <label for="vat-number">Partita
                                        Iva
                                    </label>
                                    <input class="w-full rounded px-3" id="vat-number" v-model="form.partita_iva" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <!--Nome Cliente input-->
                                <div class="mb-6">
                                    <label for="name">Nome
                                        Cliente
                                    </label>
                                    <input class="w-full rounded px-3" id="name" v-model="form.nome" />
                                    <div v-if="$page.props.errors.nome" class="text-red-800 text-xl">{{
                                        $page.props.errors.nome }}</div>
                                </div>

                                <!--Email input-->
                                <div class="mb-6">
                                    <label for="email">Email
                                    </label>
                                    <input class="w-full rounded px-3" id="email" v-model="form.email" />
                                    <div v-if="$page.props.errors.email" class="text-red-800 text-xl">{{
                                        $page.props.errors.email }}</div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 items-center">
                                <!--Telefono cliente input-->
                                <div class="mb-6">
                                    <label for="phone">Contatto Telefonico
                                    </label>
                                    <input class="w-full rounded px-3" id="phone" v-model="form.telefono" />
                                    <div v-if="$page.props.errors.telefono" class="text-red-800 text-xl">{{
                                        $page.props.errors.telefono }}</div>

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
