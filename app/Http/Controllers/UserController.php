<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class UserController extends Controller
{
   
   public function HomePage() {
        return Inertia::render('HomePage');
    }

    public function AboutPage() {
        return Inertia::render('AboutPage');
    }

    public function ResumePage() {
        return Inertia::render('ResumePage');
    }

    public function ProjectPage () {
        return Inertia::render('ProjectPage');
    }

    public function BlogPage() {
        return Inertia::render('BlogPage');
    }
    

    public function ContactPage() {
        return Inertia::render('ContactPage');
    }

   
}
