<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps(['articles'])
</script>

<template>
    <Head title="Articles" />
    
    <AuthenticatedLayout>
        
        <template #header>
            <PrimaryButton class="">
                    <Link :href="route('articles.create')">Create new Article</Link>
            </PrimaryButton>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg p-6 grid grid-cols-2">
                    <div class="p-2 text-gray-900" v-for="article in articles">
                        <div class="border-2 relative flex border-gray rounded-lg min-h-64 p-4">
                            <div>
                                <h1 class="text-2xl border-b mb-1 font-bold">{{ article.title }}</h1>
                                <h1 class="text-base">{{ article.description }}</h1>
                            </div>

                            <div class="absolute pr-2 pb-1 text-emerald-500 right-0 bottom-0">
                                <Link class="" :href="route('articles.edit', {article})">Edit</Link>
                                <Link class="text-red-500 ml-2" :href="route('articles.destroy', {article})" method="delete" as="button" type="button">Delete</Link>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </AuthenticatedLayout>
</template>
