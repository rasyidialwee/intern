<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    senarais: Array,
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Senarais
            </h2>
        </template>

        <a href="">Create New List</a>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <ul>
                        <li v-for="(senarai, index) in senarais" :key="index">
                            {{ senarai.name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
