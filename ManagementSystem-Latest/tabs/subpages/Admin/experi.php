<form method="get" action="">
  <input type="checkbox" name="category[]" value="Shirts"> Shirts<br>
  <input type="checkbox" name="category[]" value="Pants"> Pants<br>
  <input type="checkbox" name="category[]" value="Shoes"> Shoes<br>
  <button type="submit">Filter</button>
</form>
<?php
$table_data = array(
  array('product_name' => 'Product 1', 'category' => 'Shirts', 'price' => '$10.99'),
  array('product_name' => 'Product 2', 'category' => 'Pants', 'price' => '$29.99'),
  array('product_name' => 'Product 3', 'category' => 'Shoes', 'price' => '$49.99'),
  array('product_name' => 'Product 4', 'category' => 'Shirts', 'price' => '$19.99'),
  array('product_name' => 'Product 5', 'category' => 'Pants', 'price' => '$39.99'),
  array('product_name' => 'Product 6', 'category' => 'Shoes', 'price' => '$59.99'),
);

// Check if the form has been submitted and if the category checkboxes have been checked
if (isset($_GET['category']) && !empty($_GET['category'])) {
  // Filter the table data by category
  $selected_categories = $_GET['category'];
  $filtered_data = array_filter($table_data, function($row) use ($selected_categories) {
    return in_array($row['category'], $selected_categories);
  });
} else {
  // If no category checkboxes have been checked, show all data
  $filtered_data = $table_data;
}
?>
<table>
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Category</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($filtered_data as $row): ?>
      <tr>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['price']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
