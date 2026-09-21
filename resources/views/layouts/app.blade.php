<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mugdi Investments LLC')</title>
    <meta name="description" content="Corporate gifts, event management and full-stack IT solutions in Oman.">
    <link rel="icon" href="{{ asset('images/mugdi-logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-credit.css') }}">
    <script defer src="{{ asset('js/site.js') }}"></script>
</head>
<body>
    <header>
        <a class="brand" href="{{ route('home') }}"><img src="{{ asset('images/mugdi-logo.png') }}" alt="Mugdi Investments"><b>MUGDI<small>INVESTMENTS LLC</small></b></a>
        <button class="menu">Menu</button>
        <nav><a href="{{ route('home') }}#services">Services</a><a href="{{ route('products.index') }}">Gift catalogue</a><a href="{{ route('home') }}#ai">AI concierge</a><a href="{{ route('home') }}#contact">Contact</a></nav>
        <a class="pill" href="mailto:sales2@mugdiinvestments.com">Talk to us</a>
    </header>
    <main>@yield('content')</main>
    <footer>
        <div><img src="{{ asset('images/mugdi-logo.png') }}" alt=""><b>Mugdi Investments LLC</b><p>Ideas, experiences and digital products—delivered by one accountable team.</p></div>
        <div><b>Services</b><a href="{{ route('products.index') }}">Corporate gifts</a><a href="{{ route('home') }}#events">Event management</a><a href="{{ route('home') }}#it">IT solutions</a></div>
        <div><b>Contact</b><a href="mailto:sales2@mugdiinvestments.com">sales2@mugdiinvestments.com</a><span>Muscat, Sultanate of Oman</span></div>
        <div class="footer-meta">
            <p>© {{ date('Y') }} Mugdi Investments LLC.</p>
            <p>Developed by <a href="https://www.irfandossani.online" target="_blank" rel="noopener noreferrer">Irfan Dossani</a></p>
        </div>
    </footer>
</body>
</html>
