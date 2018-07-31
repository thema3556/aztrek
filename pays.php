<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
$list_sejours = getAllSejoursByPays($id);

get_header($pays["nom"]);
?>
<main>

    <section class="container">
        <h1><?php echo $pays["nom"]; ?></h1>
        
        <section class="grid">
            <?php foreach ($list_sejours as $sejour) : ?>
                <article>
                    <img src="uploads/<?php echo $sejour["image"]; ?>" alt="photo-1">
                    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
                        <h2><?php echo $sejour["titre"]; ?></h2>
                    </a>
                </article>
            <?php endforeach; ?>
        </section>
        
    </section>

</main>

<?php get_footer(); ?>