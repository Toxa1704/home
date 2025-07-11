<?php 
  if(isset($_GET['download']) and $_GET['download']=='true') {
    $filename = 'test20html.php'; 
    ob_end_clean();
    header("Content-Type: application/octet-stream; "); 
    header("Content-Transfer-Encoding: binary"); 
    header("Content-Length: ". filesize($filename).";"); 
    header("Content-disposition: attachment; filename=" . $filename);
    readfile($filename);
    die();
  } else {
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style type="text/css">
			body {
				padding-top: 50px;
			}

			.dropdown-menu {
		    width: 190px;
			}

		   nav.navbar {
		    margin: 0;
		   }

			 .col-sm-4 img {
				 max-width:100%;
			   border: 1px solid #e4e6f2;
				 overflow: hidden;
				 border-radius: 5PX;
				 margin:15px 0 0 0;
				 -webkit-box-shadow: 0 0 20px rgba(43,45,56,.06);
				 box-shadow: 0 0 20px rgba(43,45,56,.06);
			 }
  </style>
	</head>
	<body>

		<?php
			$info = [
				"brand" => "SoloMono",
				"title" => "SoloMono",
				"description" => "Тестове завдання для HTML-верстальщика"
			];

			$categories = [
				'Мобільні телефони і гаджети',
				'Ноутбуки і Аксесуари',
				'Комп`ютери',
				'Розумні годинники'
			];

			$sub_categories = [
				'Ноутбуки',
				'Планшети',
				'Аксесуари до ноутбуків і ПК',
				'Комплектуючі',
				'Комп`ютери',
				'Книги',
				'Відеокарти'
			];
	 ?>


		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><?php echo '<b>'.$info['brand'].'</b>'; ?></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Кабінет</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категорії <span class="caret"></span></a>
		          <ul class="dropdown-menu">					
								<?php
									foreach ($categories as $category) {
											echo '<li class="dropdown-submenu"><a href="#">'.$category.'</a>';
											echo '<ul class="dropdown-menu">';
											foreach ($sub_categories as $sub_category) {
												echo '<li><a href="#">'.$sub_category.'</a></li>';
											}
											echo '</ul></li>';
									}
								?>
					
		          </ul>
		        </li>
						<li><a href="test20html.php?download=true"><u>Завантажити <b>test20html.php</b></u></a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

<div class="jumbotron text-center">
	<h1><?php echo '<b>'.$info['title'].'</b>'; ?></h1>
	<p><?php echo $info['description']; ?></p>
</div>


		<div class="container">
		  <div class="row">
		    <div class="col-sm-4">
		      <h3>Завдання 1</h3>
					<ul>
						<li>Вивести у верхньому меню список категорій (використати масив PHP <b>$categories</b>)
							<ul>
								<?php
									foreach ($categories as $category) {
											echo '<li>'.$category.'</li>';
									}
								?>
							</ul>
						</li>
						<li>Зробити щоб стрілка переверталась на 180 градусів якщо меню відкрите (Тільки CSS)</li>
						<li>Зробити щоб категорії в меню обрізались трьома крапками, в один рядок (Тільки CSS)</li>
					</ul>
		    </div>
		    <div class="col-sm-4">
		      <h3>Завдання 2</h3>
					<ul>
						<li>При наведенні на категорію "Комп`ютери", показувати список підкатегорій (без JS, використати масив PHP <b>$sub_categories</b>)</li>
                        <li>Не наводячи на пункт "Комп`ютери" потрібно, щоб візуально було видно і зрозуміло, що в ньому є список підкатегорій</li>
						<li>На появу меню підкатегорій додати CSS ефекти\анімацію на свій смак</li>
					</ul>
		    </div>
		    <div class="col-sm-4">
		      <h3>Завдання 3: </h3>
					<ul>
						<li>Максимально точно зверстати форму по макету вказаному нижче (звернути увагу, що input та checkbox мають не стандартний вид!)</li>
						<li>При наведенні на "Кабінет" показувати зверстану форму</li>
						<li>На появу форми додати CSS ефекти\анімацію на свій смак</li>
					</ul>
					<img src="data:image/png;base64,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" title="Макет">
		    </div>
            <div class="col-xs-12">
                <p><b>* Всі завдання потрібно виконати в цьому ж документі</b></p>
            </div>
		  </div>
		</div>

	</body>
</html>

<?php } ?>