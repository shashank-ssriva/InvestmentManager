<html>
<head>
  <title>Investment & Loan Management Solution</title>
  <link rel="stylesheet" type="text/css" media="all" href="/jsdate/jsDatePick_ltr.min.css" />
  <script type="text/javascript" src="/jsdate/jsDatePick.min.1.3.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css">
</head>
<body>
  <fieldset>
    <center>
      <h2>Investment & Loan Management Solution</h2>
      <h3><legend>Developed by Monika Gautam & Shashank Srivastava</legend></h3>
    </center>
  </fieldset>
  <h3><legend>Your National Saving Certificate(s) Details: Money Invested & Earned</legend></h3>
  <hr>
  <?php
  $dbhandle = mysqli_connect("localhost", "root", "mysql", investmanager)
  or die("Unable to connect to MySQL");
  if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $brdtm1 = $_POST['brdtm1'];
    $sdate = $_POST['sdate'];
    $brdtm2 = $_POST['brdtm2'];
    $amt1 = $_POST['amt1'];
    $amt2 = $_POST['amt2'];
    $rate1 = $_POST['rate1'];
    $rate2 = $_POST['rate2'];
    $dateval = $_POST['dateval'];
    $hidd = $_POST['hidd'];
    $curr_val=intval($hidd)+1;
    $exp = $_POST['exp'];
    $c="create table if not exists temp_nsc_data(date varchar(10),brdtm varchar(7),amount numeric(7,2),rate numeric(5,2))";
    mysqli_query($dbhandle,$c);
    //checking duplicate entry in temporary table
    $repeat=0;
    $chk_dup_temp="select * from temp_collectdata";
    $dup_result1= mysqli_query($dbhandle,$chk_dup_temp);
    while ($duprow = mysqli_fetch_array($dup_result1,MYSQLI_NUM))
    {
      if((strcmp($dateval,$duprow{0})==0))
      {
        $repeat++;
      }
    }
    ?>
  </body>
  </html>
