<script setup>
import { Head } from '@inertiajs/vue3'
import Layout from "./Layout.vue";
import Slider from "../Component/Home/Slider.vue";
import About from "../Component/Home/Common/About.vue";
import Feature from "../Component/Home/Feature.vue";
import Service from "../Component/Home/Common/Service.vue";
import Contact from "../Component/Home/Contact.vue";
import Team from "../Component/Home/Team.vue";

</script>

<template>
    <Layout>
        <Head title="Home" />

        <!-- Carousel Start -->
       <Slider/>
        <!-- Carousel End -->
        <!-- About Start -->
       <About/>
        <!-- About End -->

        <!-- Facts Start -->
        <div class="container-fluid my-5 p-0">
            <div class="row g-0">
                <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/assets/frontend/img/fact-1.jpg" alt="">
                        <div class="facts-overlay">
                            <h1 class="display-1">01</h1>
                            <h4 class="text-white mb-3">Construction</h4>
                            <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/assets/frontend/img/fact-2.jpg" alt="">
                        <div class="facts-overlay">
                            <h1 class="display-1">02</h1>
                            <h4 class="text-white mb-3">Mechanical</h4>
                            <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/assets/frontend/img/fact-3.jpg" alt="">
                        <div class="facts-overlay">
                            <h1 class="display-1">03</h1>
                            <h4 class="text-white mb-3">Architecture</h4>
                            <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="/assets/frontend/img/fact-4.jpg" alt="">
                        <div class="facts-overlay">
                            <h1 class="display-1">04</h1>
                            <h4 class="text-white mb-3">Interior Design</h4>
                            <p class="text-white">Aliqu diam amet diam et eos erat ipsum lorem stet lorem sit clita duo justo erat amet</p>
                            <a class="text-white small" href="">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Features Start -->
        <Feature/>
        <!-- Features End -->

        <!-- Service Start -->
        <Service/>
        <!-- Service End -->

        <!-- Appointment Start -->
        <Contact/>
        <!-- Appointment End -->

        <!-- Team Start -->
        <Team/>
        <!-- Team End -->


    </Layout>
</template>
