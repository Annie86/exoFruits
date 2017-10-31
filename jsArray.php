<!DOCTYPE html>
<html>
<head>
	<title>JS ARRAYS</title>
</head>
<body>

	<input type="text" id="newFruit">
	<input type="button" value="Ajouter un fruit dans la liste" onclick="ajouter()">

	<ul id="fruitList" >
	</ul>
	s
	<input type="button" value="Debug" onclick="debug()">
	<script>
		var fruits = [];
		var button = "<input type='button' value='Supprimer' onclick='supprimer()'>";

		function ajouter () {
			var nomFruit =document.getElementById('newFruit').value;
			var newLength = fruits.push(nomFruit);
			document.getElementById("fruitList").innerHTML += "<li>"+fruits[newLength-1]+" "+button+"</li>";
		}

		function supprimer() {
			var newLength = fruits.push(nomFruit);
			var removedItem = fruits.splice(newLength-1);
		}

		function debug () {
			fruits.forEach(function(item, index, array) {
  			console.log(item, index);});
		}

	</script>

</body>
</html>