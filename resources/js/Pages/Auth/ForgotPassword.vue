<template>
    <div class="bg-[#F9FAFB] h-screen w-screen flex items-center">
        <div class="h-max mx-auto flex flex-col items-center">          
            <form @submit.prevent="submit">
                <div class="bg-white shadow-xl p-10 flex flex-col gap-4 text-sm">
                    <h1 class="text-xl font-bold text-center pb-4">Reset your password</h1>
                    <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">Enter your email and we'll send you a link to reset your password.</p>
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
                        <input 
                            class="bg-[#4F46E5] w-full py-2 rounded-md text-white font-bold cursor-pointer hover:bg-[#181196]" 
                            type="submit" 
                            value="Email Password Reset Link" >
                    </div>
                    <div v-if="status" class="text-center font-medium text-sm text-green-600 dark:text-green-400">
                    {{ status }}
                    </div>                    
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

defineProps({
    status: String,
});


let form = useForm({
    email: '',

});

let submit = () => {
    form.post('/forgot-password')
};

</script>

