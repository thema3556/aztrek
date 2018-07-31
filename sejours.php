<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$projects = getAllProjects();

get_header("Liste des projets");
?>

<section class="container">
    <div class="actions">
        <?php foreach ($projects as $project) : ?>
            <?php include 'include/project_inc.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>

