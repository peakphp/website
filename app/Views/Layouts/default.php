<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Peak Framework</title>
    <meta name="description" content="Official website of Peak Framework">
    <meta name="keywords" content="Official website of Peak Framework">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo url('assets/css/site.min.css?v='.config('version')); ?>">
</head>
<body class="<?php echo $this->page_class; ?>">
    <div class="page-wrapper">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="<?php echo url(); ?>">
                    <img class="logo" src="<?php echo url('assets/img/peak.png'); ?>" alt="Logo">
                    Peak Framework
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url('supporters'); ?>">Supporters</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url('getting-started'); ?>">Getting started</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://peak.readthedocs.io">Documentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://api.peakframework.com">API</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="bar"></div>
        </header>
        <main role="main">
            <?php if ($this->page_class === 'pages-index') : ?>
            <section class="jumbotron jumbotron-home text-center">
                <?php $this->renderBlock('Blocks/peak.php'); ?>
                <div class="container">
                    <h1 class="jumbotron-heading">Simplicity, Reusability, Flexibility</h1>
                    <p class="lead text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi consectetur consequuntur, culpa cumque esse, est facilis illum inventore ipsa laboriosam maiores mollitia quidem recusandae rem repellendus repudiandae voluptates!
                    </p>
                    <p>
                        <a href="<?php echo url('download'); ?>" class="btn btn-primary">
                            Download <small>v2.22.0</small>
                        </a>
                        <a class="btn btn-secondary" href="https://github.com/peakphp/framework">View on GitHub</a>
                    </p>
                </div>
            </section>
            <?php endif; ?>
            <section class="main-content container">
                <?php $this->layoutContent(); ?>
            </section>
        </main>
        <footer class="text-muted">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <ul>
                            <li><a href="<?php echo url(''); ?>">Home</a></li>
                            <li><a href="<?php echo url('what-is-peak'); ?>">What is Peak</a></li>
                            <li><a href="<?php echo url('supporters'); ?>">Supporters</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <ul>
                            <li><a href="<?php echo url('download'); ?>">Download</a></li>
                            <li><a href="<?php echo url('getting-started'); ?>">Getting started</a></li>
                            <li><a href="https://peak.readthedocs.io">Documentation</a></li>
                            <li><a href="https://api.peakframework.com">API</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4"></div>
                </div>
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>&copy; 2010-<?php echo date('Y'); ?> Peak Framework </p>
            </div>
        </footer>
    </div>
    <script src="<?php echo url('assets/js/libs.min.js?v='.$this->version); ?>"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>