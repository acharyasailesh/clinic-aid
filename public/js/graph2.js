$(function () {
	var year=$("#year").html();
	var data1= [0,0,0,0,0,0,0,0,0,0,0,0];
	var data2= [0,0,0,0,0,0,0,0,0,0,0,0];
	var labels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];


	// var lineData = {};
	// var lineDatasets = [];
	// var lineDataset1 = {};
	// var lineDataset2 = {};

	// lineDataset1.lable = "Last year";
	// lineDataset1.fillColor = "rgba(220,220,220,0.5)";
	// lineDataset1.strokeColor = "rgba(220,220,220,1)";
	// lineDataset1.pointColor = "rgba(220,220,220,1)";
	// lineDataset1.pointStrokeColor = "#fff";
	// lineDataset1.pointHighlightFill = "#fff";
	// lineDataset1.pointHighlightStroke = "rgba(220,220,220,1)";
	// lineDataset1.data = data1;
	// lineDatasets[0] = lineDataset1;

	// lineDataset2.lable = "This year";
	// lineDataset2.fillColor = "rgba(26,179,148,0.5)";
	// lineDataset2.strokeColor = "rgba(26,179,148,0.7)";
	// lineDataset2.pointColor = "rgba(26,179,148,1)";
	// lineDataset2.pointStrokeColor = "#fff";
	// lineDataset2.pointHighlightFill = "#fff";
	// lineDataset2.pointHighlightStroke = "rgba(26,179,148,1)";
	// lineDataset2.data = data2;
	// lineDatasets[1] = lineDataset2;

	// lineData.labels = labels;
	// lineData.datasets = lineDatasets;

	// var lineOptions = {
	// 	scaleShowGridLines: true,
	// 	scaleGridLineColor: "rgba(0,0,0,.05)",
	// 	scaleGridLineWidth: 1,
	// 	bezierCurve: true,
	// 	bezierCurveTension: 0.2,
	// 	pointDot: true,
	// 	pointDotRadius: 3,
	// 	pointDotStrokeWidth: 1,
	// 	pointHitDetectionRadius: 20,
	// 	datasetStroke: true,
	// 	datasetStrokeWidth: 2,
	// 	datasetFill: true,
	// 	responsive: true,
	// };
	// console.log(lineDataset2);
	// var ctx = document.getElementById("lineChart").getContext("2d");
	// var myNewChart = new Chart(ctx).Line(lineData, lineOptions);



	var barData = {};
	var barDatasets = [];
	var barDataset1 = {};
	var barDataset2 = {};

	barDataset1.lable = "Last year";
	barDataset1.fillColor = "rgba(220,220,220,0.5)";
	barDataset1.strokeColor = "rgba(220,220,220,0.8)";
	barDataset1.highlightFill = "rgba(220,220,220,0.75)";
	barDataset1.highlightStroke = "rgba(220,220,220,1)";
	barDataset1.data = data1;
	barDatasets[0] = barDataset1;

	barDataset2.lable = "This year";
	barDataset2.fillColor = "rgba(26,179,148,0.5)";
	barDataset2.strokeColor = "rgba(26,179,148,0.8)";
	barDataset2.highlightFill = "rgba(26,179,148,0.75)";
	barDataset2.highlightStroke = "rgba(26,179,148,1)";
	barDataset2.data = data2;
	barDatasets[1] = barDataset2;

	barData.labels = labels;
	barData.datasets = barDatasets;

	var barOptions = {
		scaleBeginAtZero: true,
		scaleShowGridLines: true,
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleGridLineWidth: 1,
		barShowStroke: true,
		barStrokeWidth: 2,
		barValueSpacing: 5,
		barDatasetSpacing: 1,
		responsive: true,
	};

	ctx = document.getElementById("barChart").getContext("2d");
	myNewChart = new Chart(ctx).Bar(barData, barOptions);
	var url="http://localhost:8000/api/graph/"+ year;

	$.get(url, function(data, status){
		var jData = JSON.parse(data);
		data2 = jData[0];
		data1 = jData[1];
		processData();
	});
	function processData(){
		labels = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

		lineData = {};
		lineDatasets = [];
		lineDataset1 = {};
		lineDataset2 = {};

		lineDataset1.lable = "Last year";
		lineDataset1.fillColor = "rgba(220,220,220,0.5)";
		lineDataset1.strokeColor = "rgba(220,220,220,1)";
		lineDataset1.pointColor = "rgba(220,220,220,1)";
		lineDataset1.pointStrokeColor = "#fff";
		lineDataset1.pointHighlightFill = "#fff";
		lineDataset1.pointHighlightStroke = "rgba(220,220,220,1)";
		lineDataset1.data = data1;
		lineDatasets[0] = lineDataset1;

		lineDataset2.lable = "This year";
		lineDataset2.fillColor = "rgba(26,179,148,0.5)";
		lineDataset2.strokeColor = "rgba(26,179,148,0.7)";
		lineDataset2.pointColor = "rgba(26,179,148,1)";
		lineDataset2.pointStrokeColor = "#fff";
		lineDataset2.pointHighlightFill = "#fff";
		lineDataset2.pointHighlightStroke = "rgba(26,179,148,1)";
		lineDataset2.data = data2;
		lineDatasets[1] = lineDataset2;

		lineData.labels = labels;
		lineData.datasets = lineDatasets;

		lineOptions = {
			scaleShowGridLines: true,
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleGridLineWidth: 1,
			bezierCurve: true,
			bezierCurveTension: 0.2,
			pointDot: true,
			pointDotRadius: 3,
			pointDotStrokeWidth: 1,
			pointHitDetectionRadius: 20,
			datasetStroke: true,
			datasetStrokeWidth: 2,
			datasetFill: true,
			responsive: true,
		};
		console.log(lineDataset2);

		ctx = document.getElementById("lineChart").getContext("2d");
		myNewChart = new Chart(ctx).Line(lineData, lineOptions);


		barData = {};
		barDatasets = [];
		barDataset1 = {};
		barDataset2 = {};

		barDataset1.lable = "Last year";
		barDataset1.fillColor = "rgba(220,220,220,0.5)";
		barDataset1.strokeColor = "rgba(220,220,220,0.8)";
		barDataset1.highlightFill = "rgba(220,220,220,0.75)";
		barDataset1.highlightStroke = "rgba(220,220,220,1)";
		barDataset1.data = data1;
		barDatasets[0] = barDataset1;

		barDataset2.lable = "This year";
		barDataset2.fillColor = "rgba(26,179,148,0.5)";
		barDataset2.strokeColor = "rgba(26,179,148,0.8)";
		barDataset2.highlightFill = "rgba(26,179,148,0.75)";
		barDataset2.highlightStroke = "rgba(26,179,148,1)";
		barDataset2.data = data2;
		barDatasets[1] = barDataset2;

		barData.labels = labels;
		barData.datasets = barDatasets;


		barOptions = {
			scaleBeginAtZero: true,
			scaleShowGridLines: true,
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleGridLineWidth: 1,
			barShowStroke: true,
			barStrokeWidth: 2,
			barValueSpacing: 5,
			barDatasetSpacing: 1,
			responsive: true,
		};

		ctx = document.getElementById("barChart").getContext("2d");
		myNewChart = new Chart(ctx).Bar(barData, barOptions);

	}

});