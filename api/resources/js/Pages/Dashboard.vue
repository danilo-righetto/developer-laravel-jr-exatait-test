<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

interface Tasks {
    id: number;
    title: string;
}

defineProps<{
    name?: string;
    inProgress?: Array<Tasks>;
    pending?: Array<Tasks>;
    completed?: Array<Tasks>;
}>();
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard - Listagem de tarefas
            </h2>
            <h2 class="text-sm font-semibold leading-tight text-gray-800">
                Administrador: não
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-2xl mx-auto">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white text-center">
                    <!-- CABEÇALHO - INICIO -->
                    <div
                        class='flex sm:flex-row flex-col space-y-2 sm:space-x-2 flex-row w-full items-center justify-center'>
                        <div
                            class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/3 p-6 bg-white rounded-md border-l-5 border-b-4 h-14'>
                            <div>
                                <div class="font-bold text-1xl text-center">
                                    PENDENTE
                                </div>
                            </div>
                        </div>
                        <div
                            class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/3 p-6 bg-white rounded-md border-l-5 border-b-4 h-8'>
                            <div>
                                <div class="font-bold text-1xl text-center">
                                    EM ANDAMENTO
                                </div>
                            </div>
                        </div>
                        <div
                            class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/3 p-6 bg-white rounded-md border-l-5 border-b-4 h-8'>
                            <div>
                                <div class="font-bold text-1xl text-center">
                                    CONCLUÍDO
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CABEÇALHO - FIM -->
                    <div
                        class='flex sm:flex-row flex-col space-y-2 sm:space-x-2 flex-row w-full items-center justify-center'>
                        <div
                            class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/3 p-6 bg-white rounded-md border-l-5 border-b-4'>
                            <!-- PENDENTE - INICIO -->
                            <div class="border-2 rounded-md border-black m-2 bg-gray-100 p-2" v-for="item in pending">
                                <div class="font-bold text-sm pb-2">
                                    {{ item.title }}
                                </div>
                                <div class="font-bold text-sm border-t-2 border-black pt-2">
                                    <Link :href="route('task.show', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Show</Link> |
                                    <Link :href="route('task.edit', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Edit</Link> |
                                    <Link :href="route('task.destroy', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Delete</Link>
                                </div>
                            </div>
                            <!-- PENDENTE - FIM -->
                        </div>
                        <div
                            class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/3 p-6 bg-white rounded-md border-l-5'>
                            <!-- EM ANDAMENTO - INICIO -->
                            <div class="border-2 rounded-md border-black m-2 bg-gray-100 p-2" v-for="item in inProgress">
                                <div class="font-bold text-sm pb-2">
                                    {{ item.title }}
                                </div>
                                <div class="font-bold text-sm border-t-2 border-black pt-2">
                                    <Link :href="route('task.show', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Show</Link> |
                                    <Link :href="route('task.edit', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Edit</Link> |
                                    <Link :href="route('task.destroy', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Delete</Link>
                                </div>
                            </div>
                            <!-- EM ANDAMENTO - FIM -->
                        </div>
                        <div
                            class='flex flex-wrap flex-row sm:flex-col justify-center items-center w-full sm:w-1/3 p-6 bg-white rounded-md border-l-5'>
                            <!-- CONCLUIDO - INICIO -->
                            <div class="border-2 rounded-md border-black m-2 bg-gray-100 p-2" v-for="item in completed">
                                <div class="font-bold text-sm pb-2">
                                    {{ item.title }}
                                </div>
                                <div class="font-bold text-sm border-t-2 border-black pt-2">
                                    <Link :href="route('task.show', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Show</Link> |
                                    <Link :href="route('task.edit', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Edit</Link> |
                                    <Link :href="route('task.destroy', {id: item.id})" class="focus:outline-none focus-visible:ring-[#FF2D20]">Delete</Link>
                                </div>
                            </div>
                            <!-- CONCLUIDO - FIM -->
                        </div>
                    </div>
                    <!-- Novo Teste - FIM -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
