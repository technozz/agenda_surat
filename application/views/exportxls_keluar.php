<!DOCTYPE html>
<html>
<head>
	<title>Export Surat Keluar</title>
	<style>
		h1,h2,h3,h4{
			font-family: sans-serif;
		}
	</style>
</head>
<body>

	<?php

	$fileName = "Surat_Keluar(".date('d-m-Y').").xls";

	header("Content-Disposition: attachment; filename='$fileName'");
	header("Content-Type: application/vnd.ms-excel");
	?>

	<h2 align="center">ARSIP DATA SURAT KELUAR </h2>
	<table>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Alamat</th>
          <th>Tanggal</th>
          <th>Perihal</th>
          <th>No Petunjuk</th>
        </tr>
          <?php $no=0;
          foreach ($data as $apa):
            $no++;
          ?>
         <tr align="left">
          <td align="center"><?php echo $no; ?></td>
          <td align="center"><?php echo $apa->kode;?></td>
          <td><?php echo $apa->alamat;?></td>
          <td><?php echo date("d/m/Y",strtotime($apa->tanggal));?></td>
          <td><?php echo $apa->perihal;?></td>
          <td><?php echo $apa->n_petunjuk;?></td>
        </tr>
      <?php endforeach; ?>
     </table>
		
</body>
</html>