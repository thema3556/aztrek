<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getProject($id);
$list_sejours = getAllReservationBySejour($id);

$utilisateur = current_user();

get_header($sejour["titre"]);
?>

<section class="container">
    <h1><?php echo $sejour["titre"]; ?></h1>

    <aside class="list-users">
        <?php if (!empty($utilisateur)) : ?>
            <form action="insert_reservation.php" method="post">
                Je donne
                <input type="number" name="montant">€
                <input type="hidden" name="sejour_id" value="<?php echo $id; ?>">
                <input type="submit">
            </form>
        <?php endif; ?>
        <?php foreach ($list_reservation as $sejour) : ?>
            <article>
                <img src="<?php echo get_avatar($reservation["photo"]); ?>" alt="">
                <div>
                    <a href="user.php?id=<?php echo $reservation["utilisateur_id"]; ?>"><?php echo $reservation["nom"] . " " . $reservation["prenom"]; ?></a>
                    <em><?php echo $reservation["montant"]; ?> €</em>
                </div>
            </article>
        <?php endforeach; ?>
    </aside>

</section>

<?php get_footer(); ?>
