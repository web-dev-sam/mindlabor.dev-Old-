<?php

	# Load twig templates
	require __DIR__ . "/vendor/autoload.php";

	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	$loader = new FilesystemLoader(__DIR__ . "/templates");
	$twig = new Environment($loader);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<?php # Title, meta tags & social media cards 
			echo $twig->render("meta.twig", [
				"title" => "Lessons - MindLabor",
				"description" => "Browse all lessons about various frameworks and technologies and learn how we have built them step by step.",
				"robots" => "index, follow",
				"image" => "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
				"tw_card" => "summary",
				"tw_site" => "@labor_mind",
				"tw_creator" => "@labor_mind",
				"og_url" => "https://www.mindlabor.dev/lessons",
				"og_type" => "blog",
				"content_url" => "https://www.mindlabor.dev/lessons",
			]);
		?>

		<link rel="shortcut icon" href="assets/global/mindlabor/favicon-32x32.png" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" crossorigin="anonymous">
		<link rel="stylesheet" href="css/content-overview.css">
	</head>
	<body>
		<div id="splash-wrapper"></div>

		<?php 
			echo $twig->render("header.twig", [
				"activesite" => "lessons"
			]);
		?>
		
		<section class="content-box">
			<div>
				<h1>Lessons</h1>
				<h2>Get an easy and fast introduction to various frameworks and technologies</h2>
			</div>
			<div class="content-box-wrapper">

				<?php echo $twig->render("content-box.twig", [
					"index" => 0,
					"thumbnail" => "assets/lessons/thumb-streams.svg",
					"href" => "/lesson/functional-streams-with-java",
					"title" => "Functional Streams with Java",
					"description" => "A useful trick to make your code more readable and concise.",
					"tags" => ["Java", "Functional"]
				]); ?>

				<?php echo $twig->render("content-box.twig", [
					"index" => 1,
					"thumbnail" => "assets/lessons/thumb-fft.svg",
					"href" => "/maintenance",
					"title" => "FFT in Javascript using p5.js",
					"description" => "Decompose an audio signal from your microphone into its frequencies using this simple library.",
					"tags" => ["p5.js", "Tools", "Audio"]
				]);?>

				<?php echo $twig->render("content-box.twig", [
					"index" => 1,
					"thumbnail" => "assets/lessons/thumb-fractals.jpg",
					"href" => "/maintenance",
					"title" => "Fractal Generation",
					"description" => "What are fractals? How do you generate them? And why do they look so fascinating?",
					"tags" => ["Generation", "Recursion", "Algorithms"]
				]);?>

			</div>
		</section>

		<?php 
			echo $twig->render("footer.twig", [
				"assets_path" => "assets/"
			]);
		?>

		<script type="application/ld+json">
			{ 
				"@context": "https://schema.org",
				"@type": "Organization",
				"name": "MindLabor",
				"url": "https://www.mindlabor.dev/",
				"logo": "https://www.mindlabor.dev/assets/global/mindlabor/white-bg-icon.png",
				"foundingDate": "2020",
				"founders": [{
					"@type": "Person",
					"name": "Samuel Braun"
				}],
				"email": "support@mindlabor.dev",
				"sameAs": [ 
					"http://twitter.com/labor_mind",
					"http://www.linkedin.com/in/samuel-braun",
					"http://github.com/MindLabor",
					"http://medium.com/@MindLabor",
					"http://www.instagram.com/mindlabor/"
				]
			}
		</script>
		<script src="https://unpkg.com/aos@next/dist/aos.js" integrity="sha384-ZGo5k5ISlEzWLoXyt+lnvKt9j03Z7GkxXh14zLqVy098XJhcdKHjL8pQYVMI8WiH" crossorigin="anonymous"></script>
		<script src="vendor/jquery-351.js"></script>
		<script src="js/general.js"></script>
		<script src="js/projects.js"></script>
	</body>
</html>