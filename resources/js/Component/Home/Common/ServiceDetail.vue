<script setup>
const {service} = defineProps(['service'])
</script>

<template>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" :src="service.imgPath" alt="">
            <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">{{service.title}}</h5>
                <p>{{service.description}}</p>
            </div>
        </div>
    </div>
</template>
