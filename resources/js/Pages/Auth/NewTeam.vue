<template>
    <Layout>
        <div class="bg-[#F9FAFB] h-screen w-screen flex items-center">
            <div class="h-max mx-auto flex flex-col items-center">
                <h1 class="text-xl font-bold text-center pb-10">
                    Create your first team
                </h1>
                <form @submit.prevent="submit">
                    <div
                        class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm"
                    >
                        <div>
                            <div
                                v-if="form.errors.error"
                                v-text="form.errors.error"
                                class="text-sm text-red-500 py-2"
                            ></div>
                            <label
                                class="text-gray-600 font-bold inline-block pb-2"
                                for="name"
                                >Team Name</label
                            >
                            <input
                                v-model="form.name"
                                class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2"
                                type="text"
                                name="team_name"
                                placeholder="My Team ..."
                            />
                        </div>
                        <div>
                            <label
                                class="text-gray-600 font-bold inline-block pb-2"
                                for="logo"
                                >Team Logo</label
                            >
                            <input
                                v-on:change="form.team_logo"
                                class="w-full shadow-sm py-2"
                                type="file"
                                name="logo"
                            />
                        </div>
                        <div>
                            <input
                                class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]"
                                type="submit"
                                value="Create Team"
                            />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

let form = useForm({
    name: '',
    logo: '',
});

let submit = () => {
    form.post('/create-new-team');
};
</script>

<script>
import Layout from './Layouts/Layout.vue';

export default {
  layout: (h, page) => h(Layout, [page]),
  layout: Layout,
}
</script>
