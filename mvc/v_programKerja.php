<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    .logout-button {
        background-color: #ccc;
        float: right;
    }
</style>

<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Daftar Program Kerja BEM</h2>
        <a href="logout.php" class="btn btn-secondary logout-button">Logout</a>
        <?php
        if ($jabatan == 'Kepala Departemen' || $jabatan == 'Staf') {
            echo '<a href="v_add.php" class="btn btn-primary my-3">Tambah Proker</a>';
        }

        echo '<table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Program Kerja</th>
                        <th>Surat Keterangan</th>';

        if ($jabatan == 'Kepala Departemen' || $jabatan == 'Staf') {
            echo '<th>Edit</th>
                    <th>Delete</th>';
        }

        echo '</tr></thead><tbody>';

        if (!empty($proker)) {
            foreach ($proker as $row) {
                echo '<tr>
                        <td class="align-middle">' . $row['nomorProgram'] . '</td>
                        <td class="align-middle">' . $row['namaProgram'] . '</td>
                        <td class="align-middle">' . $row['suratKeterangan'] . '</td>';

                if ($jabatan == 'Kepala Departemen' || $jabatan == 'Staf') {
                    echo '<td class="align-middle"><a href="v_edit.php?edit=' . $row['nomorProgram'] . '" class="btn btn-warning">Edit</a></td>
                    <td class="align-middle"><a href="index.php?delete=' . $row['nomorProgram'] . '" class="btn btn-danger">Delete</a></td>';
                }

                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="5">Tidak ada data program kerja.</td></tr>';
        }

        echo '</tbody>
            </table>';
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>