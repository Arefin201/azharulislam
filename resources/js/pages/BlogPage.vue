<script setup>
import { ref, computed } from "vue";
import AppNav from "../components/AppNav.vue";

// Blog Posts Data
const blogs = ref([
    { title: "Vue.js Basics", category: "Web Development", description: "Introduction to Vue.js.", link: "#" },
    { title: "UI/UX Trends", category: "Design", description: "Latest design trends in 2025.", link: "#" },
    { title: "SEO Tips", category: "Marketing", description: "How to improve your SEO.", link: "#" },
    { title: "Laravel vs Node.js", category: "Web Development", description: "Which backend framework to choose?Which backend framework to choose?", link: "#" },
    { title: "Graphic Design Tools", category: "Design", description: "Best tools for graphic designers.", link: "#" },
    { title: "Content Writing Hacks", category: "Marketing", description: "Write better blog posts faster.", link: "#" }
]);

// Categories
const categories = ref(["All", "Web Development", "Design", "Marketing"]);
const selectedCategory = ref("All");

// Filtered Blogs
const filteredBlogs = computed(() => {
    if (selectedCategory.value === "All") return blogs.value;
    return blogs.value.filter(blog => blog.category === selectedCategory.value);
});
</script>

<template>
    <!-- Navbar -->
    <AppNav />

    <!-- Blog Section -->
    <section class="blogs py-5" id="blogs">
        <div class="container">
            <h3 class="text-center mb-4">Latest Blog Posts</h3>

            <!-- Category Filter -->
            <div class="text-center mb-4">
                <button v-for="category in categories" :key="category" @click="selectedCategory = category"
                    :class="{ 'active': selectedCategory === category }" class="btn btn-filter">
                    {{ category }}
                </button>
            </div>

            <!-- Blog List -->
            <div class="row">
                <div class="col-md-4  mb-3" v-for="(blog, index) in filteredBlogs" :key="index">
                    <div class="card h-100 d-flex flex-column shadow">
                        <img :src="'https://picsum.photos/500/300?random=' + index" class="card-img-top img-fluid"
                            alt="Blog Image">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ blog.title }}</h5>
                            <p class="card-text flex-grow-1">{{ blog.description }}</p>
                            <a :href="blog.link" class="btn btn-primary mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center py-3 bg-dark text-light">
        <small>Page | 05</small>
    </footer>
</template>

<style scoped></style>
