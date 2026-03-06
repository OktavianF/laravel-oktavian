<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>@yield('title', 'Oktavian Febrianto')</title>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet"/>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}

:root {
  --bg: #07070c;
  --surface: #0f0f16;
  --surface2: #16161f;
  --border: rgba(255,255,255,0.09);
  --text: #f0f0f8;
  --muted: #9898b8;
  --muted2: #6e6e90;
  --accent: #c8ff00;
  --accent-dim: rgba(200,255,0,0.12);
  --accent2: #7aaaff;
  --accent3: #ff6b9d;
  --font-display: 'Syne', sans-serif;
  --font-mono: 'DM Mono', monospace;
  --font-serif: 'Instrument Serif', serif;
}

html { scroll-behavior: smooth; }

body {
  background: var(--bg);
  color: var(--text);
  font-family: var(--font-display);
  overflow-x: hidden;
  min-height: 100vh;
}

/* Grain */
body::after {
  content:'';
  position:fixed;
  inset:0;
  pointer-events:none;
  z-index:9999;
  opacity:.025;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
}

/* ─── NAVBAR ─────────────────────────────── */
.navbar {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 500;
  height: 68px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 48px;
  border-bottom: 1px solid var(--border);
  background: rgba(7,7,12,0.85);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
}

.nav-brand {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
  text-decoration: none;
}

.nav-brand-dot {
  width: 8px; height: 8px;
  background: var(--accent);
  border-radius: 50%;
  animation: blink 2.5s infinite;
}

@keyframes blink {
  0%,100%{opacity:1} 50%{opacity:.3}
}

.nav-brand-text {
  font-family: var(--font-mono);
  font-size: 13px;
  color: var(--text);
  letter-spacing: .1em;
}

.nav-brand-text span { color: var(--accent); }

.nav-menu {
  display: flex;
  align-items: center;
  gap: 4px;
  list-style: none;
}

.nav-item {
  position: relative;
}

.nav-link {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 7px 18px;
  border-radius: 6px;
  font-family: var(--font-mono);
  font-size: 12px;
  letter-spacing: .12em;
  color: var(--muted);
  text-decoration: none;
  cursor: pointer;
  transition: color .2s, background .2s;
  border: 1px solid transparent;
  text-transform: uppercase;
}

.nav-link .nav-num {
  font-size: 10px;
  opacity: .6;
}

.nav-link:hover {
  color: var(--text);
  background: rgba(255,255,255,.05);
}

.nav-link.active {
  color: var(--accent);
  background: var(--accent-dim);
  border-color: rgba(200,255,0,.15);
}

.nav-link.active .nav-num { opacity: 1; color: var(--accent); }

.nav-right {
  display: flex;
  align-items: center;
  gap: 12px;
}

.nav-cta {
  padding: 8px 20px;
  background: var(--accent);
  color: #07070c;
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 12px;
  border-radius: 6px;
  cursor: pointer;
  text-decoration: none;
  transition: transform .2s, box-shadow .2s;
  letter-spacing: .05em;
  border: none;
}

.nav-cta:hover {
  transform: translateY(-1px);
  box-shadow: 0 8px 20px rgba(200,255,0,.25);
}

/* ─── PAGE ───────────────────────────────── */
.page {
  min-height: 100vh;
  padding-top: 68px;
  animation: pageIn .4s ease forwards;
}

@keyframes pageIn {
  from { opacity:0; transform: translateY(12px); }
  to   { opacity:1; transform: translateY(0); }
}

/* ─── BUTTONS ────────────────────────────── */
.btn-fill {
  padding: 13px 28px;
  background: var(--accent);
  color: #07070c;
  font-weight: 700;
  font-size: 13px;
  border-radius: 6px;
  text-decoration: none;
  cursor: pointer;
  transition: transform .2s, box-shadow .2s;
  letter-spacing: .04em;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border: none;
}

.btn-fill:hover { transform: translateY(-2px); box-shadow: 0 12px 28px rgba(200,255,0,.28); }

.btn-outline {
  padding: 13px 28px;
  background: transparent;
  border: 1px solid var(--border);
  color: var(--muted);
  font-family: var(--font-mono);
  font-size: 12px;
  border-radius: 6px;
  text-decoration: none;
  cursor: pointer;
  transition: border-color .2s, color .2s;
  letter-spacing: .08em;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.btn-outline:hover { border-color: rgba(255,255,255,.2); color: var(--text); }

/* ─── SHARED COMPONENTS ──────────────────── */
.badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 14px;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 100px;
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--muted);
  letter-spacing: .05em;
}

.badge .dot { width:5px; height:5px; border-radius:50%; }

.section-eyebrow {
  font-family: var(--font-mono);
  font-size: 10px;
  letter-spacing: .25em;
  color: var(--accent);
  text-transform: uppercase;
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.section-eyebrow::after {
  content:'';
  flex:1;
  max-width: 40px;
  height: 1px;
  background: rgba(200,255,0,.3);
}

.section-h2 {
  font-size: clamp(28px, 3vw, 44px);
  font-weight: 800;
  letter-spacing: -.03em;
  margin-bottom: 32px;
}

.tags { display: flex; flex-wrap: wrap; gap: 6px; }

.tag-sm {
  padding: 4px 10px;
  background: var(--surface);
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 100px;
  font-family: var(--font-mono);
  font-size: 10px;
  color: var(--muted);
}

/* ─── FOOTER ─────────────────────────────── */
.footer {
  background: var(--surface);
  border-top: 1px solid var(--border);
  padding: 24px 80px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer p {
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--muted);
}
.footer span { color: var(--accent); }

/* Toast */
.toast {
  position: fixed;
  bottom: 32px; right: 32px;
  background: var(--surface);
  border: 1px solid rgba(200,255,0,.3);
  border-radius: 10px;
  padding: 16px 24px;
  font-family: var(--font-mono);
  font-size: 13px;
  color: var(--accent);
  z-index: 1000;
  transform: translateY(20px);
  opacity: 0;
  transition: all .3s ease;
}
.toast.show { transform: translateY(0); opacity: 1; }

/* ─── RESPONSIVE ─────────────────────────── */
@media (max-width: 900px) {
  .navbar { padding: 0 24px; }
  .footer { padding: 20px 24px; flex-direction: column; gap: 8px; }
}

@yield('styles')
</style>
</head>
<body>

<!-- ═══ NAVBAR ═══════════════════════════════ -->
<nav class="navbar">
  <a class="nav-brand" href="{{ route('home') }}">
    <div class="nav-brand-dot"></div>
    <span class="nav-brand-text">OF<span>.</span>dev</span>
  </a>

  <ul class="nav-menu">
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
        <span class="nav-num">00</span> Home
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
        <span class="nav-num">01</span> Profile
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
        <span class="nav-num">02</span> About
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
        <span class="nav-num">03</span> Contact
      </a>
    </li>
  </ul>

  <div class="nav-right">
    <a class="nav-cta" href="mailto:ofebrianto65@gmail.com">Hire Me →</a>
  </div>
</nav>

<!-- ═══ PAGE CONTENT ═════════════════════════ -->
<div class="page">
  @yield('content')
</div>

<!-- ═══ FOOTER ═══════════════════════════════ -->
<footer class="footer">
  <p>© 2025 Oktavian Febrianto — All Rights Reserved</p>
  <p>Built with <span>♥</span> · Laravel + Blade</p>
</footer>

<!-- Toast -->
<div class="toast" id="toast">✓ Message sent! I'll get back to you soon.</div>

<script>
  function showToast(msg, err) {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.style.borderColor = err ? 'rgba(255,107,157,.35)' : 'rgba(200,255,0,.3)';
    t.style.color = err ? 'var(--accent3)' : 'var(--accent)';
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 3500);
  }
</script>

@yield('scripts')

</body>
</html>
