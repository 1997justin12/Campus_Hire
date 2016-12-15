var stat = [];
var get_stats = setInterval(get_the_stat,3000);

	stat.push({v_s: 67});
	stat.push({s: 28});
	stat.push({v_g: 10});
	stat.push({g: 7});
	stat.push({p: 4});

function get_the_stat()
{
	$.get(
		"../Database/Statistics.php?stat_check",
		function success(data)
		{
			var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{

			verticalAlign: 'top',
			horizontalAlign: 'left'
		},
                animationEnabled: true,
		data: [
		{        
			type: "doughnut",
			startAngle:20,
			toolTipContent: "{label}: {y} - <strong>#percent%</strong>",
			indexLabel: "{label} #percent%",
			dataPoints: [
				{  y: stat[0]['v_s'],  label: "Very Satisfied" },
				{  y: stat[1]['s'], label: "Satisfied" },
				{  y: stat[2]['v_g'], label: "Very Good" },
				{  y: stat[3]['g'],  label: "Good"},
				{  y: stat[4]['p'],  label: "Poor"}
			]
		}
		]
	});
	chart.render();
		}
		);
}

// window.onload = function () {
	
// 	var chart = new CanvasJS.Chart("chartContainer",
// 	{
// 		title:{

// 			verticalAlign: 'top',
// 			horizontalAlign: 'left'
// 		},
//                 animationEnabled: true,
// 		data: [
// 		{        
// 			type: "doughnut",
// 			startAngle:20,
// 			toolTipContent: "{label}: {y} - <strong>#percent%</strong>",
// 			indexLabel: "{label} #percent%",
// 			dataPoints: [
// 				{  y: stat[0]['v_s'],  label: "Very Satisfied" },
// 				{  y: stat[1]['s'], label: "Satisfied" },
// 				{  y: stat[2]['v_g'], label: "Very Good" },
// 				{  y: stat[3]['g'],  label: "Good"},
// 				{  y: stat[4]['p'],  label: "Poor"}
// 			]
// 		}
// 		]
// 	});
// 	chart.render();
// }

console.log(t);