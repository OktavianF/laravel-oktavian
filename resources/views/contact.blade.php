@extends('layouts.app')

@section('title', 'Contact — Oktavian Febrianto')

@section('styles')
/* ═══════════════════════════════════════════
   CONTACT PAGE
═══════════════════════════════════════════ */
.contact-page {
  padding: 72px 80px;
  min-height: calc(100vh - 68px);
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: 80px;
  align-items: start;
}

.contact-big-title {
  font-size: clamp(44px, 5.5vw, 80px);
  font-weight: 800;
  letter-spacing: -.04em;
  line-height: .92;
  margin-bottom: 28px;
}

.contact-big-title em {
  font-family: var(--font-serif);
  font-style: italic;
  color: var(--accent);
  font-weight: 400;
}

.contact-desc {
  color: var(--muted);
  font-size: 15px;
  line-height: 1.8;
  max-width: 500px;
  margin-bottom: 48px;
}

.contact-methods {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.contact-method {
  display: flex;
  align-items: center;
  gap: 20px;
  padding: 24px;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 8px;
  text-decoration: none;
  cursor: pointer;
  transition: border-color .2s, background .2s, transform .2s;
}

.contact-method:hover {
  border-color: rgba(200,255,0,.25);
  background: rgba(200,255,0,.03);
  transform: translateX(4px);
}

.cm-icon {
  width: 44px; height: 44px;
  background: var(--surface2);
  border: 1px solid var(--border);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  flex-shrink: 0;
  color: var(--muted);
  transition: color .2s;
}

.contact-method:hover .cm-icon { color: var(--accent); }

.cm-label { font-family: var(--font-mono); font-size: 10px; color: var(--muted2); letter-spacing: .15em; text-transform: uppercase; margin-bottom: 3px; }
.cm-value { font-size: 14px; font-weight: 600; color: var(--text); }

.cm-arrow {
  margin-left: auto;
  font-size: 18px;
  color: var(--muted);
  transition: color .2s, transform .2s;
}

.contact-method:hover .cm-arrow { color: var(--accent); transform: translateX(4px); }

/* Form */
.contact-form-area {
  padding-top: 8px;
}

.form-title {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 24px;
  letter-spacing: -.02em;
}

.form-group {
  margin-bottom: 16px;
}

.form-label {
  display: block;
  font-family: var(--font-mono);
  font-size: 10px;
  letter-spacing: .2em;
  color: var(--muted);
  text-transform: uppercase;
  margin-bottom: 8px;
}

.form-input, .form-textarea {
  width: 100%;
  background: var(--surface);
  border: 1px solid rgba(255,255,255,.1);
  border-radius: 8px;
  padding: 13px 16px;
  color: var(--text);
  font-family: var(--font-mono);
  font-size: 13px;
  outline: none;
  transition: border-color .2s;
  resize: none;
}

.form-input::placeholder, .form-textarea::placeholder { color: var(--muted2); }

.form-input:focus, .form-textarea:focus {
  border-color: rgba(200,255,0,.35);
}

.form-textarea { min-height: 120px; }

.form-submit {
  width: 100%;
  padding: 14px;
  background: var(--accent);
  color: #07070c;
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 14px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: transform .2s, box-shadow .2s;
  letter-spacing: .04em;
  margin-top: 8px;
}

.form-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(200,255,0,.25);
}

.form-note {
  font-family: var(--font-mono);
  font-size: 10px;
  color: var(--muted);
  text-align: center;
  margin-top: 12px;
  letter-spacing: .08em;
}

@media (max-width: 900px) {
  .contact-page { padding: 40px 24px; grid-template-columns: 1fr; }
}
@endsection

@section('content')
<div class="contact-page">
  <div class="contact-left">
    <div class="section-eyebrow" style="margin-bottom:20px">// Contact</div>
    <div class="contact-big-title">
      Let's build<br/>something <em>great</em>
    </div>
    <p class="contact-desc">
      Open to internships, part-time opportunities, and exciting project collaborations. Whether you have a project in mind or just want to connect — reach out anytime.
    </p>

    <div class="contact-methods">
      <a class="contact-method" href="mailto:ofebrianto65@gmail.com">
        <div class="cm-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        </div>
        <div class="cm-info">
          <div class="cm-label">Email</div>
          <div class="cm-value">ofebrianto65@gmail.com</div>
        </div>
        <div class="cm-arrow">→</div>
      </a>
      <a class="contact-method" href="tel:+6281357642730">
        <div class="cm-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.16 6.16l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <div class="cm-info">
          <div class="cm-label">Phone</div>
          <div class="cm-value">+62 813-5764-2730</div>
        </div>
        <div class="cm-arrow">→</div>
      </a>
      <a class="contact-method" href="https://github.com/OktavianF" target="_blank">
        <div class="cm-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
        </div>
        <div class="cm-info">
          <div class="cm-label">GitHub</div>
          <div class="cm-value">github.com/OktavianF</div>
        </div>
        <div class="cm-arrow">→</div>
      </a>
      <a class="contact-method" href="https://linkedin.com/in/oktavian-febrianto" target="_blank">
        <div class="cm-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </div>
        <div class="cm-info">
          <div class="cm-label">LinkedIn</div>
          <div class="cm-value">oktavian-febrianto</div>
        </div>
        <div class="cm-arrow">→</div>
      </a>
    </div>
  </div>

  <div class="contact-form-area">
    <div class="form-title">Send a Message</div>

    <form id="contact-form" onsubmit="return sendForm(event)">
      @csrf
      <div class="form-group">
        <label class="form-label">Your Name</label>
        <input class="form-input" type="text" placeholder="John Doe" id="f-name" required/>
      </div>
      <div class="form-group">
        <label class="form-label">Email Address</label>
        <input class="form-input" type="email" placeholder="john@example.com" id="f-email" required/>
      </div>
      <div class="form-group">
        <label class="form-label">Subject</label>
        <input class="form-input" type="text" placeholder="Project collaboration..." id="f-subject"/>
      </div>
      <div class="form-group">
        <label class="form-label">Message</label>
        <textarea class="form-textarea" placeholder="Tell me about your project or opportunity..." id="f-message" required></textarea>
      </div>

      <button type="submit" class="form-submit">Send Message →</button>
      <div class="form-note">I typically respond within 24 hours.</div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script>
  function sendForm(e) {
    e.preventDefault();

    const name    = document.getElementById('f-name').value.trim();
    const email   = document.getElementById('f-email').value.trim();
    const subject = document.getElementById('f-subject').value.trim();
    const msg     = document.getElementById('f-message').value.trim();

    if (!name || !email || !msg) {
      showToast('Please fill in all required fields.', true);
      return false;
    }

    // Clear form
    document.getElementById('f-name').value = '';
    document.getElementById('f-email').value = '';
    document.getElementById('f-subject').value = '';
    document.getElementById('f-message').value = '';
    showToast('Message sent! I\'ll get back to you soon.');
    return false;
  }
</script>
@endsection
