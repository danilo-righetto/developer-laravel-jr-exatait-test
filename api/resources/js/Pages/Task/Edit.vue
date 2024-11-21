<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, useForm, Link, usePage } from '@inertiajs/vue3';

const props = defineProps<{
    task: Task;
}>();

interface Task {
    id: number;
    title: string;
    description: string;
    status: string;
    user_id: number;
}

const task = usePage().props.task;

const form = useForm({
    title: props.task.title,
    description: props.task.description,
    status: props.task.status
});
</script>

<template>

    <Head title="Task" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Task - Editar tarefa
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-3xl space-y-6 sm:px-6 lg:px-8">
                <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                    <form @submit.prevent="form.patch(route('task.update', {id: props.task.id}))">
                        <div>
                            <InputLabel for="title" value="Titulo" />

                            <TextInput id="title" type="text" class="mt-2 block w-full" v-model="form.title"
                                autocomplete="title" :value="form.title" />

                            <InputError class="mt-2" :message="form.errors.title" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="description" value="Descrição" />

                            <TextInput id="description" type="text" class="mt-2 block w-full"
                                v-model="form.description" :value="form.description" autocomplete="description" />

                            <InputError class="mt-2" :message="form.errors.description" />
                        </div>
                        <div class="mt-4">
                            <div>
                                <InputLabel for="status" value="Status" />

                                <select name="status" id="status" v-model="form.status"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                                    <option disabled value="">Selecione</option>
                                    <option value="PENDENTE" :selected="form.status == 'PENDENTE'">PENDENTE</option>
                                    <option value="EM ANDAMENTO" :selected="form.status == 'EM ANDAMENTO'">EM ANDAMENTO</option>
                                    <option value="CONCLUIDO" :selected="form.status == 'CONCLUIDO'">CONCLUÍDO</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-end">
                            <Link :href="route('dashboard')">
                            <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }">
                                Voltar</PrimaryButton>
                            </Link>

                            <PrimaryButton class="ms-4 bg-green-700" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Atualizar</PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
