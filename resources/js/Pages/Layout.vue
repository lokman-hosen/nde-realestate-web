<script setup>
import { Link } from '@inertiajs/vue3'
import Navbar from "../Component/Navbar.vue";
import Footer from "../Component/Footer.vue";
</script>

<template>
    <main>
        <Navbar/>
        <article>
            <slot />
        </article>
        <Footer/>
    </main>

</template>
<style scoped>

</style>
