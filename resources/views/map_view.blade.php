<!DOCTYPE html>
<html>
    <head>
        <script>
            function exportData(){
                var isi = document.getElementById('geojson').value;
                if(isi !== null && isi !== ""){
                    var textToWrite = document.getElementById('geojson').value ;
  var textFileAsBlob = new Blob([ textToWrite ], { type: 'text/plain' });
  var fileNameToSaveAs = "data.geojson";
  var downloadLink = document.createElement("a");
  downloadLink.download = fileNameToSaveAs;
  downloadLink.innerHTML = "Download File";
  if (window.webkitURL != null) {
    // Chrome allows the link to be clicked without actually adding it to the DOM.
    downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
  } else {
    // Firefox requires the link to be added to the DOM before it can be clicked.
    downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
    downloadLink.onclick = destroyClickedElement;
    downloadLink.style.display = "none";
    document.body.appendChild(downloadLink);
  }
  downloadLink.click();
                }
                else{
                    alert('silahkan tambahkan dahulu polygon')
                }
            }
            function showPolygon(event){
                alert('halo')
                var vertices = this.getPath();
                var contentString = '<b>Bermuda Triangle polygon</b><br>' +
            'Clicked location: <br>' + event.latLng.lat() + ',' + event.latLng.lng() +
            '<br>';

            for (var i =0; i < vertices.getLength(); i++) {
          var xy = vertices.getAt(i);
          contentString += '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' +
              xy.lng();
        }
            }
        function myFunction() {
                    var url= "delete/" +   localStorage.getItem("dataid");
                     window.location = url;
                     localStorage.clear();
                    }

            // This example requires the Drawing library. Include the libraries=drawing
            // parameter when you first load the API. For example:
            // <script src="https://maps.googleapis.com/maps/api/js?key=<YOUR_API_KEY>&libraries=drawing">

              function initMap() {
                  var infowindow = new google.maps.InfoWindow();
              var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -0.027842, lng: 109.344250},
                zoom: 6
              });

              var iconBase =
                  'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

              var icons = {
                parking: {
                  icon: iconBase + 'parking_lot_maps.png'
                },
                library: {
                  icon: iconBase + 'library_maps.png'
                },
                info: {
                  icon: iconBase + 'info-i_maps.png'
                }
              };

              var features = [
                  @foreach ($users as $article)
              {  position : new google.maps.LatLng({{ $article->latitude }},
                  {{ $article->longitude }}),
                  type : '{{$article->type }}',
                  keterangan : '{{$article->keterangan}}',
                  nama_lokasi : '{{$article->nama_lokasi}}',
                  id : {{$article->id }}
              },
                  @endforeach
              ];
              console.log(features)

        var drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.MARKER,
          drawingControl: true,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
          },
          markerOptions: {icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'},
          circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: true,
            editable: true,
            zIndex: 1
          }
        });


    var field = new google.maps.Polygon({
    paths: [],
    editable: true
  });


        drawingManager.setMap(map);



        google.maps.event.addListener(drawingManager, 'polygoncomplete', function(polygon) {
  drawingManager.setOptions({
    drawingMode: null,

    drawingControlOptions: {
      position: google.maps.ControlPosition.TOP_CENTER,
      drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
    }
  });
  field.setPath(polygon.getPath().getArray());
  polygon.setMap(null);
  polygon = null;
  field.setMap(map);
  google.maps.event.addListener(field.getPath(), 'set_at', function(index, obj) {
    // changed point, via map
    console.log(field.getPath());
    console.log("a point has changed");
  });
  google.maps.event.addListener(field.getPath(), 'insert_at', function(index, obj) {
    // new point via map
    console.log(field.getPath());
    console.log("a point has been added");
  });
  google.maps.event.addListener(field.getPath(), "remove_at", function(index, obj) {
    //removed point, via map
    console.log(field.getPath());
    console.log("a point has been removed");
  });

                google.maps.event.addListener(field, 'click', function(event){
                    if (window.confirm('Ingin Menambahkan Lokasi Disini'))
    {
        console.log(this.getPath());
        console.log(field.getPath());
        var geoJson = {
    "type": "FeatureCollection",
    "features": [],
    "datas" : []
  };

  var polylineFeature = {
    "type": "Feature",
    "geometry": {
      "type": "Polygon",
      "coordinates": []
    },
    "properties": {
        "stroke": "#555555",
				"stroke-width": 2,
				"stroke-opacity": 1,
				"fill": "#555555",
				"fill-opacity": 0.5,
				"name": "Untitled Polygon",
				"id": 1,
				"kode": 100,
				"kategori": 1,
				"latitude": 110.4373468639217,
				"longitude": -7.067000343444539
    }
  };

var a = this.getPath().getLength()
var pt2 = this.getPath().getAt(0);


  for (var i = 0; i < a; i++) {
    var pt = this.getPath().getAt(i);
    geoJson.datas.push([
        pt.lng(), pt.lat()
    ])
    // polylineFeature.geometry.coordinates.push([
    //   pt.lng(), pt.lat()
    // ]);
  }

  geoJson.datas.push([
    pt2.lng(), pt2.lat()
  ])

//   polylineFeature.geometry.coordinates.push([
//     pt2.lng(), pt2.lat()
//     ]);

polylineFeature.geometry.coordinates.push(geoJson.datas);
  geoJson.features.push(polylineFeature);
  document.getElementById('geojson').value = JSON.stringify(geoJson);
  field.setPath([]);
  map.data.addGeoJson(geoJson);

//   map.data.setStyle({
//     fillColor: 'blue',
//     fillOpacity: 1,
//     strokeColor: 'green',
//     strokeWeight: 2,

//   });
   map.data.toGeoJson(function(data) {
    document.getElementById('geojson').value = JSON.stringify(geoJson);
  });
    }
    else{
        location.reload();
    }
                });

});



          google.maps.event.addListener(drawingManager, 'markercomplete', function(marker){
            if (window.confirm('Ingin Menambahkan Lokasi Disini'))
    {

            var lat = '<p>Lokasinya adalah </p>';
              var lng = marker.getPosition().lng();
              //alert(lat + "," + lng)
              google.maps.event.addListener(marker, 'click', function () {

                  infowindow.setContent(
                       '<P> Lokasi(lat,long) : ' + marker.getPosition().lat() + ', ' + marker.getPosition().lng() + '<p/>' +

                      '<form action = \"/create\" method = \"post\">\n' +
      '<input type = \"hidden\" name = \"_token\" value = \"<?php echo csrf_token(); ?>\">\n' +
      '<table>\n' +
      '<tr>\n' +
      '<td>Nama Lokasi</td>\n' +
      '<td><input type=\'text\' name=\'nama_lokasi\' required/></td>\n' +
      '</tr>\n' +
      '\n' +
      '<tr>\n' +
      '<td>Latitude</td>\n' +
      '<td><input type=\"number\" step=\"any\" id=\"latitude\" name=\'latitude\' required/></td>\n' +
      '</tr>\n' +
      '\n' +
      '<tr>\n' +
      '<td>Longitude</td>\n' +
      '<td><input type=\"number\" step=\"any\"id=\"longitude\" name=\'longitude\' required/></td>\n' +
      '</tr>\n' +
      '\n' +
      '<tr>\n' +
      '<td>Keterangan</td>\n' +
      '<td><input type=\"text\" name=\'keterangan\' required /></td>\n' +
      '</tr>\n' +
      '\n' +
      '<tr>\n' +

      '<td><input type=\"hidden\" name=\'type\' value=\'info\' required/></td>\n' +
      '</tr>\n' +
      '\n' +
      '<tr>\n' +
      '\n' +
      '<td colspan = \'2\'>\n' +
      '<br>' +
      '<input type = \'submit\' value = \"Add Maps\"/>\n' +
      '</td>\n' +
      '</tr>\n' +
      '</table>\n' +
      '</form>'


                      );
                  infowindow.open(map, this);
              });
}
else
{
    location.reload();
}

      });
          for (var i = 0; i < features.length; i++) {
                  //var single_location = features[i];
                 // var myLatLng = new google.maps.LatLng(single_location[1], single_location[2]);
                  var marker = new google.maps.Marker({
                  position: features[i].position,
                  //icon: icons[features[i].type].icon,
                  icon: icons[features[i].type].icon,
                  nama_lokasi: features[i].nama_lokasi,
                  map: map,
                  keterangan : features[i].keterangan,
                  id : features[i].id
                });
                google.maps.event.addListener(marker, 'click', function () {
                    var dataid = this.id
                    localStorage.setItem("dataid", dataid)
                  infowindow.setContent(

                      '<h3><b>' + this.nama_lokasi + ' ' + this.position + '</b></h3>' +

                      '<p>' + this.nama_lokasi + '</p>' +
                      '<p>' + this.keterangan + '</p>' +

                      '<button type=\"button\" onclick=\"myFunction()\">Delete</button>'
                      );
                  infowindow.open(map, this);
              });
                //end for loop


              };


      }




          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=<YOUR_API_KEY>&libraries=drawing&callback=initMap"
               async defer></script>

        <style>
            /* Always set the map height explicitly to define the size of the div
             * element that contains the map. */
            #map {
              height: 75%;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
              height: 100%;
              padding: 0;
            }
          </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>TUGAS PBD</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <style>
            /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
        </style>
    </head>
    <body>







        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Tugas PBD</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Welcome

                    @if (Auth::check())
                         {{ Auth::user()->name }}
                         <br />
                         Session Login AS

                         @if(Auth::user()->role != null)
                            @if (Auth::user()->role == 1 || Auth::user()->role == 3 )
                             {{ Auth::user()->status }}
                            @else
                            <?php
                            echo '<script language="javascript">alert("Anda Tidak Punya Akses Kesini")</script>';
                            echo '<meta http-equiv="refresh" content="0; URL=../home">';
                            ?>
                            @endif
                         @endif

                    @else
                    <?php
                    echo '<script language="javascript">alert("HARAP LOGIN DAHULU")</script>';
                     echo '<meta http-equiv="refresh" content="0; URL=../login">';
                    ?>
                    @endif




                    </p>
                    <li><a href="/home">Home</a></li>

                    @if(Auth::check() != null || Auth::check() != ""  )
                            @if (Auth::user()->role == 1 || Auth::user()->role == 3 )
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Maps</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="/maps">See Maps</a></li>
                                    <li><a href="/showmaps">Table Maps</a></li>
                                </ul>
                            </li>
                         @endif
                    @endif

                    @if(Auth::check() != null || Auth::check() != ""  )
                         @if (Auth::user()->role == 1 || Auth::user()->role == 2 )
                         <li>

                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Account</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li><a href="/table_user">Table Account</a></li>
                                <li><a href="/registeraccount">Register Account</a></li>
                            </ul>
                        </li>
                      @endif
                    @endif

                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></a></li>
                </ul>



            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">


                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                            <button class="btn btn-warning" style="width:200px;height:33px" onclick= "exportData()">DOWNLOAD GEOJSON</button>
                        </div>



                </nav>
                @yield('content')
                <article id="article3" style="">
                    <div style="margin: 2px 0px 2px 0px;">

                    </div>
                  <textarea id="geojson" rows="10" cols="70" style="display: none;"></textarea>
                </article>
<div id="map"></div>
{{-- ini konten --}}


            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
