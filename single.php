<?php include("header.php");?>
<?php
 $csv = array_map("str_getcsv", file('datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<header class="intro-header" style="background-image: url('<?php echo $csv[$la_url]["images"];?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1 class="article"><?php echo($csv[$la_url]["titulo"])?></h1>
                    <hr class="small">
                    <span class="subheading">Procesos análogos de construcción de objetos de memoria </span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <hr class="small">
                <h7><?php echo $csv[$la_url]['texto'];?> </h7>
                <h5>Palabras clave: <small><?php echo $csv[$la_url]['tags'];?> </h5>
                  <h5>Autor: <small><?php echo $csv[$la_url]['author'];?> </h5>

            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                  <p><?php echo($csv[$la_url]["resumen"])?></p>
                  <h6>Link: <a href="<?php echo $csv[$la_url]['url'];?>"><?php echo $csv[$la_url]['url'];?></a></h6>

              </div>
            </div>
        </div>
    </article>
    <hr>

<?php include("footer.php");?>
