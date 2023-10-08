<template>
        <header class="bg-[#044E54] text-white h-14 flex items-center justify-between px-3">
            <div>
                PROJECT MANAGEMENT SYSTEM / Dashboard
            </div>

            <div>
                <span class="text-sm pr-10">Welcome, {{ name }}</span>
                <span>
                    <Link href="/logout" method="post">Logout</Link>
                </span>
            </div>
    
        </header>

        <section class="flex">
            <aside class="w-[15%] bg-[#044E54] text-white h-[calc(100vh-3.5rem)] flex flex-col">
                <nav class="flex flex-col gap-5 p-3">
                    <div>
                        Menu Item
                    </div>
                    <div>
                        Menu Item
                    </div>
                    <div>
                        Menu Item
                    </div>
                    <div>
                        Menu Item
                    </div>
                    <div>
                        Menu Item
                    </div>  
                </nav>
                
                <div class="mt-auto bg-[#044E54] p-3 text-white font-semibold" >
                       
                </div>
            </aside>

            <main class="w-[85%] bg-gray-100">
                
            </main>
        </section>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import {computed} from 'vue';

const page = usePage();

const name = computed(() => {
    let name = page.props.auth.user.first_name + ' ' + page.props.auth.user.last_name
    return name
})
</script>
