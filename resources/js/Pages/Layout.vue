<script setup>
import Navbar from "../Component/Navbar.vue";
import Footer from "../Component/Footer.vue";
</script>

<template>
    <main>
        <Navbar/>
          <slot />
        <Footer/>
    </main>

</template>
<style scoped>

</style>
