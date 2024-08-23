<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AHP | Muammar Rizal </title>
  <link rel="icon" href="./LOGO/Logo-mmr.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@500&family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css" type="text/css">
  <link rel="stylesheet" href="./css/style2.css">
  <link rel="stylesheet" href="./css/style3.css">
  <link rel="stylesheet" href="./css/custom/style.css">
  <style>
    .icon__nav{
      font-size: 1.5rem;
      transition: .5s;
      border-radius: 50px;
      background-color: #0563bb;
      height: 40px;
      width: 40px;
      display: flex;
      align-items: center;
      color:antiquewhite;
      justify-content: center;
    }

    .link__nav{
      /* display: none; */
      font-size: .9rem;
    }

    .icon__nav:hover + .link__nav{
      display: inline;
      color: white;
    }

    .link-href{
      height: 40px; 
      transition:ease-in .5s; 
      display: flex;  
      margin-top: 15px;
      align-items: center;  
    }

    .link-href:hover{
      background-color: #0563bb;
      border-radius: 50px; 
      color: aliceblue;
    }

    .link-href:hover .link__nav{
      display: inline;
    }

    
  </style>
</head>
<body>
  <div class="nav-container">
  <nav style="position: fixed; width: max-content;flex-direction: column; left: 0; height: 100vh; top: 0; justify-content: start; padding-top: 50px; z-index: 999;" class="navbar-comp">
    <!-- <h5 class="logo">Analytic</h5> -->
    <script>
      function drpdn(){
        document.getElementById("custom").classList.toggle('custom-dd-show');
        document.getElementById("custom").style.marginLeft = "157px"
        document.getElementById("custom").style.marginTop = "220px"
        document.getElementById("custom").style.backgroundColor = "blue"
        document.getElementById("custom").style.width = "max-content"
        document.getElementById("custom").style.borderRadius = "0 30px 30px 30px"
        document.getElementById("custom").style.transition = 1
      }
    </script>
    <ul class="menu" style="flex-direction:column; height: 300px; justify-content: space-between;">
      <li><a href="index.php" class="link-href"><i class="bi bi-house icon__nav"></i><span class="link__nav">Home</span></a></li>
      <li><a href="kriteria.php" class="link-href"><i class="bi bi-card-checklist icon__nav"></i><span class="link__nav">Kriteria</span></a></li>
      <li><a href="alternatif.php" class="link-href"><i class="bi bi-shuffle icon__nav"></i><span class="link__nav">Alternatif</span></a></li>
      <li><a href="bobot_kriteria.php" class="link-href"><i class="bi bi-ui-checks icon__nav"></i><span class="link__nav">Nilai Kriteria</span></a></li>
      <li onClick="drpdn()" style="margin-right: 10px;" class="link-href"><i class="bi bi-list-check icon__nav"></i><span class="link__nav">Nilai Alternatif</span>
        <ul class="custom-dd" id="custom">
          <?php
						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<a class='item' href='bobot.php?c=".($i+1)."'><li>".getKriteriaNama($i)."<hr></li></a>";
							}
						}
					?>
        </ul>
      </li>
      <li><a href="hasil.php" class="link-href"><i class="bi bi-graph-up-arrow icon__nav"></i><span class="link__nav">Ranking</span></a></li>
      <li><a href="logout.php" class="link-href" onclick="return confirm('Anda yakin ingin logout ?');"><i class="bi bi-box-arrow-right icon__nav"></i><span class="link__nav">Logout</span></a></li>
    </ul>
  </nav>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>