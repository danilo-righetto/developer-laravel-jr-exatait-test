<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';

interface Task {
    id: number;
    title: string;
    description: string;
    status: string;
    user_id: number;
}

const form = useForm({
    title: '',
    description: '',
    status: ''
});

defineProps<{
    task: Task;
}>();
</script>

<template>

    <Head title="Task" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Task - Visualizar tarefa
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-3xl space-y-6 sm:px-6 lg:px-8">
                <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8">
                    <form>
                        <div>
                            <InputLabel for="title" value="Titulo" />

                            <TextInput id="title" type="text" class="mt-2 block w-full" v-model="task.title"
                                autocomplete="title" :disabled="true" :readonly="true" />

                            <InputError class="mt-2" :message="form.errors.title" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="description" value="Descrição" />

                            <TextInput id="description" type="text" class="mt-2 block w-full"
                                v-model="task.description" autocomplete="description" :disabled="true"
                                :readonly="true" />

                            <InputError class="mt-2" :message="form.errors.description" />
                        </div>
                        <div class="mt-4">
                            <div>
                                <InputLabel for="status" value="Status" />

                                <select name="status" id="status"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
                                    :disabled="true" :readonly="true">
                                    <option value="">Selecione</option>
                                    <option :value="task.status" selected>{{ task.status }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center justify-end">
                            <Link :href="route('dashboard')">
                            <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing">
                                Voltar</PrimaryButton>
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
