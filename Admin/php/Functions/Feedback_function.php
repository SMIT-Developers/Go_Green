<?php


//view customer feedback table
function viewAllCustomerFeedbacks($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `feedback_Id`,`content`, `cus_id` FROM `feedback` ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $feedback_Id = $row['feedback_Id'];
            $content = $row['content'];
            $cus_id = $row['cus_id'];


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$feedback_Id}</td>
                               
                                    <td>{$content}</td>
                                    <td>{$cus_id} </td>
                               
                                
                                <td>
                                    <a
                                            href='../subPages/reply_customer_feedback.php?type=reply&id={$feedback_Id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                              Reply
                                    </a>
                       
                                
                            </tr>
                            ";


        }

    }

    return $data;


}

//view rese feedback table
function viewAllResearcherFeedbacks($conn): string
{

    //data save for varibale


    $data = "";
    $query = "SELECT `feedback_Id`,`content`, `researcher_Id` FROM `feedback` ";
    $resultSet = $conn->query($query);

    if (($resultSet-> num_rows) > 0) {
        //if query success


        while($row = mysqli_fetch_array($resultSet)){

            $feedback_Id = $row['feedback_Id'];
            $content = $row['content'];
            $user_id = $row['researcher_Id'];


            $data = $data . " 
                                     <tr class='single_row'>

                                  
                                    <td>{$feedback_Id}</td>
                               
                                    <td>{$content}</td>
                                    <td>{$user_id} </td>
                               
                                
                                <td>
                                    <a
                                            href='../subPages/reply_researcher_feedback.php?type=reply&id={$feedback_Id}'
                                            class='btn btn-success mb-2 text-light modDeleteButton'
                                            type='submit'
                                            name='buttonType'
                                          
                                            >
                                              Reply
                                    </a>
                       
                                
                            </tr>
                            ";


        }

    }

    return $data;


}

//view single cus feedback

//viwe single res feedback

//delete single feedback