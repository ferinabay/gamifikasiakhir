function countdown(elementName, jam, minutes, seconds) {
	var element, su, endTime, hours, mins, msLeft, time;

	function twoDigits(n) {
		return (n <= 9 ? "0" + n : n);
	}

	function updateTimer() {
		msLeft = endTime - (+new Date);
		if (msLeft < 1000) {
			element.innerHTML = "Time is up :( Refresh halamanmu dan inputkan ulang kontenmu, Semangat! :)";
			document.getElementById("tgl").disabled = true;
			document.getElementById("kategori").disabled = true;
			document.getElementById("judul").disabled = true;
			document.getElementById("mytextbox2").disabled = true;
			document.getElementById("editor").disabled = true;
			document.getElementById("agree").disabled = true;
			document.getElementById("tambahktn").disabled = true;

		} else {
			time = new Date(msLeft);
			hours = time.getUTCHours();
			mins = time.getUTCMinutes();
			element.innerHTML = (hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time.getUTCSeconds());

			setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
		}
	}
	element = document.getElementById("ten-countdown");
	endTime = (+new Date) + 1000 * (3600 * jam + 60 * minutes + seconds) + 500;
	updateTimer();
}
var jm = document.getElementById("jam").value;
var mn = document.getElementById("min").value;
countdown("ten-countdown", jm, mn, 0);
