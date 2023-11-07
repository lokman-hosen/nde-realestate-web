<script setup>
import Layout from "./Layout.vue";
import { Head } from '@inertiajs/vue3'
</script>

<template>
    <Layout>
        <Head title="Project" />
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


        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active text-uppercase" id="nav-completed-project-tab" data-bs-toggle="tab" data-bs-target="#nav-completed-project" type="button" role="tab" aria-controls="nav-completed-project" aria-selected="true">Completed</button>
                                <button class="nav-link text-uppercase" id="nav-current-project-tab" data-bs-toggle="tab" data-bs-target="#nav-current-project" type="button" role="tab" aria-controls="nav-current-project" aria-selected="false">Under Construction</button>
                                <button class="nav-link text-uppercase" id="nav-up-coming-tab" data-bs-toggle="tab" data-bs-target="#nav-up-coming" type="button" role="tab" aria-controls="nav-up-coming" aria-selected="false">Upcoming</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-completed-project" role="tabpanel" aria-labelledby="nav-completed-project-tab" tabindex="0">
                                <div class="row g-5 align-items-end mb-5">
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="border-start border-5 border-primary ps-4">
                                            <h6 class="text-body text-uppercase my-2">Projects</h6>
                                            <h4 class="mb-0">Completed Project List</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-1.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Building Construction</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-2.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Home Maintainance</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-3.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Renovation and Painting</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-4.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Wiring and installation</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-5.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Tiling and Painting</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-6.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Interior Design</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-current-project" role="tabpanel" aria-labelledby="nav-current-project-tab" tabindex="0">
                                <div class="row g-5 align-items-end mb-5">
                                    <div class="col-lg-12">
                                        <div class="border-start border-5 border-primary ps-4">
                                            <h6 class="text-body text-uppercase my-2">Projects</h6>
                                            <h4 class="mb-0">Current Project List</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-1.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Building Construction</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-2.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Home Maintainance</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-3.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Renovation and Painting</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-4.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Wiring and installation</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-5.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Tiling and Painting</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-6.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Interior Design</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-up-coming" role="tabpanel" aria-labelledby="nav-up-coming-tab" tabindex="0">
                                <div class="row g-5 align-items-end mb-5">
                                    <div class="col-lg-12">
                                        <div class="border-start border-5 border-primary ps-4">
                                            <h6 class="text-body text-uppercase my-2">Projects</h6>
                                            <h4 class="mb-0">Up Coming Project List</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-1.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Building Construction</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-2.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Home Maintainance</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-3.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Renovation and Painting</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-4.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Wiring and installation</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-5.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Tiling and Painting</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="service-item bg-light overflow-hidden h-100">
                                            <img class="img-fluid" src="/assets/frontend/img/service-6.jpg" alt="">
                                            <div class="service-text position-relative text-center h-100 p-4">
                                                <h5 class="mb-3">Interior Design</h5>
                                                <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                                                <a class="small" href="project-detail.html">READ MORE<i class="fa fa-arrow-right ms-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>

</style>
