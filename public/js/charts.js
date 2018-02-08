
	// body...
	    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawOrganizationChart);
    google.charts.setOnLoadCallback(drawEngagementChart);
    google.charts.setOnLoadCallback(drawSupportChart);
    google.charts.setOnLoadCallback(drawEffectivenessChart);
    google.charts.setOnLoadCallback(drawGradeChart);
    google.charts.setOnLoadCallback(drawAttendanceChart);
    google.charts.setOnLoadCallback(drawDegreeRequirementChart);
      
    function drawOrganizationChart() {
    	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
      var jsonData = $.ajax({
      	  type: "GET",
          url: "organization_chart",
          dataType: "json",
          async: false,
         /* success: function() {
          	alert('success');
          }*/
          }).responseJSON;
        
        //console.table(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.arrayToDataTable([
        ['Questions', 'Strongly Agree', 'Agree', 'Neutral', 'Disagree', 'Strongly Disagree', 'Not Applicable'],
        jsonData[0],
        jsonData[1],
        jsonData[2]

      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Organization',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Questions'},
       seriesType: 'bars',
       series: {6: {type: 'line'}}
      };

      var chart = new google.visualization.ComboChart(document.getElementById('organization'));

      chart.draw(data, options);
    }


    function drawEngagementChart() {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var jsonData = $.ajax({
          type: "GET",
          url: "engagement_chart",
          dataType: "json",
          async: false,
         /* success: function() {
            alert('success');
          }*/
          }).responseJSON;
        
        //console.table(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.arrayToDataTable([
        ['Questions', 'Strongly Agree', 'Agree', 'Neutral', 'Disagree', 'Strongly Disagree', 'Not Applicable'],
        jsonData[0],
        jsonData[1],
        jsonData[2],
        jsonData[3],
        jsonData[4],
        jsonData[5]
      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Student Engagement',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Questions'},
       seriesType: 'bars',
       series: {6: {type: 'line'}}
      };

      var chart = new google.visualization.ComboChart(document.getElementById('engagement'));

      chart.draw(data, options);
    }

    function drawSupportChart() {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var jsonData = $.ajax({
          type: "GET",
          url: "support_chart",
          dataType: "json",
          async: false,
         /* success: function() {
            alert('success');
          }*/
          }).responseJSON;
        
        //console.table(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.arrayToDataTable([
        ['Questions', 'Strongly Agree', 'Agree', 'Neutral', 'Disagree', 'Strongly Disagree', 'Not Applicable'],
        jsonData[0],
        jsonData[1],
        jsonData[2],
        jsonData[3],
        jsonData[4],
        jsonData[5]
      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Support My Learning',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Questions'},
       seriesType: 'bars',
       series: {6: {type: 'line'}}
      };

      var chart = new google.visualization.ComboChart(document.getElementById('support'));

      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawEffectivenessChart);
    google.charts.setOnLoadCallback(drawGradeChart);
    google.charts.setOnLoadCallback(drawAttendanceChart);
    google.charts.setOnLoadCallback(drawDegreeRequirementChart);
      
    function drawEffectivenessChart() {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var jsonData = $.ajax({
          type: "GET",
          url: "effectiveness",
          dataType: "json",
          async: false,
         /* success: function() {
            alert('success');
          }*/
          }).responseJSON;
        
        //console.log(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.arrayToDataTable([
        ['Category', 'Score'],
        ['Excellent ', jsonData[0]],
         ['Good', jsonData[1]], 
         ['Statisfactory', jsonData[2]], 
         ['Weak', jsonData[3]], 
         ['Ineffective', jsonData[4]]

      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Grades Expected',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Grade'},
       
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('effectiveness'));

      chart.draw(data, options);
    }


    function drawGradeChart() {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var jsonData = $.ajax({
          type: "GET",
          url: "grade",
          dataType: "json",
          async: false,
         /* success: function() {
            alert('success');
          }*/
          }).responseJSON;
        
        //console.log(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      
      var data = new google.visualization.arrayToDataTable([
        ['Grade', 'Score', {role: 'annotation'}],
        ['A ', jsonData[0], 'A'],
         ['B+', jsonData[1], 'B+'], 
         ['B', jsonData[2], 'B'], 
         ['C+', jsonData[3], 'C+'], 
         ['C', jsonData[4], 'C'],
         ['D', jsonData[5], 'D'],
         ['F', jsonData[6], 'F']

      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Expected Grades',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Category'},
       
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('grade'));

      chart.draw(data, options);
    }

    function drawAttendanceChart() {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var jsonData = $.ajax({
          type: "GET",
          url: "attendance",
          dataType: "json",
          async: false,
         /* success: function() {
            alert('success');
          }*/
          }).responseJSON;
        
        //console.log(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      
      var data = new google.visualization.arrayToDataTable([
        ['Attendance', 'Score', {role: 'annotation'}],
        ['Some', jsonData[0], 'Some'],
         ['Most', jsonData[1], 'Most'], 
         ['All', jsonData[2], 'All']
      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Student Attendance',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Category'},
       
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('attendance'));

      chart.draw(data, options);
    }

    function drawDegreeRequirementChart() {
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      var jsonData = $.ajax({
          type: "GET",
          url: "degree",
          dataType: "json",
          async: false,
         /* success: function() {
            alert('success');
          }*/
          }).responseJSON;
        
        //console.log(jsonData);
        
      // Create our data table out of JSON data loaded from server.
      
      var data = new google.visualization.arrayToDataTable([
        ['Category', 'Score', {role: 'annotation'}],
        ['Compulsory', jsonData[0], 'Compulsory'],
         ['Elective', jsonData[1], 'Elective'], 
         ['Not Sure', jsonData[2], 'Not Sure']
      ]);

      // Instantiate and draw our chart, passing in some options.
      var options = {
       title : 'Degree Requirement',
       vAxis: {title: 'Count'},
       hAxis: {title: 'Category'},
       
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('degree_requirement'));

      chart.draw(data, options);
    }


