google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
	var data = google.visualization.arrayToDataTable([
		["Bulan", "Berhasil", "Gagal"],
		["Jan", 100, 40],
		["Feb", 117, 46],
		["Mar", 360, 112],
		["Apr", 103, 54],
		["Mei", 250, 62],
		["Jun", 128, 54],
	]);

	var options = {
		title: "Grafik Hasil Panen (Bulan)",
		curveType: "function",
		legend: { position: "bottom" },
	};

	var chart = new google.visualization.LineChart(
		document.getElementById("curve_chart_bulanan")
	);

	chart.draw(data, options);
}
