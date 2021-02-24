    <header id="header">
        <div class="container navbar">
            <div class="logo">
                <img src="" alt="MyLogo">
            </div>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('videogames')}}">Videogames</a></li>
                <li><a href="{{ route('contacts') }}">Contacts</a></li>
                <li><a href="{{ route('posts.index') }}">Admin</a></li>  
            </ul>
        </div>
    </header>
    <main id="main">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer id="footer"></footer>

</body>
</html>