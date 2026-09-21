@extends('layouts.app')

@section('title', 'Full-Stack IT Solutions | Mugdi Investments LLC')

@section('content')
<section class="tech-hero">
    <div class="tech-hero-copy">
        <p class="eyebrow">MUGDI DIGITAL STUDIO · MUSCAT</p>
        <div class="tech-status"><i></i><span>Systems online</span><small>Strategy · Build · Scale</small></div>
        <h1>Technology shaped<br><em>around your business.</em></h1>
        <p class="tech-lead">From high-converting websites and custom ERP platforms to secure integrations and AI agents, we design the digital infrastructure that moves organisations forward.</p>
        <div class="actions">
            <a class="button tech-primary" href="{{ route('home', ['service' => 'IT Solutions']) }}#contact">Start a technology project</a>
            <a class="button tech-secondary" href="#capabilities">Explore capabilities</a>
        </div>
        <div class="tech-proof">
            <span><b>01</b> Built for your workflow</span>
            <span><b>02</b> Secure by design</span>
            <span><b>03</b> Ready to scale</span>
        </div>
    </div>

    <div class="tech-console" aria-label="Illustration of connected business technology">
        <div class="console-bar"><i></i><i></i><i></i><span>mugdi.systems / architecture</span></div>
        <div class="console-grid">
            <div class="core-node">
                <span>CORE</span>
                <b>M</b>
                <small>Business OS</small>
            </div>
            <div class="signal signal-one"><i></i><span>WEB</span><small>Digital experiences</small></div>
            <div class="signal signal-two"><i></i><span>ERP</span><small>Operations connected</small></div>
            <div class="signal signal-three"><i></i><span>AI</span><small>Intelligence embedded</small></div>
            <div class="signal signal-four"><i></i><span>API</span><small>Systems integrated</small></div>
            <div class="data-stream"><span>010010</span><span>SECURE</span><span>SYNCING</span><span>24/7</span></div>
        </div>
    </div>
</section>

<section id="capabilities" class="tech-section tech-capabilities">
    <div class="tech-section-head">
        <div><p class="eyebrow">WHAT WE ENGINEER</p><h2>One technology partner.<br>Every layer covered.</h2></div>
        <p>We connect customer experience, operations, data and intelligence into systems that are practical for your team and powerful for your business.</p>
    </div>

    <div class="capability-grid">
        <article class="capability-card featured">
            <div class="tech-icon">&lt;/&gt;</div><span class="card-number">01</span>
            <h3>Websites & Digital Platforms</h3>
            <p>Fast, responsive websites and web applications designed to convert visitors, simplify journeys and strengthen your digital presence.</p>
            <ul><li>Corporate and campaign websites</li><li>E-commerce and customer portals</li><li>Booking, quotation and membership platforms</li><li>Performance, SEO and analytics</li></ul>
        </article>
        <article class="capability-card">
            <div class="tech-icon">ERP</div><span class="card-number">02</span>
            <h3>Custom ERP Systems</h3>
            <p>Purpose-built business software that replaces disconnected spreadsheets and repetitive manual work with one reliable source of truth.</p>
            <ul><li>Sales, CRM and quotation workflows</li><li>Inventory, purchasing and suppliers</li><li>Finance and operational reporting</li><li>Roles, approvals and audit trails</li></ul>
        </article>
        <article class="capability-card">
            <div class="tech-icon">AI</div><span class="card-number">03</span>
            <h3>Custom AI Bots & Agents</h3>
            <p>Secure AI assistants trained around your services, processes and knowledge—built to support customers and help teams work faster.</p>
            <ul><li>Customer support and sales assistants</li><li>Internal knowledge copilots</li><li>Document and quotation automation</li><li>Human review and escalation controls</li></ul>
        </article>
        <article class="capability-card">
            <div class="tech-icon">API</div><span class="card-number">04</span>
            <h3>Integrations & Automation</h3>
            <p>Connect the tools you already use and automate the handoffs between them so information moves cleanly across your organisation.</p>
            <ul><li>API and third-party integrations</li><li>Payment, email and messaging services</li><li>Workflow and process automation</li><li>Legacy system modernisation</li></ul>
        </article>
        <article class="capability-card">
            <div class="tech-icon">☁</div><span class="card-number">05</span>
            <h3>Cloud & Infrastructure</h3>
            <p>Dependable environments, deployment pipelines and monitoring configured for stability today and growth tomorrow.</p>
            <ul><li>Cloud and managed hosting</li><li>Domains, SSL and email configuration</li><li>Backups and disaster recovery</li><li>Performance and uptime monitoring</li></ul>
        </article>
        <article class="capability-card">
            <div class="tech-icon">◎</div><span class="card-number">06</span>
            <h3>Data, Dashboards & Security</h3>
            <p>Turn operational data into decisions while protecting access, sensitive information and the continuity of your business.</p>
            <ul><li>Executive dashboards and reporting</li><li>Data migration and clean-up</li><li>Access control and security reviews</li><li>Maintenance and technical support</li></ul>
        </article>
    </div>
</section>

<section class="tech-flow">
    <div class="flow-intro"><p class="eyebrow">HOW WE DELIVER</p><h2>Clear thinking.<br>Clean execution.</h2><p>Every engagement is shaped around business outcomes—not technology for technology’s sake.</p></div>
    <ol class="flow-steps">
        <li><span>01</span><div><h3>Discover</h3><p>We map your objectives, users, workflows, constraints and success measures.</p></div></li>
        <li><span>02</span><div><h3>Architect</h3><p>We define the experience, system design, delivery phases and integration plan.</p></div></li>
        <li><span>03</span><div><h3>Build</h3><p>We develop, test and review in focused iterations with clear visibility.</p></div></li>
        <li><span>04</span><div><h3>Launch & evolve</h3><p>We deploy, train your team, monitor the platform and continue improving it.</p></div></li>
    </ol>
</section>

<section class="tech-stack">
    <p class="eyebrow">CONNECTED BY DESIGN</p>
    <h2>We work across your technology ecosystem.</h2>
    <div class="stack-marquee" aria-label="Technology capabilities">
        <span>Web Applications</span><i></i><span>Mobile-Ready UX</span><i></i><span>Laravel</span><i></i><span>APIs</span><i></i><span>MariaDB</span><i></i><span>Google Gemini</span><i></i><span>Cloud</span><i></i><span>Automation</span><i></i><span>Analytics</span>
    </div>
</section>

<section class="tech-cta">
    <div><p class="eyebrow">LET’S BUILD WHAT’S NEXT</p><h2>Your next system should fit your business—not the other way around.</h2></div>
    <div><p>Tell us what is slowing your team down, what your customers need, or what you want to make possible.</p><a class="button tech-primary" href="{{ route('home', ['service' => 'IT Solutions']) }}#contact">Discuss your project</a></div>
</section>
@endsection
