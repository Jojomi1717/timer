<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lancement Pixel-Mart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>

    body, html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .carousel {
      position: relative;
      height: 100vh;
      overflow: hidden;
    }

    .carousel-inner {
      height: 100%;
    }

    .carousel-item img {
      height: 100vh;
      object-fit: cover;
      filter: brightness(50%);
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      text-align: center;
      color: white;
    }

    .content h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: orange;
      font-weight: bold;
    }

    .content p {
      font-size: 30px;
      margin-bottom: 2rem;
      color:   skyblue;
      font-family: "Pacifico", cursive;
      font-weight: bold;

    }

    .countdown {
      display: flex;
      justify-content: center;
      color: red;
      gap: 1rem;
    }

    .countdown div {
      text-align: center;
    }

    .countdown span {
      font-size: 2rem;
      font-weight: bold;
      display: block;
    }

    #why-choose {
      background-color: #f7f9fc;
      padding: 3rem 1rem;
    }

    .feature-card {
      margin: auto;
      text-align: center;
      max-width: 350px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-card:hover {
      transform: scale(1.05);
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    .icon {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 70px;
      height: 70px;
      margin: 0 auto;
      border-radius: 50%;
      background-color: rgba(0, 0, 0, 0.05);
      font-size: 2rem;
      color: #fff;
    }

    @media (max-width: 768px) {
      .content h1 {
        font-size: 2rem;
      }

      .content p {
        font-size: 1rem;
        font-family: "Pacifico", cursive;
        font-style: "italic";
      }

      .feature-card {
        max-width: 100%;
        margin-bottom: 1.5rem;
      }
    }

    footer {
      background-color: #222;
      color: white;
      padding: 1rem 0;
      text-align: center;
    }
    
  </style>
</head>
<body>
  <!-- Carrousel -->
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="J1.jpg" class="d-block w-100" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="deb.jpg" class="d-block w-100" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="jor.jpg" class="d-block w-100" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="jaket.jpg" class="d-block w-100" alt="Image 4">
      </div>
      <div class="carousel-item">
        <img src="jordan.jpg" class="d-block w-100" alt="Image 5">
      </div>
      <div class="carousel-item">
        <img src="nike.jpg" class="d-block w-100" alt="Image 6">
      </div>
    </div>
  </div>
  <div class="overlay"></div>
  <div class="content">
    <h1>Pixel-Mart arrive bientôt !</h1>
    <p>Rejoignez-nous dès le 16 décembre pour révolutionner vos achats en ligne.</p>
    <div class="countdown">
      <div><span id="days">00</span>Jours</div>
      <div><span id="hours">00</span>Heures</div>
      <div><span id="minutes">00</span>Minutes</div>
      <div><span id="seconds">00</span>Secondes</div>
    </div>
  </div>

  <!-- Pourquoi choisir Pixel-Mart -->
  <section id="why-choose" class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Pourquoi choisir <span class="text-primary">Pixel-Mart</span> ?</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="feature-card shadow p-4">
          <div class="icon bg-primary text-white">
            <i class="bi bi-basket"></i>
          </div>
          <h4 class="mt-3">Facilité d'utilisation</h4>
          <p>Achetez vos produits en quelques clics grâce à une interface intuitive.<br> Notre plateforme est conçue pour offrir une expérience utilisateur intuitive et agréable, quelle que soit votre expertise technique.
Naviguez facilement grâce à une interface claire et bien organisée. Que vous soyez un débutant ou un utilisateur avancé, tout est pensé pour une prise en main rapide.
Accédez à notre service via un ordinateur, une tablette ou un smartphone, sans perte de qualité ni de fonctionnalités.
Réduisez les efforts inutiles grâce à des fonctionnalités automatisées (comme le remplissage automatique, la navigation guidée, etc.) et des instructions claires à chaque étape.

</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card shadow p-4">
          <div class="icon bg-success text-white">
            <i class="bi bi-lock-fill"></i>
          </div>
          <h4 class="mt-3">Sécurité garantie</h4>
          <p>Des protocoles avancés pour protéger vos transactions.<br> La sécurité de vos données est notre priorité absolue. Nous mettons en place des mesures de pointe pour garantir votre tranquillité d'esprit.
Toutes vos données sont protégées par un chiffrement AES-256, assurant leur confidentialité lors des échanges et du stockage.
Nos systèmes de sécurité fonctionnent en permanence pour détecter et neutraliser toute menace en temps réel.
Les transactions sont effectuées via des passerelles sécurisées et conformes aux normes PCI DSS, garantissant des paiements sans risque.
Vos données ne sont jamais partagées sans votre consentement explicite.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card shadow p-4">
          <div class="icon bg-warning text-white">
            <i class="bi bi-headset"></i>
          </div>
          <h4 class="mt-3">Support client 24/7</h4>
          <p>Une assistance à tout moment pour vos besoins.<br> Nous sommes là pour vous accompagner à chaque étape, jour et nuit, pour répondre à toutes vos questions et résoudre vos problèmes.
Une équipe dédiée est accessible 24 heures sur 24 et 7 jours sur 7, y compris les jours fériés, pour vous offrir une assistance immédiate.
Contactez-nous via des moyens pratiques comme  l'email, WhatsApp ou un appel téléphonique.
Nos agents s'efforcent de répondre à vos demandes dans les délais les plus brefs, avec un délai moyen de réponse inférieur à 5 minutes pour le chat en direct.
Accédez à une vaste collection de guides, de FAQ, et de tutoriels pour résoudre les problèmes courants sans assistance supplémentaire.
Chaque demande est traitée avec soin, avec des solutions adaptées à vos besoins spécifiques.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; 2024 Pixel-Mart. Tous droits réservés.</p>
  <div class="d-flex justify-content-center gap-3">
    <a href="https://www.instagram.com/pixel_mart001?igsh=b3QydDN5OHE5cW1k&utm_source=qr" class="text-white" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
    <a href="https://www.facebook.com/share/AFJvTUtjoPWzuw1v/?mibextid=LQQJ4d" class="text-white" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
    <a href="https://www.tiktok.com/@pixel_mart001?_t=8pHIRP8CdaD&_r=1" class="text-white" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
    <a href="https://youtube.com/@pixelmart-y3c?si=R1xXyNbiLHe7ajHe" class="text-white" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Countdown Timer
    function updateCountdown() {
      const targetDate = new Date('2024-12-16T00:00:00').getTime();
      const now = new Date().getTime();
      const distance = targetDate - now;

      if (distance > 0) {
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
      }
    }

    setInterval(updateCountdown, 1000);

  
  </script>
</body>
</html>
