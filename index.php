<?php include('header.php');?>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/gris.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Reliquia como construcción de memoria</h1>
                        <hr class="small">
                        <span class="subheading">Hierofanía y mnemogénesis</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

 <?php
 $csv = array_map("str_getcsv", file('datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
               ?>
               <?php for($a = 0; $a < $total = count($csv); $a++){?>
               <!--esto es lo que repetiré-->
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <div class="post-preview">
                     <a href="single.php?url=<?php print($a)?>">
                         <h2 class="post-title"><?php echo($csv[$a]["name"])?></h2>
                         <img src="<?php echo $csv[$a]["images"];?>" class="img-responsive">
                     </a>
                         <h5>Palabras clave: <small><?php echo $csv[$a]['tags'];?> </h5>
                        <h4 class="post-subtitle"><?php echo($csv[$a]['resumen'])?></h4>


                 </div>
               </div>
             </div>
           </div>
 <?php };?>
<?php include('footer.php');?>
