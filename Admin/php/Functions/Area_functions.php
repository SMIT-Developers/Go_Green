<?php


//view all LA
function viewAllLA($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `gallery_id`,`gallery_tittle`, `gallery_created_date` FROM `gallery` WHERE `gallery_type`='R' ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $gallery_id = $row['gallery_id'];
            $gallery_tittle = $row['gallery_tittle'];
            $gallery_created_date = $row['gallery_created_date'];


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$gallery_tittle}</td>
                                
                                    <td>{$gallery_created_date}</td>
                            
                                
                                <td>
                                    <a
                                            href='../subPages/edit_gallery_LA.php?type=edit&id={$gallery_id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                               Edit
                                    </a>
                                </td> <td>
                                    <a
                                            href='../subPages/delete_gallery_LA.php?type=edit&id={$gallery_id}'
                                            class='btn btn-danger mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                               Delete
                                    </a>
                                </td>
                                
                                
                            </tr>
                            ";


        }

    }

    return $data;


}//view sinngle LA

//view all EA
function viewAllEA($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `gallery_id`,`gallery_tittle`, `gallery_created_date` FROM `gallery` WHERE `gallery_type`='E' ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $gallery_id = $row['gallery_id'];
            $gallery_tittle = $row['gallery_tittle'];
            $gallery_created_date = $row['gallery_created_date'];


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$gallery_tittle}</td>
                                
                                    <td>{$gallery_created_date}</td>
                            
                                
                                <td>
                                    <a
                                            href='../subPages/edit_gallery_LA.php?type=edit&id={$gallery_id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                               Edit
                                    </a>
                                </td> <td>
                                    <a
                                            href='../subPages/delete_gallery_LA.php?type=edit&id={$gallery_id}'
                                            class='btn btn-danger mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                               Delete
                                    </a>
                                </td>
                                
                                
                            </tr>
                            ";


        }

    }

    return $data;


}//view sinngle LA
//view single EA

//edit LA

//edit EA

//delete LA

//delete EA

//add item to EA

//add item to LA