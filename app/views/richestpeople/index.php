<h3><?= $data['title'] ?></h3>

<table>
    <thead>
        <th>Id</th>
        <th>Naam</th>
        <th>Vermogen</th>
        <th>Leeftijd</th>
        <th>Bedrijf</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>
<p><a href="<?= URLROOT; ?>/landingpages/index">back to landingpage</a></p>