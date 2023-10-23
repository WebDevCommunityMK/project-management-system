<template>
    <Layout>
        <div class="bg-[#F9FAFB] h-screen w-screen flex items-center">
            <div class="h-max mx-auto flex flex-col items-center">
                <h1 class="text-xl font-bold text-center pb-10">
                    Sign in to your account
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
                                for="email"
                                >Email</label
                            >
                            <input
                                v-model="form.email"
                                class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2"
                                type="email"
                                name="email"
                                placeholder="example@mail.com"
                            />
                        </div>
                        <div>
                            <label
                                class="text-gray-600 font-bold inline-block pb-2"
                                for="password"
                                >Password</label
                            >
                            <input
                                v-model="form.password"
                                class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2"
                                type="password"
                                name="password"
                                placeholder="******"
                            />
                        </div>
                        <div class="flex">
                            <div class="w-1/2">
                                <input
                                    type="checkbox"
                                    name="remeber_me"
                                    v-model="form.remember_me"
                                />
                                <label for="remeberMe">Remeber me</label>
                            </div>
                            <div class="w-1/2">
                                <Link
                                    href="/forgot-password"
                                    class="font-bold text-blue-600"
                                >
                                    Forgot password ?
                                </Link>
                            </div>
                        </div>
                        <div>
                            <input
                                class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]"
                                type="submit"
                                value="Login"
                            />
                        </div>
                        <div>
                            <p class="text-center">- or -</p>
                        </div>
                        <div class="flex gap-4">
                            <Link
                                href="/register"
                                class="bg-white w-full py-2 rounded-md text-center text-[#4F46E5] font-bold cursor-pointer border hover:border-[#4F46E5]"
                                >Sign Up
                            </Link>
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
    email: '',
    password: '',
    remember_me: false,
});

let submit = () => {
    form.post('/login');
};
</script>

<script>
import Layout from './Layouts/Layout.vue';

export default {
    layout: (h, page) => h(Layout, [page]),
    layout: Layout,
};
</script>
