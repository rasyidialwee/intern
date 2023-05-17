<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    description: null,
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create New Senarai
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="form.post('/senarais')">
                        <!-- name -->
                        <input type="text" v-model="form.name" />
                        <div v-if="form.errors.name">
                            {{ form.errors.name }}
                        </div>
                        <!-- description -->
                        <textarea v-model="form.description"></textarea>
                        <div v-if="form.errors.description">
                            {{ form.errors.description }}
                        </div>

                        <!-- submit -->
                        <button type="submit" :disabled="form.processing">
                            Create
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
