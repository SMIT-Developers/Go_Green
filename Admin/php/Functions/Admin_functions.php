<?php


    //log in
    function vertifyLogin($username, $password, $conn): bool
    {

        $sql = "SELECT admin_type,admin_Id FROM admin WHERE (admin_email='{$username}' AND admin_password='{$password}') LIMIT 1 ";
        $resultSet = $conn->query($sql);
        echo $sql;


        if ($resultSet->num_rows ==1) {
            //if user exits

            echo "user found";
            while ($row = mysqli_fetch_assoc($resultSet)) {


                echo "admin_id  " . $row['admin_Id'];
                echo "admin_type  " . $row['admin_type'];

                $_SESSION['admin_Id'] = $row['admin_Id'];
                $_SESSION['admin_type'] = $row['admin_type'];

            }

            echo 'user not found';
            return true;


        } else {
            return false;
        }


    }


//view admin table

     function viewAllAdmin($conn): string
    {

        $data = "";

        $query = "SELECT `admin_Id`, `admin_name`, `admin_email`,`isActive` FROM `admin` WHERE `admin_type`='S' ";
        $resultSet = $conn->query($query);

        if (($resultSet-> num_rows) > 0) {
            //if query success

                while($row = mysqli_fetch_array($resultSet)){

                    $admin_Id = $row['admin_Id'];
                    $admin_name = $row['admin_name'];
                    $admin_email = $row['admin_email'];
                    $isActive = $row['isActive'] == 1 ? "Active" : "Deleted";
                    $buttonType = $row['isActive'] == 1 ? 'Delete' : 'Retrieve';
                    $buttoColor = $buttonType == "Delete" ? 'btn-danger' : 'btn-dark';


                    $data = $data . " 
                                     <tr class='single_row'>                                  
                                        <td>{$admin_name}</td>
                                    
                                        <td>{$admin_email}</td>
                                   
                                        <td >{$isActive}</td>
                                
                                     <td>
                                            <a
                                                    href='../subPages/delete_admin.php?type={$buttonType}&id={$admin_Id}'
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


//add new admin

//delete admin

?>