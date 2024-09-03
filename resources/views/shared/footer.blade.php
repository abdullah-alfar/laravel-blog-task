<footer class="navbar py-5">
    <div class="container justify-content-center">
        <ul class="navbar-nav text-center vstack gap-3">
            <li class="nav-item text-gray-500 d-flex gap-3 justify-content-center">
                <a href="https://github.com/abdullah-alfar/laravel-blog" target="_blank" class="btn text-secondary fs-3">
                    <x-icon name="github" prefix="fa-brands" />
                </a>
            </li>

            <li class="nav-item">
                <small>
                    Made with <x-icon name="heart" class="text-danger" /> by <a href="#" target="_blank" class="text-secondary">Abdullah Alfar</a>
                </small>
            </li>

            <li class="nav-item">
                @include('shared/newsletter-form')
            </li>
        </ul>
    </div>
</footer>
