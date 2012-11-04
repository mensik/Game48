<div id="gold"></div>

<script>
	var chart1; // globally available
	$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'gold',
            type: 'line',
            zoomType: 'x'
         },
         title: {
            text: 'Bohatství'
         },
         xAxis: {
            categories: ['Kola']
         },
         yAxis: {
            title: {
               text: 'Zlato'
            }
         },
         series: 
         
         [
         <?php 
         foreach ($users as $user) {
         	echo '{ name: \''.$user->username.'\', data: [';
			foreach ($rounds[$user->id] as $round) {
				echo $round->gold.',';	
			}
			echo '] },';
		}
		 ?>
         ]
      });
  
   });
</script>

<div id="population"></div>

<script>
	var chart1; // globally available
	$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'population',
            type: 'line',
            zoomType: 'x'
         },
         title: {
            text: 'Lidnatost'
         },
         xAxis: {
            categories: ['Kola']
         },
         yAxis: {
            title: {
               text: 'Populace'
            }
         },
         series: 
         
         [
         <?php 
         foreach ($users as $user) {
         	echo '{ name: \''.$user->username.'\', data: [';
			foreach ($rounds[$user->id] as $round) {
				echo $round->population.',';	
			}
			echo '] },';
		}
		 ?>
         ]
      });
  
   });
</script>

<div id="army"></div>

<script>
	var chart1; // globally available
	$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'army',
            type: 'line',
            zoomType: 'x'
         },
         title: {
            text: 'Armáda'
         },
         xAxis: {
            categories: ['Kola']
         },
         yAxis: {
            title: {
               text: 'Velikost Armády'
            }
         },
         series: 
         
         [
         <?php 
         foreach ($users as $user) {
         	echo '{ name: \''.$user->username.'\', data: [';
			foreach ($rounds[$user->id] as $round) {
				echo $round->army_strenght.',';	
			}
			echo '] },';
		}
		 ?>
         ]
      });
  
   });
</script>