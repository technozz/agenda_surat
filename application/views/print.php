<!DOCTYPE html>
<html>
<head>
	<title>Print Surat</title>
	<style>
		@page {
		  size:A4 landscape;
		}
		h1,h2,h3,h4{
			font-family: sans-serif;
		}
		.tabel1 {
			font-family: sans-serif;
		    color: black;
		    border-collapse: collapse;
		    width: 95%;
		}
		 
		.tabel1, th, td {
		    border: 1px solid #999;
		    padding: 4px 8px;
		    margin-left: 2%;
		    margin-right: 2%;
		}
	</style>
</head>
<body onLoad="window.print()">
	<h2 align="center">ARSIP DATA SURAT MASUK </h2>
	<h4 align="center"></h4>
	<table class="tabel1">
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Alamat</th>
          <th>Tanggal Surat</th>
          <th>Taggal Diterima</th>
          <th>Perihal</th>
          <th>No Petunjuk</th>
        </tr>
          <?php $no=0;
          foreach ($data as $apa):
            $no++;
          ?>
         <tr>
          <td align="center"><?php echo $no; ?></td>
          <td align="center"><?php echo $apa->kode;?></td>
          <td><?php echo $apa->alamat;?></td>
          <td align="center"><?php echo date("d/m/Y",strtotime($apa->tanggal));?></td>
          <td align="center"><?php echo date("d/m/Y",strtotime($apa->nomor));?></td>
          <td><?php echo $apa->perihal;?></td>
          <td><?php echo $apa->n_petunjuk;?></td>
        </tr>
      <?php endforeach; ?>
     </table>
		
</body>
</html>