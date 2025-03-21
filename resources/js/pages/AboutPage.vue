<script setup>
import AppNav from '../components/AppNav.vue';
import { ref, onMounted } from 'vue';

const fadeIn = ref(false);
onMounted(() => {
    fadeIn.value = true;
});

const services = [
    { title: 'Web Development', description: 'Creating modern websites using Laravel, Vue.js, and Bootstrap.', icon: '💻' },
    { title: 'E-commerce Solutions', description: 'Building scalable online stores with payment gateways and inventory management.', icon: '🛒' },
    { title: 'Business Applications', description: 'Developing custom business management software (ERP, CRM, Accounting Systems).', icon: '🏢' },
    { title: 'Financial Accounting', description: 'Expertise in journalizing transactions, managing ledgers, and financial reporting.', icon: '📊' },
    { title: 'Portfolio Websites', description: 'Designing interactive portfolio sites to showcase professional work.', icon: '🌐' },
    { title: 'SEO & Performance Optimization', description: 'Improving website speed, SEO ranking, and user experience.', icon: '🚀' }
];
</script>

<template>
    <AppNav />


    <!-- About Section -->
    <section class="about py-5" id="about">
        <div class="container">
            <div class="row w-100 align-items-center">

                <!-- Profile Image -->
                <div class="col-lg-5 col-md-6 text-center mb-4">
                    <img :src="'/storage/images/3.jpg'" alt="Azharul Islam" class="profile-img img-fluid">
                </div>

                <!-- About Content -->
                <div class="col-lg-7 col-md-6 p-4" :class="{ 'animate-slideIn': fadeIn }">
                    <h2 class="fw-bold display-5 text-primary">About Me</h2>
                    <p class="text-light lead">
                        I'm <strong>Azharul Islam</strong>, a Full Stack Web Developer from <strong>Rampura, Dhaka,
                            Bangladesh</strong>. I specialize in <strong>HTML, CSS, Bootstrap, PHP, Laravel, SQL, and
                            Vue.js</strong>.
                    </p>
                    <p class="text-light">
                        I focus on <strong>building modern, fast, and visually appealing websites</strong> that enhance
                        user experience. My expertise spans <strong>e-commerce platforms, business management systems,
                            and portfolio websites</strong>.
                    </p>
                    <p class="text-light">
                        Apart from web development, I am passionate about <strong>financial accounting and business
                            management</strong>, with experience in <strong>journalizing transactions, managing ledgers,
                            and preparing financial reports</strong> for educational institutions and businesses.
                    </p>
                </div>
            </div>

            <!-- Personal Details -->
            <div class="row mt-5">
                <div class="col-md-6">
                    <ul class="details-list">
                        <li><i class="fas fa-user"></i> <strong>Age:</strong> 22</li>
                        <li><i class="fas fa-briefcase"></i> <strong>Freelance:</strong> <span
                                class="text-success">Available</span></li>
                        <li><i class="fas fa-phone"></i> <strong>Phone:</strong> +880 16407-64896 </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="details-list">
                        <li><i class="fas fa-globe"></i> <strong>Residence:</strong> Bangladesh</li>
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Rampura, Dhaka</li>
                        <li><i class="fas fa-envelope"></i> <strong>E-mail:</strong> <a
                                href="mailto:azharul.islamai11@gmail.com"
                                class="text-primary">azharul.islamai11@gmail.com</a></li>

                    </ul>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-outline-success btn-lg" href="/contact">
                        <i class="fas fa-envelope"></i> Contact Me
                    </a>
                </div>
            </div>

            <!-- What I Do Section -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h3 class="fw-bold text-primary">What I Do</h3>
                    <p class="text-light">I specialize in the following areas:</p>
                </div>

                <div class="col-md-6 col-lg-4 mb-4" v-for="service in services" :key="service.title">
                    <div class="work-box">
                        <h4>{{ service.icon }} {{ service.title }}</h4>
                        <p>{{ service.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center py-3 bg-dark text-light">
        <small>Page | 02</small>
    </footer>

</template>


<style scoped></style>
