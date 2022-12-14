<?php
  error_reporting(0);
  header('Access-Control-Allow-Origin:*'); 
  $servername = "127.0.0.1:3306";
  $username = "root";
  $password = "pw1922";
  $dbname = "clustertest";
  // 创建连接
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("连接失败: " . $conn->connect_error);
  } 

  $q=$_GET["q"];
  if(empty($q)) {
    echo "传入为空";
    exit;
  }

  $sql = "SELECT * FROM test_table;";
  $result = $conn->query($sql);
  
  $response = "学科名称"."\t"."课程作业提交时间"."<br>";
  if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          $response .= $row["name"]. "\t". $row["value"]. "<br>";
      }
  } else {
      echo "0 结果";
  }
  $conn->close();
  echo $response
?>

