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
            <h3 class="fs-5 fw-bold text-center ">Data Post</h3>
            <div class="pt-2">
                <a href="./tambah.php" class="btn btn-outline-primary btn-sm">Tambah Data</a>
            </div>
            <div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Deskription</th>
                            <th>Date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        include '../config/conection.php';
                        $result = mysqli_query($conn, "SELECT * FROM post");
                        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

                        for ($i = 0; $i < count($posts); $i++) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $posts[$i]['title']; ?></td>
                                <td><?= $posts[$i]['description']; ?></td>
                                <td><?= $posts[$i]['date']; ?></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endfor; ?>

                        <?php if (count($posts) == 0) : ?>
                            <tr>
                                <td colspan="5">Tidak ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
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