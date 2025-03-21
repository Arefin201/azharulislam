<script setup>
import { ref, computed } from "vue";
import AppNav from "../components/AppNav.vue";

// Projects Data
const projects = ref([
    { title: "Finance", category: "Web Development", description: "Finance app UI.Finance app UI.Finance app UI.Finance app UI.Finance app UI.Finance app UI.", link: "#" },
    { title: "Orizon", category: "Web Development", description: "Stock analysis UI.", link: "#" },
    { title: "Portfolio", category: "Web Design", description: "Personal portfolio site.", link: "#" },
    { title: "E-commerce", category: "Applications", description: "Online shop UI.", link: "#" },
    { title: "Dashboard", category: "Applications", description: "Admin dashboard UI.", link: "#" },
    { title: "Landing Page", category: "Web Design", description: "Marketing landing page.", link: "#" },
    { title: "E-commerce", category: "Applications", description: "Online shop UI.", link: "#" },
    { title: "Dashboard", category: "Applications", description: "Admin dashboard UI.", link: "#" },
    { title: "Landing Page", category: "Web Design", description: "Marketing landing page.", link: "#" },
]);

// Categories
const categories = ref(["All", "Web Design", "Applications", "Web Development"]);
const selectedCategory = ref("All");

// Filtered Projects
const filteredProjects = computed(() => {
    if (selectedCategory.value === "All") return projects.value;
    return projects.value.filter(project => project.category === selectedCategory.value);
});
</script>

<template>
    <!-- Navbar -->
    <AppNav />

    <!-- Project Section -->
    <section class="projects py-5" id="projects">
        <div class="container">
            <h3 class="text-center mb-4">My Projects</h3>

            <!-- Category Filter -->
            <div class="text-center mb-4">
                <button v-for="category in categories" :key="category" @click="selectedCategory = category"
                    :class="{ 'active': selectedCategory === category }" class="btn btn-filter">
                    {{ category }}
                </button>
            </div>

            <!-- Project List -->
            <div class="row">
                <div class="col-md-4  mb-3" v-for="(project, index) in filteredProjects" :key="index">
                    <div class="card h-100 d-flex flex-column shadow">
                        <img :src="'https://picsum.photos/500/300?random=' + index" class="card-img-top img-fluid"
                            alt="Project Image">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ project.title }}</h5>
                            <p class="card-text flex-grow-1"> {{ project.description }}</p>
                            <a :href="project.link" class="btn btn-outline-primary mt-auto">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center py-3 bg-dark text-light">
        <small>Page | 04</small>
    </footer>
</template>

<style scoped></style>
