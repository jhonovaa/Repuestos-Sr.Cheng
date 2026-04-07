<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Repuestos Cheng | Sogamoso, Boyacá</title>
  <style>
    :root {
      color-scheme: light;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      background: #f5f5f7;
      color: #1d1d1f;
    }

    * { box-sizing: border-box; }
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(180deg, #f5f5f7 0%, #ffffff 100%);
      min-height: 100vh;
    }

    header {
      padding: 36px 24px 18px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .brand {
      font-size: 1rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 700;
      color: #111;
    }

    .nav a {
      margin-left: 24px;
      text-decoration: none;
      color: #1d1d1f;
      font-weight: 500;
      font-size: 0.95rem;
    }

    .hero {
      max-width: 1200px;
      margin: 0 auto;
      padding: 80px 24px 40px;
      display: grid;
      grid-template-columns: minmax(0, 1fr) minmax(320px, 420px);
      gap: 48px;
      align-items: center;
    }

    .hero-copy h1 {
      margin: 0;
      font-size: clamp(3rem, 6vw, 5.5rem);
      line-height: 0.95;
      letter-spacing: -0.04em;
      font-weight: 800;
    }

    .hero-copy p {
      margin: 24px 0 36px;
      max-width: 32rem;
      font-size: 1.05rem;
      line-height: 1.7;
      color: #424245;
    }

    .buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
    }

    .button-primary,
    .button-secondary {
      padding: 16px 24px;
      border-radius: 18px;
      border: none;
      font-size: 1rem;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .button-primary {
      background: #111;
      color: white;
    }

    .button-secondary {
      background: rgba(0, 0, 0, 0.04);
      color: #111;
    }

    .button-primary:hover,
    .button-secondary:hover {
      transform: translateY(-1px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.1);
    }

    .hero-visual {
      position: relative;
      padding: 32px;
      border-radius: 36px;
      background: radial-gradient(circle at top left, rgba(0, 0, 0, 0.05), transparent 40%),
                  linear-gradient(180deg, #ffffff 0%, #f2f2f7 100%);
      box-shadow: 0 24px 80px rgba(0,0,0,0.08);
    }

    .hero-visual img {
      width: 100%;
      border-radius: 28px;
      display: block;
      box-shadow: 0 24px 80px rgba(0,0,0,0.08);
    }

    .features {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px 80px;
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 24px;
    }

    .feature-card {
      background: white;
      border-radius: 30px;
      padding: 28px;
      box-shadow: 0 12px 40px rgba(0,0,0,0.06);
    }

    .feature-card h2 {
      margin-top: 0;
      font-size: 1.25rem;
      margin-bottom: 14px;
    }

    .feature-card p {
      margin: 0;
      color: #4a4a4a;
      line-height: 1.7;
    }

    footer {
      padding: 36px 24px 48px;
      text-align: center;
      color: #6e6e73;
      font-size: 0.95rem;
    }

    @media (max-width: 960px) {
      .hero { grid-template-columns: 1fr; gap: 40px; }
      .features { grid-template-columns: 1fr; }
      header { flex-wrap: wrap; gap: 16px; }
      .nav { order: 2; width: 100%; display: flex; justify-content: center; flex-wrap: wrap; }
      .nav a { margin: 8px 16px; }
    }

    @media (max-width: 640px) {
      .hero {
        padding-top: 56px;
      }
      .hero-copy h1 { font-size: 3.2rem; }
      .hero-copy p { font-size: 1rem; }
      .button-primary,
      .button-secondary { width: 100%; justify-content: center; }
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">Repuestos Cheng</div>
    <nav class="nav">
      <a href="#servicios">Servicios</a>
      <a href="#ubicacion">Ubicación</a>
      <a href="#beneficios">Beneficios</a>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div class="hero-copy">
        <h1>Repuestos confiables para tu vehículo en Sogamoso</h1>
        <p>En Repuestos Cheng combinamos calidad premium, atención local y asesoría experta para que encuentres exactamente lo que tu repuesto necesita. Somos tu taller de confianza en Boyacá.</p>
        <div class="buttons">
          <button class="button-primary">Ver catálogo</button>
          <button class="button-secondary">Contáctanos</button>
        </div>
      </div>
      <div class="hero-visual">
        <img src="https://images.unsplash.com/photo-1519677100203-a0e668c92439?auto=format&fit=crop&w=1200&q=80" alt="Repuestos automotrices" />
      </div>
    </section>

    <section id="servicios" class="features">
      <article class="feature-card">
        <h2>Repuestos originales</h2>
        <p>Guardabarros, frenos, suspensiones, motores y componentes eléctricos con garantía. Nuestra selección prioriza marcas reconocidas y piezas duraderas.</p>
      </article>
      <article class="feature-card">
        <h2>Asesoría personalizada</h2>
        <p>Te ayudamos a identificar el repuesto correcto para tu vehículo. Servicio dedicado para carros, motos y maquinaria ligera en Sogamoso y municipios cercanos.</p>
      </article>
      <article class="feature-card">
        <h2>Entrega rápida</h2>
        <p>Atendemos pedidos locales con entrega directa en la ciudad y recogida en tienda. Porque tu tiempo y tu seguridad en carretera son nuestra prioridad.</p>
      </article>
    </section>

    <section id="ubicacion" class="hero" style="padding-top: 0;">
      <div class="hero-visual" style="background: #111; color: white; text-align: center; padding: 36px;">
        <h2 style="margin: 0 0 18px;">Sogamoso, Boyacá</h2>
        <p style="margin: 0 auto; max-width: 28rem; color: #d6d6d8; line-height: 1.8;">Nuestra tienda está ubicada en el corazón de Sogamoso para que recibas repuestos y servicios con rapidez y respaldo técnico. Visítanos o solicita tu cotización desde donde estés.</p>
      </div>
      <div class="hero-copy">
        <h2>Repuestos Cheng: diseño, precisión y servicio a tu alcance</h2>
        <p>Nos inspiramos en la simplicidad y elegancia digital de Apple para ofrecer una experiencia clara, moderna y confiable. Cada detalle está pensado para que tomar decisiones sea simple y seguro.</p>
      </div>
    </section>

    <section id="beneficios" class="features">
      <article class="feature-card">
        <h2>Calidad comprobada</h2>
        <p>Solo trabajamos con repuestos que superan nuestras pruebas de calidad interna. Esto significa menos reemplazos y más kilómetros sin preocupaciones.</p>
      </article>
      <article class="feature-card">
        <h2>Soporte local</h2>
        <p>Atención amable y cercana de un equipo que conoce bien las rutas y necesidades de los conductores de Boyacá.</p>
      </article>
      <article class="feature-card">
        <h2>Experiencia digital</h2>
        <p>Consulta stock, cotiza piezas y recibe recomendaciones de manera rápida, con una interfaz limpia y moderna para navegar sin complicaciones.</p>
      </article>
    </section>
  </main>

  <footer>
    Repuestos Cheng • Calle 12 # 9-30, Sogamoso, Boyacá • Tel: 314 555 1234
  </footer>
</body>
</html>
