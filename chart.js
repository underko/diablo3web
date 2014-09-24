<script>

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Class');
        data.addColumn('number', 'Time Played');
        data.addRows([
          ['Barbarian', 1],
          ['Crusader', 0.176],
          ['Demon Hunter', 0.3],
          ['Monk', 0.05],
          ['Witch Doctor', 0],
          ['Wizard', 0.29]
        ]);

        // Set chart options
        var options = {'title':'Time Played',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
<script>