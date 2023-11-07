<script setup>
import TeamDetail from "./Common/TeamDetail.vue";

const teams = [
    {
        'id' : 1,
        'name' : 'Full Name',
        'designation' : 'Engineer',
        'imgPath' : 'assets/frontend/img/team-1.jpg',
    },
    {
        'id' : 2,
        'name' : 'Full Name 1',
        'designation' : 'Engineer',
        'imgPath' : 'assets/frontend/img/team-2.jpg',
    },
    {
        'id' : 3,
        'name' : 'Full Name 2',
        'designation' : 'Engineer',
        'imgPath' : 'assets/frontend/img/team-2.jpg',
    }
]
</script>

<template>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Team</h6>
                        <h1 class="display-6 mb-0">Our Expert Worker</h1>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                </div>
            </div>
            <div class="row g-4">
                <template v-for="team of teams">
                    <TeamDetail :team="team"/>
                </template>
            </div>
        </div>
    </div>
</template>
