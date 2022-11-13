<?php


//view all orders
function viewAllOrders($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `order_Id`,`ordered_Date`, `order_weight` FROM `orders` ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $order_Id = $row['order_Id'];
            $ordered_Date = $row['ordered_Date'];
            $order_weight = $row['order_weight'];


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$order_Id}</td>
                               
                                    <td>{$ordered_Date}</td>
                                    <td>{$order_weight}KG</td>
                            
                                
                                <td>
                                    <a
                                            href='../subPages/view_order.php?type=view&id={$order_Id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                               View
                                    </a>
                                </td> 
                                
                            </tr>
                            ";


        }

    }

    return $data;


}

//view all products
function viewAllProducts($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `product_Item_Id`,`product_item_name`, `product_unit_price`, `product_weight`,`isActive` FROM `product_item` ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $product_Item_Id = $row['product_Item_Id'];
            $product_item_name = $row['product_item_name'];
            $product_unit_price = $row['product_unit_price'];
            $product_weight = $row['product_weight'];
            $isActive =$row['isActive'] == 1 ? "Active" : "Deleted";
            $buttonType = $row['isActive'] == 1 ? 'Delete' : 'Retrieve';
            $buttonColor = $buttonType == "Delete" ? 'btn-danger' : 'btn-dark';



            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$product_item_name}</td>
                               
                                    <td>{$product_unit_price}</td>
                                    <td>{$product_weight} KG</td>
                                     <td>{$isActive}</td>
                            
                                
                                <td>
                                    <a
                                            href='../subPages/edit_product.php?type=edit&id={$product_Item_Id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                              Edit
                                    </a>
                                </td> 
                                
                                    <td>
                                    <a
                                            href='../subPages/delete_product.php?type={$buttonType}&id={$product_Item_Id}'
                                            class='btn {$buttonColor} mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                               {$buttonType}
                                    </a>
                                </td> 
                                
                            </tr>
                            ";


        }

    }

    return $data;


}
//view single order

//view single product

//add product

//view product

//view order

//delete product

