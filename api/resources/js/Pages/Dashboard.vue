<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps<{
    name?: string;
    inProgress?: Array;
    pending?: Array;
    completed?: Array;
}>();
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard -{{ name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-2xl mx-auto">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white text-center">
                    <table class="w-full text-sm bg-white text-center text-gray-900 white:text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    PENDENTE
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    EM ANDAMENTO
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CONCLUÍDO
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in inProgress"
                                class="bg-white border-b hover:bg-gray-20 dark:hover:bg-gray-200">
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">{{ item.name }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">{{ item.name }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">{{ item.name }}</a>
                                </td>
                            </tr>
                            <tr
                                class="bg-white border-b hover:bg-gray-20 dark:hover:bg-gray-200">
                                <td scope="row"
                                class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Microsoft Surface Pro</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">White</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Laptop PC</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-20 dark:hover:bg-gray-200">
                                <td scope="row"
                                    class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Magic Mouse 2</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Black</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Accessories</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
