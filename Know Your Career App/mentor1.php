<?php     
include('connect.php');

$result = mysql_query("SELECT firstname,lastname,profession,gender,experience FROM signup ");
      ?>
      <table border="2" style=  >
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Profession</th>
          <th>Gender</th>
          <th>Experience</th>
          <!-- <td>Employee_salary</td> -->
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['firstname'\]}</td>
              <td>{$row\['lastname'\]}</td>
              <td>{$row\['profession'\]}</td>
              <td>{$row\['gender'\]}</td>
              <td>{$row\['experience'\]}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
?>
