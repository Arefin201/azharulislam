<script setup>
import AppNav from "../components/AppNav.vue";

const resumePDF = "/resume.pdf"; // Update with actual path
const education = [
    {
        title: "Honours (Currently 2nd Year)",
        degree: "Bachelor of Business Administration",
        institution: "Siddheswari University",
        year: "2022 - Present"
    },
    {
        title: "HSC Exam (2021 - 2022)",
        degree: "Business Management",
        institution: "Hajigonj Model Gov. College"
    },
    {
        title: "Full Stack Web Developer Course",
        degree: "OSTAD, Bangladesh",
        year: "Completed: 2023"
    }
];

const experience = [
    {
        position: "Web Designer",
        company: "Light Technologies, Dhaka",
        year: "2022 - 2023",
        details: "Designed and developed websites using HTML, CSS, Bootstrap, PHP, and other technologies. Managed multiple projects, meeting deadlines and client expectations."
    }
];

const skills = [
    { name: "HTML5", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" },
    { name: "CSS3", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" },
    { name: "Bootstrap", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" },
    { name: "JavaScript", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" },
    { name: "Vue.js", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" },
    { name: "PHP", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" },
    { name: "Laravel", image: "/storage/images/laravel-line-wordmark.svg" },
    { name: "MySQL", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" },
    { name: "jQuery", image: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" },
    { name: "Alpine.js", image: "/storage/images/Alpine.js.png" }
];</script>

<template>
    <AppNav />

    <section class="resume py-5">
        <div class="container">
            <h2 class="section-title">Resume</h2>

            <!-- Education -->
            <div class="resume-section">
                <h3><i class="icon">&#128218;</i> Education</h3>
                <div class="timeline">
                    <div v-for="(edu, index) in education" :key="index" class="timeline-item">
                        <span class="dot"></span>
                        <div class="content">
                            <h5>{{ edu.title }}</h5>
                            <p class="text-primary">{{ edu.degree }}</p>
                            <p>{{ edu.institution }} <span v-if="edu.year">({{ edu.year }})</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div class="resume-section">
                <h3><i class="icon">&#128188;</i> Experience</h3>
                <div class="timeline">
                    <div v-for="(exp, index) in experience" :key="index" class="timeline-item">
                        <span class="dot"></span>
                        <div class="content">
                            <h5>{{ exp.position }} ({{ exp.year }})</h5>
                            <p class="text-primary">{{ exp.company }}</p>
                            <p>{{ exp.details }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <section class="skills">
                <div class="container">
                    <h3 class="section-title">My Skills</h3>
                    <p class="subtitle">I have expertise in front-end and back-end web development, including:</p>
                    <div class="skill-grid">
                        <div v-for="(skill, index) in skills" :key="index" class="skill-card">
                            <img :src="skill.image" :alt="skill.name" class="skill-icon" />
                            <p>{{ skill.name }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Download Resume -->

            <div class="d-flex align-items-center mt-4">
                <button class="btn btn-success btn-lg play-btn ms-3">
                    <i class="text fas fa-download"></i> Download Resume
                </button>
            </div>

        </div>
    </section>



    <!-- Footer -->
    <footer class="footer text-center py-3 bg-dark text-light">
        <small>Page | 03</small>
    </footer>
    
</template>

<style scoped></style>
