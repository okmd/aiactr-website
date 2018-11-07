<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>

<style type="text/css">
	
	#line,#bar.#radar,#polarArea,#pie,#doughnut{
		width:500px;
		height:400px;
		
	}
	.container-canvas{
		background:rgb(31, 25, 23);
	}
</style>
<div class="container" style="margin-top: 10px;">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
					<h3 class="text-center">Previous Year Placements</h3>
					<!--Select year-->
					<p>
						<select class="form-control" >
						<option>Select Year</option>
						<option>Complete</option>
						<option>2010</option>
						<option>2015</option>
						</select>
					</p>
					<!--Select programm-->
					<p>
						<select class="form-control" >
							<option>Select Programme</option>
							<option>B.Tech</option>
							<option>M.Tech</option>
						</select>
					</p>
					<!--Select graph-->
					<p>
						<select class="form-control">
							<option>Select Type</option>
							<optgroup label="Tabular">
								<option>Tabular</option>
							</optgroup>
							<optgroup label="Graphical">
								<option>Maximum salary</option>
								<option>Registred vs placed</option>
								<option>Company wise selection</option>
								<option>Stream wise selection</option>
								<option>Project wise selection</option>
								<option>Student palced</option>
							</optgroup>	
						</select>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
				<!--B.tech-->
				<div class="col-md-12 hide">
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th rowspan="2">Company name</th>
							<th colspan="3">Package offered (LPA)</th>
							<th colspan="3">Student selected</th>
						</tr>
						<tr>
							<th>ECE</th>
							<th>CSE</th>
							<th>Intern</th>
							<th>ECE</th>
							<th>CSE</th>
							<th>Intern</th>
						</tr>
					</thead>
					<tbody>
				<tr>
					<td>Samsung</td>
					<td>14</td>
					<td>12</td>
					<td>10</td>
					<td>5</td>
					<td>10</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Google</td>
					<td>14</td>
					<td>12</td>
					<td>10</td>
					<td>5</td>
					<td>10</td>
					<td>5</td>
				</tr>
					</tbody>
					<tfoot>
				<tr>
					<th>Total</th>
					<th>66</th>
					<th>333</th>
					<th>222</th>
					<th>333</th>
					<th>222</th>
					<th>333</th>
				</tr>
					</tfoot>
				</table>
			</div>
				</div>
				<!--M.Tech-->
				<div class="col-md-12 hide">
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th rowspan="2">Company name</th>
							<th rowspan="2">Package offered (LPA)</th>
							<th colspan="4">Student selected</th>
						</tr>
						<tr>
							<th>Information Security</th>
							<th>Digital Communication</th>
							<th>Signal Processing</th>
							<th>RF & Microwave</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Samsung</td>
							<td>14</td>
							<td>12</td>
							<td>10</td>
							<td>5</td>
							<td>10</td>
						</tr>
						<tr>
							<td>Google</td>
							<td>14</td>
							<td>12</td>
							<td>10</td>
							<td>5</td>
							<td>10</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Total</th>
							<th>66</th>
							<th>333</th>
							<th>222</th>
							<th>333</th>
							<th>222</th>
						</tr>
					</tfoot>
				</table>
			</div>
				</div>
				<!--Graph changeit-->
				<div class="col-md-12">
			<h4 class="text-center">Registred vs Placed</h4>
			<div class="container-canvas">
				<canvas id="line"></canvas>
			</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- copy paste from here-->
	<div class="row hide">
		<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-sm-12 col-md-6 col-lg-6 ">
					<h4 class="text-center">Registred vs Placed in last five years</h4>
					<div class="container-canvas">
						<canvas id="line"></canvas>
					</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 ">
					<h4 class="text-center">Year vs brach</h4>
					<div class="container-canvas">
						<canvas id="bar"></canvas>
					</div>
					</div>
			</div>
		</div>
	</div>

	<div class="row hide">
		<div class="col-sm-12 col-md-6 col-lg-6 ">
			<h4 class="text-center">Registred vs Placed in last five years</h4>
			<div class="container-canvas">
				<canvas id="pie"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 ">
			<h4 class="text-center">Year vs brach</h4>
			<div class="container-canvas">
				<canvas id="polarArea"></canvas>
			</div>
		</div>
	</div>

	<div class="row hide">
		<div class="col-sm-12 col-md-6 col-lg-6 ">
			<h4 class="text-center">Registred vs Placed in last five years</h4>
			<div class="container-canvas">
				<canvas id="doughnut"></canvas>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 ">
			<h4 class="text-center">Year vs brach</h4>
			<div class="container-canvas">
				<canvas id="radar"></canvas>
			</div>
		</div>
	</div>
</div>
<script>
	Chart.defaults.global.defaultFontColor = '#fff';
	var line = document.getElementById("line");
	var bar = document.getElementById("bar");
	var polarArea = document.getElementById("polarArea");
	var pie = document.getElementById("pie");
	var doughnut = document.getElementById("doughnut");
	var radar = document.getElementById("radar");
	new Chart(bar, {
	    type: 'bar',
	    data: {
	        labels: ["B.Tech", "M.tech", "Internships"],
	        datasets: [
			    {
		            label: "2013-14",
		            backgroundColor: "#2196F3",
		            data: [180,99,52]
		        },
		        {
		            label: "2014-15",
		            backgroundColor: "#673AB7",
		            data: [149,113,15]
		        },
		        {
		            label: "2015-16",
		            backgroundColor: "green",
		            borderColor:"darkgreen",
		            borderWidth:2,
		            data: [371,152,116]
		        }],

	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        },
	        title:{
	        	display:true,
	        	text:'No of stuudents placed in last three years'
	        }
	    }
	});
	var data = {
    labels: ["CSE", "ECE", "Internship", "Microwave", "Embedded system", "Digital electronics", "Coding"],
    datasets: [
        {
            label: "Placed",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,192,192,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [22, 11, 33, 55, 11, 23, 23],
            spanGaps: false,
        },
        {
            label: "Placed",
            fill:false,
            lineTension: 0.1,
            backgroundColor: "rgba(75,192,192,0.4)",
            borderColor: "rgba(75,112,112,1)",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [63, 53, 83, 83, 53, 53, 43],
            spanGaps: false,
        }
    ]
	};
	new Chart(line, {
		type: 'line',
		data:data,
		options: {
	        title: {
	            display: true,
	            text: 'Total students registred vs placed in last years'
	        },
	    scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:false
                }
            }]
        }

	    }
	});
	new Chart(polarArea, {
	    type: 'polarArea',
	    data: {
	    	labels: ["Microsoft","Google","Yahoo!","Flipkart","Amazon"],
	        datasets: 
	        [{
	        	data: [1,2,3,5,8],
	        	backgroundColor: ["#FF6384","#4BC0C0","#FFCE56","#E7E9ED","#36A2EB"],
	        	label: 'My dataset' // for legend
    		}]},
	    options:{
	        title:{
	        	display:true,
	        	text:"Company wise selection in last year"
	        }
	    }
	});
	new Chart(pie, {
	    type: 'pie',
	    data: {
	        labels: ["2010", "2011", "2012", "2013", "2014", "2015"],
	        datasets: [{
	            label: 'Selected students',
	            data: [4.4,2.9,8.2,3.5,5.5,5.6],
	            backgroundColor: [
	                'rgba(255, 99, 132,1)',
	                'rgba(54, 162, 235, 1)',
	                'rgba(255, 206, 86, 1)',
	                'rgba(75, 192, 192, 1)',
	                'rgba(153, 102, 255, 1)',
	                'rgba(255, 159, 64, 1)'
	            ],
	            borderColor: [
	                'white'
	            ],
	            borderWidth: 3
	        }]
	    },
	    options: {
	        title:{
	        	display:true,
	        	text:'Maximaum salary in previous years(LPA)'
	        }
	    }
	});
	new Chart(doughnut, {
	    type: 'doughnut',
	    data: {
			    labels: [
			        "CSE",
			        "ECE",
			        "Internships"
			    ],
			    datasets: [
			        {
			            data: [300, 50, 100],
			            backgroundColor: [
			                "#FF6384",
			                "#36A2EB",
			                "#FFCE56"
			            ],
			            hoverBackgroundColor: [
			                "#FF6384",
			                "#36A2EB",
			                "#FFCE56"
			            ]
			        }]
    			},
	    options: {
	        title:{
	        	display:true,
	        	text:'Stream wise selection in 2010'
	        }
	    }
	});
	new Chart(radar, {
	    type: 'radar',
	    data: {
			    labels: ["Web Projects", "Embedded System", "Signal and System", "Sofware Design", "Coding"],
			    datasets: [
			        {
			            label: "In 2015",
			            backgroundColor: "#96f",
			            borderColor: "white",
			            pointBackgroundColor: "#96f",
			            pointBorderColor: "#fff",
			            pointHoverBackgroundColor: "#fff",
			            pointHoverBorderColor: "rgba(255,99,132,1)",
			            data: [65, 59, 30, 81, 56]
			        },
			        {
			            label: "In 2016",
			            backgroundColor: "#4bc0c0",
			            borderColor: "white",
			            pointBackgroundColor: "#4bc0c0",
			            pointBorderColor: "#fff",
			            pointHoverBackgroundColor:"white",
			            pointHoverBorderColor: "rgba(255,99,132,1)",
			            data: [28, 48, 40, 19, 46]
			        }
			    ]
			},
	    options: {
	        title:{
	        	display:true,
	        	text:'Project wise selection'
	        }
	    }
	});
</script>