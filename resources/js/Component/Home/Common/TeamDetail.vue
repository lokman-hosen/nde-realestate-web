<script setup>
const {team} = defineProps(['team'])
</script>

<template>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item position-relative">
            <img class="img-fluid" :src="team.imgPath" alt="">
            <div class="team-text bg-white p-4">
                <h5>{{team.name}}</h5>
                <span>Engineer</span>
            </div>
        </div>
    </div>
</template>
