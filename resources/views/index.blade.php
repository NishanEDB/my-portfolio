<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio — Nishan Bandara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --black:   #070709;
            --surface: #0e0e12;
            --card:    #13131a;
            --border:  #1e1e2a;
            --border2: #2a2a3a;
            --neon:    #b4ff45;
            --neon2:   #45ffcb;
            --neon3:   #ff4580;
            --dim:     #4a4a60;
            --muted:   #7a7a96;
            --text:    #e8e8f0;
            --white:   #ffffff;
            --font-display: 'Syne', sans-serif;
            --font-mono:    'DM Mono', monospace;
            --font-body:    'DM Sans', sans-serif;
        }

        html { scroll-behavior: smooth; }

        body {
            background: var(--black);
            color: var(--text);
            font-family: var(--font-body);
            font-size: 16px;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ── Scrollbar ── */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: var(--black); }
        ::-webkit-scrollbar-thumb { background: var(--neon); border-radius: 2px; }

        /* ── Selection ── */
        ::selection { background: var(--neon); color: var(--black); }

        /* ── Noise overlay ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 9999;
            opacity: 0.35;
        }

        /* ────────────────────────────────────────
           NAVIGATION
        ──────────────────────────────────────── */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5vw;
            height: 72px;
            background: rgba(7, 7, 9, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
        }

        .nav-logo {
            font-family: var(--font-display);
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--white);
            text-decoration: none;
            letter-spacing: -0.02em;
        }
        .nav-logo span { color: var(--neon); }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }
        .nav-links a {
            font-family: var(--font-mono);
            font-size: 0.78rem;
            color: var(--muted);
            text-decoration: none;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: color 0.2s;
            position: relative;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -3px; left: 0;
            width: 0; height: 1px;
            background: var(--neon);
            transition: width 0.3s;
        }
        .nav-links a:hover { color: var(--neon); }
        .nav-links a:hover::after { width: 100%; }

        .nav-cta {
            font-family: var(--font-mono);
            font-size: 0.78rem;
            padding: 0.55rem 1.2rem;
            background: transparent;
            border: 1px solid var(--neon);
            color: var(--neon);
            text-decoration: none;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: background 0.2s, color 0.2s;
            cursor: pointer;
        }
        .nav-cta:hover { background: var(--neon); color: var(--black); }

        /* ── Mobile nav toggle ── */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 4px;
        }
        .hamburger span {
            display: block;
            width: 24px;
            height: 1.5px;
            background: var(--neon);
            transition: transform 0.3s, opacity 0.3s;
        }
        .hamburger.open span:nth-child(1) { transform: translateY(6.5px) rotate(45deg); }
        .hamburger.open span:nth-child(2) { opacity: 0; }
        .hamburger.open span:nth-child(3) { transform: translateY(-6.5px) rotate(-45deg); }

        /* ────────────────────────────────────────
           HERO
        ──────────────────────────────────────── */
        #hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 5vw 80px;
            position: relative;
            overflow: hidden;
        }

        /* Radial glow */
        #hero::before {
            content: '';
            position: absolute;
            top: -20%; left: -10%;
            width: 65vw; height: 65vw;
            background: radial-gradient(circle, rgba(180,255,69,0.07) 0%, transparent 65%);
            pointer-events: none;
        }
        #hero::after {
            content: '';
            position: absolute;
            bottom: -10%; right: -5%;
            width: 40vw; height: 40vw;
            background: radial-gradient(circle, rgba(69,255,203,0.06) 0%, transparent 65%);
            pointer-events: none;
        }

        /* Grid lines background */
        .hero-grid {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(var(--border) 1px, transparent 1px),
                linear-gradient(90deg, var(--border) 1px, transparent 1px);
            background-size: 60px 60px;
            opacity: 0.25;
            mask-image: radial-gradient(ellipse 80% 60% at 50% 50%, black 30%, transparent 100%);
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            max-width: 1100px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--neon);
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 2rem;
            padding: 0.4rem 0.9rem;
            border: 1px solid rgba(180,255,69,0.3);
            background: rgba(180,255,69,0.05);
        }
        .hero-badge::before {
            content: '';
            width: 6px; height: 6px;
            border-radius: 50%;
            background: var(--neon);
            animation: blink 1.5s ease-in-out infinite;
        }
        @keyframes blink { 0%,100% { opacity: 1; } 50% { opacity: 0.2; } }

        .hero-title {
            font-family: var(--font-display);
            font-size: clamp(3.5rem, 8vw, 7.5rem);
            font-weight: 800;
            line-height: 0.95;
            letter-spacing: -0.03em;
            color: var(--white);
            margin-bottom: 1.5rem;
        }
        .hero-title .line { display: block; overflow: hidden; }
        .hero-title .accent { color: var(--neon); }
        .hero-title .stroke {
            -webkit-text-stroke: 1px rgba(255,255,255,0.25);
            color: transparent;
        }

        .hero-desc {
            max-width: 480px;
            font-size: 1.05rem;
            color: var(--muted);
            line-height: 1.75;
            margin-bottom: 2.5rem;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            font-family: var(--font-mono);
            font-size: 0.82rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 0.9rem 2rem;
            background: var(--neon);
            color: var(--black);
            text-decoration: none;
            font-weight: 500;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(180,255,69,0.3);
        }
        .btn-primary svg { transition: transform 0.2s; }
        .btn-primary:hover svg { transform: translateX(4px); }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            font-family: var(--font-mono);
            font-size: 0.82rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 0.9rem 2rem;
            background: transparent;
            color: var(--text);
            text-decoration: none;
            border: 1px solid var(--border2);
            transition: border-color 0.2s, color 0.2s;
        }
        .btn-ghost:hover { border-color: var(--muted); color: var(--white); }

        .hero-scroll {
            position: absolute;
            bottom: 2.5rem;
            left: 5vw;
            display: flex;
            align-items: center;
            gap: 0.7rem;
            font-family: var(--font-mono);
            font-size: 0.7rem;
            color: var(--dim);
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        .hero-scroll::before {
            content: '';
            width: 30px; height: 1px;
            background: var(--dim);
        }

        /* Floating code snippet */
        .hero-code {
            position: absolute;
            right: 5vw;
            top: 50%;
            transform: translateY(-50%);
            background: var(--card);
            border: 1px solid var(--border);
            padding: 1.5rem 2rem;
            font-family: var(--font-mono);
            font-size: 0.78rem;
            line-height: 1.9;
            color: var(--muted);
            display: none;
        }
        .hero-code .c-green  { color: var(--neon); }
        .hero-code .c-cyan   { color: var(--neon2); }
        .hero-code .c-pink   { color: var(--neon3); }
        .hero-code .c-white  { color: var(--white); }
        .hero-code .c-dim    { color: var(--dim); }

        /* ────────────────────────────────────────
           SECTION COMMON
        ──────────────────────────────────────── */
        section { padding: 7rem 5vw; }

        .section-label {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--neon);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .section-label::before {
            content: '';
            display: block;
            width: 24px;
            height: 1px;
            background: var(--neon);
        }

        .section-title {
            font-family: var(--font-display);
            font-size: clamp(2.2rem, 4vw, 3.5rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            color: var(--white);
            line-height: 1.05;
            margin-bottom: 1.25rem;
        }

        .section-desc {
            max-width: 520px;
            color: var(--muted);
            line-height: 1.75;
        }

        /* ────────────────────────────────────────
           ABOUT
        ──────────────────────────────────────── */
        #about { background: var(--surface); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
            max-width: 1100px;
            margin: 0 auto;
        }

        .about-text p {
            color: var(--muted);
            line-height: 1.85;
            margin-bottom: 1.25rem;
        }
        .about-text p:last-child { margin-bottom: 0; }
        .about-text strong { color: var(--text); font-weight: 500; }

        .about-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            margin-top: 2.5rem;
        }
        .stat-item {
            background: var(--card);
            padding: 1.5rem;
        }
        .stat-num {
            font-family: var(--font-display);
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--neon);
            line-height: 1;
            display: flex;
            align-items: baseline;
            gap: 2px;
        }
        .stat-num sup {
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: -4px;
        }
        .stat-label {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            color: var(--dim);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 0.35rem;
        }

        /* Profile card */
        .about-visual {
            position: relative;
        }
        .profile-card {
            position: relative;
            background: var(--card);
            border: 1px solid var(--border);
            padding: 2.5rem;
            overflow: hidden;
        }
        .profile-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--neon), var(--neon2), var(--neon3));
        }
        .profile-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(180,255,69,0.3), rgba(69,255,203,0.3));
            border: 1px solid rgba(180,255,69,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 2rem;
            font-weight: 800;
            color: var(--neon);
            margin-bottom: 1.25rem;
        }
        .profile-name {
            font-family: var(--font-display);
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--white);
            letter-spacing: -0.02em;
        }
        .profile-role {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--neon);
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-top: 0.2rem;
            margin-bottom: 1.5rem;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
        }
        .info-row {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-family: var(--font-mono);
            font-size: 0.78rem;
        }
        .info-row .info-key { color: var(--dim); min-width: 70px; }
        .info-row .info-val { color: var(--text); }

        .profile-decor {
            position: absolute;
            bottom: 1.5rem;
            right: 1.5rem;
            font-family: var(--font-mono);
            font-size: 5rem;
            font-weight: 800;
            color: rgba(180,255,69,0.04);
            line-height: 1;
            user-select: none;
        }

        /* ────────────────────────────────────────
           SKILLS
        ──────────────────────────────────────── */
        #skills { max-width: 1100px; margin: 0 auto; padding: 7rem 5vw; }
        .skills-wrap { max-width: 1100px; margin: 0 auto; }

        .skills-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3.5rem;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
        }

        .skill-card {
            background: var(--card);
            padding: 1.75rem 2rem;
            transition: background 0.2s;
            cursor: default;
        }
        .skill-card:hover { background: #16161f; }

        .skill-card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
        }
        .skill-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            background: rgba(180,255,69,0.07);
            border: 1px solid rgba(180,255,69,0.15);
        }
        .skill-pct {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--neon);
            letter-spacing: 0.05em;
        }
        .skill-name {
            font-family: var(--font-display);
            font-size: 1rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 0.35rem;
            letter-spacing: -0.01em;
        }
        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
            margin-bottom: 1.2rem;
        }
        .skill-tag {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--dim);
            padding: 0.2rem 0.5rem;
            border: 1px solid var(--border2);
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        .skill-bar {
            height: 2px;
            background: var(--border2);
            position: relative;
            overflow: hidden;
        }
        .skill-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--neon), var(--neon2));
            width: 0%;
            transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ────────────────────────────────────────
           PROJECTS
        ──────────────────────────────────────── */
        #projects {
            background: var(--surface);
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }
        .projects-wrap { max-width: 1100px; margin: 0 auto; }

        .projects-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3.5rem;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
        }

        .project-card {
            background: var(--card);
            padding: 2rem 2rem 1.75rem;
            display: flex;
            flex-direction: column;
            transition: background 0.2s;
            position: relative;
            overflow: hidden;
        }
        .project-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(180,255,69,0.03), transparent 60%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .project-card:hover { background: #16161f; }
        .project-card:hover::after { opacity: 1; }

        .project-card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
        }
        .project-number {
            font-family: var(--font-mono);
            font-size: 0.68rem;
            color: var(--dim);
            letter-spacing: 0.1em;
        }
        .project-links {
            display: flex;
            gap: 0.5rem;
        }
        .project-link {
            width: 32px; height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border2);
            color: var(--dim);
            text-decoration: none;
            transition: border-color 0.2s, color 0.2s;
        }
        .project-link:hover { border-color: var(--neon); color: var(--neon); }

        .project-title {
            font-family: var(--font-display);
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--white);
            letter-spacing: -0.02em;
            margin-bottom: 0.6rem;
            line-height: 1.2;
        }
        .project-desc {
            font-size: 0.875rem;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            flex: 1;
        }
        .project-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.4rem;
            padding-top: 1.25rem;
            border-top: 1px solid var(--border);
        }
        .stack-tag {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--neon);
            padding: 0.25rem 0.6rem;
            background: rgba(180,255,69,0.08);
            border: 1px solid rgba(180,255,69,0.2);
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        /* Featured badge */
        .project-card.featured::before {
            content: 'Featured';
            position: absolute;
            top: 0; right: 2rem;
            font-family: var(--font-mono);
            font-size: 0.62rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--black);
            background: var(--neon);
            padding: 0.25rem 0.6rem;
        }

        /* ────────────────────────────────────────
           CONTACT
        ──────────────────────────────────────── */
        #contact { max-width: 1100px; margin: 0 auto; padding: 7rem 5vw; }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: start;
        }

        .contact-info { padding-top: 0.5rem; }

        .contact-links {
            margin-top: 2.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .contact-link-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            padding: 0.9rem 1.1rem;
            border: 1px solid var(--border);
            background: var(--card);
            transition: border-color 0.2s, background 0.2s;
            group: true;
        }
        .contact-link-item:hover { border-color: var(--border2); background: #16161f; }
        .contact-link-icon {
            width: 36px; height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(180,255,69,0.07);
            border: 1px solid rgba(180,255,69,0.15);
            color: var(--neon);
            flex-shrink: 0;
        }
        .contact-link-text { flex: 1; }
        .contact-link-label {
            font-family: var(--font-mono);
            font-size: 0.65rem;
            color: var(--dim);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        .contact-link-value {
            font-size: 0.9rem;
            color: var(--text);
            margin-top: 0.1rem;
        }
        .contact-link-arrow {
            color: var(--dim);
            transition: color 0.2s, transform 0.2s;
        }
        .contact-link-item:hover .contact-link-arrow { color: var(--neon); transform: translateX(4px); }

        /* Contact form */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .form-group { display: flex; flex-direction: column; gap: 0.45rem; }
        .form-label {
            font-family: var(--font-mono);
            font-size: 0.68rem;
            color: var(--dim);
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        .form-input,
        .form-textarea {
            background: var(--card);
            border: 1px solid var(--border);
            color: var(--text);
            font-family: var(--font-body);
            font-size: 0.9rem;
            padding: 0.85rem 1rem;
            outline: none;
            transition: border-color 0.2s;
            width: 100%;
            resize: none;
        }
        .form-input::placeholder,
        .form-textarea::placeholder { color: var(--dim); }
        .form-input:focus,
        .form-textarea:focus { border-color: var(--neon); }
        .form-textarea { min-height: 140px; }

        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

        .form-submit {
            width: 100%;
            font-family: var(--font-mono);
            font-size: 0.82rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 1rem;
            background: var(--neon);
            color: var(--black);
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
        }
        .form-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(180,255,69,0.3);
        }

        /* ────────────────────────────────────────
           FOOTER
        ──────────────────────────────────────── */
        footer {
            border-top: 1px solid var(--border);
            padding: 2rem 5vw;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }
        .footer-copy {
            font-family: var(--font-mono);
            font-size: 0.72rem;
            color: var(--dim);
            letter-spacing: 0.05em;
        }
        .footer-copy span { color: var(--neon); }
        .footer-socials {
            display: flex;
            gap: 0.75rem;
        }
        .social-btn {
            width: 34px; height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border2);
            color: var(--dim);
            text-decoration: none;
            font-size: 0.85rem;
            transition: border-color 0.2s, color 0.2s;
        }
        .social-btn:hover { border-color: var(--neon); color: var(--neon); }

        /* ────────────────────────────────────────
           ANIMATIONS
        ──────────────────────────────────────── */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .fade-up:nth-child(2) { transition-delay: 0.1s; }
        .fade-up:nth-child(3) { transition-delay: 0.2s; }
        .fade-up:nth-child(4) { transition-delay: 0.3s; }

        /* Cursor dot */
        .cursor {
            width: 6px; height: 6px;
            background: var(--neon);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 10000;
            transition: transform 0.15s;
            mix-blend-mode: difference;
        }
        .cursor-ring {
            width: 28px; height: 28px;
            border: 1px solid rgba(180,255,69,0.5);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transition: left 0.12s, top 0.12s, width 0.2s, height 0.2s, border-color 0.2s;
        }

        /* ────────────────────────────────────────
           RESPONSIVE
        ──────────────────────────────────────── */
        @media (min-width: 900px) {
            .hero-code { display: block; }
        }

        @media (max-width: 900px) {
            .about-grid,
            .contact-grid { grid-template-columns: 1fr; gap: 3rem; }
            .nav-links { display: none; }
            .hamburger { display: flex; }
            .nav-mobile-open .nav-links {
                display: flex;
                flex-direction: column;
                position: fixed;
                top: 72px; left: 0; right: 0;
                background: var(--black);
                border-bottom: 1px solid var(--border);
                padding: 1.5rem 5vw;
                gap: 1.5rem;
            }
            .nav-mobile-open .nav-links a { font-size: 1rem; }
            .form-row { grid-template-columns: 1fr; }
        }

        @media (max-width: 600px) {
            .hero-title { font-size: clamp(2.8rem, 12vw, 5rem); }
            .projects-grid { grid-template-columns: 1fr; }
            .skills-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- Custom cursor -->
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- ── NAVIGATION ── -->
<nav id="navbar">
    <a href="#hero" class="nav-logo">{_NMB}<span>.</span></a>
    <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="#contact" class="nav-cta">Hire me</a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
    </button>
</nav>

<!-- ── HERO ── -->
<section id="hero">
    <div class="hero-grid"></div>

    <div class="hero-inner">
        <div class="hero-badge">Available for work</div>

        <h1 class="hero-title">
            <span class="line">Software</span>
            <span class="line accent">Engineer</span>
            <span class="line stroke">& Builder</span>
        </h1>

        <p class="hero-desc">
            I craft fast, scalable web applications using modern technologies. 
            From sleek frontends to robust backends — I bring ideas to life end-to-end.
        </p>

        <div class="hero-actions">
            <a href="#projects" class="btn-primary">
                View Projects
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
            <a href="#contact" class="btn-ghost">Get in Touch</a>
        </div>
    </div>

    <!-- Floating code card -->
    <div class="hero-code">
        <div><span class="c-dim">// stack.config.js</span></div>
        <div><span class="c-pink">const</span> <span class="c-white">stack</span> <span class="c-dim">=</span> {</div>
        <div>&nbsp;&nbsp;<span class="c-cyan">frontend</span>: [<span class="c-green">'Vue'</span>, <span class="c-green">'React'</span>],</div>
        <div>&nbsp;&nbsp;<span class="c-cyan">backend</span>: [<span class="c-green">'Laravel'</span>, <span class="c-green">'Node'</span>],</div>
        <div>&nbsp;&nbsp;<span class="c-cyan">db</span>: [<span class="c-green">'MySQL'</span>, <span class="c-green">'Redis'</span>],</div>
        <div>&nbsp;&nbsp;<span class="c-cyan">devops</span>: [<span class="c-green">'Docker'</span>, <span class="c-green">'AWS'</span>],</div>
        <div>};</div>
        <div>&nbsp;</div>
        <div><span class="c-pink">export default</span> <span class="c-white">stack</span>;</div>
    </div>

    <div class="hero-scroll">Scroll to explore</div>
</section>

<!-- ── ABOUT ── -->
{{-- <section id="about">
    <div class="about-grid">
        <div class="fade-up">
            <div class="section-label">About me</div>
            <h2 class="section-title">Passionate about<br>clean code &amp; great UX</h2>

            <div class="about-text">
                <p>
                    I'm a <strong>Full Stack Developer</strong> with a passion for building digital products that are both technically sound and visually compelling. I specialise in PHP/Laravel on the backend and Vue/React on the frontend.
                </p>
                <p>
                    I care deeply about <strong>performance, scalability, and developer experience</strong>. Whether it's a complex API, a real-time feature, or a polished UI — I bring the same level of attention to every layer of the stack.
                </p>
                <p>
                    When I'm not coding, I'm learning about system design, contributing to open source, or exploring the latest in web technology.
                </p>
            </div>

            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-num">6<sup>+</sup></div>
                    <div class="stat-label">Years experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">20<sup>+</sup></div>
                    <div class="stat-label">Projects shipped</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">8<sup>+</sup></div>
                    <div class="stat-label">Happy clients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">∞</div>
                    <div class="stat-label">Lines of code</div>
                </div>
            </div>
        </div>

        <div class="fade-up">
            <div class="profile-card">
                <div class="profile-avatar">{NMB}</div>
                <div class="profile-name">NishaN BandarA</div>
                <div class="profile-role">Software Engineer</div>
                <div class="profile-info">
                    <div class="info-row">
                        <span class="info-key">location</span>
                        <span class="info-val">Colombo, Sri Lanka</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">email</span>
                        <span class="info-val">nishanmbandara.252@gmail.com</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">status</span>
                        <span class="info-val" style="color:var(--neon)">● Open to work</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">focus</span>
                        <span class="info-val">·Flutter ·Laravel · Vue · Docker</span>
                    </div>
                </div>
                <div class="profile-decor">&lt;/&gt;</div>
            </div>
        </div>
    </div>
</section> --}}

<section id="about">
    <div class="about-grid">
        <div class="fade-up">
            <div class="section-label">About me</div>
            <h2 class="section-title">Passionate about<br>clean code &amp; great UX</h2>

            <div class="about-text">
                <p>
                    I'm <strong>Nishan Bandara</strong>, a Full Stack Software Engineer with <strong>6+ years of experience</strong> building scalable web and mobile applications. I specialise in <strong>Flutter</strong> for cross-platform mobile development and <strong>Laravel / CodeIgniter</strong> on the backend.
                </p>
                <p>
                    Currently serving as a <strong>Software Engineer at the Export Development Board</strong>, I work across Laravel, CodeIgniter, Flutter, React, Java, and C# — delivering end-to-end solutions for real-world government and enterprise needs.
                </p>
                <p>
                    Previously I built production-grade Flutter &amp; Laravel applications at <strong>Prodigit Pvt Limited</strong> (India) and started my career as an Associate Software Engineer at <strong>Imedirep, VisionCare Group</strong>. I'm deeply passionate about clean architecture, mobile UX, and developer experience.
                </p>
            </div>

            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-num">6<sup>+</sup></div>
                    <div class="stat-label">Years experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">4<sup>+</sup></div>
                    <div class="stat-label">Years Flutter dev</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">3</div>
                    <div class="stat-label">Companies worked</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">∞</div>
                    <div class="stat-label">Lines of code</div>
                </div>
            </div>
        </div>

        <div class="fade-up">
            <div class="profile-card">
                <div class="profile-avatar">{NMB}</div>
                <div class="profile-name">Nishan Bandara</div>
                <div class="profile-role">Software Engineer · Full Stack</div>
                <div class="profile-info">
                    <div class="info-row">
                        <span class="info-key">location</span>
                        <span class="info-val">Colombo, Sri Lanka</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">current</span>
                        <span class="info-val">Export Development Board</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">email</span>
                        <span class="info-val">nishanmbandara.252@gmail.com</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">status</span>
                        <span class="info-val" style="color:var(--neon)">● Open to work</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">focus</span>
                        <span class="info-val">Flutter · Laravel · React · Docker</span>
                    </div>
                    <div class="info-row">
                        <span class="info-key">cloud</span>
                        <span class="info-val">Firebase · GCP · Agora</span>
                    </div>
                </div>
                <div class="profile-decor">&lt;/&gt;</div>
            </div>
        </div>
    </div>
</section>

<!-- ── SKILLS ── -->
<section id="skills">
    <div class="skills-wrap">
        <div class="skills-header">
            <div class="fade-up">
                <div class="section-label">Tech stack</div>
                <h2 class="section-title">Skills &amp; Technologies</h2>
            </div>
            <p class="section-desc fade-up">
                Tools and technologies I use to turn ideas into real, production-ready products.
            </p>
        </div>

        <div class="skills-grid">
            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">📱</div>
                    <span class="skill-pct">95%</span>
                </div>
                <div class="skill-name">Flutter / Dart</div>
                <div class="skill-tags">
                    <span class="skill-tag">Cross-platform</span>
                    <span class="skill-tag">REST API</span>
                    <span class="skill-tag">Firebase</span>
                    <span class="skill-tag">State Management</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" data-width="95"></div>
                </div>
            </div>
            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">🐘</div>
                    <span class="skill-pct">95%</span>
                </div>
                <div class="skill-name">PHP / Laravel</div>
                <div class="skill-tags">
                    <span class="skill-tag">REST API</span>
                    <span class="skill-tag">Eloquent</span>
                    <span class="skill-tag">Queues</span>
                    <span class="skill-tag">Livewire</span>
                </div>
                <div class="skill-bar"><div class="skill-bar-fill" data-width="95"></div></div>
            </div>

            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">⚡</div>
                    <span class="skill-pct">88%</span>
                </div>
                <div class="skill-name">Vue.js / React</div>
                <div class="skill-tags">
                    <span class="skill-tag">Pinia</span>
                    <span class="skill-tag">Inertia</span>
                    <span class="skill-tag">Tailwind</span>
                    <span class="skill-tag">Vite</span>
                </div>
                <div class="skill-bar"><div class="skill-bar-fill" data-width="88"></div></div>
            </div>

            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">🗄️</div>
                    <span class="skill-pct">85%</span>
                </div>
                <div class="skill-name">Databases</div>
                <div class="skill-tags">
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">PostgreSQL</span>
                    <span class="skill-tag">Redis</span>
                    <span class="skill-tag">MongoDB</span>
                </div>
                <div class="skill-bar"><div class="skill-bar-fill" data-width="85"></div></div>
            </div>

            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">🐳</div>
                    <span class="skill-pct">80%</span>
                </div>
                <div class="skill-name">DevOps / Docker</div>
                <div class="skill-tags">
                    <span class="skill-tag">Docker</span>
                    <span class="skill-tag">CI/CD</span>
                    <span class="skill-tag">AWS</span>
                    <span class="skill-tag">Linux</span>
                </div>
                <div class="skill-bar"><div class="skill-bar-fill" data-width="80"></div></div>
            </div>

            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">🔧</div>
                    <span class="skill-pct">90%</span>
                </div>
                <div class="skill-name">Git &amp; Tooling</div>
                <div class="skill-tags">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">GitHub Actions</span>
                    <span class="skill-tag">PHPUnit</span>
                    <span class="skill-tag">Pest</span>
                </div>
                <div class="skill-bar"><div class="skill-bar-fill" data-width="90"></div></div>
            </div>

            <div class="skill-card fade-up">
                <div class="skill-card-top">
                    <div class="skill-icon">📡</div>
                    <span class="skill-pct">78%</span>
                </div>
                <div class="skill-name">APIs &amp; Integrations</div>
                <div class="skill-tags">
                    <span class="skill-tag">REST</span>
                    <span class="skill-tag">GraphQL</span>
                    <span class="skill-tag">WebSockets</span>
                    <span class="skill-tag">OAuth</span>
                </div>
                <div class="skill-bar"><div class="skill-bar-fill" data-width="78"></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ── PROJECTS ── -->
<section id="projects">
    <div class="projects-wrap">
        <div class="projects-header">
            <div class="fade-up">
                <div class="section-label">Work</div>
                <h2 class="section-title">Featured Projects</h2>
            </div>
            <p class="section-desc fade-up">
                A selection of projects I've built — each one solving a real problem with clean, maintainable code.
            </p>
        </div>

        <div class="projects-grid">
            <div class="project-card featured fade-up">
                <div class="project-card-top">
                    <span class="project-number">01</span>
                    <div class="project-links">
                        <a href="#" class="project-link" title="GitHub">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.09-.74.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        </a>
                        <a href="#" class="project-link" title="Live">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                        </a>
                    </div>
                </div>
                <h3 class="project-title">E-Commerce Platform</h3>
                <p class="project-desc">
                    A full-featured online store with multi-vendor support, real-time inventory, payment gateway integration, and an admin dashboard with advanced analytics.
                </p>
                <div class="project-stack">
                    <span class="stack-tag">Laravel</span>
                    <span class="stack-tag">Vue 3</span>
                    <span class="stack-tag">MySQL</span>
                    <span class="stack-tag">Stripe</span>
                    <span class="stack-tag">Docker</span>
                </div>
            </div>

            <div class="project-card fade-up">
                <div class="project-card-top">
                    <span class="project-number">02</span>
                    <div class="project-links">
                        <a href="#" class="project-link" title="GitHub">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.09-.74.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        </a>
                        <a href="#" class="project-link" title="Live">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                        </a>
                    </div>
                </div>
                <h3 class="project-title">SaaS Task Manager</h3>
                <p class="project-desc">
                    A team productivity tool with real-time collaboration via WebSockets, role-based access control, Kanban boards, and Slack/email notifications.
                </p>
                <div class="project-stack">
                    <span class="stack-tag">Laravel</span>
                    <span class="stack-tag">Inertia</span>
                    <span class="stack-tag">Pusher</span>
                    <span class="stack-tag">Redis</span>
                </div>
            </div>

            <div class="project-card fade-up">
                <div class="project-card-top">
                    <span class="project-number">03</span>
                    <div class="project-links">
                        <a href="#" class="project-link" title="GitHub">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.09-.74.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        </a>
                        <a href="#" class="project-link" title="Live">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                        </a>
                    </div>
                </div>
                <h3 class="project-title">REST API Gateway</h3>
                <p class="project-desc">
                    A high-performance API gateway with JWT authentication, rate limiting, request logging, and a developer portal with live API documentation.
                </p>
                <div class="project-stack">
                    <span class="stack-tag">Laravel</span>
                    <span class="stack-tag">JWT</span>
                    <span class="stack-tag">PostgreSQL</span>
                    <span class="stack-tag">AWS</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── CONTACT ── -->
<section id="contact">
    <div class="contact-grid">
        <div class="fade-up">
            <div class="section-label">Contact</div>
            <h2 class="section-title">Let's build<br>something great</h2>
            <p class="section-desc" style="margin-top:0.75rem">
                Have a project in mind or looking for a developer to join your team? I'd love to hear from you.
            </p>

            <div class="contact-links">
                <a href="mailto:you@example.com" class="contact-link-item">
                    <div class="contact-link-icon">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <div class="contact-link-text">
                        <div class="contact-link-label">Email</div>
                        <div class="contact-link-value">nishanmbandara.252@gmail.com</div>
                    </div>
                    <svg class="contact-link-arrow" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>

                <a href="https://github.com" target="_blank" class="contact-link-item">
                    <div class="contact-link-icon">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.09-.74.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    </div>
                    <div class="contact-link-text">
                        <div class="contact-link-label">GitHub</div>
                        <div class="contact-link-value">github.com/yourhandle</div>
                    </div>
                    <svg class="contact-link-arrow" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>

                <a href="https://linkedin.com" target="_blank" class="contact-link-item">
                    <div class="contact-link-icon">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </div>
                    <div class="contact-link-text">
                        <div class="contact-link-label">LinkedIn</div>
                        <div class="contact-link-value">linkedin.com/in/yourhandle</div>
                    </div>
                    <svg class="contact-link-arrow" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <div class="fade-up">
            <form class="contact-form" onsubmit="handleSubmit(event)">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="fname">First name</label>
                        <input class="form-input" type="text" id="fname" name="first_name" placeholder="John" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="lname">Last name</label>
                        <input class="form-input" type="text" id="lname" name="last_name" placeholder="Doe">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email address</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="subject">Subject</label>
                    <input class="form-input" type="text" id="subject" name="subject" placeholder="Project inquiry">
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-textarea" id="message" name="message" placeholder="Tell me about your project..." required></textarea>
                </div>
                <button type="submit" class="form-submit">
                    Send Message
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- ── FOOTER ── -->
<footer>
    <div class="footer-copy">
        © {{ date('Y') }} <span>NISHAN BANDARA</span> — Built with Laravel &amp; passion
    </div>
    <div class="footer-socials">
        <a href="https://github.com" target="_blank" class="social-btn" title="GitHub">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.09-.74.08-.73.08-.73 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
        </a>
        <a href="https://linkedin.com" target="_blank" class="social-btn" title="LinkedIn">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
        <a href="https://twitter.com" target="_blank" class="social-btn" title="Twitter">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.74l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
    </div>
</footer>

<script>
    // ── Custom cursor
    const cursor = document.getElementById('cursor');
    const ring   = document.getElementById('cursorRing');
    let mx = 0, my = 0;

    document.addEventListener('mousemove', e => {
        mx = e.clientX; my = e.clientY;
        cursor.style.left = mx - 3 + 'px';
        cursor.style.top  = my - 3 + 'px';
        ring.style.left   = mx - 14 + 'px';
        ring.style.top    = my - 14 + 'px';
    });

    document.querySelectorAll('a, button, .skill-card, .project-card').forEach(el => {
        el.addEventListener('mouseenter', () => {
            ring.style.width = '44px';
            ring.style.height = '44px';
            ring.style.borderColor = 'rgba(180,255,69,0.8)';
            ring.style.left = mx - 22 + 'px';
            ring.style.top  = my - 22 + 'px';
        });
        el.addEventListener('mouseleave', () => {
            ring.style.width = '28px';
            ring.style.height = '28px';
            ring.style.borderColor = 'rgba(180,255,69,0.5)';
        });
    });

    // ── Mobile nav
    const hamburger = document.getElementById('hamburger');
    const navbar = document.getElementById('navbar');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        navbar.classList.toggle('nav-mobile-open');
    });

    // Close mobile nav on link click
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('open');
            navbar.classList.remove('nav-mobile-open');
        });
    });

    // ── Scroll-triggered fade-up
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    // ── Skill bar animation
    const barObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const fills = entry.target.querySelectorAll('.skill-bar-fill');
                fills.forEach(fill => {
                    const w = fill.getAttribute('data-width');
                    setTimeout(() => fill.style.width = w + '%', 200);
                });
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('#skills').forEach(el => barObserver.observe(el));

    // ── Nav scroll style
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');
        if (window.scrollY > 60) {
            nav.style.borderBottomColor = 'rgba(30,30,42,0.8)';
        } else {
            nav.style.borderBottomColor = 'var(--border)';
        }
    });

    // ── Form handler (demo)
    function handleSubmit(e) {
        e.preventDefault();
        const btn = e.target.querySelector('.form-submit');
        btn.textContent = 'Sending...';
        btn.disabled = true;
        setTimeout(() => {
            btn.innerHTML = 'Message Sent ✓';
            btn.style.background = 'var(--neon2)';
            setTimeout(() => {
                btn.innerHTML = 'Send Message <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>';
                btn.style.background = 'var(--neon)';
                btn.disabled = false;
                e.target.reset();
            }, 2500);
        }, 1200);
    }
</script>
</body>
</html>