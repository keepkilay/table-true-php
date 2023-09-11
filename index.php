<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <caption>
            <b><i>Таблица истинности в PHP</i></b>
            <hr>
        </caption>
        <tr>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">!A</th>
            <th scope="col">A || B</th>
            <th scope="col">A && B</th>
            <th scope="col">A xor B</th>
            <?php
            $A = 0;
            $B = 0; 
            ?>
        </tr>
        <tr>
            <th scope="row">0</th><!--A-->
            <th scope="row">0</th><!--B-->
            <td><?php 
              $result = !$A;
              echo $result;
            ?>
            </td>
            <td><?php
              if($A == 0 || $B == 0) {
            echo 0;
            }
            else echo 1;?>
            </td>
            <td><?php
              if($A == 0 && $B == 0) {
            echo 0;
            }
            else echo 1;?>
            </td>
            <td>
            <?php
              if($A xor $B) {
            echo 0;
            }else echo 1;
            ?>
            </td>
        </tr>
        <tr>
            <th scope="row">0</th><!--A-->
            <th scope="row">1</th><!--B-->
            <td>
            <?php 
              $result = !$A;
              echo $result;
            ?>
            </td>
            <td><?php
              if($A == 0 || $B == 1) {
            echo 1;
            }
            else echo 0;?>
            </td>
            <td><?php
              if($A == 0 && $B == 1) {
            echo 0;
            }
            else echo 1;?>
            </td>
            <td>
            <?php
              if($A xor $B) {
            echo 0;
            }
            else echo 1;?>
            </td>
        </tr>
        <tr>
            <th scope="row">1</th><!--A-->
            <th scope="row">0</th><!--B-->
            <td><?php 
              if(!$A){
                echo 0;
              }else{
                echo 1;
              }
            ?></td>
            <td><?php
              if($A == 1 || $B == 0) {
            echo 1;
            }else echo 0;?>
            </td>
            <td>
            <?php
              if($A == 1 && $B == 0) {
            echo 0;
            }else echo 1;?>
            </td>
            <td>
            <?php
              if($A == 1 xor $B == 0) {
            echo 0;
            }
            else echo 1;?>
            </td>
        </tr>
        <tr>
            <th scope="row">1</th><!--A-->
            <th scope="row">1</th><!--B-->
            <td>
            <?php 
              if(!$A){
                echo 0;
              }else{
                echo 1;
              }
            ?>
            </td>
            <td>
            <?php
              if($A == 1 || $B == 1) {
            echo 1;
            }else echo 0;?>
            </td>
            <td>
            <?php
              if($A == 1 && $B == 1) {
            echo 1;
            }else echo 0;?>
            </td>
            <td>
            <?php
              if($A == 1 xor $B == 1) {
            echo 1;
            }else echo 0;?>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table>
        <caption>
            <b><i>Гибкое сравнение в PHP</i></b>
            <hr>
        </caption>
        <tr>
            <th scope="col"></th>
            <th scope="col">true</th>
            <th scope="col">false</th>
            <th scope="col">1</th>
            <th scope="col">0</th>
            <th scope="col">-1</th>
            <th scope="col">"1"</th>
            <th scope="col">null</th>
            <th scope="col">"php"</th>
        </tr>
        <tr>
            <th scope="row">true</th>
            <td><?php if (true == true){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == false){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == null){echo "true";}else{echo "false";}?></td>
            <td><?php if (true == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">false</th>
            <td><?php if (false == true){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == false){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == null){echo "true";}else{echo "false";}?></td>
            <td><?php if (false == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td><?php if (1 == true){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == false){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == null){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">0</th>
            <td><?php if (0 == true){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == false){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == null){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">-1</th>
            <td><?php if (-1 == true){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == false){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == null){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">"1"</th>
            <td><?php if ("1" == true){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == false){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == null){echo "true";}else{echo "false";}?></td>
            <td><?php if ("1" == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">null</th>
            <td><?php if (null == true){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == false){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == null){echo "true";}else{echo "false";}?></td>
            <td><?php if (null == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">"php"</th>
            <td><?php if ("php" == true){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == false){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == 1){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == 0){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == -1){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == null){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" == "php"){echo "true";}else{echo "false";}?></td>
        </tr>
    </table>
    <br>
    <br>
    <table>
        <caption>
            <b><i>Жёсткое сравнение в PHP</i></b>
            <hr>
        </caption>
        <tr>
            <th scope="col"></th>
            <th scope="col">true</th>
            <th scope="col">false</th>
            <th scope="col">1</th>
            <th scope="col">0</th>
            <th scope="col">-1</th>
            <th scope="col">"1"</th>
            <th scope="col">null</th>
            <th scope="col">"php"</th>
        </tr>
        <tr>
            <th scope="row">true</th>
            <td><?php if (true === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (true === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">false</th>
            <td><?php if (false === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (false === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td><?php if (1 === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">0</th>
            <td><?php if (0 === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (0 === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">-1</th>
            <td><?php if (-1 === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (-1 === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">"1"</th>
            <td><?php if (1 === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (1 === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">null</th>
            <td><?php if (null === true){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === false){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === null){echo "true";}else{echo "false";}?></td>
            <td><?php if (null === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
        <tr>
            <th scope="row">"php"</th>
            <td><?php if ("php" === true){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === false){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === 1){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === 0){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === -1){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === "1"){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === null){echo "true";}else{echo "false";}?></td>
            <td><?php if ("php" === "php"){echo "true";}else{echo "false";}?></td>
        </tr>
    </table>
</body>
</html>
    