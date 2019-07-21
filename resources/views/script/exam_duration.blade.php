<script type="text/javascript">
	window.onload=function(){
		display = document.querySelector('#time')
		startTimer({{$timeleft}}, display);
		window.setTimeout(function(){window.location.href ="/user/exam/finalize"}, ({{$timeleft}}*1000))
	}
	function startTimer(duration, display) {
		var timer = duration, minutes, seconds;
		setInterval(function () {
			minutes = parseInt(timer / 60, 10)
			seconds = parseInt(timer % 60, 10);

			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.textContent = minutes + ":" + seconds;

			if (--timer < 0) {
				timer = duration;
			}
		}, 1000);
	}
</script>