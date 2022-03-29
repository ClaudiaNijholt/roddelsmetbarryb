<?php
    include("./connect_db.php");
    $sql = "SELECT * FROM `users`";

    $result = mysqli_query($conn, $sql);

    $records = "";
    while ($record = mysqli_fetch_assoc($result)){
         $records .=    "<tr><th scope = 'row'>". $record['id'] . "</th>" .
                          "<td>" . $record['firstname'] . "</td>" . 
                          "<td>" . $record['infix'] . "</td>" . 
                          "<td>" . $record['lastname'] . "</td>" . 
                          "<td>" . $record['betaalrekening'] . "</td>" .
                          "<td>
                              <a href = './update.php?id= " . $record["id"] .  "'>
                              <img src='./img/icons/b_edit.png' alt='pencil'>
                              </a>
                          </td>
                          <td>
                            <a href = './delete.php?id= " . $record["id"] .  "'>
                            <img src='./img/icons/b_drop.png' alt='cross'>
                            </a>
                          </td>
                        </tr>";
                    } 
?>
