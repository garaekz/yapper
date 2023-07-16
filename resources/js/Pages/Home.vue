<script setup>
import YapLayout from '@/Layouts/YapLayout.vue';
import { ArrowPathRoundedSquareIcon, ChatBubbleOvalLeftIcon, HeartIcon } from '@heroicons/vue/24/outline';

defineProps({
    yaps: Object,
});
</script>

<template>
    <YapLayout title="Home">
        <!-- TODO: Use this in the main element to show the name of the section -->
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Home
            </h2>
        </template>

        <div class="py-12">
            <ol class="relative">
                <li v-for="yap in yaps.data" class="mb-8 mx-4 px-4 border-b border-gray-200 dark:border-gray-700">
                    <div class="">
                        <div class="mb-10 pl-10 border-l border-gray-200 dark:border-gray-700">
                            <span class="absolute flex items-center justify-center bg-blue-100 rounded-full left-3">
                                <img :src="yap.user.profile_photo_url" class="w-10 h-10 rounded-full" alt="avatar">
                            </span>
                            <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                {{ yap.user.name }}
                            </h3>
                            <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                @{{ yap.user.handle }}
                            </span>
                            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-200">
                                {{ yap.content }}
                            </p>
                            <div class="flex gap-2">
                                <button>
                                    <HeartIcon class="w-5 h-5 text-gray-400 dark:text-gray-200" />
                                </button>
                                <button>
                                    <ChatBubbleOvalLeftIcon class="w-5 h-5 text-gray-400 dark:text-gray-200" />
                                </button>
                                <button>
                                    <ArrowPathRoundedSquareIcon class="w-5 h-5 text-gray-400 dark:text-gray-200" />
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </YapLayout>
</template>
