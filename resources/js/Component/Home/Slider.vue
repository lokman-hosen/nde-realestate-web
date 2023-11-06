<script setup>
    import SliderDetail from "./SliderDetail.vue";

    const carousels = [
        {
            'id' : 1,
            'title' : 'Welcome to NDE Real Estate Ltd.',
            'sub_title' : 'A Construction & Renovation Company',
            'imaPath' : 'assets/frontend/img/carousel-1.jpg',
        },
        {
            'id' : 3,
            'title' : 'Welcome to NDE Real Estate Ltd.',
            'sub_title' : 'Professional Tiling & Painting Services',
            'imaPath' : 'assets/frontend/img/carousel-2.jpg',
        }
    ]
</script>

<template>
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
               <SliderDetail/>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</template>
