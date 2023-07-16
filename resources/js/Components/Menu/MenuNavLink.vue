<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
});
</script>

<template>
    <!-- <Link :href="href" :class="classes">
    <slot />
    </Link> -->
    <Link :href="route('explore')"
        :class="{ 'font-black': route().current('explore') }"
        class="flex items-center gap-x-4 px-2 py-2 rounded-md text-xl font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50 hover:text-gray-900 dark:hover:text-gray-300 transition ease-in-out duration-150">
    <SolidHomeIcon v-if="route().current('explore')" class="h-6 w-6 text-gray-600 dark:text-gray-400" />
        <HomeIcon v-else class="h-6 w-6 text-gray-400 dark:text-gray-600" />
        Explore
    </Link>
</template>
