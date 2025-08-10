<?php
// -------------------- Config --------------------
$tz  = 'Pacific/Noumea';

// -------------------- Time (Pacific/Noumea) --------------------
date_default_timezone_set($tz);
$serverNow = new DateTime('now', new DateTimeZone($tz));
$serverNowIso = $serverNow->format('Y-m-d\TH:i:s');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formation Docker niveau 2 — Nouvelle-Calédonie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fonts & Icons (remote only) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root {
      --bg1:#0f172a; /* slate-900 */
      --bg2:#1e293b; /* slate-800 */
      --accent:#06b6d4; /* cyan-500 */
      --accent-2:#22d3ee; /* cyan-400 */
      --card:#0b1220ea;
      --text:#e2e8f0;
      --muted:#94a3b8;
    }
    html, body { height:100%; }
    body {
      font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      color: var(--text);
      background: radial-gradient(1200px 600px at 80% -10%, #0ea5e94d, transparent 60%),
                  radial-gradient(900px 500px at -10% 10%, #22d3ee33, transparent 60%),
                  linear-gradient(160deg, var(--bg1), var(--bg2));
    }
    .glass {
      background: linear-gradient(180deg, #0b1220cc, #0b1220aa);
      border: 1px solid #1f2a44;
      box-shadow: 0 10px 30px rgba(0,0,0,.35), inset 0 1px 0 rgba(255,255,255,.03);
      backdrop-filter: blur(8px);
      border-radius: 18px;
    }
    .hero {
      padding: 80px 0 40px;
    }
    .brand-badge {
      display:inline-flex; align-items:center; gap:.5rem;
      padding:.45rem .8rem;
      border-radius:999px;
      background: linear-gradient(90deg, var(--accent), var(--accent-2));
      color:#05202a; font-weight:800; letter-spacing:.3px; text-transform:uppercase; font-size:.8rem;
    }
    h1 span.gradient {
      background: linear-gradient(90deg, var(--accent-2), #60a5fa);
      -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .time {
      font-variant-numeric: tabular-nums;
      font-size: clamp(1.2rem, 2.6vw, 1.6rem);
    }
    .footer {
      color: var(--muted);
      font-size:.9rem;
    }
    a.link { color: var(--accent-2); text-decoration:none; }
    a.link:hover { text-decoration: underline; }
    .btn-cta {
      border:1px solid #1f2a44; color:#dff9ff;
      background: linear-gradient(180deg, #0ea5e915, #22d3ee10);
    }
    .btn-cta:hover { border-color:#2b3b61; background:#0ea5e922; color:#fff; }
    .pulse {
      position: relative;
    }
    .pulse::after {
      content:""; position:absolute; inset: -2px; border-radius: 20px;
      background: radial-gradient(200px 60px at 30% 0%, #22d3ee33, transparent 60%);
      filter: blur(12px); opacity:.7; pointer-events:none;
    }
  </style>
</head>
<body>
  <div class="container-lg">
    <header class="d-flex justify-content-between align-items-center pt-4">
      <div class="brand-badge"><i class="bi bi-boxes"></i> Docker — Niveau 2</div>
      <a class="link d-none d-md-inline" href="https://docs.docker.com/" target="_blank" rel="noopener">Docs Docker <i class="bi bi-arrow-up-right"></i></a>
    </header>

    <section class="hero text-center">
      <div class="glass p-4 p-md-5 mx-auto" style="max-width: 980px;">
        <h1 class="display-5 fw-bold mb-3">
          Bienvenue à la <span class="gradient">formation Docker niveau 2</span>
        </h1>
        <p class="lead text-secondary mb-4" style="color:#cbd5e1!important;">
          Nouvelle-Calédonie • Approfondissement, bonnes pratiques, et ateliers concrets.
        </p>
        <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
          <a class="btn btn-cta btn-lg px-4 pulse" href="https://labs.play-with-docker.com/" target="_blank" rel="noopener">
            <i class="bi bi-terminal"></i> Lancer un labo
          </a>
          <a class="btn btn-cta btn-lg px-4" href="https://hub.docker.com/" target="_blank" rel="noopener">
            <i class="bi bi-cloud-arrow-down"></i> Docker Hub
          </a>
        </div>
      </div>
    </section>

    <section class="pb-5">
      <div class="row g-4 justify-content-center">
        <!-- Heure locale -->
        <div class="col-12 col-lg-8">
          <div class="glass h-100 p-4">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <h2 class="h5 mb-0"><i class="bi bi-clock-history me-2"></i>Heure locale (Pacific/Noumea)</h2>
              <span class="badge rounded-pill text-bg-dark border" style="border-color:#334155!important;">Temps réel</span>
            </div>
            <div class="time fw-semibold" id="clock">Chargement…</div>
            <div class="text-secondary mt-2">La page utilise le fuseau <code>Pacific/Noumea</code> et se met à jour chaque seconde.</div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer pb-4 text-center">
      <div>© <?= date('Y') ?> Formation Docker — Niveau 2 • NC</div>
      <div class="mt-1">Design léger en <a class="link" href="https://getbootstrap.com/" target="_blank" rel="noopener">Bootstrap 5</a> + Inter.</div>
    </footer>
  </div>

  <!-- JS (remote only) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script>
    // Horloge pour Pacific/Noumea (affichage côté client)
    (function() {
      const tz = 'Pacific/Noumea';
      const serverStart = new Date('<?= $serverNowIso ?>');
      const clientStart = new Date();

      function formatNoumea(now) {
        const fmtDate = new Intl.DateTimeFormat('fr-FR', {
          timeZone: tz, weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });
        const fmtTime = new Intl.DateTimeFormat('fr-FR', {
          timeZone: tz, hour: '2-digit', minute: '2-digit', second: '2-digit'
        });
        return fmtDate.format(now) + ' — ' + fmtTime.format(now);
      }

      function tick() {
        const elapsed = Date.now() - clientStart.getTime();
        const nowNoumea = new Date(serverStart.getTime() + elapsed);
        const el = document.getElementById('clock');
        if (el) el.textContent = formatNoumea(nowNoumea);
      }
      tick();
      setInterval(tick, 1000);
    })();
  </script>
</body>
</html>


