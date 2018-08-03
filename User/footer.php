<script>
	var slider = document.getElementById("range");
	var output = document.getElementById("limit");
	output.innerHTML = slider.value;

	slider.oninput = function() {
	  output.innerHTML = this.value;
	}
</script>

	</body>
</html>