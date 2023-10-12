<template>
    <Layout>
        <div
            class="max-w-7xl mx-auto p-6 flex flex-col justify-center items-center"
        >
            <div class="flex w-full gap-3">
                <Link href="/login" class="hover:font-bold">Login</Link>
                <Link href="/register" class="hover:font-bold">Register</Link>
            </div>
            <h1>Hello Project Managment System Team</h1>
            <p>This is Vuejs InertiaJs Home View</p>
        </div>
    </Layout>
</template>

<script setup></script>

<script>
import Layout from './Layouts/HomePageLayout.vue'

export default {
  layout: (h, page) => h(Layout, [page]),
  layout: Layout,
}
</script>

