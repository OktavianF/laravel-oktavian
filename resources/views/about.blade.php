@extends('layouts.app')

@section('title', 'About — Oktavian Febrianto')

@section('styles')
/* ═══════════════════════════════════════════
   ABOUT PAGE
═══════════════════════════════════════════ */
.about-page {
  padding: 72px 80px;
}

.about-header {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  margin-bottom: 80px;
  padding-bottom: 80px;
  border-bottom: 1px solid var(--border);
}

.about-big-title {
  font-size: clamp(44px, 5.5vw, 80px);
  font-weight: 800;
  letter-spacing: -.04em;
  line-height: .92;
}

.about-big-title em {
  font-family: var(--font-serif);
  font-style: italic;
  color: var(--accent);
  font-weight: 400;
}

.about-intro {
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}

.about-intro p {
  color: var(--muted);
  font-size: 16px;
  line-height: 1.8;
  margin-bottom: 16px;
}

.about-intro p strong { color: var(--text); font-weight: 700; }

/* Projects */
.project-row {
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: 24px;
  padding: 36px 0;
  border-bottom: 1px solid var(--border);
  align-items: start;
  transition: all .2s;
}

.project-row:first-of-type { border-top: 1px solid var(--border); }

.project-row:hover { padding-left: 8px; }

.proj-idx {
  font-family: var(--font-mono);
  font-size: 13px;
  color: var(--muted);
  padding-top: 6px;
}

.proj-type {
  font-family: var(--font-mono);
  font-size: 10px;
  letter-spacing: .2em;
  color: var(--accent);
  text-transform: uppercase;
  margin-bottom: 6px;
}

.proj-title {
  font-size: 22px;
  font-weight: 700;
  letter-spacing: -.02em;
  margin-bottom: 12px;
  color: var(--text);
}

.proj-desc {
  color: var(--muted);
  font-size: 14px;
  line-height: 1.75;
  max-width: 680px;
  margin-bottom: 16px;
}

.proj-highlights {
  display: flex;
  flex-direction: column;
  gap: 6px;
  margin-bottom: 16px;
}

.proj-highlight {
  display: flex;
  align-items: flex-start;
  gap: 8px;
  font-size: 13px;
  color: var(--muted);
  line-height: 1.5;
}

.proj-highlight::before {
  content: '→';
  color: var(--accent);
  flex-shrink: 0;
  margin-top: 1px;
  font-family: var(--font-mono);
  font-size: 12px;
}

/* Achievements */
.ach-grid-2 {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  gap: 16px;
  margin-top: 64px;
}

.ach-card2 {
  padding: 28px;
  border: 1px solid var(--border);
  border-radius: 10px;
  transition: border-color .3s, background .3s;
  background: var(--surface);
}

.ach-card2.gold { border-color: rgba(200,255,0,.25); background: rgba(200,255,0,.03); }
.ach-card2:hover { border-color: rgba(200,255,0,.25); }

.ach-emoji { font-size: 32px; margin-bottom: 16px; }
.ach-ttl { font-size: 15px; font-weight: 700; margin-bottom: 6px; color: var(--text); }
.ach-evt { font-family: var(--font-mono); font-size: 11px; color: var(--muted); margin-bottom: 4px; }
.ach-dt { font-family: var(--font-mono); font-size: 10px; color: var(--accent); }

/* Org card */
.org-row {
  margin-top: 64px;
  padding: 40px;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 10px;
  display: grid;
  grid-template-columns: 1fr auto;
  gap: 40px;
  align-items: start;
}

.org-name { font-size: 22px; font-weight: 700; margin-bottom: 4px; color: var(--text); }
.org-pos { font-family: var(--font-mono); font-size: 11px; color: var(--accent); letter-spacing: .12em; margin-bottom: 16px; }
.org-bullets { display: flex; flex-direction: column; gap: 8px; }
.org-bullet {
  display: flex; align-items: flex-start; gap: 8px;
  font-size: 14px; color: var(--muted); line-height: 1.6;
}
.org-bullet::before { content:'—'; color: var(--muted2); flex-shrink:0; font-family: var(--font-mono); font-size: 12px; }
.org-period { font-family: var(--font-mono); font-size: 12px; color: var(--muted); white-space: nowrap; padding-top: 4px; }

@media (max-width: 900px) {
  .about-page { padding: 40px 24px; }
  .about-header { grid-template-columns: 1fr; gap: 32px; }
  .ach-grid-2 { grid-template-columns: 1fr; }
  .org-row { grid-template-columns: 1fr; }
}
@endsection

@section('content')
<div class="about-page">
  <div class="about-header">
    <div>
      <div class="section-eyebrow" style="margin-bottom:20px">// About Me</div>
      <div class="about-big-title">
        Projects &<br/><em>Experience</em>
      </div>
    </div>
    <div class="about-intro">
      <p>
        I'm a <strong>Software Engineer</strong> with a passion for crafting scalable, reliable, and accessible digital products. I thrive at the intersection of backend architecture and thoughtful user experience.
      </p>
      <p>
        Every project I build is backed by <strong>clean code principles</strong>, comprehensive testing, and a genuine desire to solve real problems for real people.
      </p>
    </div>
  </div>

  <!-- Projects -->
  <div class="section-eyebrow" style="margin-bottom:24px">// Selected Projects</div>

  <div class="project-row">
    <div class="proj-idx">01</div>
    <div class="proj-body">
      <div class="proj-type">Full-Stack · Neuropsychology</div>
      <div class="proj-title">ANAK — Analisis Neuropsikologi dan Aktivitas Kognitif</div>
      <div class="proj-desc">End-to-end full-stack platform for neuropsychological analysis and cognitive activity assessment. Designed to be responsive, reliable, and accessible.</div>
      <div class="proj-highlights">
        <div class="proj-highlight">Designed responsive frontend interfaces & integrated client-side logic with RESTful backend endpoints</div>
        <div class="proj-highlight">Modeled the database to support core application flows</div>
        <div class="proj-highlight">Built server-side APIs, authentication, input validation & automated tests for data integrity</div>
      </div>
      <div class="tags">
        <span class="tag-sm">Full-Stack</span>
        <span class="tag-sm">REST API</span>
        <span class="tag-sm">Auth</span>
        <span class="tag-sm">PostgreSQL</span>
        <span class="tag-sm">ReactJS</span>
        <span class="tag-sm">Testing</span>
      </div>
    </div>
  </div>

  <div class="project-row">
    <div class="proj-idx">02</div>
    <div class="proj-body">
      <div class="proj-type">Full-Stack · IoT / Cold Chain</div>
      <div class="proj-title">Cold Chain Monitoring System</div>
      <div class="proj-desc">MERN-based real-time monitoring platform for cold chain logistics — built for high throughput, reliability, and security.</div>
      <div class="proj-highlights">
        <div class="proj-highlight">Handles <strong style="color:var(--text)">5,000+ sensor events/hour</strong> via idempotent pipeline API with rate-limiting & HMAC authentication</div>
        <div class="proj-highlight">Server-side alert engine + background workers reduced false-alert rates by <strong style="color:var(--accent)">40%</strong></div>
        <div class="proj-highlight">Full CI pipeline with unit & integration tests for production reliability</div>
      </div>
      <div class="tags">
        <span class="tag-sm">MERN</span>
        <span class="tag-sm">HMAC Auth</span>
        <span class="tag-sm">Rate Limiting</span>
        <span class="tag-sm">Alert Engine</span>
        <span class="tag-sm">CI/CD</span>
        <span class="tag-sm">Background Workers</span>
      </div>
    </div>
  </div>

  <div class="project-row">
    <div class="proj-idx">03</div>
    <div class="proj-body">
      <div class="proj-type">Frontend · Healthcare</div>
      <div class="proj-title">Healthcare Management System</div>
      <div class="proj-desc">Modern frontend engineering for a healthcare records and patient workflow system. Focused on performance, accessibility, and UX quality.</div>
      <div class="proj-highlights">
        <div class="proj-highlight">Reusable component library with performance optimizations (lazy loading, asset minification)</div>
        <div class="proj-highlight">Integrated with REST API for patient workflows — data fetching, validation, error handling, state management</div>
        <div class="proj-highlight">Automated UI testing to reduce defects and accelerate releases</div>
      </div>
      <div class="tags">
        <span class="tag-sm">ReactJS</span>
        <span class="tag-sm">Component Library</span>
        <span class="tag-sm">REST Integration</span>
        <span class="tag-sm">Jest</span>
        <span class="tag-sm">A11y</span>
        <span class="tag-sm">Performance</span>
      </div>
    </div>
  </div>

  <!-- Achievements -->
  <div style="margin-top:72px">
    <div class="section-eyebrow" style="margin-bottom:24px">// Awards & Achievements</div>
    <div class="ach-grid-2">
      <div class="ach-card2 gold">
        <div class="ach-emoji">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#c8ff00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
        </div>
        <div class="ach-ttl">1st Winner — UX & Accessibility</div>
        <div class="ach-evt">KMIPN 2025 · National Informatics Competition</div>
        <div class="ach-dt">October 2025</div>
      </div>
      <div class="ach-card2">
        <div class="ach-emoji">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#5b8fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
        </div>
        <div class="ach-ttl">Finalist — Innovation Division</div>
        <div class="ach-evt">KMIPN — National Informatics Student Competition</div>
        <div class="ach-dt">October 2025</div>
      </div>
      <div class="ach-card2">
        <div class="ach-emoji">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#c8ff00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
        </div>
        <div class="ach-ttl">1st Winner — Web Design</div>
        <div class="ach-evt">Mini Class X E-CODE Competition</div>
        <div class="ach-dt">April 2025</div>
      </div>
    </div>
  </div>

  <!-- Organization -->
  <div>
    <div class="section-eyebrow" style="margin-top:64px;margin-bottom:24px">// Organization</div>
    <div class="org-row">
      <div>
        <div class="org-name">HIMAKALA</div>
        <div class="org-pos">External Relations</div>
        <div class="org-bullets">
          <div class="org-bullet">Coordinated external partnerships and cross-organization collaborations, improving event engagement</div>
          <div class="org-bullet">Strengthened HIMAKALA's external network with student organizations, communities, and partners</div>
        </div>
      </div>
      <div class="org-period">Aug 2025 — Current</div>
    </div>
  </div>
</div>
@endsection
