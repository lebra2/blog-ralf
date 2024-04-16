<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="p-2 text-gray-900 flex flex-col justify-between border-b" v-for="article in articles">
                        <div class="">
                            <h1 class="text-2xl font-bold">{{ article.title }}</h1>
                            <h1 class="text-base">{{ article.description }}</h1>
                        </div>

                        <div class="flex gap-4">
                            <Link :href="route('articles.edit', {article})">Edit</Link>
                            <!-- <Link class="text-red-500" :href="route('articles.destroy', {articles})" method="delete" as="button" type="button">Delete</Link> -->
                        </div>
                        <!-- <div class="flex my-12 flex-col">
                            <label for="">Comment</label>
                            <Input></Input>
                        </div> -->
                    </div>
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>
