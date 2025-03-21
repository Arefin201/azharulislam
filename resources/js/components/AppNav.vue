<script setup>
import { Link } from "@inertiajs/vue3";

</script>


<template>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Azharul Islam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav h4">
                <li class="nav-item"><Link class="nav-link" href="/">Home |</Link></li>
                <li class="nav-item"><Link class="nav-link" href="/about">About |</Link></li>
                <li class="nav-item"><Link class="nav-link" href="/resume">Resume |</Link></li>
                <li class="nav-item"><Link class="nav-link" href="/project">Project'S |</Link></li>
                <li class="nav-item"><Link class="nav-link" href="/blog">Blog'S |</Link></li>

                <li class="nav-item"><Link class="nav-link" href="/contact">Contact |</Link></li>
            </ul>
        </div>
    </nav>


</template>


<style scoped>


</style>
