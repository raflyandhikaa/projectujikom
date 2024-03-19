<!DOCTYPE html>
<html>
<head>
	<title>Tentang kami</title>
	<style>
		/* Gaya CSS untuk halaman berita */
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			color: #333;
			text-align: center;
		}

		.article {
			margin-bottom: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.article h2 {
			color: #555;
		}

		.article p {
			color: #777;
		}

		.article .date {
			color: #999;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<h1>Halaman Berita</h1>

	<?php
		// Data berita
		$berita = array(
			array(
				"judul" => "Judul Berita 1",
				"konten" => "Konten berita 1",
				"tanggal" => "2024-02-13"
			),

		);

		// Tampilkan data berita
		foreach ($berita as $item) {
			echo "<div class='article'>";
			echo "<h2>" . $item['judul'] . "</h2>";
			echo "<p>" . $item['konten'] . "</p>";
			echo "<div class='date'>Diposting pada: " . $item['tanggal'] . "</div>";
			echo "</div>";
		}
	?>
</body>
</html>