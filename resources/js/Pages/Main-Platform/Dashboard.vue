<template>
    <header
        class="bg-[#044E54] text-[#E0FCFF] h-14 flex items-center justify-between px-3 border-b border-[#E0FCFF] fixed top-0 w-full"
    >
        <div>PROJECT MANAGEMENT SYSTEM / Dashboard</div>

        <div class="flex items-center text-sm">
            <span class="text-sm pr-3"
                >Welcome,
                <span class="font-semibold">{{ name }}</span>
            </span>
            <span class="pr-10 cursor-pointer">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                    @click="showSettings = !showSettings"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"
                    />
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg>
                <div
                    v-if="showSettings"
                    class="absolute border bg-[#044E54] flex flex-col gap-5 text-[#E0FCFF] p-3 rounded mt-3"
                >
                    <Link href="#">Link 1</Link>
                    <Link href="#">Link 2</Link>
                    <Link href="#">Link 3</Link>
                </div>
            </span>
            <Link href="/logout" method="post" class="flex items-center">
                <span class="pr-3"> Logout </span>
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5.636 5.636a9 9 0 1012.728 0M12 3v9"
                        />
                    </svg>
                </span>
            </Link>
        </div>
    </header>

    <section class="flex text-[#E8E6E1]">
        <aside
            class="w-[15%] bg-[#044E54] h-[calc(100vh-3.5rem)] flex flex-col fixed mt-[3.5rem]"
        >
            <nav class="flex flex-col gap-5 p-3">
                <div>Menu Item 1</div>
                <div>Menu Item 2</div>
                <div>Menu Item 3</div>
                <div>Menu Item 4</div>
                <div>Menu Item 5</div>
            </nav>
        </aside>

        <main
            class="w-[85%] bg-gray-100 text-gray-900 p-3 ml-[15%] mt-[3.5rem] min-h-[calc(100vh-3.5rem)]"
        >
            <!-- The main content of the dashboard goes here -->
            Main Content
        </main>
    </section>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const page = usePage();
const name = computed(() => {
    let name =
        page.props.auth.user.first_name + ' ' + page.props.auth.user.last_name;
    return name;
});

let showSettings = ref(false);
</script>
