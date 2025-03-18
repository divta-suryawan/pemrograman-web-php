<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <?php
    include './layouts/navbar.php';
    ?>

    <!-- body -->
    <div class="py-5 my-3">
        <div class="container">
            <div class="row py-5">
                <?php
                include '../config/conection.php';
                $result = mysqli_query($conn, "SELECT * FROM post");
                $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                for ($i = 0; $i < count($posts); $i++) :
                ?>
                    <div class="col-md-6 py-2">
                        <div class="card">
                            <h5 class="card-header"><?php echo $posts[$i]['title']; ?>
                            </h5>
                            <div class="card-body">
                                <p class="card-text"><?= $posts[$i]['description']; ?></p>
                                <a href="#" class="text-muted"><?= date('d F Y', strtotime($posts[$i]['date'])); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <?php if (count($posts) == 0) : ?>
                    <div class="col-12 text-center">
                        <p class="text-muted">Tidak ada data tersedia.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php
    include './layouts/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>