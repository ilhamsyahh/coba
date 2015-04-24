<?php
include 'koneksi.php';
$nim=$_GET['nim'];

?>
<html>
<style>
            fieldset{
                background: rgb(238,238,238); /* Old browsers */
                background: -moz-linear-gradient(top,  rgba(238,238,238,1) 0%, rgba(238,238,238,1) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(238,238,238,1)), color-stop(100%,rgba(238,238,238,1))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(238,238,238,1) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(238,238,238,1) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(238,238,238,1) 100%); /* IE10+ */
                background: linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(238,238,238,1) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#eeeeee',GradientType=0 ); /* IE6-9 */
                margin:10px 0;
                }

            legend{
                font-size:15px;
                font-weight:bold;
                border:1px solid #a1a1a1;
                padding:10px;
                background:#ffffff;
            }
            label{ 
                width:150px; 
                display: inline-block; 
            }
            button{
                padding:6px;
                font-weight:bold;
            }
            .form{
                font-family: Century;
                font-size: 13pt;
                width: 415px;
                border: 1px solid #2980b9;
                margin-left: 15px;
                margin-top: 10px;
                padding-left: 5px;
                display: compact;
                box-shadow: #95a5a6;
                border-radius: 5px;
            }
            .tform{
                font-family: Century;
                font-size: 13pt;
                width: 150px;
                border: 1px solid #2980b9;
                margin-left: 15px;
                margin-top: 10px;
                padding-left: 5px;
                display: compact;
                box-shadow: #95a5a6;
                border-radius: 5px;
            }
            
            .nav {
                background-color: #000;
                width:100%;
                height:40px;
            }
            .nav ul {
                list-style: none;
            }
            .nav ul li {
                float:  left;
            }
            .nav ul li  a {
                text-decoration:  none;
                color:  #fff;
                float:  left;
                padding:  10px;
                font:bold 16px Arial,Sans-Serif;
            }
            .nav ul a{
                text-decoration:  none;
                color:  #fff;
                float:  right;
                padding:  10px;
                font:bold 16px Arial,Sans-Serif;
            }
            .nav ul li a:hover {
                background-color:  #333;

            }
            
            .nav ul a:hover {
                background-color:  #333;

            }
            .clear {
                clear:  both;
             }
             table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:300px;
      margin:auto; }
   table th {
      font-weight:bold;
      padding:10px;
      color:#000000;
      background-color:#eeeeee;
      border-top:1px #eeeeee;
      border-bottom:1px #eeeeee;}
   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }
    


            </style>
            <body>
<div class="nav">
    <ul>
        <li><a href="index.php">Jadwal</a></li>
        <li><a href="input.php">Tambah Jadwal</a></li>
      <div class="clear"></div>
    </ul>
         <div class="clear"></div>
</div>
<?php
$result1=mysql_query("SELECT * FROM mahasiswa where nim='".$nim."'");
$row=mysql_fetch_array($result1)
?>

<p><label>Nama : <?=$row['nama']?></label></P>
<p><label>NIM : <?=$row['nim']?></label></p>
<p><label>Jurusan : <?=$row['jurusan']?></label></p>

<table>
<tr>
   <th>Jam</th>
   <th>Senin</th>
   <th>Selasa</th>
   <th>Rabu</th>
   <th>Kamis</th>
   <th>Jumat</th>
   <th>Sabtu</th>
</tr>
<?php

$result2=mysql_query("SELECT * FROM jadwal_senin where nim='".$nim."'");
$result3=mysql_query("SELECT * FROM jadwal_selasa where nim='".$nim."'");
$result4=mysql_query("SELECT * FROM jadwal_rabu where nim='".$nim."'");
$result5=mysql_query("SELECT * FROM jadwal_kamis where nim='".$nim."'");
$result6=mysql_query("SELECT * FROM jadwal_jumat where nim='".$nim."'");
$result7=mysql_query("SELECT * FROM jadwal_sabtu where nim='".$nim."'");

$row1=mysql_fetch_array($result2);
$row2=mysql_fetch_array($result3);
$row3=mysql_fetch_array($result4);
$row4=mysql_fetch_array($result5);
$row5=mysql_fetch_array($result6);
$row6=mysql_fetch_array($result7);


   ?>
   <tr>
            <th>06.30</th>
            <th><?=$row1['jam_satu']?></th>
            <th><?=$row2['jam_satu']?></th>
            <th><?=$row3['jam_satu']?></th>
            <th><?=$row4['jam_satu']?></th>
            <th><?=$row5['jam_satu']?></th>
            <th><?=$row6['jam_satu']?></th>
            </tr>
            <tr>
            <th>08.30</th>
            <th><?=$row1['jam_dua']?></th>
            <th><?=$row2['jam_dua']?></th>
            <th><?=$row3['jam_dua']?></th>
            <th><?=$row4['jam_dua']?></th>
            <th><?=$row5['jam_dua']?></th>
            <th><?=$row6['jam_dua']?></th>
            </tr>
            <tr>
            <th>10.30</th>
            <th><?=$row1['jam_tiga']?></th>
            <th><?=$row2['jam_tiga']?></th>
            <th><?=$row3['jam_tiga']?></th>
            <th><?=$row4['jam_tiga']?></th>
            <th><?=$row5['jam_tiga']?></th>
            <th><?=$row6['jam_tiga']?></th>
            </tr>
            <tr>
            <th>12.30</th>
            <th><?=$row1['jam_empat']?></th>
            <th><?=$row2['jam_empat']?></th>
            <th><?=$row3['jam_empat']?></th>
            <th><?=$row4['jam_empat']?></th>
            <th><?=$row5['jam_empat']?></th>
            <th><?=$row6['jam_empat']?></th>
             </tr>
             <tr>
            <th>14.30</th>
            <th><?=$row1['jam_lima']?></th>
            <th><?=$row2['jam_lima']?></th>
            <th><?=$row3['jam_lima']?></th>
            <th><?=$row4['jam_lima']?></th>
            <th><?=$row5['jam_lima']?></th>
            <th><?=$row6['jam_lima']?></th>
             </tr>
             <tr>
            <th>16.30</th>
            <th><?=$row1['jam_enam']?></th>
            <th><?=$row2['jam_enam']?></th>
            <th><?=$row3['jam_enam']?></th>
            <th><?=$row4['jam_enam']?></th>
            <th><?=$row5['jam_enam']?></th>
            <th><?=$row6['jam_enam']?></th>
             </tr>
   <?php
 
?>

</table> 
</body>
</html>