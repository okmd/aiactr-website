<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
<style>
	.c{
		width:500px;
		height: 400px;
		margin: 5px;
		background:rgb(31, 25, 23);
		float: left;
	}
</style>
<div class="c">
	<canvas id="line" width="500" height="400"></canvas>
</div>
<div class="c">
	<canvas id="bar" width="500" height="400"></canvas>
</div>
<div class="c">
	<canvas id="polarArea" width="500" height="400"></canvas>
</div>
<div class="c">
	<canvas id="pie" width="500" height="400"></canvas>
</div>
<div class="c">
	<canvas id="bubble" width="500" height="400"></canvas>
</div>
<div class="c">
	<canvas id="doughnut" width="500" height="400"></canvas>
</div>
<div class="c">
	<canvas id="radar" width="500" height="400"></canvas>
</div>
<script type="text/javascript">
	Chart.defaults.global.defaultFontColor = '#fff';
	var line = document.getElementById("line");
	var bar = document.getElementById("bar");
	var polarArea = document.getElementById("polarArea");
	var pie = document.getElementById("pie");
	var bubble = document.getElementById("bubble");
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
	new Chart(line, {
		type: 'line',
		data:{
	    	labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
	    	datasets: [
	        	{
		            label: 'Registered',
			        data: [220,125,130,225,140,230,126],
			        backgroundColor: ['rgba(25, 99, 132, 0.2)'],
			        borderColor: ['rgba(25,99,132,1)'],
			        textColor:'red',
			        borderWidth:4
	       		},
	        	{
		            label: 'Placed',
			        data: [102,102,123,105,104,153,109],
			        backgroundColor: ['rgba(225, 99, 132, 0.2)'],
			        borderColor: ['rgba(225,99,132,1)'],
			        borderWidth:4
	        	}
	        ]
		},
		options: {
	        title: {
	            display: true,
	            text: 'Total students registred vs placed in last five years'
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
	new Chart(bubble, {
	    type: 'bubble',
	    data: {
				datasets: [
				        {
				            label: 'B.Tech',
				            data: [
				                {
				                    x:3.3,
				                    y:4.3,
				                    r:5.5
				                }
				            ],
				            backgroundColor:"#FF0884",
				            hoverBackgroundColor: "#FF0811",
				        },
				         {
				            label: 'M.Tech',
				            data: [
				                {
				                    x:3.4,
				                    y:3.3,
				                    r:4.1
				                }
				            ],
				            backgroundColor:"#FF9384",
				            hoverBackgroundColor: "#FF9311",
				        }]
				},
	    options: {
	    	 scales: {
	            xAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }],
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        },
	        title:{
	        	display:true,
	        	text:'Maximaum Salary(LPA) in last 3 Years(14,15,16)'
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