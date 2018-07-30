<?php
require_once 'lib/functions.php';

$search = $_GET["title"];

get_header("Résultat recherche");
?>

<section class="container">
    
    <h1>Moteur de recherche "<?php echo $search; ?>" :</h1>
    
</section>

<?php get_footer(); ?>
