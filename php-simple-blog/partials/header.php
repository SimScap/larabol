<?php
    include_once __DIR__ . '/../server/data.php';
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Simple Blog
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" v-for="navLink in navLinks">
                        <a class="nav-link" :class="navLink.active ? 'active' : ''" aria-current="page" href="navLink.link">
                            {{ navLink.text }}
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>