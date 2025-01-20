<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <h2>Login</h2>
        Username <input type="text" name="username" placeholder="username" required><br><br>
        Password <input type="password" name="password" placeholder="password" required><br><br>
        Jabatan <input type="text" name="jabatan" placeholder="jabatan" required><br><br>
        <input type="submit" value="Login" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $jabatan = $_POST['jabatan'];

        // Establish a connection
        $connect = mysqli_connect('localhost', 'root', '', 'pengurusbem');

        // Check if connection was successful
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Run the query
        $login = mysqli_query($connect, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password' AND jabatan = '$jabatan'");

        // Check if query was successful
        if (!$login) {
            echo "Query error: " . mysqli_error($connect);
        } else {
            $row = mysqli_fetch_array($login);

            // Check if row is returned
            if ($row) {
                if (
                    $row['username'] == $username &&
                    $row['password'] == $password &&
                    $row['jabatan'] == $jabatan
                ) {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['jabatan'] = $row['jabatan'];
                    header("location: index.php");
                } else {
                    echo "Username, password, atau jabatan anda belum terdaftar";
                }
            } else {
                echo "Username, password, atau jabatan anda belum terdaftar";
            }
        }

        // Close the connection
        mysqli_close($connect);
    }
    ?>
</body>

</html>
