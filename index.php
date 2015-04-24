<?php
include 'koneksi.php';

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
        <li><a href="tampil.php">Jadwal</a></li>
        <li><a href="index.php">Tambah Jadwal</a></li>
      <div class="clear"></div>
    </ul>
         <div class="clear"></div>
</div>

<form action="input_act.php" method="get">
        <fieldset>
            <legend>Input Jadwal</legend>
            <p><label>Nama</label> <input class="form" id="nama" name="nama"></p>
            <p><label>NIM</label> <input class="form" id="nim" name="nim"></p>
            <p><label>Jurusan</label> <input class="form" id="jurusan" name="jurusan"><p>
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
            <tr>
            <th>06.30</th>
            <th><input class="tform" id="senin_satu" name="senin_satu"></th>
            <th><input class="tform" id="selasa_satu" name="selasa_satu"></th>
            <th><input class="tform" id="rabu_satu" name="rabu_satu"></th>
            <th><input class="tform" id="kamis_satu" name="kamis_satu"></th>
            <th><input class="tform" id="jumat_satu" name="jumat_satu"></th>
            <th><input class="tform" id="sabtu_satu" name="sabtu_satu"></th>
            </tr>
            <tr>
            <th>08.30</th>
            <th><input class="tform" id="senin_dua" name="senin_dua"></th>
            <th><input class="tform" id="selasa_dua" name="selasa_dua"></th>
            <th><input class="tform" id="rabu_dua" name="rabu_dua"></th>
            <th><input class="tform" id="kamis_dua" name="kamis_dua"></th>
            <th><input class="tform" id="jumat_dua" name="jumat_dua"></th>
            <th><input class="tform" id="sabtu_dua" name="sabtu_dua"></th>
            </tr>
            <tr>
            <th>10.30</th>
            <th><input class="tform" id="senin_tiga" name="senin_tiga"></th>
            <th><input class="tform" id="selasa_tiga" name="selasa_tiga"></th>
            <th><input class="tform" id="rabu_tiga" name="rabu_tiga"></th>
            <th><input class="tform" id="kamis_tiga" name="kamis_tiga"></th>
            <th><input class="tform" id="jumat_tiga" name="jumat_tiga"></th>
            <th><input class="tform" id="sabtu_tiga" name="sabtu_tiga"></th>
            </tr>
            <tr>
            <th>12.30</th>
            <th><input class="tform" id="senin_empat" name="senin_sempat"></th>
            <th><input class="tform" id="selasa_empat" name="selasa_empat"></th>
            <th><input class="tform" id="rabu_empat" name="rabu_empat"></th>
            <th><input class="tform" id="kamis_empat" name="kamis_empat"></th>
            <th><input class="tform" id="jumat_empat" name="jumat_empat"></th>
            <th><input class="tform" id="sabtu_empat" name="sabtu_empat"></th>
             </tr>
             <tr>
            <th>14.30</th>
            <th><input class="tform" id="senin_lima" name="senin_lima"></th>
            <th><input class="tform" id="selasa_lima" name="selasa_lima"></th>
            <th><input class="tform" id="rabu_lima" name="rabu_lima"></th>
            <th><input class="tform" id="kamis_lima" name="kamis_lima"></th>
            <th><input class="tform" id="jumat_lima" name="jumat_lima"></th>
            <th><input class="tform" id="sabtu_lima" name="sabtu_lima"></th>
             </tr>
             <tr>
            <th>16.30</th>
            <th><input class="tform" id="senin_enam" name="senin_enam"></th>
            <th><input class="tform" id="selasa_enam" name="selasa_enam"></th>
            <th><input class="tform" id="rabu_enam" name="rabu_enam"></th>
            <th><input class="tform" id="kamis_enam" name="kamis_enam"></th>
            <th><input class="tform" id="jumat_enam" name="jumat_enam"></th>
            <th><input class="tform" id="sabtu_enam" name="sabtu_enam"></th>
             </tr>
         </table>
             


             <button type="submit">Submit</button>
        </fieldset>
</form>

            </body>
</html>