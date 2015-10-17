<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FoodBuddy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>    <!-- Google Maps API -->
    <script>
    var map;    // Google map object
    
    // Initialize and display a google map
    function Init()
    {
        // Create a Google coordinate object for where to initially center the map
        var latlng = new google.maps.LatLng( 40.7592024, -73.9771259 );   // Washington, DC
        
        // Map options for how to display the Google map
        var mapOptions = { zoom: 14, center: latlng  };
        
        // Show the Google map in the div with the attribute id 'map-canvas'.
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    }
    
    // Update the Google map for the user's inputted address
    function UpdateMap( )
    {
        var geocoder = new google.maps.Geocoder();    // instantiate a geocoder object
        
        // Get the user's inputted address
        var address = document.getElementById( "address" ).value;
    
        // Make asynchronous call to Google geocoding API
        geocoder.geocode( { 'address': address }, function(results, status) {
            var addr_type = results[0].types[0];    // type of address inputted that was geocoded
            if ( status == google.maps.GeocoderStatus.OK ) 
                ShowLocation( results[0].geometry.location, address, addr_type );
            else     
                alert("Geocode was not successful for the following reason: " + status);        
        });
    }
    
    // Show the location (address) on the map.
    function ShowLocation( latlng, address, addr_type )
    {
        // Center the map at the specified location
        map.setCenter( latlng );
        
        // Set the zoom level according to the address level of detail the user specified
        var zoom = 12;
        switch ( addr_type )
        {
        case "administrative_area_level_1"  : zoom = 6; break;      // user specified a state
        case "locality"                     : zoom = 10; break;     // user specified a city/town
        case "street_address"               : zoom = 15; break;     // user specified a street address
        }
        map.setZoom( zoom );
        
        // Place a Google Marker at the same location as the map center 
        // When you hover over the marker, it will display the title
        var marker = new google.maps.Marker( { 
            position: latlng,     
            map: map,      
            title: address
        });
        
        // Create an InfoWindow for the marker
        var contentString = "" + address + "";  // HTML text to display in the InfoWindow
        var infowindow = new google.maps.InfoWindow( { content: contentString } );
        
        // Set event to display the InfoWindow anchored to the marker when the marker is clicked.
        google.maps.event.addListener( marker, 'click', function() { infowindow.open( map, marker ); });
    }
    
    // Call the method 'Init()' to display the google map when the web page is displayed ( load event )
    google.maps.event.addDomListener( window, 'load', Init );

    </script>
    <style>
    /* style settings for Google map */
    #map-canvas
    {
        width : 500px;  /* map width */
        height: 500px;  /* map height */
    }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="shop.php">FoodBuddy</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="cart.html">Cart</a>
                    </li>
                    <li>
                        <a href="#">Q&A</a>
                    </li>
                </ul>
			
            </div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
    </nav>

    <div class="space"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="searchbar" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search vendors, food, etc...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
				</form>
			</div>
		</div>
	</div>
	
	<br>
	
    <!-- Page Content -->
    <div class="container">
	
        <div class="row">

            <div class="col-md-6">

                <div class="row">
				
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <!-- <div class="caption"> -->
                                <h4><a href="#">Banana</a></h4>
                                <p>6 lbs.</p>
                                <p><a data-toggle="modal" data-target="#myModal">Whole Foods</a></p>
                                <button class="btn btn-primary">Reserve!</button>
                            <!-- </div> -->
                        </div>
                    </div>

                    <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Whole Foods</h4>
                      </div>
                      <div class="modal-body">
                        <p>Address: 226 E 57th St, New York, NY 10022</p>
                        <p>Phone: (646) 497-1222</p>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Follow!</button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

                </div>

            </div>

            <div class="col-md-6">
                <div id='map-canvas' ></div><br/>
                <div>
                    <label for="address"> Address:</label>
                    <input type="text" id="address"/>
                    <button onclick="UpdateMap()">Locate</button>
                </div>

            </div>

            
        </div>

        

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Team 14</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
