<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Théotime Perrin — Portfolio</title>
  <meta name="description" content="Portfolio de Théotime Perrin — BTS SIO SLAM. Projets, compétences et contact." />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --muted:#9aa4b2;
      --accent:#4f46e5;
      --glass: rgba(255,255,255,0.03);
      --radius:14px;
      --max-width:1100px;
    }
    *{box-sizing:border-box}
    html,body{height:100%; width:100%}
    body{
      margin:0;
      font-family:Inter,system-ui,Segoe UI,Roboto,"Helvetica Neue",Arial;
      background:linear-gradient(180deg,var(--bg),#071022 140%);
      color:#e6eef6;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      line-height:1.45;
      padding:24px 18px;
      display:flex;
      background-repeat: no-repeat;
      background-attachment: fixed;
      justify-content:center;
    }
    .container{width:100%;max-width:var(--max-width);}

    header{
      display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;
    }
    .brand{display:flex;gap:14px;align-items:center}
    .logo{width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,var(--accent),#06b6d4);display:flex;align-items:center;justify-content:center;font-weight:700;box-shadow:0 6px 20px rgba(79,70,229,0.18);}
    .logo span{font-size:20px}
    .title{font-size:18px;font-weight:700}
    .subtitle{font-size:13px;color:var(--muted);margin-top:2px}

    nav a{color:var(--muted);text-decoration:none;margin-left:18px;font-weight:600}
    nav a:hover{color:#fff}

    main{display:grid;grid-template-columns:360px 1fr;gap:28px}

    /* left column */
    .right-column {
      position: sticky;
      top: 24px; /* même valeur que ton padding body */
      align-self: start;
      height: fit-content;
    }
    .card{background:linear-gradient(180deg,var(--card), rgba(255,255,255,0.02));padding:20px;border-radius:var(--radius);box-shadow:0 8px 30px rgba(2,6,23,0.6)}
    .profile{display:flex;gap:14px;align-items:center}
    .avatar{width:76px;height:95px;border-radius:12px;background:linear-gradient(180deg,#fff2,#0002);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff}
    .name{font-weight:700;font-size:18px}
    .role{color:var(--muted);font-size:13px}
    .tag{display:inline-block;background:var(--glass);padding:8px 10px;border-radius:10px;margin-top:12px;color:var(--muted);font-weight:600}
    .lien{width:20px;height:20px;}

    .skills{display:grid;grid-template-columns:repeat(2,1fr);gap:8px;margin-top:12px}
    .skill{background:rgba(255,255,255,0.02);padding:8px;border-radius:8px;font-weight:600;color:var(--muted);font-size:13px}

    .contact-list{margin-top:14px;display:flex;flex-direction:column;gap:8px}
    .contact-list a{display:flex;gap:10px;align-items:center;text-decoration:none;color:var(--muted);font-weight:600}

    /* right column */
    .hero{margin-bottom:20px;padding:22px;border-radius:var(--radius);background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);}
    .hero h1{margin:0;font-size:28px}
    .hero p{margin:8px 0 0;color:var(--muted)}

    .projects-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:18px}
    .project{border-radius:12px;padding:14px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));box-shadow:0 6px 20px rgba(2,6,23,0.45);display:flex;flex-direction:column;gap:10px}
    .project .thumb{height:120px;border-radius:8px;background:linear-gradient(90deg, #111827, #0f1724);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;color:var(--muted)}
    .project h3{margin:0}
    .project .meta{font-size:13px;color:var(--muted)}
    .project .actions{margin-top:auto;display:flex;gap:8px}
    .btn{padding:8px 12px;border-radius:8px;text-decoration:none;font-weight:700;font-size:13px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:#fff}
    .btn.secondary{background:transparent;color:var(--muted)}

    .section-title{font-weight:700;margin:6px 0 12px}

    /* contact form */
    form{display:grid;gap:10px}
    input,textarea{background:transparent;border:1px solid rgba(255,255,255,0.04);padding:10px;border-radius:8px;color:#e6eef6}
    textarea{min-height:110px;resize:vertical}
    .footer-note{color:var(--muted);font-size:13px;margin-top:10px}

    /* responsive */
    @media (max-width:980px){
      main{grid-template-columns:1fr;}
      header{flex-direction:column;align-items:flex-start;gap:12px}
    }

/* ===== CAROUSEL FIX ===== */
.carousel {
  position: relative;
}

.carousel-viewport {
  overflow: hidden;
  border-radius: 12px;
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease;
}

.carousel img {
  width: 100%;
  height: 260px;
  object-fit: cover;
  flex-shrink: 0;
}

.carousel-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 5;
  background: rgba(15,23,36,0.85);
  border: none;
  color: white;
  font-size: 28px;
  cursor: pointer;
  padding: 6px 12px;
  border-radius: 8px;
}

.carousel-btn:hover {
  background: var(--accent);
}

.carousel-btn.prev { left: 10px; }
.carousel-btn.next { right: 10px; }


  </style>
</head>
<body>
  <div class="container">
    <header>


      <nav aria-label="Navigation principale">
        <a href="#projects">Projets</a>
        <a href="#about">À propos</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    <main>
      <!-- LEFT COLUMN -->
      <section class="right-column">
        <aside class="card" aria-labelledby="profile-title">
          <div id="profile-title" class="profile">
            <div class="avatar"><img class="avatar" src="./images/image.jpg" width="100%" height="100%"/></div>
            <div>
              <div class="name">Théotime Perrin</div>
              <div class="role">Étudiant BTS SIO — Option SLAM</div>
            </div>
          </div>

          <div class="section">
            <div class="section-title">Compétences</div>
            <div class="skills">
              <div class="skill">HTML</div>
              <div class="skill">CSS</div>
              <div class="skill">JavaScript</div>
              <div class="skill">PHP / MySQL</div>
              <div class="skill">Git</div>
              <div class="skill">C#</div>
            </div>
          </div>

          <div class="section">
            <div class="section-title">Contact</div>
            <div class="contact-list">
              <a href="mailto:theotime.perrin@gmail.com" title="Envoyer un email"> <img class='lien' src="./images/maillogo.png" /> theotime.perrin@gmail.com</a>
              <a href="https://github.com/TheotimePerrin" target="_blank" rel="noopener"> <img class='lien' src="./images/githublogo.png"width="200%" height="200%"/>GitHub</a>
              <a href="https://fr.linkedin.com/in/th%C3%A9otime-perrin-725b20325" target="_blank" rel="noopener"><img class='lien' src="./images/linkedinlogo.png"/> LinkedIn</a>
            </div>
          </div>

          <div style="margin-top:14px;color:var(--muted);font-size:13px">
            <strong>Veille :</strong> L'evolution des robots en ligne notament avec l'utilisation de l'ia.
          </div>
        </aside>
      </section>

      <!-- RIGHT COLUMN -->
      <section>
        <div class="hero card">
          <h1>Bienvenue sur mon Portfolio</h1>
          <p id="about">Développeur web en formation (BTS SIO SLAM)</p>
        </div>

        <div class="card" id="projects">
          <div class="section-title">Projets</div>
          <div class="projects-grid">

            <!-- Project 1 -->
            <article class="project">
              <div class="thumb">Netflix Clone</div>
              <h3>Netflix (Clone)</h3>
              <div class="meta">2024 · HTML · CSS</div>
              <p>Clone d'une interface de streaming : catalogue dynamique et lecture de la bande-annonce, barre de recherche, carrousel de sélection de films, interface de connexion.</p>
              <div class="actions">
                <a class="btn" href="https://github.com/TheotimePerrin" target="_blank" rel="noopener">Voir le code</a>
                <!-- <a class="btn secondary" href="#">Démo</a> -->
              </div>
            </article>

            <!-- Project 2 -->
            <article class="project">
              <div class="thumb">Monopoly</div>
              <h3>Monopoly (Jeu)</h3>
              <div class="meta">2025 · Python</div>
              <p>Adaptation digitale d'un jeu de plateau : gestion du plateau, tours de jeu et logique d'achats/ventes.</p>
              <div class="actions">
                <a class="btn" href="https://github.com/TheotimePerrin" target="_blank" rel="noopener">Voir le code</a>
                <!--<a class="btn secondary" href="#">Démo</a> -->
              </div>
            </article>

            <!-- Example placeholder for future projects -->
            <article class="project">
              <div class="thumb">WoodyCraft</div>
              <h3>Site de Ecomerce</h3>
              <div class="meta">2025 · Python</div>
              <p>Création d'un site de e-commerce pour la vente de puzzles, gestion des comptes administrateurs, utilisation de la méthode CRUD </p>
              <div class="actions">
              <a class="btn" href="https://github.com/TheotimePerrin" target="_blank" rel="noopener">Voir le code</a>
              </div>
            </article>

          </div>
        </div>

        <div class="card" id="projects">
          <div>
            <h3>Veille techno</h3>
          </div>
        </div>

        <div class="card" id="projects">
          <div class="section-title">Stages</div>
          <div class="projects-grid">

            <!-- Project 1 -->
            <article class="project">
              <div class="thumb"><img src="./images/maladie.png" width="auto" height="100%"/></div>
              <h3>C.T.I : Automates</h3>
              <div class="meta">2025 · Bash</div>
              <p>Création et modification de différents automates, envoi de mail automatique, lancement de vidages automatiques.</p>
              <div class="actions">
                <a class="btn" href="https://github.com/TheotimePerrin" target="_blank" rel="noopener">En savoir plus</a>
                <!-- <a class="btn secondary" href="#">Démo</a> -->
              </div>
            </article>

            <!-- Project 2 -->
            <article class="project">
              <div class="thumb"><img src="./images/seebauto.png" width="auto" height="100%"/></div>
              <h3>Seeb Automation : Traceur</h3>
              <div class="meta">2025 · C#</div>
              <p>Formation en C#, Création d'une application, utilisation de frameworks avec synchronisation.</p>
              <div class="actions">
                <a class="btn" href="https://github.com/TheotimePerrin" target="_blank" rel="noopener">En savoir plus</a>
                <!--<a class="btn secondary" href="#">Démo</a> -->
              </div>
            </article>
          </div>
        </div>

        <div class="card" style="margin-top:18px">
          <div class="section-title">Galerie</div>

          <div class="carousel">
            <div class="carousel-viewport">
              <div class="carousel-track">
                <img src="./images/Capture1.png" alt="Projet 1">
                <img src="./images/Capture2.png" alt="Projet 2">
                <img src="./images/Capture3.png" alt="Projet 3">
              </div>
            </div>

            <button class="carousel-btn prev">❮</button>
            <button class="carousel-btn next">❯</button>
          </div>
        </div>



        <div class="card" id="contact" style="margin-top:18px">
          <div class="section-title">Contact</div>
          <form id="contactForm" onsubmit="handleContact(event)">
            <input type="text" id="name" placeholder="Ton nom" required />
            <input type="email" id="email" placeholder="Ton email" required />
            <textarea id="message" placeholder="Ton message" required></textarea>
            <div style="display:flex;gap:8px;align-items:center">
              <button class="btn" type="submit">Envoyer (mailto)</button>
              <div style="color:var(--muted);font-size:13px">Ou contacte-moi directement : <strong>theotime.perrin@gmail.com</strong></div>
            </div>
          </form>
          <div class="footer-note">Pour l'oral du BTS, prépare une fiche projet détaillée (contexte, objectifs, architecture, diagrammes, tests, difficultés et solution).</div>
        </div>

      </section>
    </main>

    <footer style="margin-top:22px;color:var(--muted);text-align:center">
      © <span id="year"></span> Théotime Perrin — BTS SIO SLAM
    </footer>
  </div>

  <script>
    // Year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Contact handler: open mailto with prefilled subject/body
    function handleContact(e){
      e.preventDefault();
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
      const subject = encodeURIComponent('Contact portfolio — ' + name);
      const body = encodeURIComponent('Nom: '+name+'\nEmail: '+email+'\n\n'+message);
      window.location.href = 'mailto:eheotime.perrin@gmail.com?subject=' + subject + '&body=' + body;
    }

      // ===== CAROUSEL =====
      const track = document.querySelector('.carousel-track');
      const slides = document.querySelectorAll('.carousel img');
      const nextBtn = document.querySelector('.carousel-btn.next');
      const prevBtn = document.querySelector('.carousel-btn.prev');

      let index = 0;

      function updateCarousel() {
  const width = document.querySelector('.carousel-viewport').clientWidth;
  track.style.transform = `translateX(-${index * width}px)`;
}


      nextBtn.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        updateCarousel();
      });

      prevBtn.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        updateCarousel();
      });

      window.addEventListener('resize', updateCarousel);


  </script>
</body>
</html>
