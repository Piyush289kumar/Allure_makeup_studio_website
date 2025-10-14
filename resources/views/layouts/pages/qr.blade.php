<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Allure Makeup Studio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background: radial-gradient(1200px 600px at 10% 0%, #f8f9fa 0%, #eef2f6 40%, #e9ecef 100%);
            min-height: 100vh;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.09);
            transition: transform .15s, box-shadow .15s;
        }

        .glass-card:hover {
            transform: translateY(-3px) scale(1.01);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.13);
        }

        .brand-img {
            max-width: 140px;
            border-radius: 0.75rem;
        }

        .footer-note {
            font-size: .95rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <header class="py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="glass-card p-4 text-center">
                        <img src="{{asset('assets/img/HD/logo.png')}}" alt="Allure Makeup Studio logo" style="width: 100%;">
                    </div>
                </div>
                <div class="col-12 col-lg-7 text-center text-lg-start">
                    <h5 class=" mb-2">Connect With</h5>
                    <p class="display-6 fw-semibold">Allure Makeup Studio</p>
                </div>
            </div>
        </div>
    </header>

    <main class="pb-5">
        <div class="container">
            <!-- Social Cards Grid -->
            <div class="row g-4">


                <!-- Google Review Form -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="glass-card p-4 d-flex flex-column align-items-center h-100">
                        <div class="mb-3">
                            <h2 class="h5 m-0 d-flex align-items-center gap-2">
                                <i class="bi bi-pencil-square text-info"></i> Google Review
                            </h2>
                        </div>
                        <a href="https://g.page/r/CUX-2BpH29rHEAE/review" target="_blank"
                            class="btn btn-sm btn-info w-100 mt-auto text-white">Give Review</a>
                    </div>
                </div>


                <!-- Instagram -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="glass-card p-4 d-flex flex-column align-items-center h-100">
                        <div class="mb-3">
                            <h2 class="h5 m-0 d-flex align-items-center gap-2">
                                <i class="bi bi-instagram text-danger"></i> Instagram
                            </h2>
                        </div>
                        <a href="https://www.instagram.com/allure_makeup.studio" target="_blank"
                            class="btn btn-sm btn-danger w-100 mt-auto">Follow Us</a>
                    </div>
                </div>



                <!-- Facebook -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="glass-card p-4 d-flex flex-column align-items-center h-100">
                        <div class="mb-3">
                            <h2 class="h5 m-0 d-flex align-items-center gap-2">
                                <i class="bi bi-facebook text-primary"></i> Facebook
                            </h2>
                        </div>
                        <a href="https://www.facebook.com/alluremakeupstudio" target="_blank"
                            class="btn btn-sm btn-primary w-100 mt-auto">Follow Us</a>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="glass-card p-4 d-flex flex-column align-items-center h-100">
                        <div class="mb-3">
                            <h2 class="h5 m-0 d-flex align-items-center gap-2">
                                <i class="bi bi-whatsapp text-success"></i> WhatsApp
                            </h2>
                        </div>
                        <a href="https://wa.me/919149071110?text=Hello%20Allure%20Makeup%20Studio" target="_blank"
                            class="btn btn-sm btn-success w-100 mt-auto">Chat With
                            Us</a>
                    </div>
                </div>


                <!-- Website -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="glass-card p-4 d-flex flex-column align-items-center h-100">
                        <div class="mb-3">
                            <h2 class="h5 m-0 d-flex align-items-center gap-2">
                                <i class="bi bi-globe text-success"></i> Website
                            </h2>
                        </div>
                        <a href="https://alluremakeupstudio.com" target="_blank"
                            class="btn btn-sm btn-dark w-100 mt-auto">Go to Website</a>
                    </div>
                </div>



            </div>
        </div>
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>