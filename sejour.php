<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getSejour($id);
$list_sejours = getAllSejoursByProject($id);

$utilisateur = current_user();

get_header($sejour["titre"]);
?>

<section class="container">
    <h1><?php echo $sejour["titre"]; ?></h1>

    <aside class="list-users">
        <?php if (!empty($utilisateur)) : ?>
            <form action="insert_sejour.php" method="post">
                Je donne
                <input type="number" name="montant">€
                <input type="hidden" name="sejour_id" value="<?php echo $id; ?>">
                <input type="submit">
            </form>
        <?php endif; ?>
        <?php foreach ($list_sejours as $sejour) : ?>
            <article>
                <img src="<?php echo get_avatar($utilisateur["photo"]); ?>" alt="">
                <div>
                    <a href="user.php?id=<?php echo $utilisateur["utilisateur_id"]; ?>"><?php echo $utilsateur["nom"] . " " . $utilisateur["prenom"]; ?></a>
                    <em><?php echo $utilisateur["montant"]; ?> €</em>
                </div>
            </article>
        <?php endforeach; ?>
    </aside>

</section>

<?php get_footer(); ?>

