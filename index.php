<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntities("pays");

get_header("Accueil");
?>
<main>

    <section class="section-destinations">  
        <article class="titre-destinations">
            <h2>IDÉES DE DESTINATIONS</h2>
        </article>

        <section class="grid">
            <?php foreach ($list_pays as $pays) : ?>
                <article>
                    <img src="uploads/<?php echo $pays["photo"]; ?>" alt="photo-1">
                    <a href="pays.php?id=<?php echo $pays["id"]; ?>">
                        <h2><?php echo $pays["nom"]; ?></h2>
                    </a>
                </article>
            <?php endforeach; ?>
        </section>

    </section>
</main>

<?php get_footer(); ?>