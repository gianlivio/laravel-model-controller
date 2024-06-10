<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <img src="" alt="logo">
    <ul class="d-flex justify-content-center align-items-center gap-3">
        

        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
        
        
        <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
    </ul>
</header>