<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!--adding custom css-->
		<!--rel means relationship and means style sheet-->
		<!--if you fail to do rel it will break your style sheet-->
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		
		<title>My Web Page</title>
	</head>
	<body>
		<!--shift+ctrl+/ this shows a comment right in here. That's a quick way to insert a comment-->
		<header>
			<h1>Hi World</h1>
		</header>
		<!--start main content here-->
		<main>
			<!--.comment.text.goes.here. you can use this for php elements if needed.-->
			<p id="first-paragraph">f;awoeifjawoeifjaw;ofjaw;oija;awifja;ow ;aoweifja;woifj wa;aowfeijaw;ofjaweo;f aw;oif;oiajwf;eojaw;eofij awf;oaiwj ef;awoijef;aowjef ;awoifj a;wojef a;woiefj;awoifj aw;oifja;owefj ;oawf</p>
			<h2 class="pretty-title">Welcome to my web page</h2>
			<h3>This is an h3 tag</h3>
			<p></p>

			<!--unordered list-->
			<ul>
				<li><strong>item 1</strong></li>
				<li><em>item 2</em></li>
				<li>item 3</li>
			</ul>

			<!--ordered list-->
			<ol>
				<li>item 1</li>
				<li>item 2</li>
				<li>item 3</li>
			</ol>
			<div>
				<a href="https://google.com" target="_blank">Go to google.com</a>
			</div>
			<img src="images/batman.jpg" alt="batman"/>
			<table>
				<tr>
					<th>
						table cell 1
					</th>
					<th>
						table cell 2
					</th>
				</tr>
				<tr>
					<td>
						table cell 3
					</td>
					<td>
						table cell 4
					</td>
				</tr>
			</table>
		</main>

		<footer>
			&copy; 2016
		</footer>
	</body>
</html>