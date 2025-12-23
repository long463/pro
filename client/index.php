
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-img { height: 400px; object-fit: cover; }
        .product-card:hover { transform: translateY(-6px); transition: 0.3s; }
    </style>
</head>
<body class="bg-dark text-white">

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand " href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="nav-link btn btn-outline-primary"  width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7z"/></svg>
        </a>
        <button class="navbar-toggler" type="submit" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link text-light btn btn-outline-primary" href="../auth/login.php">Login</a></li>
            </ul>
            <form class="d-flex" method="GET" action="index.php">
                <input class="form-control me-2" type="search" id="searchInput" name="search" placeholder="Search..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- CAROUSEL -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i.pinimg.com/1200x/74/dd/0b/74dd0bc2f9010eda92d28420bd427098.jpg" class="d-block w-100" alt="Slide 1" style="height: 450px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/1200x/e4/85/0a/e4850ab78f5319d07f084c34936d8495.jpg" class="d-block w-100" alt="Slide 2" style="height: 450px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="https://i.pinimg.com/1200x/d1/5e/5d/d15e5d7e3d17c848611c535293b5d875.jpg" class="d-block w-100" alt="Slide 3" style="height: 450px; object-fit: cover;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<!-- PRODUCTS -->
<div id="products" class="container my-5">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="row">
        <!-- Sample Product Card -->
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow">
                <img src="https://static.nike.com/a/images/t_web_pdp_535_v2/f_auto/daf6e9e0-9d5b-465b-ae22-a0c1d3ed0258/JR+ZM+VAPOR+16+PRO+FG+SE.png"  class="card-img-top product-img" alt="Product 1" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://static.nike.com/a/images/t_web_pdp_535_v2/f_auto/daf6e9e0-9d5b-465b-ae22-a0c1d3ed0258/JR+ZM+VAPOR+16+PRO+FG+SE.png">
                <div class="card-body">
                    <h5 class="card-title">Nike Jr. Mercurial Vapor 16 Pro</h5>
                    <p class="card-text">$150</p>
                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>   
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow">
                <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/40d33991d054474291815553dc8e0c14_9366/PREDATOR_LEAGUE_Fold-Over_Tongue_Firm_Ground_Football_Boots_Kids_Grey_JR3312_01_00_standard_hover.jpg" class="card-img-top product-img" alt="Product 2" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/40d33991d054474291815553dc8e0c14_9366/PREDATOR_LEAGUE_Fold-Over_Tongue_Firm_Ground_Football_Boots_Kids_Grey_JR3312_01_00_standard_hover.jpg">
                <div class="card-body">
                    <h5 class="card-title">Predator Leauge Fold-Over</h5>
                    <p class="card-text">$80</p>
                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>   
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product-card shadow">
                <img src="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/ec6233484a3747728bcbb7dd77364d21_9366/Predator_Precision_Firm_Ground_Cleats_Black_JS0572_HM4.jpg" class="card-img-top product-img" alt="Product 3" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/ec6233484a3747728bcbb7dd77364d21_9366/Predator_Precision_Firm_Ground_Cleats_Black_JS0572_HM4.jpg">
                <div class="card-body">
                    <h5 class="card-title">Predator Precision Firm</h5>
                    <p class="card-text">$300</p>
                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>   
                </div>
            </div>
        </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow">
                    <img src="https://static.nike.com/a/images/t_web_pw_592_v2/f_auto/9d59701f-30d4-4437-812b-ffd6d8d373ec/NK+NFHS+CLUB+ELITE+TEAM+-+FA24.png" class="card-img-top product-img" alt="Product 4" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://static.nike.com/a/images/t_web_pw_592_v2/f_auto/9d59701f-30d4-4437-812b-ffd6d8d373ec/NK+NFHS+CLUB+ELITE+TEAM+-+FA24.png">
                    <div class="card-body">
                        <h5 class="card-title">Nike club elite</h5>
                        <p class="card-text">$49.97</p>
                        <a href="#" class="btn btn-primary w-100">Add to Cart</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow">
                    <img src="https://i1.adis.ws/i/mizunousa/540328_1000?w=1060&h=1060&fmt=jpg&bg=rgb(255,255,255)&img404=404&v=1" class="card-img-top product-img" alt="Product 5" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://i1.adis.ws/i/mizunousa/540328_1000?w=1060&h=1060&fmt=jpg&bg=rgb(255,255,255)&img404=404&v=1">
                    <div class="card-body">
                        <h5 class="card-title">Mizuno Monarcida Neo III</h5>
                        <p class="card-text">$100</p>
                        <a href="#" class="btn btn-primary w-100">Add to Cart</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card product-card shadow">
                    <img src="https://static.nike.com/a/images/t_web_pdp_535_v2/f_auto/b31b044d-f7ad-4d8b-8c8e-dfd681a7d7d9/NK+GK+MATCH+-+HO24.png" class="card-img-top product-img" alt="Product 6" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="https://static.nike.com/a/images/t_web_pdp_535_v2/f_auto/b31b044d-f7ad-4d8b-8c8e-dfd681a7d7d9/NK+GK+MATCH+-+HO24.png">
                    <div class="card-body">
                        <h5 class="card-title">Nike GK Match</h5>
                        <p class="card-text">$32</p>
                        <a href="#" class="btn btn-primary w-100">Add to Cart</a>   
                    </div>
                </div>
            </div>
    </div>
</div>  

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2025 My Shop. All rights reserved.</p>
</footer>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Product Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img id="modalImage" src="" class="img-fluid" alt="Product Image">
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('searchInput').addEventListener('input', function() {
    const query = this.value.toLowerCase();
    const cards = document.querySelectorAll('.product-card');
    cards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        if (title.includes(query)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var imageSrc = button.getAttribute('data-bs-image');
        var modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
    });
});
</script>
</body>
</html>
</body>
</html>