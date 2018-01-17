<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Peak Framework</title>
    <meta name="description" content="Official website of Peak Framework">
    <meta name="keywords" content="Official website of Peak Framework">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo url('assets/css/bootstrap.min.css?v='.config('version')); ?>">
    <link rel="stylesheet" href="<?php echo url('assets/css/site.min.css?v='.config('version')); ?>">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Peak Framework</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Getting started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Documentation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">API</a>
                    </li>
                </ul>
<!--                <form class="form-inline mt-2 mt-md-0">-->
<!--                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
<!--                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>-->
<!--                </form>-->
            </div>
        </nav>
    </header>
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Simplicity, Reusability, Flexibility</h1>
                <p class="lead text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi consectetur consequuntur, culpa cumque esse, est facilis illum inventore ipsa laboriosam maiores mollitia quidem recusandae rem repellendus repudiandae voluptates!
                </p>
                <p>
                    <a href="#" class="btn btn-primary">
                        Download <small>v2.22.0</small>
                    </a>
                    <a class="btn btn-secondary" href="https://github.com/peakphp/framework">View on GitHub</a>
                </p>
            </div>
        </section>
        <?php $this->layoutContent(); ?>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>&copy; 2010-<?php echo date('Y'); ?> Peak Framework </p>
        </div>
    </footer>
</body>
</html>