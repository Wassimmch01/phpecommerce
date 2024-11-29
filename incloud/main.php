<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Jaro:opsz@6..72&family=Lilita+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <title>Main</title>
  <style>
    #i13 {
      width: 680px;
      padding-right: 80px;
      padding-top: 50px;
    }

    

    .s1 {
      min-height: 200px;
      height: 670px;
      /* Utilisez min-height pour permettre le défilement */
    }
    #ecr{
  color: white;
  height: 500px;
  width: 1000px;
  padding-top: 200px;
  margin-left:100px ;
}
.slogan{
  font-family: "Alfa Slab One", serif;
  font-weight: 400;
  font-style: normal;
  font-size: 46px;
  align-content: center;
  text-shadow: 2px 2px 5px black;
}
.bg_m{
  background: white;
           
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Légère ombre */
  padding-top: 5px;
  padding-bottom: 20px;
  z-index: 2; 
  align-items: center;
}
.card{
  box-shadow:0.5px 0.5px 1px 2px black background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease; ;
  
  position: relative;
  margin: 0%;
  width: 250px;
  background: white;
  text-align: center;
  

}
.card:hover{
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
            transform: translateY(-10px);
        }

.btn-primary{
  font-family: 'Poppins' sans serif;
  background-color:#486fff;
  text-align: center;
  text-size: 1.5rem;
}
.btn-primary:hover{
  transition: all 0.3s ease;
  border: none;
}
.btn-primary:hover:hover{
transform: scale(1.05); /* Légèrement agrandi */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre subtile */
     }
 
/*
     #mc{
  height: 1000px;
   width: 2580px;
      padding-left: 180px;
      padding-top :10px;
}
*/
.des-mbok {
      font-family: "Poppins", sans-serif;
      font-size: 3.5rem;
      color: #fff;
      padding-left: 30px;
    }
    #ds2{
      font-family: "Poppins", sans-serif;
      font-size: 1rem;
      padding-left: 30px;
      color: #fff;

    }

    .mcbook img {
      max-width: 100%;
      height: auto;
    }

    .bg-dark-section {
      background-color: transparent;
      padding: 30px 10px;
      border-radius: 15px;
      
    }

    .btn-primary {
      background-color: #486fff;
      transition: all 0.3s ease;
      
    }

    .btn-primary:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    .carousel-box {
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      padding: 20px;
    }

    .carousel-item video {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 10px;
    }
    
    
  </style>

</head>

<body class="  bg-dark">
  <section class="s1">
    <div class="iph13">
      <img src="img/iPhone-13.png" id="i13" alt="Photo de iPhone 13" class="img-fluid rounded float-end">
    </div>
<div id="ecr" class="container-fluid container-lg">
  <h1 class="slogan">Accélérez votre performance <br>avec nos produits high-tech</h1>
</div>
  </section>


<div class="bg_m">
  <div class="container mt-4">
    <div class="row g-4">
        <!-- Colonne 1 -->
        <div class="col-md-3">
            <div class="card">
                <img src="img\daniel-romero-fCSauHX0-R0-unsplash.jpg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                <button type="button" href="#" class="btn btn-primary w-100" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 0rem; --bs-btn-font-size: -1rem;"> Découvrez Nos iphone </button>
                </div>
            </div>
        </div>

        <!-- Colonne 2 -->
        <div class="col-md-3">
            <div class="card">
                <img src="img\klim-musalimov-nmhZgiSU8_0-unsplash.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                <button type="button" href="#" class="btn btn-primary w-100" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 0rem; --bs-btn-font-size: -1rem;"> Découvrez Nos SmartWatch </button>
                </div>
            </div>
        </div>

        <!-- Colonne 3 -->
        <div class="col-md-3">
            <div class="card">
                <img src="img\tariq-mahmud-naim-ORjwj-Bl1K8-unsplash.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                <button type="button" href="#" class="btn btn-primary w-100" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 0rem; --bs-btn-font-size: -1rem;"> Découvrez Nos Airpods</button>
                </div>
            </div>
        </div>

        <!-- Colonne 4 -->
        <div class="col-md-3">
            <div class="card">
                <img src="img\dlxmedia-hu-UkpTGYox6RM-unsplash.jpg" class="card-img-top" alt="Image 4">
                <div class="card-body">
                <button type="button" href="#" class="btn btn-primary w-100" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 0rem; --bs-btn-font-size: -1rem;"> Découvrez Nos MacBook </button>
                </div>
            </div>
        </div>
            </div>
        </div>
        </div>
        <section class="container-fluid bg-dark-section">
    <div class="row align-items-center">
      <!-- Description Section -->
      <div class="col-md-6">
        <h1 class="des-mbok">Le MacBook : conçu pour dépasser vos attentes.</h1>
        <p id="ds2">Explorez la puissance, l'élégance et l'innovation dans chaque détail du MacBook. Une expérience unique qui redéfinit vos limites.</p>
        <button class="btn btn-primary w-50" style="margin: 30px;">En Savoir Plus</button>
      </div>

      <!-- Image Section -->
      <div class="col-md-6">
        <img src="img/pngegg.png" id="mc" alt="Photo de MacBook" class="img-fluid rounded">
      </div>
    </div>
  </section>

     <!--caroussel-->
     <div class="container mt-5">
     <div class="carousel-box">

     <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video autoplay muted loop>
        <source src="img\iPhone 14 Pro Apple _voici Dynamic Island_ pub 30s.mp4" type="video/mp4">
      </video>
      
    </div>
    <div class="carousel-item">
      <video autoplay muted loop>
        <source src="img\Mar.2024.mp4" type="video/mp4">
      </video>
      
    </div>
    <div class="carousel-item">
      <video autoplay muted loop>
        <source src="img\Voici l’Apple Watch Series 8 .mp4" type="video/mp4">
      </video>
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  </div>
  </div>
  <section class="container-fluid bg-dark-section">
  </section>
</div>
</body>

</html>