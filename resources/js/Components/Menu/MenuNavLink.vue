<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    active: Boolean,
    name: String,
    defaultIcon: Function,
    activeIcon: Function,
});

const DefaultIconComponent = computed(() => (props.active ? props.activeIcon : props.defaultIcon));
</script>

<template>
    <Link :href="href"
        :class="{
            'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50 hover:text-gray-900 dark:hover:text-gray-300': !props.active,
            'text-gray-900 dark:text-gray-300': props.active,
        }"
        class="flex items-center gap-x-4 px-2 py-2 rounded-md text-xl font-medium transition ease-in-out duration-150">
        <component :is="DefaultIconComponent" :class="{
            'text-gray-600 dark:text-gray-200': props.active,
            'text-gray-400 dark:text-gray-600': !props.active,
        }" class="h-6 w-6"/>
        {{ name }}
    </Link>
</template>
