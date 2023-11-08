<script setup>
import ServiceDetail from "./ServiceDetail.vue";

const services = [
    {
        'id' : 1,
        'title' : 'Building Construction',
        'description' : 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos',
        'imgPath' : '/assets/frontend/img/service-1.jpg',
    },
    {
        'id' : 2,
        'title' : 'Home Maintainance',
        'description' : 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos',
        'imgPath' : 'assets/frontend/img/service-2.jpg',
    },
    {
        'id' : 3,
        'title' : 'Renovation and Painting',
        'description' : 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos',
        'imgPath' : 'assets/frontend/img/service-3.jpg',
    }
]
</script>

<template>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Services</h6>
                        <h1 class="display-6 mb-0">Construction And Renovation Solutions</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">More Services</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <template v-for="service of services">
                    <ServiceDetail :service="service"/>
                </template>
            </div>
        </div>
    </div>
</template>
