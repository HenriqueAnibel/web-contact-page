<?php
include_once("templates/header.php");
?>

    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Create a new contact</h1>
        <form id="create-form" action="<?= $baseURL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name" class="bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Type the name" required>
            </div>
            <div class="form-group">
                <label for="phone" class="bold">Phone number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Type the main phone number" required>
            </div>
            <div class="form-group">
                <label for="secphone" class="bold">Secondary phone number</label>
                <input type="text" class="form-control" id="secphone" name="secphone" placeholder="Type the secondary phone number">
            </div>
            <div class="form-group">
                <label for="address" class="bold">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Type the address" required>
            </div>
            <div class="form-group">
                <label for="identification" class="bold">Identification number</label>
                <input type="text" class="form-control" id="identification" name="identification" placeholder="Type the ID number" required>
            </div>
            <div class="form-group">
                <label for="observation" class="bold">Observations</label>
                <textarea type="" class="form-control" id="observation" name="observation" placeholder="observation" rows="3"></textarea>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php
include_once ("templates/footer.php");
?>