<template>
    <div class="bg-[#F9FAFB] h-screen w-screen flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">
            <h1 class="text-xl font-bold text-center pb-10">Reset your password</h1>
                <form @submit.prevent="submit">
                    <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm">
                        <div>
                            <label class="text-gray-600 font-bold inline-block pb-2" for="email">Email</label>
                            <input
                                v-model="form.email" 
                                class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" 
                                type="email" name="email" 
                                placeholder="example@mail.com">
                            <div v-if="form.errors.email" class="text-sm text-red-500 py-2">{{ form.errors.email }}</div>    
                        </div>
                        <div>
                            <label class="text-gray-600 font-bold inline-block pb-2" for="password">Password</label>
                            <input 
                                v-model="form.password"
                                class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" 
                                type="password" name="password" 
                                placeholder="******">
                                <div v-if="form.errors.password" class="text-sm text-red-500 py-2">{{ form.errors.password }}</div>    
                        </div>
                        <div>
                            <label class="text-gray-600 font-bold inline-block pb-2" for="password">Confirm Password</label>
                            <input 
                                v-model="form.password_confirmation"
                                class="border border-gray-400 focus:outline-slate-400 rounded-md w-full shadow-sm px-5 py-2" 
                                type="password" name="password_confirmation" 
                                placeholder="******">
                            <div v-if="form.errors.password_confirmation" class="text-sm text-red-500 py-2">{{ form.errors.password_confirmation }}</div>    
                        </div>

                        <div>
                            <input 
                                class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" 
                                type="submit" 
                                value="Reset your password" >
                        </div>
                       
                    </div>
                </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import { Link } from '@inertiajs/vue3'

let form = useForm({
    email: '',
    password: '',
    password_confirmation: '',
});

let submit = () => {
    form.post('/forgot-password')
};

</script>

