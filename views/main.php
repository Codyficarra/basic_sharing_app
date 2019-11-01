<html>
<head>
    <title>Shareboard</title>
    <base href=" ">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>/assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Shareboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_PATH; ?>home">Home<span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_PATH; ?>shares">Shares</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto nav-right">
                <?php if(isset($_SESSION['is_logged_in'])) : ?>

                <li>
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/logout">Logout</a>
                </li>


                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/login">Login<span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_PATH; ?>users/register">Register</a>
                </li>

                <?php endif; ?>

             </ul>

        </div>
     </nav>


    <main role="main" class="container">

        <div class="row">

            <?php messages::display();?>

            <?php require_once($view); ?>
        </div>

    </main><!-- /.container -->

</body>
</html>