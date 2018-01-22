<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Page not found</title>
    <meta name="description" content="Official website of Peak Framework">
    <meta name="keywords" content="Official website of Peak Framework">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo url('assets/css/site.min.css?v='.config('version')); ?>">
</head>
<body class="<?php echo $this->page_class; ?>">
    <div class="page-wrapper">
        <?php $this->layoutContent(); ?>
    </div>
</body>
</html>