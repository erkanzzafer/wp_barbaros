<?php /*Template Name: Slider Sayfası */
 $ayar=get_option('my_settings');
 //print_r($ayar['slider_css']);die();

$ayar['slider_css'];
$aranacak = 'degisken';
$degisecek=$ayar['tur'] ;
//print_r($ayar);
//die();
$yeni_css = str_replace($aranacak, $degisecek, $ayar['slider_css']);
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
   <?php //echo $ayar['slider_css'];
   echo $yeni_css;
   ?>
   
  </style>
</head>

<body>
 

   <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    	<?php foreach ($ayar['slider_gorsel'] as $slider){
    		?>
     	 <div class="swiper-slide"><img src="<?php echo $slider['gorsel1']['url']; ?>" /></div>
     	 <?php }  ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    <?php 
    		$string=$ayar['slider_js'];

    echo $string;?>
  </script>
</body>

</html>
