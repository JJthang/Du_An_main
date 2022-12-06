<div id="piechart"></div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php 
                $tongdm = count($list_tk1);
                $i = 1;
                foreach ($list_tk1 as $key) {
                    extract($key);
                    if ($i == $tongdm) {
                        $dauphay = "";
                    }else{
                        $dauphay = ",";
                    }
                    echo "['".$key['sp_name']."',".$key['count_pro']."]".$dauphay;
                    $i+= 1;
                }
    ?>
    
]);


  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Sản phẩm', 'width':1250, 'height':700};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<?php
     foreach ($list_tk_tien_thang as $key) {
        extract($key);
        $tong_tien = 0;
        $tong_tien += $tongtien_bill;
        if ($status_bill == 3) {
            echo '
        <table style="width: 100%; height: 40%; text-align: center;  background-color: white;">
                        <tr >
                            <th></th>
                            <th></th>
                            <th>Doanh thu của tháng</th>
                            <th></th>
                            <th></th>
                            <th>Tổng tiền</th>
                        </tr>
                        <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> ' . number_format($tong_tien) . ' </td>
                        </tr>
                        
        </table>
        ';
        }
     }
?>