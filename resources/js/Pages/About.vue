<script setup>
import Layout from "./Layout.vue";
import About from "../Component/Home/Common/About.vue";
import Team from "../Component/Home/Team.vue";
</script>
<template>
    <Layout>
        <Head title="About" />
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <About/>
        <!-- About End -->
        <!-- Team Start -->
       <Team/>
        <!-- Team End -->
    </Layout>
</template>

<style scoped>

</style>
