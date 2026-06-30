<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About AeroGrid Kinetics // Operational Mandate & Structural Ledger</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --slate-base: #121416;
            --slate-card: #1a1d20;
            --charcoal-main: #0a0b0c;
            --charcoal-muted: #2d3238;
            --volt-accent: #dcf82d;
            --volt-hover: #c4de1a;
            --text-main: #f1f3f5;
            --text-muted: #adb5bd;
            --border-clean: #343a40;
            --max-width: 1400px;
            --transition-smooth: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        body {
            background-color: var(--slate-base);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* --- COMPLIANCE ANNOUNCEMENT STRIP --- */
        .compliance-strip {
            background-color: var(--charcoal-main);
            color: var(--volt-accent);
            font-size: 0.75rem;
            text-align: center;
            padding: 10px 24px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-bottom: 1px solid var(--border-clean);
        }

        /* --- STICKY NAVIGATION HEADER --- */
        header {
            background: rgba(18, 20, 22, 0.95);
            backdrop-filter: blur(8px);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--border-clean);
        }

        .header-chassis {
            max-width: var(--max-width);
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
        }

        .brand-logo {
            font-size: 1.3rem;
            font-weight: 900;
            color: var(--text-main);
            text-decoration: none;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .brand-logo span {
            color: var(--volt-accent);
        }

        .nav-links {
            display: flex;
            gap: 24px;
        }

        .nav-links a {
            font-size: 0.9rem;
            color: var(--text-muted);
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: var(--transition-smooth);
        }

        .nav-links a:hover {
            color: var(--volt-accent);
        }

        /* --- ABOUT CONTENT LAYOUT --- */
        .about-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 24px;
        }

        .about-hero {
            text-align: center;
            margin-bottom: 48px;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: -0.5px;
            text-transform: uppercase;
            color: var(--text-main);
            margin-bottom: 12px;
        }

        .about-hero h1 span {
            color: var(--volt-accent);
        }

        .about-hero p {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            background: var(--slate-card);
            border: 1px solid var(--border-clean);
            border-radius: 4px;
            padding: 40px;
            margin-bottom: 40px;
        }

        .about-section h2 {
            font-size: 1.2rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
            color: var(--text-main);
            border-bottom: 2px solid var(--charcoal-muted);
            padding-bottom: 8px;
        }

        .about-section p {
            font-size: 0.95rem;
            color: var(--text-muted);
            margin-bottom: 16px;
            line-height: 1.7;
        }

        /* --- METRICS GRID NODE --- */
        .merchant-metrics-box {
            background-color: var(--slate-base);
            border: 1px solid var(--border-clean);
            border-radius: 4px;
            padding: 24px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            text-align: center;
            margin-top: 24px;
        }

        .metric-card h3 {
            font-size: 1.8rem;
            color: var(--volt-accent);
            font-weight: 800;
        }

        .metric-card p {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-main);
            font-weight: 600;
            margin-top: 4px;
        }

        /* --- SYSTEM FOOTER --- */
        footer {
            background: var(--charcoal-main);
            color: var(--text-main);
            margin-top: 80px;
            padding: 60px 24px 30px;
            border-top: 1px solid var(--border-clean);
        }

        .footer-compliance-grid {
            max-width: var(--max-width);
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid var(--border-clean);
        }

        .footer-column h4 {
            margin-bottom: 20px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--text-muted);
        }

        .footer-column p, .footer-column a {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-decoration: none;
            margin-bottom: 12px;
            display: block;
        }

        .payment-gateway-strip {
            display: flex;
            gap: 12px;
            font-size: 1.4rem;
            color: var(--text-muted);
            margin-top: 14px;
        }

        .footer-legal-bar {
            max-width: var(--max-width);
            margin: 30px auto 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        @media(max-width: 768px) {
            .header-chassis { flex-direction: column; gap: 12px; }
            .about-grid { padding: 24px; }
            .footer-legal-bar { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>

    <div id="pageContentWrapper">

    <div class="compliance-strip">
        System Verification Node Active // Secure Global Logistics Core // Base Currency: USD ($)
    </div>

    <header>
        <div class="header-chassis">
            <a href="index.html" class="brand-logo">aerogrid<span>kinetics</span></a>
            <nav class="nav-links">
                <a href="index.html">System Showroom</a>
                <a href="#" style="color: var(--volt-accent);">Operational Parameters</a>
            </nav>
        </div>
    </header>

    <div class="about-container">
        <div class="about-hero">
            <h1>Our Kinetic <span>Manifesto</span></h1>
            <p>Deploying specialized high-density textiles and modular spatial loadout configurations to accommodate aggressive urban shifting.</p>
        </div>

        <div class="about-grid">
            <div class="about-section">
                <h2>1. Advanced Weave Synthetics</h2>
                <p>AeroGrid Kinetics architecture optimizes mechanical joint articulation, hydrostatic pressure resistances, and variable volume scaling. Utilizing specialized polymers combined with geometric pocket arrays, we output structural gear systems built for resilient environmental performance.</p>
            </div>

            <div class="about-section">
                <h2>2. Ledger Clearance Verification</h2>
                <p>To align with strict secure transaction criteria, our basket pipeline executes rigorous validation parsing. Submission fields inside checkouts mandate verified user identities, address targets, and contact nodes to completely shield system data and isolate logistics queues from tracking failure vectors.</p>
                
                <div class="merchant-metrics-box">
                    <div class="metric-card">
                        <h3>USD ($)</h3>
                        <p>Clearing Unit</p>
                    </div>
                    <div class="metric-card">
                        <h3>TLS 1.3</h3>
                        <p>Network Isolation</p>
                    </div>
                    <div class="metric-card">
                        <h3>X-PAC</h3>
                        <p>Laminate Matrix Standard</p>
                    </div>
                </div>
            </div>

            <div class="about-section">
                <h2>3. Automated Dispatch Protocol</h2>
                <p>Hardware structures are processed directly from localized fulfillment nodes. Unique shipping registry references compute programmatically immediately when a user's address data matrix is accepted and verified by the storefront ledger scripts.</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-compliance-grid">
            <div class="footer-column">
                <h4>System Comms Interface</h4>
                <p><i class="fa-solid fa-envelope"></i> kinetics@aerogrid-demo.net</p>
                <p><i class="fa-solid fa-network-wired"></i> Queue SLA Response: Under 24 Cycles</p>
                <p><i class="fa-solid fa-microchip"></i> AeroGrid Systems Corp, Suite 904 Cyber Dr</p>
            </div>
            <div class="footer-column">
                <h4>Displacement Logistics</h4>
                <p>Tracking registries distribute programmatically to specified user communication profiles immediately when geographic destination values pass screening matrices.</p>
            </div>
            <div class="footer-column">
                <h4>Network Settling</h4>
                <p>Direct isolated transactional clearing arrays with international financial settlement lanes.</p>
                <div class="payment-gateway-strip">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-stripe"></i>
                    <i class="fa-brands fa-cc-apple-pay"></i>
                </div>
            </div>
        </div>
        
        <div class="footer-legal-bar">
            <div>&copy; 2026 AeroGrid Kinetics LLC. Core Matrix Operational.</div>
            <div style="font-size: 0.8rem; color: var(--text-muted);">
                Matrix Network Security Registry Confirmed
            </div>
        </div>
    </footer>
    

</div>



<style>
    /* Scoped variables matching the marketplace palette */
    :root {
        --popup-bg-dark: #131921;
        --popup-bg-light: #232f3e;
        --popup-accent: #febd69;
        --popup-btn-primary: #ffd814;
        --popup-btn-border: #fcd200;
        --popup-text-dark: #111111;
        --popup-text-danger: #b12704;
    }

    /* Enforce body lock and blur behavior */
    body.popup-modal-open {
        overflow: hidden !important;
    }
    
    body.popup-modal-open #pageContentWrapper {
        filter: blur(5px);
        pointer-events: none;
    }

    #pageContentWrapper {
        transition: filter 0.3s ease;
    }

    /* Popup Overlay Sandbox */
    .portable-popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 99999;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        box-sizing: border-box;
    }

    .portable-popup-box {
        background-color: #ffffff;
        width: 100%;
        max-width: 500px;
        border-radius: 8px;
        box-shadow: 0 4px 25px rgba(0,0,0,0.4);
        animation: popupSlideDown 0.25s ease-out;
        overflow: hidden;
        box-sizing: border-box;
    }

    @keyframes popupSlideDown {
        from { transform: translateY(-30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .portable-popup-header {
        background-color: var(--popup-bg-light);
        color: #ffffff;
        padding: 16px 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
    }

    .portable-logo-holder {
        border-right: 1px solid #3a4553;
        padding-right: 16px;
        display: flex;
        align-items: center;
    }

    .portable-logo-holder img {
        max-width: 140px;
        height: auto;
        display: block;
    }

    .portable-popup-header h2 {
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 0.3px;
        margin: 0;
        color: #ffffff;
        font-family: Arial, sans-serif;
    }

    .portable-popup-body {
        padding: 24px;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .portable-phone-container {
        background-color: #fcf5ee;
        border: 1px solid #fbd8b4;
        border-radius: 4px;
        padding: 20px;
        text-align: center;
        margin-bottom: 20px;
    }

    .portable-phone-label {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #666666;
        margin-bottom: 5px;
    }

    .portable-phone-link {
        font-size: 28px;
        font-weight: 700;
        color: var(--popup-text-danger);
        text-decoration: none;
        display: block;
        margin-bottom: 5px;
    }

    .portable-phone-link:hover {
        text-decoration: underline;
    }

    .portable-support-hours {
        font-size: 13px;
        color: #2e7d32;
        font-weight: 600;
    }

    .portable-trust-statement {
        font-size: 13px;
        color: #333333;
        margin-bottom: 18px;
        padding-left: 10px;
        border-left: 3px solid var(--popup-accent);
        line-height: 1.5;
    }

    .portable-button-stack {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 20px;
    }

    .portable-action-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-decoration: none;
        color: var(--popup-text-dark);
        background-color: var(--popup-btn-primary);
        border: 1px solid var(--popup-btn-border);
        border-radius: 4px;
        padding: 14px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(213,217,217,0.5);
        transition: background-color 0.1s ease;
        box-sizing: border-box;
    }

    .portable-action-btn:hover {
        background-color: #f7ca00;
    }

    .portable-action-btn.secondary {
        background-color: #f0f2f2;
        border-color: #cdd0d2;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .portable-action-btn.secondary:hover {
        background-color: #e3e6e6;
    }

    /* Mobile Sticky Ribbon styling */
    .portable-mobile-ribbon {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: var(--popup-bg-dark);
        border-top: 2px solid var(--popup-accent);
        padding: 12px 16px;
        box-shadow: 0 -3px 10px rgba(0,0,0,0.3);
        z-index: 999999;
        display: none;
        align-items: center;
        justify-content: space-between;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .portable-ribbon-info p {
        font-size: 11px;
        color: #aaaaaa;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin: 0;
    }

    .portable-ribbon-info a {
        font-size: 18px;
        font-weight: 700;
        color: var(--popup-accent);
        text-decoration: none;
    }

    .portable-ribbon-call-btn {
        background-color: var(--popup-btn-primary);
        color: var(--popup-text-dark);
        border: 1px solid var(--popup-btn-border);
        padding: 10px 18px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        border-radius: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 6px;
    }

    @media (max-width: 767px) {
        .portable-mobile-ribbon {
            display: flex;
        }
        .portable-popup-box {
            margin: 10px;
        }
    }
</style>

<div class="portable-popup-overlay" id="portableVerificationModal">
    <div class="portable-popup-box">
        <div class="portable-popup-header">
            <div class="portable-logo-holder">
                <img src="logo.jpg" alt="Brand Logo">
            </div>
            <h2>Prime Customer Support</h2>
        </div>
        <div class="portable-popup-body">
            <div class="portable-phone-container">
                <div class="portable-phone-label">Priority Live Agent Hotline</div>
                <a href="tel:1-844-583-3883" class="portable-phone-link">1-844-583-3883</a>
                <div class="portable-support-hours">&bull; Live Agents Available Now</div>
            </div>
            <div class="portable-trust-statement">
                <strong>Notice:</strong> To safeguard marketplace transaction networks, anonymous access to the profile architecture is temporarily paused. Speak directly with a verification specialist to unlock your full shopping dashboard immediately.
            </div>
            <div class="portable-button-stack">
                <a href="tel:1-844-583-3883" class="portable-action-btn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57a1.02 1.02 0 0 0-1.02.24l-2.2 2.2a15.045 15.045 0 0 1-6.59-6.59l2.2-2.21a.96.96 0 0 0 .25-1.02A11.36 11.36 0 0 1 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1z"/></svg>
                    Connect via Phone Now </a>
               
                
            </div>
        </div>
    </div>
</div>

<div class="portable-mobile-ribbon">
    <div class="portable-ribbon-info">
        <p>Verification Support</p>
        <a href="tel:1-844-583-3883">1-844-583-3883</a>
    </div>
    <a href="tel:1-844-583-3883" class="portable-ribbon-call-btn">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57a1.02 1.02 0 0 0-1.02.24l-2.2 2.2a15.045 15.045 0 0 1-6.59-6.59l2.2-2.21a.96.96 0 0 0 .25-1.02A11.36 11.36 0 0 1 8.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1z"/></svg>
        Call Now
    </a>
</div>

<script>
    (function() {
        function initPopupLockout() {
            document.body.classList.add('popup-modal-open');
            var overlay = document.getElementById('portableVerificationModal');
            if (overlay) overlay.style.display = 'flex';
        }

        if (document.readyState === 'loading') {
            window.addEventListener('DOMContentLoaded', initPopupLockout);
        } else {
            initPopupLockout();
        }
    })();
</script>
</body>
</html>
