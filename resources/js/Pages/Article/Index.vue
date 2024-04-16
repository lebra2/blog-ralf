<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'

const props = defineProps(['genres'])

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout class="">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Articles</h2>
        </template>
        
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white ">
                <Link class="bg-slate-700 p-2 text-white rounded-lg" :href="route('articles.create')">Add genre</Link>
                <li class="flex border-b py-2 justify-between"
                 v-for="article in articles">
                {{ article.title }}
                    <div class="flex gap-4">
                        <!-- <Link :href="route('genres.destroy', {genre})" method="delete" as="button" type="button">Delete</Link>
                        <Link :href="route('genres.edit', {genre})">Edit</Link> -->
                    </div>
                </li>
                
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>
