<?php?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>jQuery UI Draggable - Default functionality</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="plot.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
  font-family: "Lato", sans-serif !important;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10+ and Edge */
  user-select: none; /* Standard syntax */
}
* {
  box-sizing: border-box;
}

body {
  background-color: #b4b3b34d;
  font-family: Helvetica, sans-serif !important;
}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #5f5f5f;
  overflow-x: hidden;
  padding-top: 20px;
  box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

table {
  border-collapse: collapse;
  width: 100%;
}



.head{background-color: white !important;}
.arr{
 padding: 8px;
 background-color: #4CAF50 !important;
 
}
.arr1{
 padding: 8px;
 background-color: white !important;
 color:black;
 cursor: pointer;
}


.arr22{
    border-bottom: 4px solid grey;
    background-color: #707375!important;
    border: 1px solid white !important;
}

.main {
  font-size: 20px;
  padding: 20px;
  padding-left: 35px;
}



/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 0px;
  position: relative;
  background-color: #e8e8e8;
  width: 100%;
}

/* The circles on the timeline */
.container::after {
  box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: #5f5f5f;
  border: 3px solid #5f5f5f;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  margin-bottom: 40px;
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
  box-shadow:0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}

a{
    cursor: pointer;
}
.a{
    color:#7be77f !important;
}
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
  position: absolute;
  bottom: 0px;
}

.progress-bar {
  height: 8px;
  background: #4caf50;
  width: 0%;
}

.btn2 {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}
.success1 {background-color: #4CAF50;} /* Green */
.success1:hover {background-color: #46a049;} /* Green */
.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #0b7dda;}
.color {background-color: #0b7dda !important;}
.btn1 {
  border: none;
  margin:2px;
  color: white;
  padding: 10px;
  font-size: 12px;
  cursor: pointer;
  float:left;
}

@media (min-width: 768px){
  .modal-dialog {
      width: 72%;
      margin: 30px auto;
  }
}

@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
.modal-backdrop.in {
    filter: alpha(opacity=50);
    opacity: 0.7 !important;
}


/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-1 {height: 18px; background-color: #4CAF50;}
.bar-2 {height: 18px; background-color: #2196F3;}

@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

.newcolor{
    background-color:red !important;
}
.removeme{
  min-width: 200px !important;
}
.arr2{
  min-width:200px !important;
  background-color:#707375db !important;
}

hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #100f0f;
}
.hr1 {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid red;
}


.nodemorethan4{
  background-color: #ff1717 !important;
}



.id{
  width:15%;
}

td {
    padding: 5px !important;
    line-height: 1.42857143;
    vertical-align: middle !important;;
    border-top: 1px solid #ddd;
}

.arr2 {
    padding: 10px !important;
    line-height: 1.42857143;
    vertical-align: middle !important;;
    border-top: 1px solid #ddd;
}

.table_div{
  overflow: auto;
    padding: 10px;
}

.chcolor{
  background-color: #2196f3d4 !important;
  color:white !important;
}

.deleteme{
    border: 2px solid #8ba1b387;
    box-shadow: 0 10px 16px 0 #c2c2c262 !important;
    overflow: auto;
    margin-top:20px;
}

strong {
  font-size: 15px;
}


table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th {
  cursor: pointer;
  background-color: #bdbaba;
  color: white;
}

th, td {
  text-align: left;
  padding: 16px;
  padding-left: 20px !important;
  font-size: 13px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

  </style>
  

</head>
<body>


    <div class="main" >
        <div   style="display: block;width:100%;padding:0px"> 
            <div  class="content ">
                  <h2 > <i class="material-icons" style="font-size:25px;">brightness_1</i> Comparative Performance Analysis of DSDV, AODV and DSR Routing Protocols using NS2  </h2>
            </div>
        </div>

        
          <div  class="content" id="main1" style="overflow: hidden;">
                <button id="itera" class="btn2 info" style="float:right" onclick="do_me()">Start</button>
                <select class="form-control"  id="file_s" style="float:left;width:200px" >
                  <option value="MCN_50">MCN_50</option>
                  <option value="MCN_100">MCN_100</option>
                  <option value="MCN_200">MCN_200</option>
                </select>

                <br><br>
                <h2 style="float:left">Example</h2> 
                <br><br><br>
                <div   id="main" style="overflow: hidden;">
               
                </div>
          </div>
        </div>

        
        
      <br><br><br><br><br><br><br><br><br>
      <div id="s9" class="container left" >
        <div  class="content" >
          <h2 style="text-align: center;">Thanks!</h2> 
          <h4 style="text-align: center;">Adnan Mehrat</h5> 
        </div>
      </div>
      <br><br><br><br><br><br><br> 
    </div>
    

    

<script>





var ratio = [];
var delay = [];
var through = [];
var energy = [];
var div_conter = 0 ;
var x = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

function do_me(){
  div_conter = 0 ;
  $("#main").empty();
  get_json('Aodv');
  get_json('Dsdv');
  get_json('Dsr');
}

function get_json(str){
  $.ajax({
    url: 'controller1.php?'+"method="+str+"&file_s="+$("#file_s").val(),
    async: false,
    success: function(data) {
          var obj = JSON.parse(data);
          ratio= obj.ratio ;
          energy= obj.energy ;
          delay= obj.delay ;
          through= obj.through ;
          $("#main").append(
            '<h3 style="color:red"> - '+str+' </h3>'+
            '<div id="main_main_plot_'+div_conter+'" style="width:100%; overflow-x: hidden;">'+
              '<div id="plot_ratio_'+div_conter+'" style="float:left"> </div>'+
              '<div id="plot_delay_'+div_conter+'" style="float:right" > </div>'+
              '<div id="plot_through_'+div_conter+'" style="float:left"> </div>'+
              '<div id="plot_energy_'+div_conter+'" style="float:right" > </div>'+
            '</div>'+
            '<br><hr>'
          );
          points(x,ratio,'Packet Delivery Ratio ','File','ratio');
          $("#plot_ratio_"+div_conter).append(
            '<table class="table table-bordered"  id="plot_ratio_myTable'+div_conter+'">'+
              '<tr>'+
                '<th  name="plot_ratio_myTable'+div_conter+'" onclick="sortTable(this)">File</th>'+
                '<th  name="plot_ratio_myTable'+div_conter+'" onclick="sortTable(this)">PDR   -  Click to Sort</th>'+
              '</tr>'+
            '</table>'
          );
          
          for(var i = 0 ; i < ratio.length ; i++){
            $("#plot_ratio_myTable"+div_conter).append(
                '<tr>'+
                  '<td>'+i+'</td>'+
                  '<td>'+ratio[i]+'</td>'+
                '</tr>'
            );
          }

          points(x,energy,'Energy Used j ','File','energy');
          $("#plot_energy_"+div_conter).append(
            '<table class="table table-bordered"  id="plot_energy_myTable'+div_conter+'">'+
              '<tr>'+
                '<th  name="plot_energy_myTable'+div_conter+'" onclick="sortTable(this)">File</th>'+
                '<th  name="plot_energy_myTable'+div_conter+'" onclick="sortTable(this)">Energy   -  Click to Sort</th>'+
              '</tr>'+
            '</table>'
          );
          for(var i = 0 ; i < energy.length ; i++){
            $("#plot_energy_myTable"+div_conter).append(
                '<tr>'+
                  '<td>'+i+'</td>'+
                  '<td>'+energy[i]+'</td>'+
                '</tr>'
            );
          }
          points(x,delay,'End-2-End Delay','File','delay');
          $("#plot_delay_"+div_conter).append(
            '<table class="table table-bordered"  id="plot_delay_myTable'+div_conter+'">'+
              '<tr>'+
                '<th  name="plot_delay_myTable'+div_conter+'" onclick="sortTable(this)">File</th>'+
                '<th  name="plot_delay_myTable'+div_conter+'" onclick="sortTable(this)">End-2-End Delay   -  Click to Sort</th>'+
              '</tr>'+
            '</table>'
          );
          for(var i = 0 ; i < delay.length ; i++){
            $("#plot_delay_myTable"+div_conter).append(
                '<tr>'+
                  '<td>'+i+'</td>'+
                  '<td>'+delay[i]+'</td>'+
                '</tr>'
            );
          }
          points(x,through,'Average Throughput kbps','File','through');
          $("#plot_through_"+div_conter).append(
            '<table class="table table-bordered"  id="plot_through_myTable'+div_conter+'">'+
              '<tr>'+
                '<th  name="plot_through_myTable'+div_conter+'" onclick="sortTable(this)">File</th>'+
                '<th  name="plot_through_myTable'+div_conter+'" onclick="sortTable(this)">Average Throughput   -  Click to Sort</th>'+
              '</tr>'+
            '</table>'
          );
          for(var i = 0 ; i < through.length ; i++){
            $("#plot_through_myTable"+div_conter).append(
                '<tr>'+
                  '<td>'+i+'</td>'+
                  '<td>'+through[i]+'</td>'+
                '</tr>'
            );
          }

    }
  });
  div_conter = div_conter + 1 ;
}

function points(x,y,titley,titlex,des){
  //alert(plot);

  var trace = {        
    x: x,          
    y: y,
    line: {
      color: '#ff4d4d'
    },
    mode: 'markers+text',          
    type: 'scatter',          
    name: des ,          
    text: '',          
    textposition: 'top center',          
    textfont: {  family:  'Raleway, sans-serif' }, marker: { size: 6 }
  };
  
  var data = [trace];

  draw(titley,titlex,des,data);
}


function draw(titley,titlex,des,data){ 

  var layout = {  
    title: {
      text:'Plot Title',
      font: {
        family: 'Courier New, monospace',
        size: 24
      },
      xref: 'paper',
      x: 0.05,
    },
    height: 500, 
    width: 750, 
    xaxis: {
      title: titlex,
      titlefont: {
        family: 'Arial, sans-serif',
        size: 18,
        color: 'black'
      },
      showticklabels: true,
      tickangle: 'auto',
      dtick: 1,
      tickfont: {
        family: 'Old Standard TT, serif',
        size: 14,
        color: 'black'
      },
      exponentformat: 'e',
      showexponent: 'all',
      autorange:true,

    },
    yaxis: {
      title: titley,
      titlefont: {
        family: 'Arial, sans-serif',
        size: 18,
        color: 'black'
      },
      showticklabels: true,
      tickangle: 'auto',
      tickfont: {
        family: 'Old Standard TT, serif',
        size: 14,
        color: 'black'
      },
      exponentformat: 'e',
      showexponent: 'all',
      autorange:true,
    },  
    legend: {
      y: 0.5,yref: 'paper',
      font: {family: 'Arial, sans-serif',size: 20,color: 'black',}
    },
    title: ''
  };

  
  Plotly.newPlot('plot_'+des+'_'+div_conter , data, layout);
  
}



function sortTable(arq) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById(""+ $(arq).attr('name'));
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      // Check if the two rows should switch place:
      if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
        // If so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

</script>
</body>
</html>


                    
               