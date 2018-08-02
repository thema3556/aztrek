<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$projects = getAllProjects();

get_header("Liste des sejours");
?>

<section class="container">
    <div class="actions">
        <?php foreach ($sejour as $sejour) : ?>
            <?php include 'include/sejour_inc.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>

