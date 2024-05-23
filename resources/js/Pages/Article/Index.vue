<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps(["articles"]);

const submit = () => {
    form.post(route("articles.post"), {_method: 'put'});
}
</script>

<template>
    <Head title="Articles" />

    <AuthenticatedLayout>
        <template #header>
            <PrimaryButton class="">
                <Link class="" :href="route('articles.create')"
                    >Create new Article</Link
                >
            </PrimaryButton>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg p-6 grid gap-16 grid-cols-2"
                >
                    <div class="text-gray-900" v-for="article in articles">
                        <div
                            class="border-2 bg-white relative flex border-gray rounded-lg min-h-64 p-4"
                        >
                            <div>
                                <h1
                                    class="text-2xl uppercase border-b mb-1 font-bold"
                                >
                                    {{ article.title }}
                                </h1>
                                <h1 class="text-base">
                                    {{ article.description }}
                                </h1>
                            </div>

                            <div class="absolute text-white right-0 top-0">
                                <div class="flex gap-2 p-1">
                                    <Button class="bg-green-600 p-2 rounded-lg"
                                        ><Link
                                            class=""
                                            :href="
                                                route('articles.edit', {
                                                    article,
                                                })
                                            "
                                            ><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="w-6 h-6"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"
                                                /></svg></Link
                                    ></Button>
                                    <Button
                                        class="bg-red-500 text-white p-2 flex rounded-lg"
                                        ><Link
                                            class=""
                                            :href="
                                                route('articles.destroy', {
                                                    article,
                                                })
                                            "
                                            method="delete"
                                            as="button"
                                            type="button"
                                            ><svg
                                                class="w-6 h-6"
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                strokeWidth="{1.5}"
                                                stroke="currentColor"
                                                className=""
                                            >
                                                <path
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                                                />
                                            </svg> </Link
                                    ></Button>
                                </div>
                            </div>
                        </div>
                        <form class="flex flex-col" @prevent.submit="submit" action="">
                            <input type="hidden" name="article_id" :value="article.id">
                            <textarea name="content"></textarea>
                            <Button
                                class="bg-neutral-600 mb-4 mt-1 text-white p-2 rounded-lg"
                                ><Link
                                    class=""
                                    :href="
                                        route('articles.store', {
                                            article,
                                        })
                                    "
                                    method="post"
                                    as="button"
                                    type="button"
                                    >Add comment</Link
                                ></Button
                            >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
