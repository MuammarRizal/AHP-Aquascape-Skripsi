<?php 
session_start();
    require('functions/functions.php');

    if(!isset($_SESSION["login"])){
        header("Location:login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@500&family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="icon" href="./LOGO/Logo-mmr.png">
  <link rel="stylesheet" href="">

</head>
<body>
  <?php include 'fungsi.php'; ?>
  <?php include 'navbar.php'; ?>
  <div class="container-index" style="margin-left: 200px; padding-top: 10px; color:bisque;">
      <h2>Sistem Pendukung Keputusan Pemilihan tanaman Aquascape Menggunakan Metode Analytic Hierarchy Process</h2>

      <br>

      <h4>Sistem Pendukung Keputusan</h4>
      <h6>
      Sistem Pendukung Keputusan (SPK) adalah sebuah sistem atau pendekatan yang dirancang untuk membantu pengambilan keputusan dalam situasi yang kompleks atau tidak pasti. SPK memanfaatkan teknologi dan metodologi untuk menganalisis data, informasi, dan model untuk memberikan rekomendasi atau solusi yang terukur dan bermanfaat bagi pengambil keputusan.

      <br><br>
      Berikut adalah beberapa komponen dan karakteristik umum dari Sistem Pendukung Keputusan:
      <ul>
        <li>
          <strong>
          Data dan Informasi:
          </strong>
          SPK mengumpulkan, menyimpan, dan mengelola data serta informasi yang relevan dari berbagai sumber untuk digunakan dalam proses pengambilan keputusan.
        </li>
        <li>
          <strong>
          Model dan Metode : 
          </strong>
          SPK menggunakan model matematis, statistik, atau analisis lainnya untuk memproses data dan menghasilkan informasi yang dapat digunakan sebagai dasar untuk pengambilan keputusan.
        </li>

        <li>
          <strong>
          Kriteria dan Alternatif : 
          </strong>
          SPK mengidentifikasi kriteria yang penting dan alternatif yang tersedia, serta membantu dalam evaluasi relatif antara alternatif berdasarkan kriteria yang ditentukan.
        </li>
        
        <li>
          <strong>
          Interaktivitas : 
          </strong>
          SPK memungkinkan interaksi antara pengguna (pengambil keputusan) dengan sistem, seperti pengaturan parameter, pengujian skenario alternatif, dan analisis sensitivitas.
        </li>

        <li>
          <strong>
          Keputusan Berbasis Fakta : 
          </strong>
          SPK membantu mengurangi tingkat ketidakpastian dalam pengambilan keputusan dengan menyediakan analisis yang terstruktur dan berbasis fakta.
        </li>
      </ul>

      Contoh penerapan SPK termasuk dalam berbagai bidang seperti perencanaan produksi, alokasi sumber daya, investasi keuangan, pemasaran, dan pengelolaan rantai pasokan. Dengan menggunakan SPK, pengambil keputusan dapat membuat keputusan yang lebih informasional, berbasis data, dan sesuai dengan tujuan organisasi atau individu.



      <br>
      <br>

      <h4>Analytic Hierarchy Process</h4>

      AHP adalah singkatan dari Analytical Hierarchy Process (Proses Hirarki Analitis). Ini adalah metode yang dikembangkan oleh Thomas L. Saaty pada tahun 1970-an sebagai alat bantu dalam pengambilan keputusan yang kompleks, terutama ketika ada banyak kriteria dan alternatif yang harus dinilai.

      Konsep AHP:
      <ol>
        <li>
          <strong>Hierarki : </strong>
          AHP menggunakan pendekatan hierarkis untuk memecahkan masalah besar menjadi struktur yang lebih sederhana. Hierarki ini terdiri dari level kriteria, sub-kriteria, dan alternatif.
        </li>

        <li>
          <strong>Perbandingan Berpasangan : </strong>
          Proses inti dari AHP adalah perbandingan berpasangan antara elemen-elemen dalam hierarki. Misalnya, pengambil keputusan membandingkan pentingnya satu kriteria terhadap yang lain, atau membandingkan satu alternatif terhadap alternatif lainnya dalam hal kriteria tertentu.
        </li>

        <li>
          <strong>Skala Penilaian : </strong>
          Untuk mengukur perbandingan berpasangan, Saaty memperkenalkan skala penilaian yang konsisten dari 1 hingga 9, dengan arti sebagai berikut:

          <ul>
            <li>
              <strong>1 : </strong>
              Kedua elemen sama pentingnya
          </li>

          <li>
            <strong>3 : </strong>
            Salah satu elemen sedikit lebih penting daripada yang lain
          </li>

          <li>
            <strong>5 : </strong>
            Salah satu elemen jelas lebih penting daripada yang lain
          </li>

          <li>
            <strong>7 : </strong>
            Salah satu elemen sangat lebih penting daripada yang lain
          </li>

          <li>
            <strong>9 : </strong>
            Salah satu elemen mutlak lebih penting daripada yang lain
          </li>

          <li>
            <strong>2, 4, 6, 8 : </strong>
            Nilai-nilai antara yang sesuai dengan tingkat perbedaan antara dua pernyataan
          </li>
          </ul>
        </li>

        <li>
          <strong>Konsistensi : </strong>
          AHP juga menilai konsistensi dari perbandingan berpasangan yang diberikan oleh pengambil keputusan. Hal ini dilakukan dengan membandingkan nilai-nilai pada matriks perbandingan berpasangan dan menghitung konsistensi menggunakan rasio konsistensi (CR). Semakin konsisten perbandingan berpasangan, semakin dapat diandalkan hasil dari AHP.
        </li>

        <br>

        AHP telah diterapkan dalam berbagai konteks seperti evaluasi investasi, pemilihan vendor, perencanaan strategis, penilaian kinerja, dan pengambilan keputusan multi-kriteria lainnya di bidang bisnis, teknik, dan ilmu sosial. Metode ini memberikan kerangka kerja yang sistematis untuk mengelola kompleksitas dalam pengambilan keputusan, dengan mempertimbangkan preferensi dan prioritas yang dimiliki oleh pengambil keputusan.

      </ol>
      </h6>
  </div>
</body>
</html>