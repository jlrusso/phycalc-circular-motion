<!DOCTYPE html>
<html>
<head>
	<title>PhyCalc | Circular Motion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="circularMotion.css">
</head>
<body>

	<?php
		include_once "navSearch.php";
	?>

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="animated bounceInDown section-heading">Circular Motion</h2>
					<div class="pages-nav animated bounceInDown">
						<ul class="pager">
							<li><a href="kinematics.php" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Kinematics Big Five</a></li>
							<li><a href="forces.php" class="next-page-btn">Next: Forces<span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">
								<div class="solve-selection">
									<form>
										<span class="badge">1</span>
										<span><b>Solve:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btn" name="radio-one" id="angular-velocity-radio-btn">
										    <span class="checkmark">ang. velocity (&omega;)</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btn" name="radio-one" id="period-radio-btn">
										    <span class="checkmark">period</span>
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btn" name="radio-one" id="radius-radio-btn">
										    <span class="checkmark">radius</span>
										</label>
									</form>
								</div>
								<div class="unit-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Units:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="unit-btn" units="ft" name="radio-two" id="feet-radio-btn">
										    <span class="checkmark">feet</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="m" name="radio-two" id="meter-radio-btn">
										    <span class="checkmark">meters</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="mi" name="radio-two" id="mile-radio-btn">
										    <span class="checkmark">miles</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="km" name="radio-two" id="kilometer-radio-btn">
										    <span class="checkmark">kilometer</span>
										</label>
										<label class="radio-btn">
										    <input type="radio" class="unit-btn" units="km" name="radio-two" id="revolution-radio-btn">
										    <span class="checkmark">revs</span>
										</label>
									</form>
								</div>
								<div class="time-selection">
									<form>
										<span class="badge">3</span>
										<span><b>Time:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="time-btn" units="sec" name="radio-three" id="seconds-radio-btn"/>
										    <span class="checkmark">seconds</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-btn" units="min" name="radio-three" id="minutes-radio-btn"/>
										    <span class="checkmark">minutes</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-btn" units="hr" name="radio-three" id="hours-radio-btn"/>
										    <span class="checkmark">hours</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="time-btn" units="day" name="radio-three" id="days-radio-btn"/>
										    <span class="checkmark">days</span>
										</label>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">4</span>&nbsp;<strong>Values</strong></h4>
									<form id="values-form">
									<span id="omega-symbol">&omega;</span>
									<input class="form-control input-field" type="number" id="angular-velocity-field" placeholder="ang. velocity (&omega;)">
									<input class="form-control input-field" type="number" id="period-field" placeholder="period (T)">
									<input class="form-control input-field" type="number" id="radius-field" placeholder="radius (r)">
									<input class="form-control input-field" type="number" id="sig-figs-field" placeholder="# of sigfigs (optional)">
									<div class="form-divider"></div>
									<div class="calc-and-clear">
										<button type="button" class="btn" id="calculate-btn"><b>Calculate</b></button>
										<button type="button" class="btn" id="clear-btn"><b>Clear</b></button>
									</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrows-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../img/circular-equation-one.png" class="img-responsive slide" alt="Angular Velocity"/>
											<img src="../img/circular-equation-two.png" class="img-responsive slide" alt="Period"/>
											<img src="../img/circular-equation-three.png" class="img-responsive slide" alt="Radius"/>
											<img src="../img/circular-frequency-equation.png" class="img-responsive slide" alt="Frequency"/>
											<img src="../img/circular-period-equation.png" class="img-responsive slide" alt="Period"/>
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="solo-image">
										<img src="../img/circular-motion-solo-pic.png" class="img-responsive" alt="Acceleration Graph"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title text-center"><h4 id="background-heading"><b>Background:</b></h4></div>
						</div>
						<div class="panel-body module-section">
							<div class="module-box">
								<div class="module top-corners-rounded">
									<div class="module-front first-front">Uniform Circular Motion</div>
									<div class="module-back first-back">
										Circular Velocity is always changing because the direction is changing
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Period (T)</div>
									<div class="module-back">
										Time interval for an object to rotate a full circle one time (1 revolution)
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Frequency</div>
									<div class="module-back">
										Number of revolutions (full circle rotation) per second (rev / sec)
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front last-front">Graph Below</div>
									<div class="module-back last-back">
										Acceleration can be represented as the slope in a velocity vs. time graph
									</div>
								</div>
							</div>
							<div class="module-img">
								<img src="../img/circular-module-image.png" class="img-responsive" alt="Circular Motion Diagram">
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="panel panel-default">
				<div class="panel-body" id="third-pics-panel">
					<div class="row animated fadeInLeft">
						<div class="col-sm-4 third-page-pics">
							<img src="../img/turbine.jpeg" alt="Plane Turbine" class="img-responsive">
							<div class="img-caption">
								<p>Large jet engine turbines tend to operate around 10,000 rpms, while micro turbines can reach 500,000 rpm. <a href="https://www.isma-isaac.be/publications/PMA_MOD_publications/ISMA2006/181-198.pdf" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/hard-drive.jpg" alt="Formula 1 Car" class="img-responsive">
							<div class="img-caption">
								<p>In today's market, a 7200 rpm hard drive will deliver data at a 33% higher rate than a 5400 rpm drive.<a href="https://en.wikipedia.org/wiki/Formula_One_car#Acceleration" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/car-dashboard.jpeg" alt="Apple" class="img-responsive">
							<div class="img-caption">
								<p>The Renesis engine in the Mazda-RX8 has the highest redline for a rotary-engine car at 9000 revolutions per minute. <a href="https://en.wikipedia.org/wiki/Mazda_RX-8" target="_blank"/> (Source)</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="line-divider"></div>

			<div class="row text-center" id="practice-btns-outer">
				<div class="text-center" id="practice-btns-container">
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-one">Example 1</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-two">Example 2</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-three">Example 3</button>
				</div>
			</div>

			<div id="conversion-outer">
				<div id="conversion-container">
					<div id="conversion-heading">Unit Conversions</div>
					<div class="input-option-input">
						<input type="number" id="unit-input-field" max="999" placeholder="(input)"/>
						<select name="unitConversions" id="unit-converter">
							<option value="mmToM" id="millimetersToCentimeters" selected>mm to cm</option>
							<option value="mToMm" id="centimetersToMillimeters">cm to mm</option>
							<option value="cmToM" id="centimetersToMeters">cm to m</option>
							<option value="mtoCm" id="metersToCentimeters">m to cm</option>
							<option value="mToKm" id="metersTokilometers">m to km</option>
							<option value="kmToM" id="kilometersToMeters">km to m</option>
							<option value="mToMi" id="metersToMiles">m to mi</option>
							<option value="miToM" id="milesToMeters">mi to m</option>
							<option value="mToMi" id="metersToMiles">m to mi</option>
							<option value="kmToMi" id="kilometersToMiles">km to mi</option>
							<option value="miToKm" id="milesToKilometers">mi to km</option>
							<option value="ftToYds" id="feetToYards">ft to yds</option>
							<option value="ydsToFt" id="yardsToFeet">yds to ft</option>
							<option value="ftToM" id="feetToMeters">ft to m</option>
							<option value="mToFt" id="metersToFeet">m to ft</option>
							<option value="inToCm" id="inchesToCentimeters">in to cm</option>
							<option value="cmToIn" id="centimetersToInches">cm to in</option>
							<option value="mgToG" id="milligramsToGrams">mg to g</option>
							<option value="gToMg" id="gramsToMilligrams">g to mg</option>
							<option value="gToKg" id="gramsToKilograms">g to kg</option>
							<option value="kgToG" id="kilogramsToGrams">kg to g</option>
							<option value="lbsToKg" id="poundsToKilograms">lbs to kg</option>
							<option value="kgToLbs" id="kilogramsToPounds">kg to lbs</option>
							<option value="km2Tom2" id="kilometerSquaredToSquareMeters">km² to m²</option>
							<option value="m2ToKm2" id="squareMetersToKilometersSquared">m² to km²</option>-->
						</select>
						<input type="text" id="unit-output-field" placeholder="(output)" disabled="disabled">
					</div>
				</div>
			</div>


			<div class="modal fade example-modal" id="my-modal-one" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center"><b>Angular Velocity</b></h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<div class="modal-text">
									<p>
									A CD that is 120 mm in diameter can spin in a CD player up to 480 rpm. When the CD is spinning at its max rate, what is the period? If a dust particle were to land on the CD, what would be the difference in velocity if the particle landed on the outside edge vs. 40 mm from the edge?
									</p>
								</div>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel">
								<img src="img/circularMotionAccordionImg1.png" class="img-responsive"/>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Frequency Equation</b> : f = 1 / T (period)</li>
										<li><b>Angular Velocity</b> : &omega; = (2&pi;r) / T</li>
										<li><b>CD Diameter</b> : 120 mm = 0.12 m</li>
										<li><b>CD Radius</b> : 60 mm = 0.06 m</li>
										<li><b>Frequency Units</b> : revolutions / second</li>
										<li><b>Radius from Edge</b> : 0.06 m</li>
										<li><b>Radius 40 mm from Edge</b> : 0.04 m</li>
									</ul>
								</p>
							</div>
							<button class="accordion last-accordion"><strong>Solution:</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Rev/min to Rev/sec</b> : 480 rev/min * 1 min/60sec = 8 rev/sec</li>
										<li><b>Frequency to Period</b> : f = 1/T = 8 rev/sec = 0.125 sec/rev</li>
										<li><b>Angular Velocity at Edge</b> : 2(3.14)(0.06) / 0.125 = 3.02 m/s</li>
										<li><b>Angular V 40 mm from Edge</b> : 2(3.14)(0.04) / 0.125 = 2.01 m/s</li>
										<li><b>Angular V Difference</b> : 3.02 - 2.01 = 1.01 m/s</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>





				<div class="modal fade example-modal" id="my-modal-two" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center"><b>Frequency</b></h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
								<div class="modal-panel">
									<p>
									The diameter of the London Eye ferris wheel is about 120 meters and completes one revolution in 30 minutes. What is the frequency in revolutions per second and how fast are the capsules at the edge going?
									</p>
								</div>
								<button class="accordion"><strong>Illustration</strong></button>
								<div class="modal-panel">
									<img src="img/circularMotionAccordionImg2.png" class="img-responsive"/>
								</div>
								<button class="accordion"><strong>Given Variables</strong></button>
								<div class="modal-panel">
									<p>
										<ul>
											<li><b>Frequency Equation</b> : f = 1 / T</li>
											<li><b>Angular Velocity Equation</b> : &omega; = (2&pi;r) / T</li>
											<li><b>Diameter</b> : 120 meters, radius = 60 meters</li>
											<li><b>One Revolution</b> : 1 rev / 30 minutes</li>
										</ul>
									</p>
								</div>
								<button class="accordion last-accordion"><strong>Solution</strong></button>
								<div class="modal-panel">
									<p>
										<ol>
											<li><b>Frequency</b> : 1 rev/30 min / 60 seconds = 1 rev / 1800 sec</li>
											<li><b>Angular Velocity</b> : Since f = 1/T, T = 1/f, &omega; = 2(&pi;)(r)(f)  <li>
											<li><b>&omega; = 2(3.14)(1/1800)(60) = 0.208 m/s</b></li>
										</ol>
									</p>
								</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>





				<div class="modal fade example-modal" id="my-modal-three" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center"><b>Net Displacement</b></h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
								<div class="modal-panel">
									<p>
										A child is spinning on a roundabout with an angular velocity of 6.7 m/s. If the diameter of the roundabout is 3.6 meters what would we the period (T) in seconds per revolution?
									</p>
								</div>
								<button class="accordion"><strong>Illustration</strong></button>
								<div class="modal-panel">
									<img src="img/circularMotionAccordionImg3.png" class="img-responsive"/>
								</div>
								<button class="accordion"><strong>Given Variables</strong></button>
								<div class="modal-panel">
									<p>
										<ul>
											<li><b>Equation:</b> &omega; = 2(radius)(&pi;) / (T)</li>
											<li><b>Roundabout Diameter:</b> 3.6 meters</li>
											<li><b>Roundabout Radius:</b> 1.8 meters</li>
											<li><b>Angular Velocity:</b> 6.7 m/s</li>
										</ul>
									</p>
								</div>
								<button class="accordion last-accordion"><strong>Solution</strong></button>
								<div class="modal-panel">
									<p>
										<ol>
											<li><b>Solve for T:</b> T = 2(&pi;)(radius) / &omega;</li>
											<li><b>Input Variables:</b> T = 2(&pi;)(1.8 m) / (6.7 m/s)</li>
											<li><b>Answer:</b> 1.69 sec / rev</li>
										</ol>
									</p>
								</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>


				<!-- Calculator Modal -->
						<div class="modal fade" id="calculator-modal" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="text-center">Calculator</h4>
									</div>
										<div class="modal-body">
											<div class="calculator-whole">
												<input type="text" id="input-field">
												<div class="row">
														<div class="col-half">
																<div id="radians-container">
																		<button type="button" id="radians-btn">Radians</button>
																		<span id="radians-indicator"></span>
																</div>
														</div>
														<div class="col-half">
																<div id="degrees-container">
																		<button type="button" id="degrees-btn">Degrees</button>
																		<span id="degrees-indicator"></span>
																</div>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" class="trig-btn">sin</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="trig-btn">cos</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="trig-btn">tan</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn pi-btn">&pi;</button>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" class="trig-btn">sin<sup>-1</sup></button>
														</div>
														<div class="col-fourth">
																<button type="button" class="trig-btn">cos<sup>-1</sup></button>
														</div>
														<div class="col-fourth">
																<button type="button" class="trig-btn">tan<sup>-1</sup></button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">/</button>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" class="reg-btn">7</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">8</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">9</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn"><b>*</b></button>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" class="reg-btn">4</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">5</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">6</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">-</button>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" class="reg-btn">1</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">2</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">3</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">+</button>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" class="reg-btn">0</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn"><b>.</b></button>
														</div>
														<div class="col-fourth">
																<button type="button" id="square-btn">x<sup>2</sup></button>
														</div>
														<div class="col-fourth">
																<button type="button" id="nth-power">x<sup>n</sup></button>
														</div>
												</div>
												 <div class="row">
														<div class="col-fourth">
																<button type="button" id="square-root-btn">&radic;</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">(</button>
														</div>
														<div class="col-fourth">
																<button type="button" class="reg-btn">)</button>
														</div>
														<div class="col-fourth">
																<button type="button" id="ten-power">EE</button>
														</div>
												</div>
												<div class="row">
														<div class="col-fourth">
																<button type="button" id="calculator-calculate-btn">=</button>
														</div>
														<div class="col-fourth">
																<button type="button" id="calculator-clear-btn">Clear</button>
														</div>
														<div class="col-fourth">
																<button type="button" id="delete-btn">Del</button>
														</div>
														<div class="col-fourth">
																<input type="number" id="sig-fig-field" placeholder="#"/>
														</div>
												</div>
										</div>
												<div id="calculator-tooltip"></div>
										</div>
									<div class="modal-footer text-center" id="calc-modal-footer">
										<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
									</div>
								</div>
							</div>
							<div class="close-modal-btn">
								<span class="btn glyphicon glyphicon-remove"></span>
							</div>
						</div>
						<!-- End of Calculator Modal -->

						<!-- Go back to top -->
						<div id="go-up-container">
							<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
						</div>



		<div class="row">
			<div class="col-md-12">
				<div class="pages-nav">
					<ul class="pager">
						<li><a href="kinematics.php" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Kinematics Big Five</a></li>
						<li><a href="oneDimensionalforces.php" class="next-page-btn">Next: Forces<span class="glyphicon glyphicon-chevron-right"></span></a></li>
					</ul>
				</div>
			</div>
		</div>


	</section>

	<script type="text/javascript" src="circularMotion.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="jsCalculator.js"></script>





</body>
</html>
