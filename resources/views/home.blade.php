@extends('layouts.app')

@section('title', 'Oktavian Febrianto — Software Engineer')

@section('styles')
/* ═══════════════════════════════════════════
   HOME PAGE
═══════════════════════════════════════════ */
.home-hero {
  min-height: calc(100vh - 68px);
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: 0;
  position: relative;
  overflow: hidden;
}

.home-hero-bg {
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 80% at 20% 50%, rgba(200,255,0,.05) 0%, transparent 70%),
    linear-gradient(rgba(200,255,0,.025) 1px, transparent 1px),
    linear-gradient(90deg, rgba(200,255,0,.025) 1px, transparent 1px);
  background-size: auto, 72px 72px, 72px 72px;
}

.home-left {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 80px 60px 80px 80px;
  position: relative;
  z-index: 2;
}

.home-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: .25em;
  text-transform: uppercase;
  color: var(--accent);
  margin-bottom: 28px;
}

.home-eyebrow::before {
  content:'';
  width: 24px; height: 1px;
  background: var(--accent);
}

.home-title {
  font-size: clamp(52px, 6.5vw, 96px);
  font-weight: 800;
  line-height: .92;
  letter-spacing: -.04em;
  margin-bottom: 28px;
}

.home-title .t1 { display: block; color: var(--text); }
.home-title .t2 {
  display: block;
  font-family: var(--font-serif);
  font-style: italic;
  font-weight: 400;
  color: transparent;
  -webkit-text-stroke: 1px rgba(200,255,0,.35);
}

.home-subtitle {
  font-family: var(--font-mono);
  font-size: 14px;
  color: var(--muted);
  line-height: 1.7;
  max-width: 460px;
  margin-bottom: 44px;
}

.home-subtitle strong { color: var(--text); font-weight: 600; }

.home-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 60px;
}

.home-badges {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
}

/* Right Panel */
.home-right {
  background: var(--surface);
  border-left: 1px solid var(--border);
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 60px 48px;
  position: relative;
  z-index: 2;
  gap: 32px;
}

.home-card {
  background: var(--bg);
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 24px;
  transition: border-color .3s;
}

.home-card:hover { border-color: rgba(200,255,0,.2); }

.hcard-label {
  font-family: var(--font-mono);
  font-size: 10px;
  letter-spacing: .2em;
  color: var(--muted2);
  text-transform: uppercase;
  margin-bottom: 10px;
}

.hcard-value {
  font-size: 28px;
  font-weight: 800;
  color: var(--text);
  line-height: 1;
  margin-bottom: 4px;
}

.hcard-value span { color: var(--accent); }

.hcard-sub {
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--muted);
}

.home-skills-preview {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
}

.skill-chip {
  padding: 5px 12px;
  background: var(--surface2);
  border: 1px solid var(--border);
  border-radius: 6px;
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--muted);
  transition: border-color .2s, color .2s;
}

.skill-chip:hover { border-color: var(--accent); color: var(--accent); }

.award-mini {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid var(--border);
}

.award-mini:last-child { border-bottom: none; }

.award-mini-icon { font-size: 20px; flex-shrink:0; }

.award-mini-text { font-size: 13px; font-weight: 600; line-height: 1.3; color: var(--text); }
.award-mini-sub { font-family: var(--font-mono); font-size: 10px; color: var(--muted); margin-top: 2px; }

@media (max-width: 900px) {
  .home-hero { grid-template-columns: 1fr; }
  .home-right { display: none; }
  .home-left { padding: 48px 24px; }
}
@endsection

@section('content')
<section class="home-hero">
  <div class="home-hero-bg"></div>

  <div class="home-left">
    <div class="home-eyebrow">Software Engineer · East Java, ID</div>

    <h1 class="home-title">
      <span class="t1">Oktavian</span>
      <span class="t2">Febrianto</span>
    </h1>

    <p class="home-subtitle">
      Building <strong>scalable, user-centered digital products</strong> — from robust backend APIs to polished frontend interfaces. Finalist of KMIPN &amp; 1× UX Winner.
    </p>

    <div class="home-actions">
      <a class="btn-fill" href="{{ route('about') }}">View My Work →</a>
      <a class="btn-outline" href="{{ route('contact') }}">Get In Touch</a>
    </div>

    <div class="home-badges">
      <span class="badge"><span class="dot" style="background:var(--accent)"></span>Open to Work</span>
      <span class="badge"><span class="dot" style="background:var(--accent2)"></span>GPA 3.80</span>
      <span class="badge"><span class="dot" style="background:var(--accent3)"></span>3× Award Winner</span>
    </div>
  </div>

  <div class="home-right">
    <div class="home-card">
      <div class="hcard-label">Current Status</div>
      <div class="hcard-value">Open <span>●</span></div>
      <div class="hcard-sub">Available for internships & projects</div>
    </div>

    <div class="home-card">
      <div class="hcard-label">Education</div>
      <div style="font-size:15px;font-weight:700;margin-bottom:4px">EEPIS Surabaya</div>
      <div class="hcard-sub" style="margin-bottom:8px">D3 Informatics Engineering · Est. Jun 2027</div>
      <div style="display:flex;gap:8px">
        <span style="padding:4px 10px;background:rgba(200,255,0,.1);border:1px solid rgba(200,255,0,.25);border-radius:100px;font-family:var(--font-mono);font-size:10px;color:var(--accent)">GPA 3.80</span>
        <span style="padding:4px 10px;background:var(--surface2);border:1px solid var(--border);border-radius:100px;font-family:var(--font-mono);font-size:10px;color:var(--muted)">Web Dev</span>
      </div>
    </div>

    <div class="home-card">
      <div class="hcard-label">Tech Stack</div>
      <div class="home-skills-preview">
        <span class="skill-chip">NodeJS</span>
        <span class="skill-chip">ReactJS</span>
        <span class="skill-chip">NextJS</span>
        <span class="skill-chip">TypeScript</span>
        <span class="skill-chip">PostgreSQL</span>
        <span class="skill-chip">MongoDB</span>
        <span class="skill-chip">ExpressJS</span>
        <span class="skill-chip">Prisma</span>
      </div>
    </div>

    <div class="home-card">
      <div class="hcard-label">Recent Achievements</div>
      <div class="award-mini">
        <span class="award-mini-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c8ff00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
        </span>
        <div>
          <div class="award-mini-text">1st — UX & Accessibility</div>
          <div class="award-mini-sub">KMIPN 2025 · Oct 2025</div>
        </div>
      </div>
      <div class="award-mini">
        <span class="award-mini-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#5b8fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
        </span>
        <div>
          <div class="award-mini-text">Finalist — Innovation Division</div>
          <div class="award-mini-sub">KMIPN · Oct 2025</div>
        </div>
      </div>
      <div class="award-mini">
        <span class="award-mini-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c8ff00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
        </span>
        <div>
          <div class="award-mini-text">1st — Web Design</div>
          <div class="award-mini-sub">E-CODE Competition · Apr 2025</div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
