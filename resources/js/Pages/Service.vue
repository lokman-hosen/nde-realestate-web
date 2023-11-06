<script setup>
import Layout from "./Layout.vue";
import Service from "../Component/Home/Common/Service.vue";

</script>
<template>
    <Layout>
        <Head title="About" />
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-4">Our Services</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">Our Services</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <Service/>
        <!-- Service End -->


        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container common-contact">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">Appointment</h6>
                            <h1 class="display-6 mb-0">A Company Involved In Service And Maintenance</h1>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    </div>
                    <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12"><h3 class="text-center text-uppercase">Our Office</h3></div>
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card info-box border shadow-sm">
                                    <div class="box-content">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <p class="mt-2">Address : House: 267, Road 3, Baridhara DOHS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="card border info-box border shadow-sm">
                                    <div class="box-content">
                                        <i class="fa fa-phone-alt"></i>
                                        <p class="mt-2">Phone : +88017********</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="1.0s">
                                <div class="card border info-box border shadow-sm">
                                    <div class="box-content">
                                        <i class="fa fa-envelope"></i>
                                        <p class="mt-2">Email : info@nde***.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12"><h3 class="text-center text-uppercase">Head Office</h3></div>
                            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card border info-box border shadow-sm">
                                    <div class="box-content">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <p class="mt-2">Address : Grand Delvistaa Level-7,Plot 1A, Road-113, Gulshan Avenue, Dhaka-1212</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="card border info-box border shadow-sm">
                                    <div class="box-content">
                                        <i class="fa fa-phone-alt"></i>
                                        <p class="mt-2">Phone : +88017********</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="1.0s">
                                <div class="card border info-box border shadow-sm">
                                    <div class="box-content">
                                        <i class="fa fa-envelope"></i>
                                        <p class="mt-2">Email : info@nde***.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->
    </Layout>
</template>

<style scoped>

</style>
