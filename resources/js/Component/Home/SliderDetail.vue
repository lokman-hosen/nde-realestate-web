<script setup>
const {carousel, index} = defineProps(['carousel', 'index'])
</script>

<template>
    <div class="carousel-item" :class="{ active: index == 0 }" :key="carousel.id">
        <img class="w-100" :src="carousel.imaPath" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <h5 class="text-light text-uppercase mb-3 animated slideInDown">{{carousel.title}}</h5>
                        <h1 class="display-2 text-light mb-3 animated slideInDown">{{carousel.sub_title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
