<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['jabatan'])) {
  
    $jabatan = $_SESSION['jabatan'];

    include_once("c_programKerja.php");
    $controller = new c_programKerja();

    if ($jabatan == 'Kepala Departemen' || $jabatan == 'Staf') {
        if (isset($_GET['add'])) {
            $nomorProgram = $_POST['nomorProgram'];
            $namaProgram = $_POST['namaProgram'];
            $suratKeterangan = $_POST['suratKeterangan'];
            $controller->insert($nomorProgram, $namaProgram, $suratKeterangan);

        } else if (isset($_GET['edit'])) {
            $num = $_GET['edit'];
            $nama = $_POST['namaProgram'];
            $surat = $_POST['suratKeterangan'];
            $controller->updateAction($num, $nama, $surat);

        } else if (isset($_GET['delete'])) {
            $nomor = $_GET['delete'];
            $controller->deleteAction($nomor);

        } else {
            $controller->invoke();
        }
    } else {
        $controller->invoke();
    }
} else {
    header('location: login.php');
}
?>