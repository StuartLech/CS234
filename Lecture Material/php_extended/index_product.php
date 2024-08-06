<!DOCTYPE html>
<html>
<head>
  <title>My Products</title>
</head>
<body>
  <h1>Product List</h1>
  <form action="index.php" method="get">
    <input type="text" name="search" id="search_term" placeholder="search your product...">
    <input type="submit" value="Search">
</form>

<?php

$products=array(
  array('name'=>'iphone 15', 'price'=>1000),
  array('name'=>'iphone 14', 'price'=>100),
  array('name'=>'banana','price'=>2),
  array('name'=>'spain','price'=>140000000000)
);

$search=$_GET['search'];

if($search){
  $filtered_products=array();
  foreach($products as $product){
    if(stristr($product['name'],$search)){
        $filtered_products[]=$product;
    }
  }
  $products=$filtered_products;
}

echo '<table border="1">';
echo '<tr><th> Product Name </th><th> Price </th></tr>';
foreach ($products as $product){
  echo '<tr><td>'.$product['name'].'</td><td>'.$product['price'].'</td></tr>';
}
echo '</table>';

?>

</body>
</html>