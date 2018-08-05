<script>
	var slider = document.getElementById("range");
	var output = document.getElementById("limit");
	output.innerHTML = slider.value;

	slider.oninput = function() {
	  output.innerHTML = this.value;
	}

	function copy() {
		var copyText = document.getElementById("refLink");	  
		copyText.select();
	  	document.execCommand("copy");
	}

</script>

	</body>
</html>