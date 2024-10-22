<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modern E-Commerce</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ShopLogo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary nav-link px-4 text-white" href="#shop-now">Shop Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex justify-content-center align-items-center">
        <div class="container text-center">
            <h1 class="display-4">Find Your Perfect Style</h1>
            <p class="lead">Explore our wide range of products to elevate your lifestyle.</p>
            <a href="#products" class="btn btn-primary btn-lg mt-3">Shop Now</a>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Products</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="images/sepatu.jpg" class="card-img-top product-image" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$29.99</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="images/sepatu.jpg" class="card-img-top product-image" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">$49.99</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="images/sepatu.jpg" class="card-img-top product-image" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">$39.99</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Our Shop</h2>
                    <p>We are dedicated to providing the best products with high quality and affordability. Our mission is to offer a great shopping experience with diverse product ranges that cater to all your needs.</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/about.jpg" class="img-fluid" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center">Get in Touch</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white text-center">
        <p>&copy; 2024 Modern E-Commerce. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>
