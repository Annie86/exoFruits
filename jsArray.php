<!DOCTYPE html>
<html>
	<head>
		<title>JS ARRAYS</title>
	</head>
	<body>
		<input type="text" id="newFruit" onkeypress="keyPressOnNewFruit()">
		<input type="button" value="Ajouter un fruit dans la liste" onclick="ajouter()">
		<ul id="fruitList" >
		</ul>
		<input type="button" value="Debug" onclick="debug()">
		<script>
			var fruits = [];
			
			function ajouter () {
				var nomFruit =document.getElementById('newFruit').value;
				var newLength = fruits.push(nomFruit);
				show();
				document.getElementById("newFruit").value = "";
				
				
			}
			function show(){
				document.getElementById("fruitList").innerHTML= "";
				for (var i = 0; i < fruits.length; i++) {
					document.getElementById("fruitList").innerHTML += "<li>"+fruits[i]+" <input type='button' value='Supprimer' onclick='supprimer("+i+")'></li>";
				}
			}
			function supprimer(pos) {
				var removedItem = fruits.splice(pos, 1);
				show();
			}
			function debug () {
				fruits.forEach(function(item, index, array) {
				console.log(item, index);});
			}

			function keyPressOnNewFruit(){
				if (event.keyCode == 13) {
					ajouter();
				}
			}
		</script>
	</body>
</html>