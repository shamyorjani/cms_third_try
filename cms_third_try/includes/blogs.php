<div class="col-md-8">
    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>

    <?php 
    
        $query = "SELECT * FROM posts";
        $post_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($post_query)) {
            $post_title = $row['post_title'];
            $post_date = $row['post_date'];
            $post_author = $row['post_author'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
        }
    
    ?>

    <!-- First Blog Post -->
    <h2>
        <a href="#">Blog Post Title</a>
    </h2>
    <p class="lead">
        by <a href="index.php">Start Bootstrap</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

    <hr>

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>
</div>