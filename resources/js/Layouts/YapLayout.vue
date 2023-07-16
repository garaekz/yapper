<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { HomeIcon } from '@heroicons/vue/24/outline';
import { HomeIcon as SolidHomeIcon } from '@heroicons/vue/24/solid';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>

        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-100 dark:bg-darker-950 dark:text-darker-100">
            <div class="flex">
                <header class="w-68 flex flex-grow flex-col items-end relative">
                    <div class="w-[275px] items-stretch">
                        <div class="fixed top-0 h-full">
                            <div class="w-[275px] h-full overflow-y-auto p-3">
                                <div class="flex">
                                    <Link :href="route('home')" :active="route().current('home')"
                                        class="flex items-center gap-x-4 px-2 py-2 rounded-md text-xl font-bold text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/30 hover:text-gray-900 dark:hover:text-gray-300 transition ease-in-out duration-150">
                                    <ApplicationMark class="block h-9 w-auto text-white" />
                                    </Link>
                                </div>
                                <div class="flex flex-col">
                                    <nav class="mt-4">
                                        <Link :href="route('home')" :class="{ 'font-black': route().current('home') }"
                                            class="flex items-center gap-x-4 px-2 py-2 rounded-md text-xl font-medium text-gray-600 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/30 hover:text-gray-900 dark:hover:text-gray-300 transition ease-in-out duration-150">
                                        <SolidHomeIcon v-if="route().current('home')"
                                            class="h-6 w-6 text-gray-600 dark:text-gray-200" />
                                        <HomeIcon v-else class="h-6 w-6 text-gray-400 dark:text-gray-600" />
                                        Home
                                        </Link>
                                        <Link :href="route('explore')" :active="route().current('explore')"
                                            :class="{ 'font-black': route().current('explore') }"
                                            class="flex items-center gap-x-4 px-2 py-2 rounded-md text-xl font-medium text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50 hover:text-gray-900 dark:hover:text-gray-300 transition ease-in-out duration-150">
                                        <SolidHomeIcon v-if="route().current('explore')"
                                            class="h-6 w-6 text-gray-600 dark:text-gray-400" />
                                        <HomeIcon v-else class="h-6 w-6 text-gray-400 dark:text-gray-600" />
                                        Explore
                                        </Link>
                                    </nav>
                                </div>
                            </div>
                        </div>


                    </div>

                </header>
                <main class="flex flex-col items-start flex-grow">
                    <div class="flex flex-grow w-[990px]">
                        <div class="flex flex-col flex-grow">
                            <div class="flex items-stretch justify-between">
                                <div class="border-x border-darker-800 w-full px-4 max-w-[600px]">
                                    <slot />
                                </div>
                                <div class="w-[350px]">
                                    Right
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</template>
