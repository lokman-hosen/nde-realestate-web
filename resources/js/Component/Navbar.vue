<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@example.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <Link href="/" class="navbar-brand d-flex align-items-center">
            <!--        <h1 class="m-0"><i class="fa fa-building text-primary me-3"></i>APEX</h1>-->
            <img src="/assets/frontend/img/logo.png" style="width: 7rem;">
        </Link>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <Link href="/" class="nav-item nav-link" :class="{ 'active': $page.url === '/' }" id="index">Home</Link>
                <Link href="/about" class="nav-item nav-link" :class="{ 'active': $page.url === '/about' }">About Us</Link>
                <Link href="/service" class="nav-item nav-link" :class="{ 'active': $page.url === '/service' }">Services</Link>
                <Link href="/project" class="nav-item nav-link" :class="{ 'active': $page.url === '/project' }">Projects</Link>
                <Link href="/contact" class="nav-item nav-link" :class="{ 'active': $page.url === '/contact' }">Contact Us</Link>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</template>
