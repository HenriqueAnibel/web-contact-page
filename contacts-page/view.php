<?php
include_once("templates/header.php");
include_once("config/process.php");
?>

    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title"><?= $contact["name"] ?></h1>
        <p class="bold">Phone number:</p>
        <p><?= $contact["phone"] ?></p>
        <p class="bold">Secondary phone number:</p>
        <p><?= $contact["secphone"] ?></p>
        <p class="bold">Address:</p>
        <p><?= $contact["address"] ?></p>
        <p class="bold">Identification number:</p>
        <p><?= $contact["identification"] ?></p>
        <p class="bold">Observation:</p>
        <p><?= $contact["observation"] ?></p>
    </div>

<?php
include_once ("templates/footer.php");
?>