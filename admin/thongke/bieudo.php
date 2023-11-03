<div class="row">
<script src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="myChart" style="width:100%; max-width:600px; height:500px;">
    </div>
    <script>
   google.charts.load('current',{
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'DANH MỤC');
        data.addColumn('number', 'SỐ LƯỢNG');

        <?php
        foreach ($listtk as $tke) {
          extract($tke);
          echo "data.addRow(['".$tendm."', $countsp]);";
        }
        ?>

        var options = {
          title: 'Biểu đồ thống kê sản phẩm',
          is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
      }
    </script>
</div>


