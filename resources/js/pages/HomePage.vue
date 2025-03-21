<script setup>
import AppNav from '../components/AppNav.vue';
import { ref, onMounted } from 'vue';

// Animation trigger
const fadeIn = ref(false);
onMounted(() => {
    fadeIn.value = true;
});
</script>

<template>
    <AppNav />

    <!-- Hero Section -->
    <section class="hero container-fluid py-5">
        <div class="row w-100 align-items-center">

            <!-- Profile Image -->
            <div class="col-md-6 p-0 text-center">
                <img :src="'/storage/images/2.jpg'" alt="Profile" class="img img-fluid animate-fadeIn">
            </div>

            <!-- Text Content -->
            <div class="col-md-6 d-flex flex-column justify-content-center p-5" :class="{ 'animate-slideIn': fadeIn }">
                <h1 class="fw-bold display-4 text-light">I am <br> <span class="text-warning"> 'AZHARUL ISLAM' </span>
                </h1>
                <p class="text-white lead">
                    Passionate Web Developer with expertise in HTML, CSS, Bootstrap, PHP, Laravel, and SQL.
                </p>
                <div class="d-flex align-items-center mt-4">
                    <button class="btn btn-outline-success btn-lg play-btn ms-3">
                        <i class="fas fa-download"></i> Download CV
                    </button>
                </div>
                <!-- Follow Me Section -->
                <div class="follow-me text-center mt-5">
                    <h3>Follow Me</h3>
                    <div class="social-icons mt-3">
                        <a href="#" class="btn btn-outline-primary me-2 play-btn"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="btn btn-outline-info me-2 play-btn"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-secondary me-2 play-btn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="btn btn-outline-danger me-2 play-btn"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center py-3 bg-dark text-light">
        <small>Page | 01</small>
    </footer>
</template>

<style scoped></style>
