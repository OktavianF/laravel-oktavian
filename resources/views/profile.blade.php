@extends('layouts.app')

@section('title', 'Profile — Oktavian Febrianto')

@section('styles')
/* ═══════════════════════════════════════════
   PROFILE PAGE
═══════════════════════════════════════════ */
.profile-hero {
  padding: 64px 80px 0;
  border-bottom: 1px solid var(--border);
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: end;
  background: var(--surface);
}

.profile-tag {
  font-family: var(--font-mono);
  font-size: 11px;
  letter-spacing: .25em;
  color: var(--accent);
  text-transform: uppercase;
  margin-bottom: 20px;
}

.profile-name {
  font-size: clamp(40px, 5vw, 72px);
  font-weight: 800;
  line-height: .95;
  letter-spacing: -.03em;
  margin-bottom: 20px;
}

.profile-name em {
  font-family: var(--font-serif);
  font-style: italic;
  color: var(--accent);
  font-weight: 400;
}

.profile-role {
  font-family: var(--font-mono);
  font-size: 13px;
  color: var(--muted);
  line-height: 1.6;
  margin-bottom: 36px;
}

.profile-social {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  padding-bottom: 48px;
}

.social-pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 16px;
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 6px;
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--muted);
  text-decoration: none;
  cursor: pointer;
  transition: border-color .2s, color .2s;
}

.social-pill:hover { border-color: rgba(200,255,0,.3); color: var(--accent); }

/* Profile avatar placeholder */
.profile-avatar-area {
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  padding-bottom: 0;
}

.avatar-box {
  width: 280px;
  height: 320px;
  background: var(--surface2);
  border: 1px solid var(--border);
  border-bottom: none;
  border-radius: 12px 12px 0 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 12px;
  position: relative;
  overflow: hidden;
}

.avatar-box::before {
  content:'';
  position:absolute;
  inset:0;
  background: radial-gradient(ellipse at 50% 0%, rgba(200,255,0,.08) 0%, transparent 70%);
}

.avatar-initials {
  font-size: 72px;
  font-weight: 800;
  color: rgba(200,255,0,.15);
  letter-spacing: -.04em;
  line-height: 1;
}

.avatar-label {
  font-family: var(--font-mono);
  font-size: 10px;
  letter-spacing: .2em;
  color: var(--muted);
  text-transform: uppercase;
}

/* Profile body */
.profile-body {
  padding: 64px 80px;
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: 64px;
}

/* Skills grid */
.skills-group { margin-bottom: 40px; }

.skills-group-title {
  font-family: var(--font-mono);
  font-size: 11px;
  color: var(--muted);
  letter-spacing: .15em;
  text-transform: uppercase;
  margin-bottom: 12px;
  padding-bottom: 8px;
  border-bottom: 1px solid var(--border);
}

.skills-row {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 12px;
}

.stag {
  padding: 6px 14px;
  border-radius: 6px;
  font-family: var(--font-mono);
  font-size: 12px;
  transition: all .2s;
}

.stag-lang { background: rgba(91,143,255,.1); border: 1px solid rgba(91,143,255,.25); color: #8aafff; }
.stag-fw   { background: rgba(200,255,0,.07); border: 1px solid rgba(200,255,0,.2);  color: #b8e800; }
.stag-tool { background: rgba(255,107,157,.07); border: 1px solid rgba(255,107,157,.2); color: #ff8fb8; }
.stag-db   { background: rgba(255,180,50,.07); border: 1px solid rgba(255,180,50,.2);  color: #ffb432; }

.stag:hover { transform: translateY(-2px); }

/* Sidebar */
.info-block {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 20px;
}

.info-block-header {
  padding: 16px 20px;
  border-bottom: 1px solid var(--border);
  font-family: var(--font-mono);
  font-size: 10px;
  letter-spacing: .2em;
  color: var(--muted);
  text-transform: uppercase;
}

.info-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 20px;
  border-bottom: 1px solid var(--border);
}

.info-row:last-child { border-bottom: none; }

.info-key { font-family: var(--font-mono); font-size: 11px; color: var(--muted2); }
.info-val { font-size: 13px; font-weight: 600; text-align: right; color: var(--text); }
.info-val a { color: var(--accent2); text-decoration: none; }
.info-val.green { color: var(--accent); }

/* Education card */
.edu-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 24px;
  margin-bottom: 20px;
  position: relative;
  overflow: hidden;
}

.edu-card::before {
  content:'';
  position:absolute;
  top:0;left:0;right:0;
  height:2px;
  background: linear-gradient(90deg, var(--accent), transparent);
}

.edu-school { font-weight: 700; font-size: 15px; margin-bottom: 4px; color: var(--text); }
.edu-degree { font-family: var(--font-mono); font-size: 11px; color: var(--muted); margin-bottom: 12px; }
.edu-meta { display: flex; gap: 8px; flex-wrap: wrap; }
.edu-pill {
  padding: 4px 10px;
  border-radius: 100px;
  font-family: var(--font-mono);
  font-size: 10px;
}
.edu-pill-gpa { background: rgba(200,255,0,.1); border: 1px solid rgba(200,255,0,.25); color: var(--accent); }
.edu-pill-date { background: var(--surface2); border: 1px solid rgba(255,255,255,.1); color: var(--muted); }

@media (max-width: 900px) {
  .profile-hero { padding: 40px 24px 0; grid-template-columns: 1fr; }
  .profile-avatar-area { display: none; }
  .profile-body { padding: 40px 24px; grid-template-columns: 1fr; }
}
@endsection

@section('content')
<div class="profile-hero">
  <div>
    <div class="profile-tag">// Profile Overview</div>
    <h1 class="profile-name">Oktavian<br/><em>Febrianto</em></h1>
    <div class="profile-role">
      Software Engineer — Backend · Full-Stack · Web<br/>
      EEPIS Surabaya · Lamongan, East Java
    </div>
    <div class="profile-social">
      <a class="social-pill" href="mailto:ofebrianto65@gmail.com">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        ofebrianto65@gmail.com
      </a>
      <a class="social-pill" href="tel:+6281357642730">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.16 6.16l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        +62 813-5764-2730
      </a>
      <a class="social-pill" href="https://github.com/OktavianF" target="_blank">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
        OktavianF
      </a>
      <a class="social-pill" href="https://linkedin.com/in/oktavian-febrianto" target="_blank">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        LinkedIn
      </a>
    </div>
  </div>
  <div class="profile-avatar-area">
    <div class="avatar-box">
      <div class="avatar-initials">OF</div>
      <div class="avatar-label">Software Engineer</div>
    </div>
  </div>
</div>

<div class="profile-body">
  <div>
    <div class="section-eyebrow">Skills & Technologies</div>
    <h2 class="section-h2">Tech Stack</h2>

    <div class="skills-group">
      <div class="skills-group-title">Programming Languages</div>
      <div class="skills-row">
        <span class="stag stag-lang">JavaScript</span>
        <span class="stag stag-lang">TypeScript</span>
        <span class="stag stag-lang">Java</span>
        <span class="stag stag-lang">SQL / PL/SQL</span>
        <span class="stag stag-lang">HTML / CSS</span>
        <span class="stag stag-lang">C</span>
      </div>
    </div>

    <div class="skills-group">
      <div class="skills-group-title">Frameworks & Libraries</div>
      <div class="skills-row">
        <span class="stag stag-fw">NodeJS</span>
        <span class="stag stag-fw">ExpressJS</span>
        <span class="stag stag-fw">ReactJS</span>
        <span class="stag stag-fw">NextJS</span>
        <span class="stag stag-fw">TailwindCSS</span>
        <span class="stag stag-fw">Prisma ORM</span>
        <span class="stag stag-fw">Jest</span>
      </div>
    </div>

    <div class="skills-group">
      <div class="skills-group-title">Databases</div>
      <div class="skills-row">
        <span class="stag stag-db">PostgreSQL</span>
        <span class="stag stag-db">MongoDB</span>
      </div>
    </div>

    <div class="skills-group">
      <div class="skills-group-title">Tools & DevOps</div>
      <div class="skills-row">
        <span class="stag stag-tool">Git / GitHub</span>
        <span class="stag stag-tool">Docker (basic)</span>
        <span class="stag stag-tool">VS Code</span>
        <span class="stag stag-tool">IntelliJ</span>
        <span class="stag stag-tool">Swagger</span>
        <span class="stag stag-tool">CI/CD</span>
      </div>
    </div>

    <div class="skills-group">
      <div class="skills-group-title">Practices & Concepts</div>
      <div class="skills-row">
        <span class="stag stag-lang">Agile</span>
        <span class="stag stag-lang">REST API</span>
        <span class="stag stag-lang">Clean Code</span>
        <span class="stag stag-lang">OOP</span>
        <span class="stag stag-lang">Unit Testing</span>
        <span class="stag stag-lang">Data Structures</span>
      </div>
    </div>
  </div>

  <div class="profile-sidebar">
    <div class="edu-card">
      <div class="edu-school">EEPIS Surabaya</div>
      <div class="edu-degree">D3 Informatics Engineering · Web Development</div>
      <div class="edu-meta">
        <span class="edu-pill edu-pill-gpa">GPA 3.80 / 4.00</span>
        <span class="edu-pill edu-pill-date">Est. Jun 2027</span>
      </div>
    </div>

    <div class="info-block">
      <div class="info-block-header">Personal Info</div>
      <div class="info-row">
        <span class="info-key">Name</span>
        <span class="info-val">Oktavian Febrianto</span>
      </div>
      <div class="info-row">
        <span class="info-key">Location</span>
        <span class="info-val">Lamongan, East Java</span>
      </div>
      <div class="info-row">
        <span class="info-key">Phone</span>
        <span class="info-val">+62 813-5764-2730</span>
      </div>
      <div class="info-row">
        <span class="info-key">Email</span>
        <span class="info-val"><a href="mailto:ofebrianto65@gmail.com">ofebrianto65@gmail.com</a></span>
      </div>
      <div class="info-row">
        <span class="info-key">GitHub</span>
        <span class="info-val"><a href="https://github.com/OktavianF" target="_blank">OktavianF</a></span>
      </div>
      <div class="info-row">
        <span class="info-key">Status</span>
        <span class="info-val green">● Open to Work</span>
      </div>
    </div>

    <div class="info-block">
      <div class="info-block-header">Quick Stats</div>
      <div class="info-row">
        <span class="info-key">Projects</span>
        <span class="info-val" style="color:var(--accent)">3+ Built</span>
      </div>
      <div class="info-row">
        <span class="info-key">Awards</span>
        <span class="info-val" style="color:var(--accent)">3× Winner</span>
      </div>
      <div class="info-row">
        <span class="info-key">Throughput</span>
        <span class="info-val" style="color:var(--accent)">5K+ Events/hr</span>
      </div>
      <div class="info-row">
        <span class="info-key">Alert Reduction</span>
        <span class="info-val" style="color:var(--accent)">40% ↓</span>
      </div>
    </div>
  </div>
</div>
@endsection
