<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/Chart.min.js"></script>
</head>
<body>

<div style="height: 400px; width: 400px;">
            <canvas id="john"></canvas>
        </div>
 <script>       

        let mychart = document.getElementById('john').getContext('2d');
        let barchart1 = new Chart(john,{
            type: 'line',//bar,horizontalBar,pie,line,doughnut,radar,polarArea
            data: {


                labels: [ 
                             <?php
require_once '../database/connection.php';
$sql1="SELECT * FROM `CANDIDATES` WHERE `post`='governor'";
$runq1=$connection->query($sql1);
while($result1=$runq1->fetch_assoc()){
  if ($result1['post']=='governor') {
 $name=$result1['firstname']; 
?> 
                 '<?php echo($name); ?>',

               <?php }} ?>  
               ''
                ],
               
                datasets: [{
                    label: 'Votes',
                    data: [
                      <?php 
                        $sql2="SELECT * FROM `CANDIDATES` WHERE `post`='governor'";
                        $runq2=$connection->query($sql2);
                      while($result2=$runq2->fetch_assoc()){
                        foreach ($result2 as $key => $value) {
                          if ($key=='currentVotes') {
                          //if ($result2['fistname']==$name) {
                          
                       ?>,
                        
                      <?php echo $value; ?>,
                      <?php }}}?>
                      0
                      
                    ],
                    //backgroundColor: 'green'
                    backgroundColor: [
                        'rgba(255,45,63,89)',
                        'rgba(123,122,23,40)',
                        'rgba(234,34,56,12)',
                        'rgba(255,123,34,56)'
                    ]
                }]
            },
            options: {
              title:{
                  display:'true',
                  text: 'Governor Perfomance'
              }
            }
        });
    </script>
      
</body>
</html>