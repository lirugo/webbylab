<nav class="navbar navbar-expand-lg navbar-dark bg-dark m-b-50">
    <a class="navbar-brand" href="#">Films</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=home&action=index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=film&action=create">Add film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=film&action=index">Show films</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/index.php?controller=film&action=import">Import films</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/app/index.php?controller=film&action=search" method="POST">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>
        </form>
    </div>
</nav>