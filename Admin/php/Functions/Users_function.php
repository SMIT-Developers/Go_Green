<?php


//view all res
function viewAllResearchers($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `researcher_Id`, `researcher_fame`, `researcher_lame`,`researcher_email`,`isActive` FROM `researcher`  ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $researcher_Id = $row['researcher_Id'];
            $researcher_fame = $row['researcher_fame'];
            $researcher_lame = $row['researcher_lame'];
            $researcher_email = $row['researcher_email'];
            $isActive = $row['isActive'] == 1 ? "Active" : "Deleted";
            $buttonType = $row['isActive'] == 1 ? 'Delete' : 'Retrieve';
            $buttoColor = $buttonType == "Delete" ? 'btn-danger' : 'btn-dark';


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$researcher_fame}</td>
                                      <td>{$researcher_lame}</td>
                                
                                    <td>{$researcher_email}</td>
                               
                                    <td >{$isActive}</td>
                                    
                               <td>
                                    <a
                                            href='../subPages/view_researcher.php?type={$buttonType}&id={$researcher_Id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                           
                                            >
                                               view
                                    </a>
                                </td>
                                
                                <td>
                                    <a
                                            href='../subPages/delete_researcher.php?type={$buttonType}&id={$researcher_Id}'
                                            class='btn {$buttoColor} mb-2 text-light modDeleteButton'
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
//view all cus

function viewAllCustomer($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `cus_Id`, `cus_fname`, `cus_lname`,`cus_email`,`isActive` FROM `customer`  ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $cus_Id = $row['cus_Id'];
            $cus_fname = $row['cus_fname'];
            $cus_lname = $row['cus_lname'];
            $cus_email = $row['cus_email'];
            $isActive = $row['isActive'] == 1 ? "Active" : "Deleted";
            $buttonType = $row['isActive'] == 1 ? 'Delete' : 'Retrieve';
            $buttoColor = $buttonType == "Delete" ? 'btn-danger' : 'btn-dark';


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$cus_fname}</td>
                                      <td>{$cus_lname}</td>
                                
                                    <td>{$cus_email}</td>
                               
                                    <td >{$isActive}</td>
                                
                                <td>
                                    <a
                                            href='../subPages/view_customer.php?type={$buttonType}&id={$cus_Id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                           
                                            >
                                               view
                                    </a>
                                </td>
                                
                                
                                <td>
                                    <a
                                            href='../subPages/delete_customer.php?type={$buttonType}&id={$cus_Id}'
                                            class='btn {$buttoColor} mb-2 text-light modDeleteButton'
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


//view singele res

//view single res

//delete res

//delete cus