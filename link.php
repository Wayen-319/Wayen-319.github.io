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

  $a=$_GET["a"];
  $b=$_GET["b"];
  $c=$_GET["c"];
  $d=$_GET["d"];
  $e=$_GET["e"];
  if(empty($a)&&empty($b)&&empty($c)&&empty($d)&&empty($e)) {
    echo "传入为空";
    exit;
  }
  if(!empty($a)){
    $sql = "SELECT * FROM XXXX WHERE id = '".$a."'";
    $result = $conn->query($sql);
    $response = "学科名称"."\t"."课程作业提交时间"."<br>";
    if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          $response .= $row["name"]. "\t". $row["value"]. "<br>";
      }
    } else {
      echo "结果:".$a;
    }
  }
  else if(!empty($b)){
    $sql = "SELECT * FROM XXXX WHERE id = '".$b."'";
    $result = $conn->query($sql);
    $response = "学科名称"."\t"."课程作业提交时间"."<br>";
    if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          $response .= $row["name"]. "\t". $row["value"]. "<br>";
      }
    } else {
      echo "结果:".$b;
    }
  }
  else if(!empty($c)){
    $sql = "SELECT * FROM XXXX WHERE id = '".$c."'";
    $result = $conn->query($sql);
    $response = "学科名称"."\t"."课程作业提交时间"."<br>";
    if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          $response .= $row["name"]. "\t". $row["value"]. "<br>";
      }
    } else {
      echo "结果:".$c;
    }
  }
  else if(!empty($d)){
    $sql = "SELECT * FROM XXXX WHERE id = '".$d."'";
    $result = $conn->query($sql);
    $response = "学科名称"."\t"."课程作业提交时间"."<br>";
    if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          $response .= $row["name"]. "\t". $row["value"]. "<br>";
      }
    } else {
      echo "结果:".$d;
    }
  }
  else if(!empty($e)){
    $sql = "SELECT * FROM XXXX WHERE id = '".$e."'";
    $result = $conn->query($sql);
    $response = "学科名称"."\t"."课程作业提交时间"."<br>";
    if ($result->num_rows > 0) {
      // 输出数据
      while($row = $result->fetch_assoc()) {
          $response .= $row["name"]. "\t". $row["value"]. "<br>";
      }
    } else {
      echo "结果:".$e;
    }
  }
  
  $conn->close();
  echo $response
?>
}