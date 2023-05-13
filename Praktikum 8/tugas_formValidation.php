<!DOCTYPE html>
<html>

<head>
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($pesan)) : ?>
            <div class="alert alert-danger"><?php echo $pesan; ?></div>
        <?php endif; ?>
        <form method="post" action="tugas_process_formValidation.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="tugas_pesertaTerdaftar.php" class="btn btn-secondary">Tampilkan Peserta Terdaftar</a>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>