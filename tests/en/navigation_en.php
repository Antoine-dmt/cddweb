<header id="header">
	
	<div class="logo">

		<?php
		if(array_key_exists('lang', $_GET))
		{
			echo '<a class="imagea" href=index.php?lang=de><img src="Images/logos/logo_cdd2020_transparent.png"></a>';
		}
		else
		{
			echo '<a class="imagea" href=index.php><img src="Images/logos/logo_cdd2020_transparent.png"></a>';
		}
		?>

	</div>

	<div class="content">
		<div class="inner">
			<h1>
				PhD Student Conference
			</h1>
			<h2>
				March 23 - 27 2020
			</h2>
		</div>
	</div>

	<nav id="nav">
		<ul>
			<?php
				if(array_key_exists('lang', $_GET))
				{
					echo '<li> <a href=./index.php?page=infos&lang=en>Infos</a> </li>';
					echo '<li> <a href=./index.php?page=program&lang=en>Program</a> </li>';
				    echo '<li> <a href=./index.php?page=jobs&lang=en>Jobs</a> </li>';
					echo '<li> <a href=./index.php?page=access&lang=en>Access</a> </li>';
					echo '<li> <a href=./index.php?page=contact&lang=en>Contact</a> </li>';
				}
				else
				{
					echo '<li> <a href=./index.php?page=infos>Infos</a> </li>';
					echo '<li> <a href=./index.php?page=program>Program</a> </li>';
				    echo '<li> <a href=./index.php?page=jobs>Jobs</a> </li>';
					echo '<li> <a href=./index.php?page=access>Access</a> </li>';
					echo '<li> <a href=./index.php?page=contact>Contact</a> </li>';	
				}
			?>
		</ul>
	</nav>

	<?php
		if(!empty($_SESSION))
		{
		?>

		<nav id="nav">
			<ul>
				<?php
				echo '<li> <a href=./index.php?page=abstract>Abstracts</a> </li>';
				?>

			<?php
				if($_SESSION['status'] == 'admin' || $_SESSION['status'] == 'job' || $_SESSION['status'] == 'program' || $_SESSION['status'] == 'foreign')
				{
					echo '<li> <a href=./index.php?page=guests>Guests</a> </li>';
				}
				if($_SESSION['status'] == 'admin')
				{
					echo '<li> <a href=./index.php?page=admin>Admin</a> </li>';
				}

			?>
			</ul>
		</nav>

		<?php
		}
	?>

</header>
