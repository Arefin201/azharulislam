<script setup>
import AppNav from '../components/AppNav.vue';

</script>


<template>
    <!-- Import Nav Bar -->
    <AppNav />

    <section class="contact py-5 hero" id="contact">
        <div class="container">
            <div class="row">
                <!-- Left Section -->
                <div class="col-md-5 d-flex align-items-stretch">
                    <div class="card p-4 w-100">
                        <h3 class="mb-3">Find Me Here</h3>
                        <div class="map-container mb-3" style="border: 2px solid #ccc; height: 100%;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d322.7477443608608!2d90.41412699321738!3d23.766133275884176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8be6f4c0df1%3A0x99c525f64f42033e!2sLight%20Technologies!5e0!3m2!1sen!2sau!4v1737811597048!5m2!1sen!2sau"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                width="100%" height="250" style="border:0;"></iframe>
                        </div>
                        <h4>Contact Information</h4>
                        <p><strong>Phone:</strong> +880 1640764896</p>
                        <p><strong>Email:</strong> admin@example.com</p>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-md-7 d-flex align-items-stretch">
                    <div class="card p-4 w-100">
                        <h3 class="mb-4">Send a Message</h3>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Follow Me Section -->
            <div class="follow-me text-center mt-5">
                <h3>Follow Me</h3>
                <div class="social-icons mt-3">
                    <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="btn btn-outline-info me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-secondary me-2"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-danger"><i class="fab fa-instagram"></i></a>
                </div>
            </div>


        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center py-3 bg-dark text-light">
        <small>Page | 06</small>
    </footer>

</template>


<style scoped></style>
