<template>

    
    <Head title="Profile"/>

    <template>
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">Profile</h2>
    </template>

    <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-[#044E54] shadow sm:rounded-lg">                   
                    <UpdateProfileInformationForm
                    :status="status"
                    class="max-w-xl"

                    />
                </div>

                <div class="p-4 sm:p-8 bg-[#044E54] shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-[#044E54] shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div> 

</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';

const props = defineProps({
    status: {
        type: String,
    }
});

</script>



