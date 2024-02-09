<?php
include_once("templates/header.php");
include_once("config/process.php");
?>

    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Update a contact</h1>
        <form id="create-form" action="<?= $baseURL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name" class="bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Type the name" value="<?= $contact['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone" class="bold">Phone number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Type the main phone number" value="<?= $contact['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="secphone" class="bold">Secondary phone number</label>
                <input type="text" class="form-control" id="secphone" name="secphone" placeholder="Type the secondary phone number" value="<?= $contact['secphone'] ?>">
            </div>
            <div class="form-group">
                <label for="address" class="bold">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Type the address" value="<?= $contact['address'] ?>" required>
            </div>
            <div class="form-group">
                <label for="identification" class="bold">Identification number</label>
                <input type="text" class="form-control" id="identification" name="identification" placeholder="Type the ID number" value="<?= $contact['identification'] ?>" required>
            </div>
            <div class="form-group">
                <label for="observation" class="bold">Observations</label>
                <textarea type="" class="form-control" id="observation" name="observation" placeholder="observation" rows="3"><?= $contact['observation'] ?></textarea>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

<?php
include_once ("templates/footer.php");
?>