<?php
session_start();
include_once("connection.php");

$data = $_POST;

// POST
if (!empty($data)) {
    if ($data["type"] === "create") {
        // Extract data from $_POST
        $name = $data["name"];
        $phone = $data["phone"];
        $secphone = $data["secphone"];
        $address = $data["address"];
        $identification = $data["identification"];
        $observation = $data["observation"];

        // Prepare and execute SQL query to insert new contact
        $query = "INSERT INTO contacts (name, phone, secphone, address, identification, observation) VALUES (:name, :phone,:secphone, :address, :identification, :observation)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":secphone", $secphone);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":identification", $identification);
        $stmt->bindParam(":observation", $observation);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Successfully added the new contact!";
        } catch (PDOException $e) {
            // Handle error
            $error = $e->getMessage();
            echo "Error: $error";
        }
    } elseif ($data["type"] === "edit") {
        // Extract data from $_POST
        $name = $data["name"];
        $phone = $data["phone"];
        $secphone = $data["secphone"];
        $address = $data["address"];
        $identification = $data["identification"];
        $observation = $data["observation"];
        $id = $data["id"];

        // Prepare and execute SQL query to update contact
        $query = "UPDATE contacts SET name = :name, phone = :phone, secphone = :secphone, address = :address, identification = :identification, observation = :observation WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":secphone", $secphone);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":identification", $identification);
        $stmt->bindParam(":observation", $observation);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contact updated successfully";
        } catch (PDOException $e) {
            // Handle error
            $error = $e->getMessage();
            echo "Error: $error";
        }
    } elseif ($data["type"] === "delete"){
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contact deleted successfully";
        } catch (PDOException $e) {
            // Handle error
            $error = $e->getMessage();
            echo "Error: $error";
        }
    }

    // REDIRECT HOME
    header("Location: http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . "/" . "../index.php");
    exit();
}
// GET
else {
    $id;

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    //return only one contact
    if (!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();
    } else {
        //return all contacts
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
}

// CLOSING CONNECTION
$conn = null;
