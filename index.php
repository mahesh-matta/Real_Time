
<?php
// CONFIRMED CASES
$get_data =file_get_contents('https://quixotic-elf-256313.appspot.com/api/confirmed');
$response_confirmed= json_decode($get_data, true);
$i = 0;
$arrayconfirmed = array();
foreach($response_confirmed as $Onecountry)
{
	$i = $i +1;
	$Name_Country = $Onecountry['Country/Region'];
	$Lat_Country = $Onecountry['Lat'];
	$Long_Country = $Onecountry['Long'];
	$State_Country = $Onecountry['Province/State'];
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 foreach($Onecountry as $key=>$value){
		 $date = $key;
		 $date = explode("/",$date);
		 $newkey =  $date[2].$date[0].$date[1];
		 $Onecountry[$newkey] = $Onecountry[$key];
			unset($Onecountry[$key]);
	 }
	 
	 // print_r($Onecountry);
	 ksort($Onecountry);
	 $array_sum = end($Onecountry);
	// $array_values = array_values($Onecountry);
	// $array_sum = array_sum($array_values);
	// echo $Name_Country."--->".$State_Country."--->".$array_sum."<br>";
	array_push($arrayconfirmed,array("Name_Country" => $Name_Country,"State_Country" => $State_Country,"Sum_Confirmed"=>$array_sum,"Lat"=>$Lat_Country,"Long"=>$Long_Country));
}
 // print_r($arrayconfirmed);


// END CONFIRMED CASES
//


// RECOVERED CASES
$get_data =file_get_contents('https://quixotic-elf-256313.appspot.com/api/recovered');
$response_recovered= json_decode($get_data, true);
$i = 0;
$arrayrecovered = array();
foreach($response_recovered as $Onecountry)
{
	$i = $i +1;
	$Name_Country = $Onecountry['Country/Region'];
	$Lat_Country = $Onecountry['Lat'];
	$Long_Country = $Onecountry['Long'];
	$State_Country = $Onecountry['Province/State'];
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 foreach($Onecountry as $key=>$value){
		 $date = $key;
		 $date = explode("/",$date);
		 $newkey =  $date[2].$date[0].$date[1];
		 $Onecountry[$newkey] = $Onecountry[$key];
			unset($Onecountry[$key]);
	 }
	 ksort($Onecountry);
	 $array_sum = end($Onecountry);
	// $array_values = array_values($Onecountry);
	// $array_sum = array_sum($array_values);
	// echo $Name_Country."--->".$State_Country."--->".$array_sum."<br>";
	array_push($arrayrecovered,array("Name_Country" => $Name_Country,"State_Country" => $State_Country,"Sum_Recovered"=>$array_sum,"Lat"=>$Lat_Country,"Long"=>$Long_Country));
}
// print_r($arrayrecovered);


// END RECOVERED CASES
//


// DEATH CASES
$get_data =file_get_contents('https://quixotic-elf-256313.appspot.com/api/deaths');
$response_death= json_decode($get_data, true);
$i = 0;
$arraydeath = array();
foreach($response_death as $Onecountry)
{
	$i = $i +1;
	$Name_Country = $Onecountry['Country/Region'];
	$Lat_Country = $Onecountry['Lat'];
	$Long_Country = $Onecountry['Long'];
	$State_Country = $Onecountry['Province/State'];
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 foreach($Onecountry as $key=>$value){
		 $date = $key;
		 $date = explode("/",$date);
		 $newkey =  $date[2].$date[0].$date[1];
		 $Onecountry[$newkey] = $Onecountry[$key];
			unset($Onecountry[$key]);
	 }
	  ksort($Onecountry);
	 $array_sum = end($Onecountry);
	// $array_values = array_values($Onecountry);
	// $array_sum = array_sum($array_values);
	// echo $Name_Country."--->".$State_Country."--->".$array_sum."<br>";
	array_push($arraydeath,array("Name_Country" => $Name_Country,"State_Country" => $State_Country,"Sum_death"=>$array_sum,"Lat"=>$Lat_Country,"Long"=>$Long_Country));
}
// print_r($arraydeath);


// END DEATH CASES
$datearray = array();
foreach($response_confirmed as $Onecountry)
{
	$Name_Country = $Onecountry['Country/Region'];
	$Lat_Country = $Onecountry['Lat'];
	$Long_Country = $Onecountry['Long'];
	$State_Country = $Onecountry['Province/State'];
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 array_pop($Onecountry);
	 foreach($Onecountry as $key=>$value){
		 $date = $key;
		 $date = explode("/",$date);
		 $newkey =  $date[2].$date[0].$date[1];
		 $Onecountry[$newkey] = $Onecountry[$key];
			unset($Onecountry[$key]);
		 array_push($datearray,$newkey);
	 }
	  // ksort($Onecountry);
	  ksort($datearray);
	  break;
}
foreach($datearray as $singledate)
{
	foreach($response_confirmed as $Onecountry)
	{
		$Name_Country = $Onecountry['Country/Region'];
		$Lat_Country = $Onecountry['Lat'];
		$Long_Country = $Onecountry['Long'];
		$State_Country = $Onecountry['Province/State'];
	array_pop($Onecountry);
	array_pop($Onecountry);
	array_pop($Onecountry);
	array_pop($Onecountry);
			 foreach($Onecountry as $key=>$value){
				 $date = $key;
				 $date = explode("/",$date);
				 $newkey =  $date[2].$date[0].$date[1];
					if($singledate == $newkey){
						// echo $Name_Country.$newkey.$value;
					}
						
			 }
	}
}
?>

<?php
//Confirmed
		
		$Name = array();
		foreach($arrayconfirmed as $one)
		{
				$Name_Country = $one["Name_Country"];
				array_push($Name,$Name_Country);
		}
		$confirm_Country = array_unique($Name);
		// print_r($confirm_Country);
		$countNum = 0;
		$ArrayConfirmed = array();
		foreach($confirm_Country as $one1)
		{
			foreach($arrayconfirmed as $one)
			{
				if($one1 == $one["Name_Country"])
				{
					$countNum = $countNum + $one["Sum_Confirmed"];
				}
			}
			array_push($ArrayConfirmed, array("Sum_Confirmed" => $countNum, "Name_Country" => $one1));
			$countNum = 0;
			
		}
		
				rsort($ArrayConfirmed);
				
//END Confirmed

//Recovered

		$Name = array();
		foreach($arrayrecovered as $one)
		{
				$Name_Country = $one["Name_Country"];
				array_push($Name,$Name_Country);
		}
		$recover_Country = array_unique($Name);
		// print_r($confirm_Country);
		$countNum = 0;
		$ArrayRecovered = array();
		foreach($recover_Country as $one1)
		{
			foreach($arrayrecovered as $one)
			{
				if($one1 == $one["Name_Country"])
				{
					$countNum = $countNum + $one["Sum_Recovered"];
				}
			}
			array_push($ArrayRecovered, array("Sum_Recovered" => $countNum, "Name_Country" => $one1));
			$countNum = 0;
			
		}
		
				rsort($ArrayRecovered);
				
//END Recovered


//DEATH

		$Name = array();
		foreach($arraydeath as $one)
		{
				$Name_Country = $one["Name_Country"];
				array_push($Name,$Name_Country);
		}
		$death_Country = array_unique($Name);
		// print_r($confirm_Country);
		$countNum = 0;
		$ArrayDeath = array();
		foreach($death_Country as $one1)
		{
			foreach($arraydeath as $one)
			{
				if($one1 == $one["Name_Country"])
				{
					$countNum = $countNum + $one["Sum_death"];
				}
			}
			array_push($ArrayDeath, array("Sum_death" => $countNum, "Name_Country" => $one1));
			$countNum = 0;
			
		}
		
				rsort($ArrayDeath);
				
//END DEATH



		$Arrayref=array();		
		$NewArray=array();		
		// $Newarrayall=array();		
		// for($i=0;$i<9;$i++)
		// {
			// array_push($Arrayref,$ArrayConfirmed[$i]);
		// }
		foreach($ArrayConfirmed as $Onearray)
		{
			$Name_Country = $Onearray["Name_Country"];
			$Sum_Confirmed = $Onearray["Sum_Confirmed"];
			foreach($ArrayRecovered as $Onerecovered)
			{
				if($Name_Country == $Onerecovered["Name_Country"])
				{
					foreach($ArrayDeath as $Onedeath)
					{
						if($Name_Country == $Onedeath["Name_Country"])
						{
							
							$Sum_Recovered = $Onerecovered["Sum_Recovered"];
							$Sum_death = $Onedeath["Sum_death"];
						array_push($NewArray, array("Name_Country"=>$Name_Country,"Sum_Confirmed"=>$Sum_Confirmed,"Sum_Recovered"=>$Sum_Recovered,"Sum_death"=>$Sum_death));
						}
					}
				}
			}
		}
		$file = fopen("testing.txt", "r") or exit("Unable to open file!");
		$searchfor = 'name:';
		// get the file contents, assuming the file to be readable (and exist)
		// $contents = file_get_contents($file);
		$Arrayid = array();
		while(!feof($file))
		  {
			$line = fgets($file);
			if(strpos($line, 'name:') !== false){
				$line1 = fgets($file);
				$line = substr($line,strpos($line,'"')+1);
				 $line = strtok($line,'"');
				$line1 = substr($line1,strpos($line1,'"')+1);
				 $line1 = strtok($line1,'"');
				 array_push($Arrayid, array($line,$line1));
			}
		  }
		  // print_r($Array);
		// fclose($file);
		$ArrayTot = array();
		foreach($NewArray as $Onecountry)
		{
			$Name_Country = $Onecountry["Name_Country"];
			$Sum_Confirmed = $Onecountry["Sum_Confirmed"];
			$Sum_Recovered = $Onecountry["Sum_Recovered"];
			$Sum_death = $Onecountry["Sum_death"];
			foreach($Arrayid as $Oneid)
			{
				if($Name_Country == $Oneid[0])
				{
					array_push($ArrayTot,array($Name_Country,$Oneid[1],$Sum_Confirmed,$Sum_Recovered,$Sum_death));
				}
			}
		}
		  // PRINT_R($ArrayTot);
		// echo count($NewArray);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>CORONA VIRUS - REALTIME UPDATES</title>
    <!-- Custom CSS -->
    <link href="style.min.css" rel="stylesheet">
	<style>
	.blinking{
		color:white;
    animation:blinkingText 1.2s infinite;
		}
		@keyframes blinkingText{
			0%{     color: #000;    }
			49%{    color: #000; }
			60%{    color: transparent; }
			99%{    color:transparent;  }
			100%{   color: #000;    }
		}
		
	</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light"  data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <br>
					<h1 class="blinking"><CENTER><b>CORONA VIRUS REALTIME UPDATES</b></CENTER></h1>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">
										<?php
										echo number_format(array_sum(array_column($arrayconfirmed, 'Sum_Confirmed'))); 
										?>
										</h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">TOTAL CONFIRMED CASES</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">
										<?php
										echo number_format(array_sum(array_column($arrayrecovered, 'Sum_Recovered'))); 
										?>
									</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">TOTAL RECOVERED
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">
										<?php
										echo number_format(array_sum(array_column($arraydeath, 'Sum_death'))); 
										?>
										</h2>
                                       </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">TOTAL DEATH</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
				
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">CONFIRMED by Location</h4>
                                    <div id="chartdiv5" style="height:600px;width:100%"></div>
							</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Confirmed Cases by Country/Region/Sovereignty</h4>
								
								<div id="chartdiv0" class="mt-2" style="height:300px; width:100%;"></div>
								
                                <ul class="list-style-none mb-0" style="height:300px; width:100%;overflow-y: scroll;">
								<?php
								
								foreach($ArrayConfirmed as $one){
									?>
									<li>
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted"><?php echo $one["Name_Country"]?></span>
                                        <span class="text-dark float-right font-weight-medium"><?php echo number_format($one["Sum_Confirmed"])?></span>
                                    </li>
									<?php
								}
								?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recovered Cases by Country/Region/Sovereignty</h4>
								
								<div id="chartdiv4" class="mt-2" style="height:300px; width:100%;"></div>
								
                                <ul class="list-style-none mb-0" style="height:300px; width:100%;overflow-y: scroll;">
								<?php
								
								foreach($ArrayRecovered as $one){
									?>
									<li>
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted"><?php echo $one["Name_Country"]?></span>
                                        <span class="text-dark float-right font-weight-medium"><?php echo number_format($one["Sum_Recovered"])?></span>
                                    </li>
									<?php
								}
								?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">TOTAL CONFIRMED/RECOVERED/DEATH</h4>
								
                                <div id="chartdiv1" style="height:550px; width:100%;overflow-x: scroll;overflow-y: scroll;"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
				 
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="jquery.min.js"></script>
    <script src="feather.min.js"></script>
    <script src="perfect-scrollbar.jquery.min.js"></script>
    <!--Custom JavaScript -->
    <script src="custom.min.js"></script>
    <!--This page JavaScript -->
	<script src="https://www.amcharts.com/lib/4/core.js"></script>
								<script src="https://www.amcharts.com/lib/4/charts.js"></script>
								<script src="https://www.amcharts.com/lib/4/themes/spiritedaway.js"></script>
								<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
								<script src="https://www.amcharts.com/lib/4/maps.js"></script>
								<script src="https://www.amcharts.com/lib/4/geodata/continentsLow.js"></script>
								<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
							
   						<script>
								/**
								 * ---------------------------------------
								 * This demo was created using amCharts 4.
								 *
								 * For more information visit:
								 * https://www.amcharts.com/
								 *
								 * Documentation is available at:
								 * https://www.amcharts.com/docs/v4/
								 * ---------------------------------------
								 */

								// Themes begin
								am4core.useTheme(am4themes_animated);
								// Themes end

								// Create chart instance
								var chart = am4core.create("chartdiv0", am4charts.PieChart);
								
									chart.data = [
										<?php
										for($i=0;$i<=9;$i++)
										{
											$smallarray = $ArrayConfirmed[$i];
											$name = $smallarray["Name_Country"];
											$sumconfirmed = $smallarray["Sum_Confirmed"];
											?>
											  {
												country: <?php echo '"'.$name.'"';?>,
												sumconfirmed: <?php echo $sumconfirmed;?>
											  },
										<?php
										}
										$TOTALREST = 0;
										for($j=10;$j<count($ArrayConfirmed);$j++)
										{
											$smallarray = $ArrayConfirmed[$j];
											$name = $smallarray["Name_Country"];
											$sumconfirmed = $smallarray["Sum_Confirmed"];
											$TOTALREST = $TOTALREST + $sumconfirmed;
											
										}	
											?>
											  {
												country: "Others",
												sumconfirmed: <?php echo $TOTALREST;?>
											  }
								// Add data
									];

								// Add and configure Series
								var pieSeries = chart.series.push(new am4charts.PieSeries());
								pieSeries.dataFields.value = "sumconfirmed";
								pieSeries.dataFields.category = "country";
								pieSeries.slices.template.stroke = am4core.color("#fff");
								pieSeries.slices.template.strokeWidth = 2;
								pieSeries.slices.template.strokeOpacity = 1;

								// This creates initial animation
								pieSeries.hiddenState.properties.opacity = 1;
								pieSeries.hiddenState.properties.endAngle = -90;
								pieSeries.hiddenState.properties.startAngle = -90;
								</script>
								<script>
								/**
								 * ---------------------------------------
								 * This demo was created using amCharts 4.
								 *
								 * For more information visit:
								 * https://www.amcharts.com/
								 *
								 * Documentation is available at:
								 * https://www.amcharts.com/docs/v4/
								 * ---------------------------------------
								 */

								// Themes begin
								am4core.useTheme(am4themes_animated);
								// Themes end

								// Create chart instance
								var chart = am4core.create("chartdiv4", am4charts.PieChart);
								
									chart.data = [
										<?php
										for($i=0;$i<=9;$i++)
										{
											$smallarray = $ArrayRecovered[$i];
											$name = $smallarray["Name_Country"];
											$sumrecovered = $smallarray["Sum_Recovered"];
											?>
											  {
												country: <?php echo '"'.$name.'"';?>,
												sumrecovered: <?php echo $sumrecovered;?>
											  },
										<?php
										}
										$TOTALREST = 0;
										for($j=10;$j<count($ArrayRecovered);$j++)
										{
											$smallarray = $ArrayRecovered[$j];
											$name = $smallarray["Name_Country"];
											$sumrecovered = $smallarray["Sum_Recovered"];
											$TOTALREST = $TOTALREST + $sumrecovered;
											
										}	
											?>
											  {
												country: "Others",
												sumrecovered: <?php echo $TOTALREST;?>
											  }
								// Add data
									];

								// Add and configure Series
								var pieSeries = chart.series.push(new am4charts.PieSeries());
								pieSeries.dataFields.value = "sumrecovered";
								pieSeries.dataFields.category = "country";
								pieSeries.slices.template.stroke = am4core.color("#fff");
								pieSeries.slices.template.strokeWidth = 2;
								pieSeries.slices.template.strokeOpacity = 1;

								// This creates initial animation
								pieSeries.hiddenState.properties.opacity = 1;
								pieSeries.hiddenState.properties.endAngle = -90;
								pieSeries.hiddenState.properties.startAngle = -90;
								</script>
								<script>
	

								/**
								 * ---------------------------------------
								 * This demo was created using amCharts 4.
								 * 
								 * For more information visit:
								 * https://www.amcharts.com/
								 * 
								 * Documentation is available at:
								 * https://www.amcharts.com/docs/v4/
								 * ---------------------------------------
								 */

								// Themes begin
								am4core.useTheme(am4themes_spiritedaway);
								am4core.useTheme(am4themes_animated);
								// Themes end

								 // Create chart instance
								var chart = am4core.create("chartdiv1", am4charts.XYChart);
								// Add data
								chart.data = [
								<?php
										for($i=0;$i<4;$i++)
										{
											$smallarray = $NewArray[$i];
											$name = $smallarray["Name_Country"];
											$sumconfirmed = $smallarray["Sum_Confirmed"];
											$sumrecovered = $smallarray["Sum_Recovered"];
											$sumdeath = $smallarray["Sum_death"];
										
											?>
											{
											  "Name_Country": <?php echo '"'.$name.'"';?>,
											  "Confirmed": <?php echo $sumconfirmed;?>,
											  "Recovered": <?php echo $sumrecovered;?>,
											  "Death": <?php echo $sumdeath;?>
											},
											<?php
										}
										$RestConfirmed = 0;
										$RestRecovered = 0;
										$RestDeath = 0;
										for($j=4;$j<count($NewArray);$j++)
										{
											$smallarray = $NewArray[$j];
											$name = $smallarray["Name_Country"];
											$sumconfirmed = $smallarray["Sum_Confirmed"];
											$sumrecovered = $smallarray["Sum_Recovered"];
											$sumdeath = $smallarray["Sum_death"];
											$RestConfirmed = $RestConfirmed + $sumconfirmed;
											$RestRecovered = $RestRecovered + $sumrecovered;
											$RestDeath = $RestDeath + $sumdeath;
										}
											?>
											  {
											  "Name_Country": "Others",
											  "Confirmed": <?php echo $RestConfirmed;?>,
											  "Recovered": <?php echo $RestRecovered;?>,
											  "Death": <?php echo $RestDeath;?>
											  }	
										
										
								];

								// Create axes
								var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
								categoryAxis.dataFields.category = "Name_Country";
								categoryAxis.numberFormatter.numberFormat = "#";
								categoryAxis.renderer.inversed = true;
								categoryAxis.renderer.grid.template.location = 0;
								categoryAxis.renderer.cellStartLocation = 0.1;
								categoryAxis.renderer.cellEndLocation = 0.9;

								var  valueAxis = chart.xAxes.push(new am4charts.ValueAxis()); 
								valueAxis.renderer.opposite = true;

								// Create series
								function createSeries(field, name) {
								  var series = chart.series.push(new am4charts.ColumnSeries());
								  series.dataFields.valueX = field;
								  series.dataFields.categoryY = "Name_Country";
								  series.name = name;
								  series.columns.template.tooltipText = "{name}: [bold]{valueX}[/]";
								  series.columns.template.height = am4core.percent(100);
								  series.sequencedInterpolation = true;

								  var valueLabel = series.bullets.push(new am4charts.LabelBullet());
								  valueLabel.label.text = "{valueX}";
								  valueLabel.label.horizontalCenter = "left";
								  valueLabel.label.dx = 10;
								  valueLabel.label.hideOversized = false;
								  valueLabel.label.truncate = false;

								  var categoryLabel = series.bullets.push(new am4charts.LabelBullet());
								  categoryLabel.label.horizontalCenter = "right";
								  categoryLabel.label.dx = -10;
								  categoryLabel.label.fill = am4core.color("#fff");
								  categoryLabel.label.hideOversized = false;
								  categoryLabel.label.truncate = false;
								}

								createSeries("Confirmed", "Confirmed");
								createSeries("Recovered", "Recovered");
								createSeries("Death", "Death");
								</script>
								<script>
								/**
								 * ---------------------------------------
								 * This demo was created using amCharts 4.
								 * 
								 * For more information visit:
								 * https://www.amcharts.com/
								 * 
								 * Documentation is available at:
								 * https://www.amcharts.com/docs/v4/
								 * ---------------------------------------
								 */

								// Themes begin
								am4core.useTheme(am4themes_animated);
								// Themes end

								// Create map instance
								var chart = am4core.create("chartdiv2", am4maps.MapChart);
								var interfaceColors = new am4core.InterfaceColorSet();

								try {
									chart.geodata = am4geodata_worldLow;
								}
								catch (e) {
									chart.raiseCriticalError(new Error("Map geodata could not be loaded. Please download the latest <a href=\"https://www.amcharts.com/download/download-v4/\">amcharts geodata</a> and extract its contents into the same directory as your amCharts files."));
								}


								var label = chart.createChild(am4core.Label)
								label.fontSize = 12;
								label.align = "left";
								label.valign = "bottom"
								label.fill = am4core.color("#927459");
								label.background = new am4core.RoundedRectangle()
								label.background.cornerRadius(10,10,10,10);
								label.padding(10,10,10,10);
								label.marginLeft = 30;
								label.marginBottom = 30;
								label.background.strokeOpacity = 0.3;
								label.background.stroke =am4core.color("#927459");
								label.background.fill = am4core.color("#f9e3ce");
								label.background.fillOpacity = 0.6;

								var dataSource = chart.createChild(am4core.TextLink)
								dataSource.fill = am4core.color("#927459");
								dataSource.padding(10,10,10,10);
								dataSource.marginLeft = 30;
								dataSource.marginTop = 30;

								// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

								// Add zoom control
								chart.zoomControl = new am4maps.ZoomControl();

								var homeButton = new am4core.Button();
								homeButton.events.on("hit", function(){
								  chart.goHome();
								});

								homeButton.icon = new am4core.Sprite();
								homeButton.padding(7, 5, 7, 5);
								homeButton.width = 30;
								homeButton.icon.path = "M16,8 L14,8 L14,16 L10,16 L10,10 L6,10 L6,16 L2,16 L2,8 L0,8 L8,0 L16,8 Z M16,8";
								homeButton.marginBottom = 10;
								homeButton.parent = chart.zoomControl;
								homeButton.insertBefore(chart.zoomControl.plusButton);

								chart.backgroundSeries.mapPolygons.template.polygon.fill = am4core.color("#bfa58d");
								chart.backgroundSeries.mapPolygons.template.polygon.fillOpacity = 1;
								chart.deltaLongitude = 20;
								chart.deltaLatitude = -20;

								// limits vertical rotation
								chart.adapter.add("deltaLatitude", function(delatLatitude){
									return am4core.math.fitToRange(delatLatitude, -90, 90);
								})

								// Create map polygon series

								var shadowPolygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
								shadowPolygonSeries.geodata = am4geodata_continentsLow;

								try {
									shadowPolygonSeries.geodata = am4geodata_continentsLow;
								}
								catch (e) {
									shadowPolygonSeries.raiseCriticalError(new Error("Map geodata could not be loaded. Please download the latest <a href=\"https://www.amcharts.com/download/download-v4/\">amcharts geodata</a> and extract its contents into the same directory as your amCharts files."));
								}

								shadowPolygonSeries.useGeodata = true;
								shadowPolygonSeries.dx = 2;
								shadowPolygonSeries.dy = 2;
								shadowPolygonSeries.mapPolygons.template.fill = am4core.color("#000");
								shadowPolygonSeries.mapPolygons.template.fillOpacity = 0.2;
								shadowPolygonSeries.mapPolygons.template.strokeOpacity = 0;
								shadowPolygonSeries.fillOpacity = 0.1;
								shadowPolygonSeries.fill = am4core.color("#000");


								// Create map polygon series
								var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
								polygonSeries.useGeodata = true;

								polygonSeries.calculateVisualCenter = true;
								polygonSeries.tooltip.background.fillOpacity = 0.2;
								polygonSeries.tooltip.background.cornerRadius = 20;

								var template = polygonSeries.mapPolygons.template;
								template.nonScalingStroke = true;
								template.fill = am4core.color("#f9e3ce");
								template.stroke = am4core.color("#e2c9b0");

								polygonSeries.calculateVisualCenter = true;
								template.propertyFields.id = "id";
								template.tooltipPosition = "fixed";
								template.fillOpacity = 1;

								template.events.on("over", function (event) {
								  if (event.target.dummyData) {
									event.target.dummyData.isHover = true;
								  }
								})
								template.events.on("out", function (event) {
								  if (event.target.dummyData) {
									event.target.dummyData.isHover = false;
								  }
								})

								var hs = polygonSeries.mapPolygons.template.states.create("hover");
								hs.properties.fillOpacity = 1;
								hs.properties.fill = am4core.color("#deb7ad");


								var graticuleSeries = chart.series.push(new am4maps.GraticuleSeries());
								graticuleSeries.mapLines.template.stroke = am4core.color("#fff");
								graticuleSeries.fitExtent = false;
								graticuleSeries.mapLines.template.strokeOpacity = 0.2;
								graticuleSeries.mapLines.template.stroke = am4core.color("#fff");


								var measelsSeries = chart.series.push(new am4maps.MapPolygonSeries())
								measelsSeries.tooltip.background.fillOpacity = 0;
								measelsSeries.tooltip.background.cornerRadius = 20;
								measelsSeries.tooltip.autoTextColor = false;
								measelsSeries.tooltip.label.fill = am4core.color("#000");
								measelsSeries.tooltip.dy = -5;

								var measelTemplate = measelsSeries.mapPolygons.template;
								measelTemplate.fill = am4core.color("#bf7569");
								measelTemplate.strokeOpacity = 0;
								measelTemplate.fillOpacity = 0.75;
								measelTemplate.tooltipPosition = "fixed";



								var hs2 = measelsSeries.mapPolygons.template.states.create("hover");
								hs2.properties.fillOpacity = 1;
								hs2.properties.fill = am4core.color("#86240c");

								polygonSeries.events.on("inited", function () {
								  polygonSeries.mapPolygons.each(function (mapPolygon) {
									var count = data[mapPolygon.id];

									if (count > 0) {
									  var polygon = measelsSeries.mapPolygons.create();
									  polygon.multiPolygon = am4maps.getCircle(mapPolygon.visualLongitude, mapPolygon.visualLatitude, Math.max(0.2, Math.log(count) * Math.LN10 / 10));
									  polygon.tooltipText = mapPolygon.dataItem.dataContext.name + ": " + count;
									  mapPolygon.dummyData = polygon;
									  polygon.events.on("over", function () {
										mapPolygon.isHover = true;
									  })
									  polygon.events.on("out", function () {
										mapPolygon.isHover = false;
									  })
									}
									else {
									  mapPolygon.tooltipText = mapPolygon.dataItem.dataContext.name + ": no data";
									  mapPolygon.fillOpacity = 0.9;
									}

								  })
								})


								var data = {
								  <?php
								  foreach($ArrayTot as $Arrayone){
									  $ID = '"'.$Arrayone[1].'"';
									  $confirmed = $Arrayone[2];
									  ?>
										<?php echo $ID;?> : <?php echo $confirmed;?>,
									  <?php
								  }
								  // print_r($ArrayTot);
								  ?>
								}
								</script>
								<script>
								/**
											 * ---------------------------------------
											 * This demo was created using amCharts 4.
											 * 
											 * For more information visit:
											 * https://www.amcharts.com/
											 * 
											 * Documentation is available at:
											 * https://www.amcharts.com/docs/v4/
											 * ---------------------------------------
											 */

											// Themes begin
											am4core.useTheme(am4themes_animated);
											// Themes end

											// Create map instance
											var chart = am4core.create("chartdiv5", am4maps.MapChart);

											var mapData = [
											 <?php
												  foreach($ArrayTot as $Arrayone){
													  $ID = '"'.$Arrayone[1].'"';
													  $Name_Country = '"'.$Arrayone[0].'"';
													  $confirmed = $Arrayone[2];
													  ?>
													  { "id": <?php echo $ID;?>, "name" :<?php echo $Name_Country;?>,"value":<?php echo $confirmed;?>,"color":chart.colors.getIndex(0)},
													  <?php
												  }
												  // print_r($ArrayTot);
												  ?>
											];

											// Set map definition
											chart.geodata = am4geodata_worldLow;

											// Set projection
											chart.projection = new am4maps.projections.Miller();

											// Create map polygon series
											var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
											polygonSeries.exclude = ["AQ"];
											polygonSeries.useGeodata = true;
											polygonSeries.nonScalingStroke = true;
											polygonSeries.strokeWidth = 0.5;
											polygonSeries.calculateVisualCenter = true;

											var imageSeries = chart.series.push(new am4maps.MapImageSeries());
											imageSeries.data = mapData;
											imageSeries.dataFields.value = "value";

											var imageTemplate = imageSeries.mapImages.template;
											imageTemplate.nonScaling = true

											var circle = imageTemplate.createChild(am4core.Circle);
											circle.fillOpacity = 0.7;
											circle.propertyFields.fill = "color";
											circle.tooltipText = "{name}: [bold]{value}[/]";


											imageSeries.heatRules.push({
											  "target": circle,
											  "property": "radius",
											  "min": 4,
											  "max": 30,
											  "dataField": "value"
											})

											imageTemplate.adapter.add("latitude", function(latitude, target) {
											  var polygon = polygonSeries.getPolygonById(target.dataItem.dataContext.id);
											  if(polygon){
												return polygon.visualLatitude;
											   }
											   return latitude;
											})

											imageTemplate.adapter.add("longitude", function(longitude, target) {
											  var polygon = polygonSeries.getPolygonById(target.dataItem.dataContext.id);
											  if(polygon){
												return polygon.visualLongitude;
											   }
											   return longitude;
											})


								</script>
								<script>
								/**
								 * ---------------------------------------
								 * This demo was created using amCharts 4.
								 * 
								 * For more information visit:
								 * https://www.amcharts.com/
								 * 
								 * Documentation is available at:
								 * https://www.amcharts.com/docs/v4/
								 * ---------------------------------------
								 */

								// Themes begin
								am4core.useTheme(am4themes_animated);
								// Themes end




								var chart = am4core.create('chartdiv6', am4charts.XYChart)
								chart.colors.step = 2;

								chart.legend = new am4charts.Legend()
								chart.legend.position = 'top'
								chart.legend.paddingBottom = 20
								chart.legend.labels.template.maxWidth = 95

								var xAxis = chart.xAxes.push(new am4charts.CategoryAxis())
								xAxis.dataFields.category = 'category'
								xAxis.renderer.cellStartLocation = 0.1
								xAxis.renderer.cellEndLocation = 0.9
								xAxis.renderer.grid.template.location = 0;

								var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
								yAxis.min = 0;

								function createSeries(value, name) {
									var series = chart.series.push(new am4charts.ColumnSeries())
									series.dataFields.valueY = value
									series.dataFields.categoryX = 'category'
									series.name = name

									series.events.on("hidden", arrangeColumns);
									series.events.on("shown", arrangeColumns);

									var bullet = series.bullets.push(new am4charts.LabelBullet())
									bullet.interactionsEnabled = false
									bullet.dy = 30;
									bullet.label.text = '{valueY}'
									bullet.label.fill = am4core.color('#ffffff')

									return series;
								}

								chart.data = [
								
								<?php
										for($i=0;$i<4;$i++)
										{
											$smallarray = $NewArray[$i];
											$name = $smallarray["Name_Country"];
											$sumconfirmed = $smallarray["Sum_Confirmed"];
											$sumrecovered = $smallarray["Sum_Recovered"];
											$sumdeath = $smallarray["Sum_death"];
										
											?>
											{
											  category: <?php echo '"'.$name.'"';?>,
											  Confirmed: <?php echo $sumconfirmed;?>,
											  Recovered: <?php echo $sumrecovered;?>,
											  Death: <?php echo $sumdeath;?>
											},
											<?php
										}
										$RestConfirmed = 0;
										$RestRecovered = 0;
										$RestDeath = 0;
										for($j=4;$j<count($NewArray);$j++)
										{
											$smallarray = $NewArray[$j];
											$name = $smallarray["Name_Country"];
											$sumconfirmed = $smallarray["Sum_Confirmed"];
											$sumrecovered = $smallarray["Sum_Recovered"];
											$sumdeath = $smallarray["Sum_death"];
											$RestConfirmed = $RestConfirmed + $sumconfirmed;
											$RestRecovered = $RestRecovered + $sumrecovered;
											$RestDeath = $RestDeath + $sumdeath;
										}
											?>
											  {
											  category: "Others",
											  Confirmed: <?php echo $RestConfirmed;?>,
											  Recovered: <?php echo $RestRecovered;?>,
											  Death: <?php echo $RestDeath;?>
											  }	
										
										
									
								]


								createSeries('Confirmed', 'Confirmed');
								createSeries('Recovered', 'Recovered');
								createSeries('Death', 'Death');

								function arrangeColumns() {

									var series = chart.series.getIndex(0);

									var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
									if (series.dataItems.length > 1) {
										var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
										var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
										var delta = ((x1 - x0) / chart.series.length) * w;
										if (am4core.isNumber(delta)) {
											var middle = chart.series.length / 2;

											var newIndex = 0;
											chart.series.each(function(series) {
												if (!series.isHidden && !series.isHiding) {
													series.dummyData = newIndex;
													newIndex++;
												}
												else {
													series.dummyData = chart.series.indexOf(series);
												}
											})
											var visibleCount = newIndex;
											var newMiddle = visibleCount / 2;

											chart.series.each(function(series) {
												var trueIndex = chart.series.indexOf(series);
												var newIndex = series.dummyData;

												var dx = (newIndex - trueIndex + middle - newMiddle) * delta

												series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
												series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
											})
										}
									}
								}
								</script>
</body>

</html>