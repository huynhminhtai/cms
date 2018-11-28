<?php include "include/header.php" ?>
<?php include "include/db.php" ?>

<body>

    <!-- Navigation -->
    <?php include "include/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <?php 
                    $query = "select * from posts";
                    $allPost = mysqli_query($connection, $query);
                    while ($post = mysqli_fetch_assoc($allPost)) {

                        $title = $post['title'];
                        $author = $post['author'];
                        $createDate = $post['createDate'];
                        $image = $post['image'];
                        $content = $post['content'];
                        $tag = $post['tag'];
                        

                   
                 ?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo   $title?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $createDate ?></p>
                <hr>
                <img class="img-responsive" src="<?php echo $image ?>" alt="">
                <hr>
                <p><?php echo $content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>


                

            <?php   };?>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "include/sidebar.php" ?>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include "include/footer.php" ?>