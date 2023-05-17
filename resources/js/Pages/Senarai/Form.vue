<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    senarai: {
        type: Object,
        default: null,
    },
});

const form = useForm({
    name: props.senarai ? props.senarai.name : null,
    description: props.senarai ? props.senarai.description : null,
});

function submit() {
    props.senarai
        ? form.put("/senarais/" + props.senarai.id)
        : form.post("/senarais");
}
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
                    <form>
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
                        <button @click="submit()" :disabled="form.processing">
                            {{ senarai ? "Update" : "Create" }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
