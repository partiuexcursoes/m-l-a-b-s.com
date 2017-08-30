<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-l-a-b-s.com/";
$title = "mLabs";

$var = array(
        "1" => array(
                  "titulo" => "Carnaval de Olinda 2018",
                  "image" => "https://uploaddeimagens.com.br/imagens/21122709_1628782477196668_5114418790019039850_o-jpg"
                  ),
        "2" => array(
                  "titulo" => "Carnatal",
                  "image" => "https://uploaddeimagens.com.br/imagens/21125313_1628782370530012_7371602705203552637_o-jpg"
                  ),
        "3" => array(
                  "titulo" => "Paula Fernandes",
                  "image" => "https://uploaddeimagens.com.br/imagens/21125504_1628781997196716_884135921281329445_o-jpg"
                  ), 
        "4" => array(
                  "titulo" => "Paula Fernandes",
                  "image" => "https://uploaddeimagens.com.br/imagens/21125504_1628781997196716_884135921281329445_o-jpg"
                  ),
         "5" => array(
                  "titulo" => "Xuchá",
                  "image" => "https://uploaddeimagens.com.br/imagens/21125564_1628782203863362_4896084152064547421_o-jpg"
                  ),
         "6" => array(
                  "titulo" => "Parada da Diversidade",
                  "image" => "https://uploaddeimagens.com.br/imagens/21125774_1628782430530006_915978161028183977_o-jpg"
                  ),
         "7" => array(
                  "titulo" => "Dia das Crianças no Sundown Park",
                  "image" => "https://uploaddeimagens.com.br/imagens/21125799_1628782363863346_234317177455519468_o-jpg"
                  ),
         "8" => array(
                  "titulo" => "O Rappa + Nação Zumbi",
                  "image" => "https://uploaddeimagens.com.br/imagens/21167068_1628782003863382_8516632079683183244_o-jpg"
                  ),
         "9" => array(
                  "titulo" => "Paul McCartney",
                  "image" => "https://uploaddeimagens.com.br/imagens/21167612_1628782100530039_8460755112574315232_o-jpg"
                  ),
         "10" => array(
                  "titulo" => "FDS em Salvador",
                  "image" => "https://uploaddeimagens.com.br/imagens/21167744_1628782350530014_2592338057676495666_o-jpg"
                  ),
         "11" => array(
                  "titulo" => "Novos Baianos",
                  "image" => "https://uploaddeimagens.com.br/imagens/21199447_1628782130530036_5202492517324655051_o-jpg"
                  ),
         "12" => array(
                  "titulo" => "Carnaval na Chapada Diamantina",
                  "image" => "https://uploaddeimagens.com.br/imagens/21199795_1628782447196671_7443991583784705601_o-jpg"
                  ),
         "13" => array(
                  "titulo" => "Anavitória",
                  "image" => "https://uploaddeimagens.com.br/imagens/21200502_1628782083863374_7159629918623503326_o-jpg"
                  ),
         "14" => array(
                  "titulo" => "King Festival",
                  "image" => "https://uploaddeimagens.com.br/imagens/21246420_1628782260530023_933325611744624884_o-jpg"
                  ),
         "16" => array(
                  "titulo" => "Massacration",
                  "image" => "https://uploaddeimagens.com.br/imagens/21246423_1628781987196717_4643389588604694491_o-jpg"
                  ),
         "17" => array(
                  "titulo" => "Humberto Gessinger",
                  "image" => "https://uploaddeimagens.com.br/imagens/21248240_1628782213863361_5600314624552166169_o-jpg"
                  ),
        
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
