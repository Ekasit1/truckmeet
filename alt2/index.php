
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kristianstad Truckmeet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme-red.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>
		
		<div class="main-container">
		<section class="image-slider slider-all-controls controls-inside parallax pt0 pb0 height-70">
		        <ul class="slides">
		            <li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/ktm/truck.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row text-center">
		                        <div class="col-md-10 col-md-offset-1">
		                            <h2 class="mb-xs-16"><img src="img/ktm/logo-white.png"></h2>
		                            <p class="lead mb40">Familjeutställning med lastbilar, bilar, maskiner, traktorer och mycket mer</p>
		                            <a class="btn btn-lg inner-link" href="#cars">se anmälda bilar</a>
		                            <a class="btn btn-lg btn-filled" data-toggle="modal" data-target=".bs-example-modal-lg">anmäl dig nu</a><br>
		                            
		                        </div>
		                    </div>
		                    
		                </div>
		                
		            </li>
		        </ul>
		    </section>


			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
					<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Anmälan till Kristianstad Truckmeet 2016</h4>
					 </div>
					      <div class="modal-body">
					      	<form class="form-email">
							
							<div class="row">
								<div class="col-md-6">
									<b>Fullständigt namn</b>
									<input type="text" class="validate-required" name="name">
								</div><!-- /.col-md-6 -->
								<div class="col-md-6">
									<b>Telefonnummer</b>
									<input type="text" class="validate-required" name="phone">
								</div><!-- /.col-md-6 -->

									<div class="col-md-6">
									<b>Stad</b>
									<input type="text" class="validate-required" name="city">
									</div><!-- /.col-md-6 -->
									<div class="col-md-6">
										<b>E-post</b>
										<input type="text" class="validate-required" name="email">
									</div><!-- /.col-md-6 -->

									<hr style="width:90%;margin:0 auto;" class="mt24 pb24">

									<div class="col-md-6">
									<b>Typ av fordon</b>
										<div class="select-option">
										    <i class="ti-angle-down"></i>
										    <select name="car">
										        <option value="">Lastbil</option>
										        <option value="">Motorcykel</option>
										        <option value="">Hjullastare</option>
										        <option value="">Moped</option>
										    </select>
										</div>
									</div><!-- /.col-md-6 -->
									<div class="col-md-6">
									<b>Årsmodell</b>
										<div class="select-option">
										    <i class="ti-angle-down"></i>
										    <select name="age">
										        <?php

									        	foreach (range(2016, 1987) as $number) {
												    echo "<option value='$number'>$number</option>";
												}

										        ?>
										        <option value="veteran">Veteran</option>
										    </select>
										</div>
									</div><!-- /.col-md-6 -->


									<div class="col-md-6">
									<b>Påbyggnad</b>
										<div class="select-option">
										    <i class="ti-angle-down"></i>
												<select name="age" id="">
													<option value="">Timmer</option>
													<option value="">Skåp</option>
													<option value="">Släp</option>
												</select>
										</div>
									</div><!-- /.col-md-6 -->
									<div class="col-md-6">
							
									<b>Queen of the road</b><br>
									<div class="checkbox-option" style="margin-top:10px">
                                        <div class="inner"></div>
                                        <input type="checkbox" name="webdesign" value="webdesign">
                                    </div>
										
									</div><!-- /.col-md-6 -->

									<div class="col-md-12">
										<button type="submit">Skicka in anmälan</button>
									</div>
								</div>
								
		                    </form>

					      </div>
			    </div>
			  </div>
			</div>

		    <section>
		        <div class="container">
		            <div class="row v-align-children">
		                <div class="col-sm-5">
		                    <h3>En festival för hela familjen</h3>
		                    <p class="lead mb40">
		                        Kristianstad Truckmeet är en familjefestival där det ställs ut lastbilar, bilar, maskiner, traktorer och mycket mer. Vad som är nytt för i år är också att det kommer att finnas företag på plats som ställer ut i olika montrar.
		                    </p>
		                    <div class="overflow-hidden mb32 mb-xs-24">
		                        <i class="ti-face-smile icon icon-sm pull-left"></i>
		                        <h6 class="uppercase mb0 inline-block p32">Festival för hela familjen</h6>
		                    </div>
		                    <div class="overflow-hidden mb32 mb-xs-24">
		                        <i class="ti-money icon icon-sm pull-left"></i>
		                        <h6 class="uppercase mb0 inline-block p32">All vinst går till Barncancerfonden</h6>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6">
		                    <div class="pricing-table pt-1 text-center emphasis">
		                        <h5 class="uppercase">Hittils har</h5>
		                        <span class="price">23</span>
		                        <p class="lead">anmält sig</p>
		                        <a class="btn btn-white btn-lg" href="#">ANMÄL DITT FORDON</a>
		                        <p>
		                            Företag? <a href="#">Anmäl Er här</a>
		                        </p>
		                    </div>
		                    
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>


		<!-- NEWS SECTION COMES HERE -->

<?php
function fetchUrl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
// You may need to add the line below
// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$feedData = curl_exec($ch);
curl_close($ch);
return $feedData;
}
$addr = "graph.facebook.com";
$id = "288214184907514";
$key = "8e226d9b4001a5c419bb582a04cf5261";
$pageid = "truckmeetkristianstad";
$end = "/v2.8/".$pageid."/feed";

$profile_id = $pageid;
//App Info, needed for Auth
$app_id = $id;
$app_secret = $key;
//Retrieve auth token
$authToken = fetchUrl("https://graph.facebook.com/oauth/access_token?grant_type=client_credentials&client_id={$app_id}&client_secret={$app_secret}");
$json_object = fetchUrl("https://graph.facebook.com/{$profile_id}/feed?{$authToken}");
$data = JSON_decode($json_object);

foreach ($data as $posts) {
	foreach ($posts as $post) {
		if (isset($post->message)) {
				$postMessage = $post->message;
				$postDatetime = $post->created_time;
				break;
			}
	}
}

?>

			<section class="bg-secondary">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-10 col-sm-offset-1">
		                    <div class="post-snippet mb24">
		                        
		                        <div class="post-title">
		                            <h4 class="inline-block uppercase">Senaste nytt</h4>
		                        </div>
		                        <ul class="post-meta">
		                            <li>
		                                <i class="ti-calendar"></i>
		                                <span><?php echo substr($postDatetime, 0, 10) . " " . substr($postDatetime, 11, 5) ?></span>
		                            </li>
		                        </ul>
		                        <hr>
		                        <p>
		                            <?php echo nl2br($postMessage); ?>
		                        </p>
		                    </div>
		                    
		                    <hr>
		                </div>
		                
		            </div>
		            
		        </div>
		        
		    </section>

		<!-- NEWS SECTION ENDS HERE -->



		    <section class="p0">
		        <div class="map-holder pt180 pb180">
		            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4222.946408444165!2d14.141193042076836!3d55.986359944827946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465404cdbbd7e427%3A0xf83b141a284c4602!2sWendesgymnasiet!5e0!3m2!1ssv!2sse!4v1479804787395"></iframe>
		        </div>
		    </section>


			<section>
		        <div class="container">
		            <div class="row" id="cars">
		                <div class="col-sm-12 text-center">
		                    <h4 class="uppercase mb16">Anmälda fordon</h4>
		                    <p class="lead mb64">
		                        Nedan finns alla godkända fordon som anmält sig till eventet.
		                    </p>
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="lightbox-grid square-thumbs" data-gallery-title="Gallery">
		                        <ul>
		                            <li>
		                                <a href="http://h24-original.s3.amazonaws.com/167185/16187083-V3sC1.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="http://h24-original.s3.amazonaws.com/167185/16187083-V3sC1.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/home12.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Scania_porteur_benne_tp.jpeg/250px-Scania_porteur_benne_tp.jpeg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/home14.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="img/ktm/nopic.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/home17.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="img/home17.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/cover5.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="img/cover5.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/cover6.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="img/cover6.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/cover7.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="img/cover7.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="img/cover8.jpg" data-lightbox="true">
		                                    <div class="background-image-holder">
		                                        <img alt="image" class="background-image" src="img/cover8.jpg">
		                                    </div>
		                                </a>
		                            </li>
		                        </ul>
		                    </div>
		                    
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>



		    <section class="bg-primary">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="mb0 inline-block p32 p0-xs">Anmäl ditt fordon direkt!</h3>
		                    <a class="btn btn-lg btn-white mb8 mt-xs-24" href="#">anmäl dig nu</a>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section><section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 col-md-5">
		                    <h4 class="uppercase"></h4>
		                    <p>
		                        Har du några frågor eller funderingar angående eventet? Tveka inte att höra av dig. Vi finns tillgängliga på kontaktuppgifterna nedan, men du kan också fylla i kontaktformuläret så återkommer vi till dig så snabbt vi kan.
		                    </p>
		                    <hr>
		                    <p>
		                        438 Marine Parade
		                        <br> Elwood, Victoria
		                        <br> P.O Box 3184
		                    </p>
		                    <hr>
		                    <p>
		                        <strong>E:</strong> info@kristianstadtruckmeet.se
		                        <br>
		                        <strong>T:</strong> 070-522 40 73
		                        <br>
		                    </p>
		                </div>
		                <div class="col-sm-6 col-md-5 col-md-offset-1">
		                    <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
		                        <input type="text" class="validate-required" name="name" placeholder="Namn">
		                        <input type="text" class="validate-required validate-email" name="email" placeholder="E-postadress">
		                        <textarea class="validate-required" name="message" rows="4" placeholder="Meddelande"></textarea>
		                        <button type="submit">Skicka meddelande</button>
		                    </form>
		                </div>
		            </div>
		            
				Huvudsponsor:<br>
				<img src="img/ktm/daf.png" width="200px">

		        </div>
		        
		    </section>			
			
					
			
					
			
					
			<footer class="footer-2 bg-dark text-center-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<a href="#"><img class="image-xxs fade-half" alt="Pic" src="img/ktm/logo-white.png"></a>
						</div>
					
						<div class="col-sm-4 text-center">
							<span class="fade-half">
								<a href="#">Privacy</a> | <a href="tos.html" target="_blank">Terms</a><br>
								&copy; Kristianstad TruckMeet 2016<br>
								Sidan skapad av TE15 på IT-Gymnasiet Kristianstad.
							</span>
						</div>
					
						<div class="col-sm-4 text-right text-center-xs">
							<ul class="list-inline social-list">
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
				
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				