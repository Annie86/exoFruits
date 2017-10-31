<!DOCTYPE html>
<html>
<head>
	<title>JS ARRAYS</title>
</head>
<body>

	<input type="text" id="newFruit">
	<input type="button" value="Ajouter un fruit dans la liste">

	<ul id="fruitList" >
		<li>Orange <button>supprimer</button></li>

	</ul>
	<input type="button" value="Debug" onclick="debug()">
	<script>
		var fruits = [];
		function ajouter () {
			var nomFruit =document.getElementById(newFruit).value;
			var newLength = fruits.push(nomFruit);
		}

		function debug () {
			fruits.forEach(function(item, index, array) {
  			console.log(item, index);});
		}

	</script>

</body>
</html>