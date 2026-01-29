<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alex Rosales – Ultra Premium Portfolio</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body{
      min-height:100vh;
      background:
        radial-gradient(circle at 20% 10%, rgba(99,102,241,.15), transparent 40%),
        radial-gradient(circle at 80% 30%, rgba(34,197,94,.12), transparent 45%),
        linear-gradient(135deg,#020617,#0f172a);
      color:#e5e7eb;
      font-family: Inter, system-ui, sans-serif;
    }

    /* Navbar */
    .navbar{
      background:rgba(2,6,23,.6);
      backdrop-filter: blur(14px);
      border-bottom:1px solid rgba(148,163,184,.15);
    }

    /* Main Card */
    .profile-box{
      background:linear-gradient(180deg,rgba(255,255,255,.05),rgba(255,255,255,.015));
      border-radius:24px;
      overflow:hidden;
      border:1px solid rgba(148,163,184,.18);
      box-shadow:
        0 30px 80px rgba(0,0,0,.55),
        inset 0 1px 0 rgba(255,255,255,.05);
    }

    /* Cover */
    .cover{
      height:220px;
      background:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee') center/cover;
      position:relative;
    }
    .cover::after{
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(to bottom,rgba(2,6,23,.15),rgba(2,6,23,.95));
    }

    .available{
      position:absolute;
      top:18px;
      left:18px;
      z-index:2;
      background:linear-gradient(135deg,#22c55e,#4ade80);
      color:#022c22;
      font-size:12px;
      padding:6px 16px;
      border-radius:999px;
      font-weight:600;
      box-shadow:0 10px 25px rgba(34,197,94,.45);
    }

    .avatar{
      width:130px;
      height:130px;
      border-radius:50%;
      border:4px solid #020617;
      position:absolute;
      bottom:-65px;
      left:28px;
      z-index:2;
      background:#020617;
      box-shadow:0 20px 40px rgba(0,0,0,.6);
    }

    .profile-content{
      padding:96px 28px 32px;
    }

    /* Social */
    .social a{
      color:#94a3b8;
      font-size:19px;
      margin-right:16px;
      transition:.25s ease;
    }
    .social a:hover{
      color:#fff;
      transform:translateY(-2px);
    }

    /* Buttons */
    .btn-primary{
      background:linear-gradient(135deg,#2563eb,#6366f1);
      border:none;
      font-weight:500;
      border-radius:999px;
      padding:6px 16px;
      box-shadow:0 15px 35px rgba(99,102,241,.45);
    }
    .btn-outline{
      border:1px solid rgba(148,163,184,.35);
      color:#e5e7eb;
      border-radius:999px;
      padding:6px 16px;
    }

    /* Tabs */
    .nav-tabs{
      border:none;
      margin-top:32px;
    }
    .nav-tabs .nav-link{
      color:#94a3b8;
      border:none;
      padding:8px 0;
      margin-right:26px;
      font-weight:500;
      position:relative;
    }
    .nav-tabs .nav-link.active{
      color:#fff;
    }
    .nav-tabs .nav-link.active::after{
      content:"";
      position:absolute;
      left:0;
      bottom:-6px;
      width:100%;
      height:2px;
      background:linear-gradient(90deg,#6366f1,#22c55e);
      border-radius:4px;
    }
    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        background-color: transparent !important;
        color: #ffffff; 
        border: none;
    }
    /* Projects */
    .project-card{
      background:linear-gradient(180deg,rgba(255,255,255,.05),rgba(255,255,255,.01));
      color: white;
      border-radius:18px;
      padding:18px;
      height:100%;
      border:1px solid rgba(148,163,184,.18);
      transition:.35s ease;
      position:relative;
      overflow:hidden;
    }
    .project-card::before{
      content:"";
      position:absolute;
      pointer-events: none;
      inset:0;
      background:linear-gradient(120deg,transparent,rgba(99,102,241,.15),transparent);
      opacity:0;
      transition:.35s;
    }
    .project-card:hover::before{opacity:1}
    .project-card:hover{
      transform:translateY(-8px);
      box-shadow:0 30px 60px rgba(0,0,0,.6);
    }

    .project-card img{
      width:100%;
      border-radius:14px;
    }

    .tag{
      background:rgba(148,163,184,.18);
      color:#e5e7eb;
      font-size:12px;
      padding:4px 14px;
      border-radius:999px;
      margin-right:6px;
      display:inline-block;
      margin-top:8px;
    }

    .view-btn{
      display:inline-block;
      margin-top:14px;
      padding:9px 22px;
      font-size:13px;
      border-radius:999px;
      background:linear-gradient(135deg,#2563eb,#6366f1);
      color:#fff;
      text-decoration:none;
      box-shadow:0 15px 35px rgba(99,102,241,.45);
    }

    footer{
      color:#94a3b8;
      font-size:13px;
      text-align:center;
      margin:48px 0 18px;
    }


    /* Model Css Code */
    /* Modal Overlay */
    .project-modal{
    position:fixed;
    inset:0;
    background:rgba(2,6,23,.75);
    backdrop-filter: blur(14px);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:9999;
    }

    /* Modal Box */
    .project-modal-content{
    background:linear-gradient(180deg,rgba(255,255,255,.06),rgba(255,255,255,.02));
    border-radius:24px;
    width:90%;
    max-width:520px;
    padding:26px;
    border:1px solid rgba(148,163,184,.2);
    box-shadow:0 40px 80px rgba(0,0,0,.6);
    position:relative;
    animation:scaleIn .35s ease;
    }

    .project-modal-content img{
    width:100%;
    border-radius:18px;
    margin-bottom:18px;
    }

    .close-modal{
    position:absolute;
    top:18px;
    right:22px;
    font-size:26px;
    color:#e5e7eb;
    cursor:pointer;
    }

    @keyframes scaleIn{
    from{transform:scale(.9);opacity:0}
    to{transform:scale(1);opacity:1}
    }

    #about ul li{
        margin-bottom:6px;
    }

    #about .project-card{
        line-height:1.7;
    } 

    .form-control{
      color:#ffffff !important;
    }

    .form-control::placeholder{
      color:#94a3b8;
    }

    .form-control:focus{
      background-color: transparent;
      color:#ffffff;
      box-shadow:none;
    }

    .form-control{
      border-radius:14px;
      padding:12px 14px;
    }
  </style>
</head>
<body>

<nav class="navbar px-4 py-2">
  <span class="fw-semibold">Reduan a (Web Developer)</span>
  <div class="d-flex gap-3 align-items-center">
      <span class="text-white">
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
      </span>
  </div>
</nav>

<div class="container my-4">
  <div class="profile-box">

    <div class="cover">
      <span class="available">Available to work!</span>
      <img src="https://i.pravatar.cc/300" class="avatar">
    </div>

    <div class="profile-content">
      <h4 class="fw-bold mb-1">Alex Rosales</h4>
      <div class="text-white">Web Developer | Focus on React</div>
      <div class="text-white small">UI/UX Designer</div>

      <div class="social my-3">
        <a href="#"><i class="bi bi-linkedin"></i></a>
        <a href="#"><i class="bi bi-github"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>

      <div class="d-flex gap-3 my-3 flex-wrap">
        <button class="btn btn-primary btn-sm"><i class="bi bi-envelope"></i> Email</button>
        <button class="btn btn-outline btn-sm"><i class="bi bi-file-earmark"></i> Resume</button>
      </div>
      <hr> 
      <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#contact">Contact</a></li>
      </ul>

      <div class="tab-content pt-4">
        <div class="tab-pane fade show active" id="projects">
          <div class="row g-4">

            <div class="col-md-4">
              <div class="project-card" data-title="Procez Desktop Application" data-desc="Desktop application developed for a primary school to automate management." data-tags="React, Tailwind, SQLite" data-image="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png">
                <img src="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png?resize=400x0">
                <h6 class="mt-3">Procez Desktop Application</h6>
                <p class="text-white small">Desktop application developed for a primary school to automate management.</p>
                <span class="tag">React</span><span class="tag">Tailwind</span><span class="tag">SQLite</span><br>
                <a href="https://chatgpt.com/" target="_blank" class="view-btn">View Website</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="project-card" data-title="Procez Desktop Application" data-desc="Desktop application developed for a primary school to automate management." data-tags="React, Tailwind, SQLite" data-image="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png">
                <img src="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png?resize=400x0">
                <h6 class="mt-3">Procez Desktop Application</h6>
                <p class="text-white small">Desktop application developed for a primary school to automate management.</p>
                <span class="tag">React</span><span class="tag">Tailwind</span><span class="tag">SQLite</span><br>
                <a href="https://chatgpt.com/" target="_blank" class="view-btn">View Website</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="project-card" data-title="Procez Desktop Application" data-desc="Desktop application developed for a primary school to automate management." data-tags="React, Tailwind, SQLite" data-image="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png">
                <img src="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png?resize=400x0">
                <h6 class="mt-3">Procez Desktop Application</h6>
                <p class="text-white small">Desktop application developed for a primary school to automate management.</p>
                <span class="tag">React</span><span class="tag">Tailwind</span><span class="tag">SQLite</span><br>
                <a href="https://chatgpt.com/" target="_blank" class="view-btn">View Website</a>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="about">
            <div class="row g-5 align-items-start">

  <!-- LEFT COLUMN -->
  <div class="col-lg-4">
    <div class="project-card text-center">

      <img src="https://i.pravatar.cc/300"
           class="rounded-circle mb-3"
           style="width:140px;height:140px;object-fit:cover;">

      <h5 class="fw-semibold mb-2">Reduan Hossen</h5>
      <p class="small text-white mb-3">Full-Stack Web Developer</p>

      <!-- Skills -->
      <div class="mb-3">
        <span class="tag">HTML</span>
        <span class="tag">CSS</span>
        <span class="tag">Bootstrap</span>
        <span class="tag">JavaScript</span>
        <span class="tag">Laravel</span>
        <span class="tag">React</span>
        <span class="tag">MySQL</span>
      </div>

      <p class="small text-white">
        Passionate about building modern, scalable and user-friendly web applications.
      </p>
    </div>
  </div>

  <!-- RIGHT COLUMN -->
  <div class="col-lg-8">
    <div class="project-card">

      <h4 class="fw-bold mb-3">About Me</h4>

      <p class="text-white">
        Web development is not just my profession — it is my passion and part of my life.
        I enjoy transforming complex problems into clean, elegant and functional solutions.
        My journey started with curiosity, and today it has become a mission to create
        meaningful digital experiences.
      </p>

      <p class="text-white">
        I focus on building responsive, performance-optimized and secure web applications.
        Every project I work on teaches me something new and pushes me closer to my future
        goals — becoming a high-impact software engineer and entrepreneur.
      </p>

      <!-- Goals -->
      <div class="mt-4">
        <h5 class="fw-semibold mb-2">Future Goals</h5>
        <ul class="text-white small ps-3">
          <li>Become an expert full-stack developer</li>
          <li>Build scalable SaaS products</li>
          <li>Launch my own tech startup</li>
          <li>Help businesses grow through technology</li>
        </ul>
      </div>

    </div>
  </div>
</div>

<!-- EXPERIENCE SECTION -->
<div class="project-card mt-5">
  <h4 class="fw-bold mb-4">Experience</h4>

  <div class="row gy-4">

    <div class="col-md-6">
      <div>
        <h6 class="fw-semibold mb-1">Full-Stack Web Developer</h6>
        <p class="small text-white mb-1">Bit Birds Solution</p>
        <p class="small text-white">2023 – Present</p>
        <p class="small text-white">
          Developing modern web applications using Laravel, Bootstrap and JavaScript.
        </p>
      </div>
    </div>

    <div class="col-md-6">
      <div>
        <h6 class="fw-semibold mb-1">Frontend Developer</h6>
        <p class="small text-white mb-1">Freelance</p>
        <p class="small text-white">2022 – 2023</p>
        <p class="small text-white">
          Designed responsive UI and interactive frontend experiences for clients.
        </p>
      </div>
    </div>

  </div>
</div>

        </div>
        <div class="tab-pane fade" id="contact">
          <div class="row g-5 align-items-stretch">

  <!-- LEFT INFO -->
  <div class="col-lg-5">
    <div class="project-card h-100">

      <h4 class="fw-bold mb-3">Get In Touch</h4>

      <p class="text-white">
        Have a project in mind, a question, or just want to say hello?
        Feel free to reach out — I’m always open to discussing new ideas
        and opportunities.
      </p>

      <div class="mt-4">
        <p class="mb-2 text-white">
          <i class="bi bi-envelope me-2 text-primary"></i>
          reduan@example.com
        </p>

        <p class="mb-2 text-white">
          <i class="bi bi-geo-alt me-2 text-success"></i>
          Bangladesh
        </p>

        <p class="mb-2 text-white">
          <i class="bi bi-briefcase me-2 text-info"></i>
          Available for Freelance
        </p>
      </div>

      <!-- Social -->
      <div class="social mt-4">
        <a href="#"><i class="bi bi-linkedin"></i></a>
        <a href="#"><i class="bi bi-github"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
      </div>

    </div>
  </div>

  <!-- RIGHT FORM -->
  <div class="col-lg-7">
    <div class="project-card h-100">

      <h4 class="fw-bold mb-3">Send a Message</h4>

      <form id="contactForm" action="index.html" method="get">
        <div class="row g-3">

          <div class="col-md-6">
            <input type="text" class="form-control bg-transparent text-white border-secondary"
                   placeholder="Your Name" required>
         
          </div>

          <div class="col-md-6">
            <input type="email" class="form-control bg-transparent text-white border-secondary"
                   placeholder="Your Email" required>
          </div>

          <div class="col-12">
            <input type="text" class="form-control bg-transparent text-white border-secondary"
                   placeholder="Subject" required>
          </div>

          <div class="col-12">
            <textarea rows="5"
              class="form-control bg-transparent text-white border-secondary"
              placeholder="Your Message" required></textarea>
          </div>

          <div class="col-12">
            <button type="submit" class="view-btn">
              <i class="bi bi-send me-1"></i> Send Message
            </button>
          </div>

        </div>
      </form>

    </div>
  </div>

</div>

        </div>
      </div>

    </div>
  </div>
</div>



<!-- Popup Model View -->
 <!-- Project Popup Modal -->
<div class="project-modal" id="projectModal">
  <div class="project-modal-content">
    <span class="close-modal">&times;</span>

    <img id="modalImage" src="" alt="Project Image">

    <h4 id="modalTitle"></h4>

    <div id="modalTags" class="my-2"></div>

    <p id="modalDesc" class="text-white"></p>

    <a href="https://chatgpt.com/" target="_blank" class="view-btn mt-3">Buy Now</a>
  </div>
</div>

<!-- Popup End -->


<footer>© 2026 Designed by Reduan ( Bit Birds Solution ) </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const modal = document.getElementById("projectModal");
  const modalImage = document.getElementById("modalImage");
  const modalTitle = document.getElementById("modalTitle");
  const modalDesc = document.getElementById("modalDesc");
  const modalTags = document.getElementById("modalTags");

  document.querySelectorAll(".project-card").forEach(card=>{
    card.addEventListener("click",()=>{
      modalImage.src = card.dataset.image;
      modalTitle.innerText = card.dataset.title;
      modalDesc.innerText = card.dataset.desc;

      modalTags.innerHTML = "";
      card.dataset.tags.split(",").forEach(tag=>{
        modalTags.innerHTML += `<span class="tag">${tag.trim()}</span>`;
      });

      modal.style.display = "flex";
    });
  });

  document.querySelector(".close-modal").onclick = ()=> modal.style.display="none";
  modal.onclick = e => { if(e.target === modal) modal.style.display="none"; };
</script>

</body>
</html>