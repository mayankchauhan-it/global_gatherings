<?php
include '../php_files/db_connections.php';


// Create Category
if (isset($_POST['create_category'])) {
    $category_name = $_POST['category_name'];

    // Insert the new category into the database
    $sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";

    if ($conn->query($sql) === TRUE) {
        echo "New category created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: ../admin_files/category_form.php');  // Redirect back to form
    exit();
}

// Delete Category
if (isset($_GET['delete_category'])) {
    $category_id = $_GET['delete_category'];
    
    // Delete category by id
    $sql = "DELETE FROM categories WHERE category_id=$category_id";

    if ($conn->query($sql) === TRUE) {
        echo "Category deleted successfully!";
    } else {
        echo "Error deleting category: " . $conn->error;
    }
    header('Location: ../admin_files/category_form.php');  // Redirect back to form
    exit();
}

// Update Category
if (isset($_POST['update_category'])) {
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];

    // Update the category in the database
    $sql = "UPDATE categories SET category_name='$category_name' WHERE category_id=$category_id";

    if ($conn->query($sql) === TRUE) {
        echo "Category updated successfully!";
    } else {
        echo "Error updating category: " . $conn->error;
    }
    header('Location: ../admin_files/category_form.php');  // Redirect back to form
    exit();
}

$conn->close();
?>
