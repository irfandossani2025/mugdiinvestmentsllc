@extends('layouts.app')

@section('title', 'Custom AI Bots & Voice Agents | Mugdi Investments LLC')

@section('content')
<section class="agent-hero">
    <div class="agent-hero-grid" aria-hidden="true"></div>
    <div class="agent-hero-copy">
        <a class="agent-back" href="{{ route('it-solutions') }}">← Full-Stack IT Solutions</a>
        <p class="eyebrow">CUSTOM AI SYSTEMS · VOICE · CHAT · AUTOMATION</p>
        <h1>AI agents that<br><em>do the work.</em></h1>
        <p class="agent-lead">Deploy intelligent agents that speak with leads, qualify opportunities, book meetings, support customers and update your systems—while your team stays in control.</p>
        <div class="actions">
            <a class="button agent-primary" href="#voice-demo">Watch the calling demo</a>
            <a class="button agent-ghost" href="{{ route('home', ['service' => 'IT Solutions']) }}#contact">Design my AI agent</a>
        </div>
        <div class="agent-trust">
            <span><i></i>Built around your business</span>
            <span><i></i>Human handoff included</span>
            <span><i></i>Secure system integrations</span>
        </div>
    </div>
    <div class="agent-cockpit" aria-label="AI voice agent campaign dashboard">
        <div class="cockpit-topbar"><span class="cockpit-brand"><b>M</b> MUGDI / AGENT OS</span><span class="cockpit-live"><i></i> LIVE CAMPAIGN</span></div>
        <div class="cockpit-metrics">
            <div><small>CALLS ACTIVE</small><strong>24</strong><span>+8 this hour</span></div>
            <div><small>QUALIFIED</small><strong>68%</strong><span>intent detected</span></div>
            <div><small>MEETINGS</small><strong>12</strong><span>booked today</span></div>
        </div>
        <div class="voice-session">
            <div class="voice-orbit"><span>AI</span><i></i><i></i><i></i></div>
            <div class="voice-state"><small>CONNECTED · 02:18</small><b>AI is speaking</b><div class="voice-wave" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div></div>
        </div>
        <div class="live-transcript">
            <div><span>AI</span><p>Would Tuesday morning or Wednesday afternoon work better for a short consultation?</p></div>
            <div class="lead-line"><span>LEAD</span><p>Wednesday afternoon works for me.</p></div>
        </div>
        <div class="agent-event-stream"><span><i></i> Intent: high</span><span><i></i> CRM updated</span><span><i></i> Calendar connected</span></div>
    </div>
</section>

<section id="voice-demo" class="agent-demo">
    <div class="agent-section-heading">
        <div><p class="eyebrow">SEE THE SYSTEM IN ACTION</p><h2>From first hello<br>to qualified lead.</h2></div>
        <p>Watch an illustrative external demonstration of an AI voice agent placing outbound calls, holding a natural conversation and capturing lead information for the sales pipeline.</p>
    </div>
    <div class="demo-stage">
        <div class="demo-video-shell">
            <div class="demo-window-bar"><span><i></i><i></i><i></i></span><b>VOICE AGENT / OUTBOUND DEMO</b><small>SECURE CONNECTION</small></div>
            <div class="demo-video"><iframe src="https://www.youtube-nocookie.com/embed/2dcusWEZbgI?rel=0&amp;modestbranding=1" title="Demonstration of an AI voice agent making outbound calls and generating leads" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            <p class="demo-disclosure">Illustrative third-party demonstration. Your Mugdi solution is custom-designed around your approved scripts, systems, audience and local calling requirements. <a href="https://www.youtube.com/watch?v=2dcusWEZbgI" target="_blank" rel="noopener noreferrer">Watch directly on YouTube ↗</a></p>
        </div>
        <aside class="demo-intelligence">
            <div class="intelligence-head"><span>LIVE INTELLIGENCE</span><i></i></div>
            <div class="intelligence-score"><div><span>87</span><small>/100</small></div><p>Lead qualification score<strong>High purchase intent</strong></p></div>
            <ul>
                <li><span>01</span><div><b>Conversation understood</b><small>Speech converted into context in real time.</small></div></li>
                <li><span>02</span><div><b>Requirements captured</b><small>Need, timing, budget and objections structured.</small></div></li>
                <li><span>03</span><div><b>Next action completed</b><small>Meeting booked and CRM record updated.</small></div></li>
            </ul>
            <div class="intelligence-complete"><i>✓</i><span>Qualified lead generated<small>Sales team notified instantly</small></span></div>
        </aside>
    </div>
</section>

<section class="agent-capabilities">
    <div class="agent-section-heading light">
        <div><p class="eyebrow">ONE INTELLIGENCE LAYER</p><h2>Built to converse.<br>Connected to act.</h2></div>
        <p>Your agent is more than a chatbot. It can listen, reason within approved boundaries, take action across your tools and escalate to a person when judgment is needed.</p>
    </div>
    <div class="agent-capability-grid">
        <article><span>VOICE_01</span><div class="agent-symbol">◉</div><h3>AI Voice Agents</h3><p>Natural inbound and outbound conversations for lead follow-up, qualification, reminders and customer care.</p><ul><li>Outbound sales campaigns</li><li>Lead qualification</li><li>Appointment booking</li><li>Multilingual conversations</li></ul></article>
        <article><span>CHAT_02</span><div class="agent-symbol">⌁</div><h3>Sales & Support Bots</h3><p>Always-available website and messaging assistants grounded in your approved knowledge and brand voice.</p><ul><li>Website concierge</li><li>WhatsApp-style workflows</li><li>Product guidance</li><li>Human escalation</li></ul></article>
        <article><span>OPS_03</span><div class="agent-symbol">⌘</div><h3>Internal AI Copilots</h3><p>Private assistants that help employees find answers, prepare documents and move work through your organisation.</p><ul><li>Knowledge search</li><li>Quotation drafting</li><li>Document intelligence</li><li>Workflow assistance</li></ul></article>
        <article><span>AUTO_04</span><div class="agent-symbol">↯</div><h3>Autonomous Workflows</h3><p>Event-driven agents that connect data and complete repetitive multi-step processes with approval controls.</p><ul><li>CRM and ERP updates</li><li>Email follow-ups</li><li>Lead routing</li><li>Reports and alerts</li></ul></article>
    </div>
</section>

<section class="agent-pipeline">
    <div class="pipeline-copy"><p class="eyebrow">THE AI LEAD ENGINE</p><h2>Every conversation becomes structured action.</h2><p>The agent follows your playbook, captures the signals your sales team needs and keeps every system synchronized.</p><a class="agent-text-link" href="{{ route('home', ['service' => 'IT Solutions']) }}#contact">Build a lead engine for my business <span>→</span></a></div>
    <ol class="pipeline-rail">
        <li><span>01</span><i></i><div><small>TRIGGER</small><h3>Lead enters</h3><p>From a website form, campaign, CRM list or inbound call.</p></div></li>
        <li><span>02</span><i></i><div><small>ENGAGE</small><h3>Agent connects</h3><p>Voice or chat begins with the right context and approved script.</p></div></li>
        <li><span>03</span><i></i><div><small>UNDERSTAND</small><h3>Intent is qualified</h3><p>Needs, urgency, budget, sentiment and objections are captured.</p></div></li>
        <li><span>04</span><i></i><div><small>ACT</small><h3>Next step happens</h3><p>Book, route, follow up, update your CRM or transfer to a person.</p></div></li>
    </ol>
</section>

<section class="agent-controls">
    <div class="control-console">
        <div class="control-header"><span>MUGDI / CONTROL LAYER</span><small>GUARDRAILS ACTIVE</small></div>
        <div class="control-body">
            <div class="control-shield"><span>✓</span><i></i><i></i><i></i></div>
            <div class="control-log"><p><span>POLICY</span> Approved knowledge only <b>ACTIVE</b></p><p><span>PRIVACY</span> Role-based data access <b>ACTIVE</b></p><p><span>HANDOFF</span> Human escalation routes <b>READY</b></p><p><span>REVIEW</span> Transcripts and outcomes <b>LOGGED</b></p></div>
        </div>
    </div>
    <div class="control-copy"><p class="eyebrow">CONTROL IS NOT OPTIONAL</p><h2>Powerful AI.<br>Clear boundaries.</h2><p>We design each agent with transparent disclosure, approved knowledge, role-based access, reviewable activity and human escalation. Outbound calling is configured around the consent, privacy and telemarketing rules that apply to your audience and location.</p><ul><li>Human approval where risk requires it</li><li>Auditable transcripts and outcomes</li><li>Clear opt-out and do-not-contact handling</li><li>Secure access to connected business systems</li></ul></div>
</section>

<section class="agent-final-cta">
    <p class="eyebrow">YOUR NEXT TEAM MEMBER IS DIGITAL</p><h2>What should your<br>AI agent accomplish?</h2><p>Bring us the process, the bottleneck or the opportunity. We will design the intelligence, conversation and integrations around it.</p><a class="button agent-primary" href="{{ route('home', ['service' => 'IT Solutions']) }}#contact">Start an AI agent project</a>
</section>
@endsection
