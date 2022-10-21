
@extends('layouts.link')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-muted" style="background-color: #800000" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light "><img width='200px,'  src="{{ ('img/siakad.png') }}" alt=""></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item{{request()->is('/')?'active':''}} p-3" style="color: #ffffff; background-color:#800000 " href="/">Home</a>
                    <a class="list-group-item{{request()->is('dosen')?'active':''}}  p-3"  style="color: #ffffff; background-color:#800000 " href="/dosen">Dosen</a>
                    <a class="list-group-item{{request()->is('mahasiswa')?'active':''}}  p-3"  style="color: #ffffff; background-color:#800000 " href="/mahasiswa">Mahasiswa</a>
                    <a class="list-group-item{{request()->is('mata-kuliah')?'active':''}}  p-3"  style="color: #ffffff; background-color:#800000 " href="/mata-kuliah">Mata Kuliah</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #800000" >
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-3 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="/" style="color: aliceblue">Sistem Informasi Akademik 2022</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('container')
                </div>

                
                <!-- Remove the container if you want to extend the Footer to full width. -->
               
                  <!-- Footer -->
                  <footer class="footer-wrapper text-center text-white mb-2" style="background-size:cover;  background-color: #800000;  
               
                  
                   ">
                    <!-- Grid container -->
                    <div class="container">
                     
                      <hr class="my-5" />
                
                      <!-- Section: Social -->
                      <section class="text-center mb-5">
                        <a href="" class="text-white me-4">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="text-white me-4">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="text-white me-4">
                          <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="text-white me-4">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="text-white me-4">
                          <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="text-white me-4">
                          <i class="fab fa-github"></i>
                        </a>
                      </section>
                      <!-- Section: Social -->
                    </div>
                    <!-- Grid container -->
                
                    <!-- Copyright -->
                    <div
                         class="text-center p-3"
                         style="background-color: rgba(0, 0, 0, 0.2)"
                         >
                      © 2022 :
                      <a class="text-white"
                         >Anandito Rafi Putra</a
                        >
                    </div>
                    <!-- Copyright -->
                  </footer>
                  <!-- Footer -->
                </div>
                <!-- End of .container -->
              

    </body>
</html>
