<?php
session_start();

$page_title = "BLOG";
include './tpl/header.php';
?>

<main class="container flex-fill">

    <!-- PAGE HEADER -->
    <section id="main-content-top">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h1 class="display-3 text-primary">
                    <?= LOGO; ?> Blog
                </h1>
                <p>

                    <a href="./add_post.php" class="btn btn-primary mt-2">
                        Add New
                    </a>

                    To add a post
                    <a href="./signup.php">create a user</a>
                    or
                    <a href="./signin.php">sign in</a>

                </p>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <!-- <section id="main-content" class="continer mt-5">
            <div class="row mb-2">


            </div>
        </section> -->


</main>

<?php include './tpl/footer.php'; ?>