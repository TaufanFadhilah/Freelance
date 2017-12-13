$( document ).ready(function() {
    var ctx3 = document.getElementById("chart3").getContext("2d");
    var data3 = [
        {
            value: 300,
            color:"#da4f46",
            highlight: "#da4f46",
            label: "{{$data}}"
        },
        {
            value: 50,
            color: "#fbd000",
            highlight: "#fbd000",
            label: "Light"
        },
		 {
            value: 50,
            color: "#00a6e2",
            highlight: "#00a6e2",
            label: "Dark"
        },
		 {
            value: 50,
            color: "#81be50",
            highlight: "#81be50",
            label: "Megna"
        },
        {
            value: 100,
            color: "#545aa8",
            highlight: "#545aa8",
            label: "Orange"
        }
    ];

    var myPieChart = new Chart(ctx3).Pie(data3,{
        segmentShowStroke : true,
        segmentStrokeColor : "#fff",
        segmentStrokeWidth : 0,
        animationSteps : 100,
		tooltipCornerRadius: 0,
        animationEasing : "easeOutBounce",
        animateRotate : true,
        animateScale : false,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });

});
