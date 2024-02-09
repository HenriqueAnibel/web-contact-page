<?php
session_start();
include_once("templates/header.php");
include_once("config/process.php");
?>
<div class="container">
    <?php if (isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>

    <h1 id="main-title">My contacts</h1>
    <?php if (count($contacts) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Secondary phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Observation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row" class="col-id"><?= $contact["id"] ?></td>
                        <td scope="row"><?= $contact["identification"] ?></td>
                        <td scope="row"><?= $contact["name"] ?></td>
                        <td scope="row"><?= $contact["phone"] ?></td>
                        <td scope="row"><?= $contact["secphone"] ?></td>
                        <td scope="row"><?= $contact["address"] ?></td>
                        <td scope="row"><?= $contact["observation"] ?></td>
                        <td class="actions">
                            <a href="<?= $baseURL ?>view.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?= $baseURL ?>edit.php?id=<?= $contact["id"] ?>"><i class="fas fa-edit edit-icon"></i></a>
                            <form class="delete-form" action="<?= $baseURL ?>config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">You don't have contacts in your contact list, <a href="<?= $baseURL ?>create.php">Click here to add!</a></p>
    <?php endif; ?>
</div>

<?php
include_once ("templates/footer.php");
?>