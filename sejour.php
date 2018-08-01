<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getSejour($id);
$list_departs = getAllDepartsBySejour($id);

$utilisateur = current_user();

get_header($sejour["titre"]);
?>

<section class="container">
    <h1><?php echo $sejour["pays"]; ?> - <?php echo $sejour["titre"]; ?></h1>

    <table>
        <thead>
            <tr>
                <th>Date de départ</th>
                <th>Prix</th>
                <th>Places</th>
                <th>Places restantes</th>
                <th>Réservation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_departs as $depart) : ?>
                <tr>
                    <td><?php echo $depart["date_depart"]; ?></td>
                    <td><?php echo $depart["prix"]; ?></td>
                    <td><?php echo $depart["place_totale"]; ?></td>
                    <td><?php echo $depart["place_restante"]; ?></td>
                    <td>
                        <?php if (!empty($utilisateur)) : ?>
                            <form action="insert_reservation.php" method="post">
                                <input type="number" name="nb_places">
                                <input type="hidden" name="depart_id" value="<?php echo $depart["id"]; ?>">
                                <input type="submit">
                            </form>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</section>

<?php get_footer(); ?>

