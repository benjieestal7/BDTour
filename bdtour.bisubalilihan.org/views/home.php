<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bohol Digital Tour</title>
      <link rel="stylesheet" href="/css/home.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>

   <body>
      <div id = "blur">
         <header>
            <input type="checkbox" name="" id="chk1">
            <div class="logo">
               <div>
               <img src="/images/logo.png" alt="Logo" width="100">
               </div>
            </div>
            <div class="search-box">
               <form action="">
                  <input type="text" name="search" id ="srch" placeholder="Search">
                  <button type="submit"><i class="fa fa-search"></i></button>
               </form>
            </div>
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="home.php">Map</a></li>
               <li><a href="rentalcars.php">Rental Cars</a></li>
               <li>
                  <a href="https://www.facebook.com/discoverboholtours"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-twitter" ></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
               </li>
            </ul>
            <div class="menu">
               <label for="chk1">
               <i class="fa fa-bars"></i>
               </label>
            </div>
         </header>
         <div class = "bgpanel"></div>
         <div class = "bohol-map">
            <div class = "map">
               <div class="pin tagb" onclick="togglePopup('popup-tagbilaran')"></div>
               <div class = "pin bac" onclick="togglePopup('popup-baclayon')"></div>
               <div class = "pin loay" onclick="togglePopup('popup-loay')"></div>
               <div class = "pin albur" onclick="togglePopup('popup-albur')"></div>
               <div class = "pin loboc" onclick="togglePopup('popup-loboc')"></div>
               <div class = "pin sikat" onclick="togglePopup('popup-sikatuna')"></div>
               <div class = "pin bilar" onclick="togglePopup('popup-bilar')"></div>
               <div class = "pin lila" onclick="togglePopup('popup-lila')"></div>
               <div class = "pin panglao" onclick="togglePopup('popup-panglao')"></div>
               <div class = "pin dauis" onclick="togglePopup('popup-dauis')"></div>
               <div class = "pin dimiao" onclick="togglePopup('popup-dimiao')"></div>
               <div class = "pin valencia" onclick="togglePopup('popup-valencia')"></div>
               <div class = "pin garcia" onclick="togglePopup('popup-garcia')"></div>
               <div class = "pin jagna" onclick="togglePopup('popup-jagna')"></div>
               <div class = "pin duero" onclick="togglePopup('popup-duero')"></div>
               <div class = "pin sierra" onclick="togglePopup('popup-sierra')"></div>
               <div class = "pin guindulman" onclick="togglePopup('popup-guindulman')"></div>
               <div class = "pin anda" onclick="togglePopup('popup-anda')"></div>
               <div class = "pin candijay" onclick="togglePopup('popup-candijay')"></div>
               <div class = "pin mabini" onclick="togglePopup('popup-mabini')"></div>
               <div class = "pin alicia" onclick="togglePopup('popup-alicia')"></div>
               <div class = "pin pilar" onclick="togglePopup('popup-pilar')"></div>
               <div class = "pin pascual" onclick="togglePopup('popup-pascual')"></div>
               <div class = "pin ubay" onclick="togglePopup('popup-ubay')"></div>
               <div class = "pin bonbonon" onclick="togglePopup('popup-bonbonon')"></div>
               <div class = "pin miguel" onclick="togglePopup('popup-miguel')"></div>
               <div class = "pin trinidad" onclick="togglePopup('popup-trinidad')"></div>
               <div class = "pin unido" onclick="togglePopup('popup-unido')"></div>
               <div class = "pin dagohoy" onclick="togglePopup('popup-dagohoy')"></div>
               <div class = "pin carmen" onclick="togglePopup('popup-carmen')"></div>
               <div class = "pin danao" onclick="togglePopup('popup-danao')"></div>
               <div class = "pin sagbayan" onclick="togglePopup('popup-sagbayan')"></div>
               <div class = "pin batuan" onclick="togglePopup('popup-batuan')"></div>
               <div class = "pin balilihan" onclick="togglePopup('popup-balilihan')"></div>
               <div class = "pin antequera" onclick="togglePopup('popup-antequera')"></div>
               <div class = "pin cortes" onclick="togglePopup('popup-cortes')"></div>
               <div class = "pin loon" onclick="togglePopup('popup-loon')"></div>
               <div class = "pin calape" onclick="togglePopup('popup-calape')"></div>
               <div class = "pin isidro" onclick="togglePopup('popup-isidro')"></div>
               <div class = "pin tubigon" onclick="togglePopup('popup-tubigon')"></div>
               <div class = "pin clarin" onclick="togglePopup('popup-clarin')"></div>
               <div class = "pin inabanga" onclick="togglePopup('popup-inabanga')"></div>
               <div class = "pin buenavista" onclick="togglePopup('popup-buenavista')"></div>
               <div class = "pin jetafe" onclick="togglePopup('popup-jetafe')"></div>
               <div class = "pin talibon" onclick="togglePopup('popup-talibon')"></div>
               <div class = "pin mahanay" onclick="togglePopup('popup-mahanay')"></div>
               <div class = "river river_icon"></div> 
               <div class = "viewing_deck viewing_deck_icon"></div> 
               <div class = "chocolatehills chocolatehills_icon"></div> 
               <div class = "church church_icon"></div> 
               <div class = "watchtower watchtower_icon"></div> 
               <div class = "museum museum_icon"></div> 
               <div class = "biking biking_icon"></div> 
               <div class = "hiking hiking_icon"></div> 
               <div class = "caving caving_icon"></div> 
               <div class = "diving diving_icon"></div> 
               <div class = "dolphin dolphin_icon"></div> 
               <div class = "ecotour ecotour_icon"></div> 
               <div class = "tarsier tarsier_icon"></div> 
               <div class = "weaving weaving_icon"></div> 
               <div class = "basket basket_icon"></div> 
               <div class = "carabao carabao_icon"></div> 
               <div class = "beach beach_icon"></div> 
               <div class = "mangrove mangrove_icon"></div> 
               <div class = "forest forest_icon"></div> 
               <div class = "waterfall waterfall_icon"></div> 
               <div class = "lake lake_icon"></div> 
               <div class = "fastcraft fastcraft_icon"></div> 
            </div>
         </div>
         <div class ="leaflet">
            <ul class="legend">
               <li class="legend-item item1">Viewing Deck</li>
               <li class="legend-item item2">Chocolate Hills</li>
               <li class="legend-item item3">Church</li>
               <li class="legend-item item4">Watchtower</li>
               <li class="legend-item item5">Museum, Historic Site</li>
               <li class="legend-item item6">Biking</li>
               <li class="legend-item item7">Hiking</li>
               <li class="legend-item item8">Caving</li>
               <li class="legend-item item9">Diving</li>
               <li class="legend-item item10">River</li>
               <li class="legend-item item11">Dolphin Watching</li>
               <li class="legend-item item12">Ecotour</li>
               <li class="legend-item item13">Tarsier</li>
               <li class="legend-item item14">Loom Weaving Industry</li>
               <li class="legend-item item15">Basket Market</li>
               <li class="legend-item item16">Carabao Center</li>
               <li class="legend-item item17">Beach</li>
               <li class="legend-item item18">Mangroves</li>
               <li class="legend-item item19">Forest</li>
               <li class="legend-item item20">Waterfall</li>
               <li class="legend-item item21">Lake, Dam</li>
               <li class="legend-item item22">Fastcraft Terminal</li>
               <li class="legend-item item23">Road Network</li>
            </ul>
         </div>
      </div>

      <div id = "popup-loay" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Loay/Loaychurch.jpg');">
                  <div class="content">
                     <div class="name">Loay Church</div>
                     <div class="des">Loay Church, another old and charming church, loay parish is located west of tagbilaran city, bohol. </div>
                     <button><a onclick="togglePopup('popup-loay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loay/Loaymorninghills.jpg');">
                  <div class="content">
                     <div class="name">Morning Hills</div>
                     <div class="des">Himontagon Hills offer great views of Bohol Sea and Loay.</div>
                     <button><a onclick="togglePopup('popup-loay')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Loay/Loaychurch.jpg');">
                  <div class="content">
                     <div class="name">Loay Church</div>
                     <div class="des">Loay Church, another old and charming church, loay parish is located west of tagbilaran city, bohol. </div>
                     <button><a onclick="togglePopup('popup-loay')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Loay/Loaymorninghills.jpg');">
                  <div class="content">
                     <div class="name">Morning Hills</div>
                     <div class="des">Himontagon Hills offer great views of Bohol Sea and Loay.</div>
                     <button><a onclick="togglePopup('popup-loay')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-loay')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-loay')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-baclayon" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Baclayon/Baclayonchurch.jpg');">
                  <div class="content">
                     <div class="name">Baclayon Church</div>
                     <div class="des">Baclayon was founded by the Jesuit priest Juan de Torres and Gabriel Sánchez in 1596, and became the oldest Christian settlement in Bohol. </div>
                     <button><a onclick="togglePopup('popup-baclayon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Baclayon/BaclayonDolphinwatchingpamilacan.jpg');">
                  <div class="content">
                     <div class="name">Dolphin Watching at Pamilacan</div>
                     <div class="des">Dolphin watching is a daily attraction in Pamilacan Island.</div>
                     <button><a onclick="togglePopup('popup-baclayon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Baclayon/Baluarte.jpg');">
                  <div class="content">
                     <div class="name">Baluarte</div>
                     <div class="des">The cool breeze and the sounds of the waves is already enough to get you relax while you are at Baluarte. </div>
                     <button><a onclick="togglePopup('popup-baclayon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Baclayon/Edithgrandgardenresort.jpg');">
                  <div class="content">
                     <div class="name">Edith Grand Garden Resort</div>
                     <div class="des">Located in Tanday, Baclayon , Bohol. Edith Grand Garden Resort and Adventure Park are a blessing and an absolute bliss to watch, especially for folks who love plants and nature.</div>
                     <button><a onclick="togglePopup('popup-baclayon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Baclayon/Pamilacan.jpg');">
                  <div class="content">
                     <div class="name">Pamilacan</div>
                     <div class="des">Pamilacan is an island barangay in the Philippines, situated 12.5 kilometres (7.8 mi) south of Bohol island and surrounded by the Bohol Sea</div>
                     <button><a onclick="togglePopup('popup-baclayon')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-baclayon')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-baclayon')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-tagbilaran" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Tagbilaran/bloodcompact.jpg');">
                  <div class="content">
                     <div class="name">Blood Compact</div>
                     <div class="des">The Blood Compact Monument is an artwork that was made to honor the first international treaty between the Philippines and Spain. </div>
                     <button><a onclick="togglePopup('popup-tagbilaran')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tagbilaran/Museum.jpg');">
                  <div class="content">
                     <div class="name">Bohol Museum</div>
                     <div class="des">The National Museum of the Philippines – Bohol is the former Provincial Capitol building, constructed in 1855 to 1860 to serve as a tribunal, prison and military quarters for the Spanish military force.</div>
                     <button><a onclick="togglePopup('popup-tagbilaran')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tagbilaran/tagbchurch.jpg');">
                  <div class="content">
                     <div class="name">Tagbilaran Church</div>
                     <div class="des">Joseph the Worker Cathedral is located on Carlos P. Garcia Avenue, Tagbilaran City—the capital of the province of Bohol. </div>
                     <button><a onclick="togglePopup('popup-tagbilaran')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Tagbilaran/bloodcompact.jpg');">
                  <div class="content">
                     <div class="name">Blood Compact</div>
                     <div class="des">The Blood Compact Monument is an artwork that was made to honor the first international treaty between the Philippines and Spain. </div>
                     <button><a onclick="togglePopup('popup-tagbilaran')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tagbilaran/Museum.jpg');">
                  <div class="content">
                     <div class="name">Bohol Museum</div>
                     <div class="des">The National Museum of the Philippines – Bohol is the former Provincial Capitol building, constructed in 1855 to 1860 to serve as a tribunal, prison and military quarters for the Spanish military force.</div>
                     <button><a onclick="togglePopup('popup-tagbilaran')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tagbilaran/tagbchurch.jpg');">
                  <div class="content">
                     <div class="name">Tagbilaran Church</div>
                     <div class="des">Joseph the Worker Cathedral is located on Carlos P. Garcia Avenue, Tagbilaran City—the capital of the province of Bohol. </div>
                     <button><a onclick="togglePopup('popup-tagbilaran')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-tagbilaran')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-tagbilaran')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-lila" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Lila/boholwhitehouseandbreakfast.jpg');">
                  <div class="content">
                     <div class="name">Bohol White House Bed & Breakfast</div>
                     <div class="des">Bohol White House Bed & Breakfast apartment in Lila offers rental cars as well as a terrace, overlooking Twin Falls.</div>
                     <button><a onclick="togglePopup('popup-lila')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Lila/Lilachurch.jpg');">
                  <div class="content">
                     <div class="name">Lila Church</div>
                     <div class="des">A heritage site, the present Lila Church was built during the term of Fr. Francisco Maglasang (1918-360).</div>
                     <button><a onclick="togglePopup('popup-lila')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/lila/Tinugdanspring.jpg');">
                  <div class="content">
                     <div class="name">Tinugdan Spring</div>
                     <div class="des">The newly developed Tinugdan Spring in Poblacion, Lila, Bohol. </div>
                     <button><a onclick="togglePopup('popup-lila')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-lila')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-lila')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-albur" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Albur/alburchurch.jpg');">
                  <div class="content">
                     <div class="name">Albur Church</div>
                     <div class="des">The Santa Monica Parish Church of Alburquerque, commonly known as the Alburquerque Church, is a Roman Catholic church in the municipality of Alburquerque, Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-albur')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Albur/boardwalk.jpg');">
                  <div class="content">
                     <div class="name">Board Walk</div>
                     <div class="des">A scenic and enchanting boardwalk traversing through one of the remaining mangrove forests that Bohol</div>
                     <button><a onclick="togglePopup('popup-albur')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Albur/lumadayo.jpg');">
                  <div class="content">
                     <div class="name">Lumadayo</div>
                     <div class="des">Lumadayo Hillside Accommodation</div>
                     <button><a onclick="togglePopup('popup-albur')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-albur')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-albur')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-valencia" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Valencia/anislagspring.jpg');">
                  <div class="content">
                     <div class="name">Anislag Spring</div>
                     <div class="des">This spring is hidden undiscovered natural cold deep in the rural barangays of Valencia, Bohol which is very good place to relax with our families.</div>
                     <button><a onclick="togglePopup('popup-valencia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Valencia/badiangspring.jpg');">
                  <div class="content">
                     <div class="name">Badiang Spring</div>
                     <div class="des">The Badiang Spring Resort is a small resort situated along the coast of Valencia town near a cliff.</div>
                     <button><a onclick="togglePopup('popup-valencia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Valencia/churchofvalencia.jpg');">
                  <div class="content">
                     <div class="name">Church of Valencia</div>
                     <div class="des">Valencia Church is cruciform with a steep roof and a pyramidal crossing tower. </div>
                     <button><a onclick="togglePopup('popup-valencia')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-valencia')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-valencia')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-dauis" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Dauis/Dauischurch.jpg');">
                  <div class="content">
                     <div class="name">Dauis Church</div>
                     <div class="des">Dauis Church, also known as the Church of Our Lady of the Assumption, is located in the town of Dauis in the island of Panglao.</div>
                     <button><a onclick="togglePopup('popup-dauis')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dauis/Hinagdanancave.jpg');">
                  <div class="content">
                     <div class="name">Hinagdanan Cave</div>
                     <div class="des">The Hinagdanan Cave, meaning “Laddered” in Cebuano, is only 2.5 km away from the center of Dauis Town, and 15 km. away from Tagbilaran City.</div>
                     <button><a onclick="togglePopup('popup-dauis')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dauis/Dauischurch.jpg');">
                  <div class="content">
                     <div class="name">Dauis Church</div>
                     <div class="des">Dauis Church, also known as the Church of Our Lady of the Assumption, is located in the town of Dauis in the island of Panglao.</div>
                     <button><a onclick="togglePopup('popup-dauis')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Dauis/Hinagdanancave.jpg');">
                  <div class="content">
                     <div class="name">Hinagdanan Cave</div>
                     <div class="des">The Hinagdanan Cave, meaning “Laddered” in Cebuano, is only 2.5 km away from the center of Dauis Town, and 15 km. away from Tagbilaran City.</div>
                     <button><a onclick="togglePopup('popup-dauis')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-dauis')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-dauis')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-panglao" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Panglao/Alonapanglao.jpg');">
                  <div class="content">
                     <div class="name">Alona</div>
                     <div class="des">Alona Beach is a small stretch of tropical paradise on Panglao Island, Bohol in the Philippines. </div>
                     <button><a onclick="togglePopup('popup-panglao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Panglao/Balikasag.jpg');">
                  <div class="content">
                     <div class="name">Balikasag</div>
                     <div class="des">One of these islands is called Balicasag found 8.5km southwest off of Panglao, one of the top tourist spots in Bohol. </div>
                     <button><a onclick="togglePopup('popup-panglao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Panglao/Domaluan.jpg');">
                  <div class="content">
                     <div class="name">Dumaluan</div>
                     <div class="des">Escape to paradise at Dumaluan Beach Resort, a 3.0 star hotel located in the heart of Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-panglao')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Panglao/GuitarWoodhousepanglao.jpg');">
                  <div class="content">
                     <div class="name">Guitar Wood House</div>
                     <div class="des">The perfect place to chill when you want to enjoy good food and drinks with good music.</div>
                     <button><a onclick="togglePopup('popup-panglao')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Panglao/panglaochurch.jpg');">
                  <div class="content">
                     <div class="name">Panglao Church</div>
                     <div class="des">The church of St. Augustine stands on the southwestern side of Panglao Island, and is 18 kilometers from Tagbilaran City.</div>
                     <button><a onclick="togglePopup('popup-panglao')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Panglao/SouthfarmPanglao.jpg');">
                  <div class="content">
                     <div class="name">South Farm</div>
                     <div class="des">South Farm is a 9-hectare organic land property that is located in Panglao, Bohol promoting rural, handmade, handcrafted, hand built tourist destination.</div>
                     <button><a onclick="togglePopup('popup-panglao')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-panglao')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-panglao')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-jagna" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Jagna/Cheap-Resort-in-Bohol-Jagna-Rock-Resort-.jpg');">
                  <div class="content">
                     <div class="name">Jagna Rock Resort</div>
                     <div class="des">The Jagna Rock Resort is located at barangay Larapan of the famous town, Jagna, Bohol, Philippines. </div>
                     <button><a onclick="togglePopup('popup-jagna')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Jagna/jagnachurch.jpg');">
                  <div class="content">
                     <div class="name">Jagna Church</div>
                     <div class="des">St. Michael the Archangel Parish Church, also referred to as Jagna Church, is a Spanish colonial-era church located in the town of Jagna.</div>
                     <button><a onclick="togglePopup('popup-jagna')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Jagna/kinahuganfalls.jpg');">
                  <div class="content">
                     <div class="name">Kinahugan Falls</div>
                     <div class="des">Kinahugan Falls (also spelt Kinahulugan Falls) is located in Jagna on Bohol Island. </div>
                     <button><a onclick="togglePopup('popup-jagna')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Jagna/strawberryfarm.jpg');">
                  <div class="content">
                     <div class="name">Strawberry Farm</div>
                     <div class="des">Explore a strawberry farm in Mayana, Jagna, Bohol. Spend some time picking sweet and succulent strawberries.</div>
                     <button><a onclick="togglePopup('popup-jagna')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-jagna')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-jagna')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-garcia" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Garcia/MaambongSpringResort.jpg');">
                  <div class="content">
                     <div class="name">Maambong Spring Resort</div>
                     <div class="des">The park is surrounded with Mahogany trees and a big open space ideal for an encampment.</div>
                     <button><a onclick="togglePopup('popup-garcia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Garcia/SanJuanBautistaParisChurch.jpg');">
                  <div class="content">
                     <div class="name">Garcia Hernandez Church</div>
                     <div class="des">Garcia Hernandez Church was commenced in 1880 and completed in 1896, replacing an earlier church. </div>
                     <button><a onclick="togglePopup('popup-garcia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Garcia/ughubanspring.webp');">
                  <div class="content">
                     <div class="name">Ughubans Spring</div>
                     <div class="des">Ughuban Spring Cambuyo Garcia Hernandez Bohol a hidden spring in the middle of the woods</div>
                     <button><a onclick="togglePopup('popup-garcia')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Garcia/MaambongSpringResort.jpg');">
                  <div class="content">
                     <div class="name">Maambong Spring Resort</div>
                     <div class="des">The park is surrounded with Mahogany trees and a big open space ideal for an encampment.</div>
                     <button><a onclick="togglePopup('popup-garcia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Garcia/SanJuanBautistaParisChurch.jpg');">
                  <div class="content">
                     <div class="name">Garcia Hernandez Church</div>
                     <div class="des">Garcia Hernandez Church was commenced in 1880 and completed in 1896, replacing an earlier church. </div>
                     <button><a onclick="togglePopup('popup-garcia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Garcia/ughubanspring.webp');">
                  <div class="content">
                     <div class="name">Ughubans Spring</div>
                     <div class="des">Ughuban Spring Cambuyo Garcia Hernandez Bohol a hidden spring in the middle of the woods.</div>
                     <button><a onclick="togglePopup('popup-garcia')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-garcia')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-garcia')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-dimiao" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Dimiao/dimiaochruch.jpg');">
                  <div class="content">
                     <div class="name">Dimiao Church</div>
                     <div class="des">This church was constructed between 1797 and 1815, and it shows Baroque characteristics with Muslim influence.</div>
                     <button><a onclick="togglePopup('popup-dimiao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dimiao/Dimiaotwinfalls.jpg');">
                  <div class="content">
                     <div class="name">Twin Falls</div>
                     <div class="des">Dimiao Twin Falls (also known as Pahangog Falls) is one of the best waterfalls in Bohol. </div>
                     <button><a onclick="togglePopup('popup-dimiao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dimiao/ErmitaruinDimiao.jpg');">
                  <div class="content">
                     <div class="name">Ermita Ruin</div>
                     <div class="des">The Ermita Ruins are the ruins of a coralline limestone structure built during the Spanish Regime in Bohol.</div>
                     <button><a onclick="togglePopup('popup-dimiao')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Dimiao/Pagsahilltopviewbluepool.jpg');">
                  <div class="content">
                     <div class="name">Pagsa Hill</div>
                     <div class="des">Pagsa Hilltop View</div>
                     <button><a onclick="togglePopup('popup-dimiao')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Dimiao/PahangogfallsDimiao.jpg');">
                  <div class="content">
                     <div class="name">Pahangog Falls</div>
                     <div class="des">This waterfalls is surrounded with big trees and lush vegetation giving the picturesque mountain scenery a cool and invigorating atmosphere.</div>
                     <button><a onclick="togglePopup('popup-dimiao')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-dimiao')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-dimiao')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-loboc" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Loboc/LobocChurch.jpg');">
                  <div class="content">
                     <div class="name">Loboc Church</div>
                     <div class="des">The church is built along the banks of the Loboc River.</div>
                     <button><a onclick="togglePopup('popup-loboc')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loboc/Lobocriver.jpg');">
                  <div class="content">
                     <div class="name">Loboc River</div>
                     <div class="des">Loboc River is located in the town of Loboc, which is around 26 KM from the Tagbilaran Airport. </div>
                     <button><a onclick="togglePopup('popup-loboc')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loboc/LobocChurch.jpg');">
                  <div class="content">
                     <div class="name">Loboc Church</div>
                     <div class="des">The church is built along the banks of the Loboc River.</div>
                     <button><a onclick="togglePopup('popup-loboc')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loboc/Lobocriver.jpg');">
                  <div class="content">
                     <div class="name">Loboc River</div>
                     <div class="des">Loboc River is located in the town of Loboc, which is around 26 KM from the Tagbilaran Airport. </div>
                     <button><a onclick="togglePopup('popup-loboc')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-loboc')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-loboc')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-sikatuna" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Sikatuna/GreenAAgardenSikatuna.jpg');">
                  <div class="content">
                     <div class="name">Green AA Garden</div>
                     <div class="des"> Green AA Garden Resort is located in Abucay Norte, Sikatuna. </div>
                     <button><a onclick="togglePopup('popup-sikatuna')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sikatuna/IllusionstationSikatuna.jpg');">
                  <div class="content">
                     <div class="name">Illusion Station</div>
                     <div class="des">From gravity-defying rooms to optical illusions that play tricks on your mind, Sikatuna Illusions Station offers an unforgettable experience.</div>
                     <button><a onclick="togglePopup('popup-sikatuna')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sikatuna/Sikatunachurch.jpg');">
                  <div class="content">
                     <div class="name">Sikatuna Church</div>
                     <div class="des">Sikatuna Church, officially known as St. Anthony of Padua Parish, is a historic church located in the Municipality of Sikatuna.</div>
                     <button><a onclick="togglePopup('popup-sikatuna')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sikatuna/Sikatunamirroroftheworld.jpg');">
                  <div class="content">
                     <div class="name">Mirror of the World</div>
                     <div class="des">The place exhibits some of the iconic landmarks in the world in a scaled-down version in one place.</div>
                     <button><a onclick="togglePopup('popup-sikatuna')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-sikatuna')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-sikatuna')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-cortes" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Cortes/Corteschurch.jpg');">
                  <div class="content">
                     <div class="name">Cortes Church</div>
                     <div class="des">Perched on the slope of a low hill, the town of Cortes gives its church a dramatic setting.</div>
                     <button><a onclick="togglePopup('popup-cortes')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Cortes/CortesMslingin.jpg');">
                  <div class="content">
                     <div class="name">Malingin Falls</div>
                     <div class="des">One of the smallest waterfall in Bohol yet one of the coolest as well.!</div>
                     <button><a onclick="togglePopup('popup-cortes')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Cortes/Ohanspringcortes.jpg');">
                  <div class="content">
                     <div class="name">Ohan Spring</div>
                     <div class="des">Ohan is a hidden spring situated in Cortes. Its greenish cold water comes from a hillside cave. </div>
                     <button><a onclick="togglePopup('popup-cortes')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Cortes/Corteschurch.jpg');">
                  <div class="content">
                     <div class="name">Cortes Church</div>
                     <div class="des">Perched on the slope of a low hill, the town of Cortes gives its church a dramatic setting.!</div>
                     <button><a onclick="togglePopup('popup-cortes')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Cortes/CortesMslingin.jpg');">
                  <div class="content">
                     <div class="name">Malingin Falls</div>
                     <div class="des">One of the smallest waterfall in Bohol yet one of the coolest as well.</div>
                     <button><a onclick="togglePopup('popup-cortes')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Cortes/Ohanspringcortes.jpg');">
                  <div class="content">
                     <div class="name">Ohan Spring</div>
                     <div class="des">Ohan is a hidden spring situated in Cortes. Its greenish cold water comes from a hillside cave. </div>
                     <button><a onclick="togglePopup('popup-cortes')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-cortes')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-cortes')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-loon" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Loon/Basdacu Loon.jpg');">
                  <div class="content">
                     <div class="name">Basdacu</div>
                     <div class="des">Basdacu beach is immaculate with its white sand.</div>
                     <button><a onclick="togglePopup('popup-loon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loon/Coral garden Loon.jpg');">
                  <div class="content">
                     <div class="name">Coral Garden</div>
                     <div class="des">Located in Brgy. Tangnan, Loon, Coral Garden is named as such because it is said to have sprouted on a plot of land with a coral bed. </div>
                     <button><a onclick="togglePopup('popup-loon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loon/Loon church.jpg');">
                  <div class="content">
                     <div class="name">Loon Church</div>
                     <div class="des">The Nuestra Señora de la Luz Parish Church, commonly known as Loon Church, is a Roman Catholic parish church in the municipality of Loon.</div>
                     <button><a onclick="togglePopup('popup-loon')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Loon/Basdacu Loon.jpg');">
                  <div class="content">
                     <div class="name">Basdacu</div>
                     <div class="des">Basdacu beach is immaculate with its white sand.</div>
                     <button><a onclick="togglePopup('popup-loon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loon/Coral garden Loon.jpg');">
                  <div class="content">
                     <div class="name">Coral Garden</div>
                     <div class="des">Located in Brgy. Tangnan, Loon, Coral Garden is named as such because it is said to have sprouted on a plot of land with a coral bed. </div>
                     <button><a onclick="togglePopup('popup-loon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Loon/Loon church.jpg');">
                  <div class="content">
                     <div class="name">Loon Church</div>
                     <div class="des">The Nuestra Señora de la Luz Parish Church, commonly known as Loon Church, is a Roman Catholic parish church in the municipality of Loon.</div>
                     <button><a onclick="togglePopup('popup-loon')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-loon')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-loon')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-antequera" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Antequera/AntequeraChurch.jpg');">
                  <div class="content">
                     <div class="name">Antequera Church</div>
                     <div class="des">Antequera Church is a beautiful and historic church that is a must-visit for anyone traveling to Bohol.</div>
                     <button><a onclick="togglePopup('popup-antequera')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Antequera/Dahonog-Cave.jpg');">
                  <div class="content">
                     <div class="name">Dahonog Cave</div>
                     <div class="des">Diving in Dahonog Cave in Barangay Tabu-an, Antequera.</div>
                     <button><a onclick="togglePopup('popup-antequera')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Antequera/Mag-Aso.jpg');">
                  <div class="content">
                     <div class="name">Mag-aso Falls</div>
                     <div class="des">Mag-Aso Falls is one of the most beautiful waterfalls on the island of Bohol in the Philippines.</div>
                     <button><a onclick="togglePopup('popup-antequera')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Antequera/AntequeraChurch.jpg');">
                  <div class="content">
                     <div class="name">Antequera Church</div>
                     <div class="des">Antequera Church is a beautiful and historic church that is a must-visit for anyone traveling to Bohol.</div>
                     <button><a onclick="togglePopup('popup-antequera')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Antequera/Dahonog-Cave.jpg');">
                  <div class="content">
                     <div class="name">Dahonog Cave</div>
                     <div class="des">Diving in Dahonog Cave in Barangay Tabu-an, Antequera.</div>
                     <button><a onclick="togglePopup('popup-antequera')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Antequera/Mag-Aso.jpg');">
                  <div class="content">
                     <div class="name">Mag-aso Falls</div>
                     <div class="des">Mag-Aso Falls is one of the most beautiful waterfalls on the island of Bohol in the Philippines.</div>
                     <button><a onclick="togglePopup('popup-antequera')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-antequera')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-antequera')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-balilihan" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Balilihan/BALILIHANCHURCH.jpg');">
                  <div class="content">
                     <div class="name">Balilihan Church</div>
                     <div class="des">Built in 1840 and located on a hill beside the church, the tower located about 20 kilometers upstream of the Abatan river also serves a watchtower.</div>
                     <button><a onclick="togglePopup('popup-balilihan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Balilihan/BugwakspringBalilihan.jpg');">
                  <div class="content">
                     <div class="name">Bugwak Spring</div>
                     <div class="des">Bugwak Spring is one of the natural wonders in the town of Balilihan.</div>
                     <button><a onclick="togglePopup('popup-balilihan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Balilihan/Ecoglamping.jpg');">
                  <div class="content">
                     <div class="name">Eco Glamping</div>
                     <div class="des">Eco Glamping Treehouses.</div>
                     <button><a onclick="togglePopup('popup-balilihan')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Balilihan/KawasanfallsBalilihan.jpg');">
                  <div class="content">
                     <div class="name">Kawasan Falls</div>
                     <div class="des">Kawasan Falls is located on the western side of Bohol Island in the Balilihan region.</div>
                     <button><a onclick="togglePopup('popup-balilihan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Balilihan/NiloksoanfallsBalilihan.jpg');">
                  <div class="content">
                     <div class="name">Niloksoan Falls</div>
                     <div class="des">The Niluksuan Falls is located at Brgy. Sal-ing, Balilihan.</div>
                     <button><a onclick="togglePopup('popup-balilihan')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-balilihan')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-balilihan')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

	  <div id = "popup-bilar" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Bilar/bilar bohol church.jpg');">
                  <div class="content">
                     <div class="name">Bilar Church</div>
                     <div class="des">St. Isidore the Farmer Parish is a Roman Catholic church located in Bilar.</div>
                     <button><a onclick="togglePopup('popup-bilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Bilar/Eco park Bilar Bohol.jpg');">
                  <div class="content">
                     <div class="name">Eco Park Bilar</div>
                     <div class="des">Bilar Eco Park is situated nearby to Bilar's Man made forest and Relict forest (foto point).</div>
                     <button><a onclick="togglePopup('popup-bilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Bilar/Kinaiyahan Forest Park Bilar.jpg');">
                  <div class="content">
                     <div class="name">Kinaiyahan Forest Park</div>
                     <div class="des">The Kinaiyahan Forest Park is located in Barangay Zamora, Bilar, Bohol, a town known for its rich biodiversity and natural attractions.</div>
                     <button><a onclick="togglePopup('popup-bilar')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/towns/Bilar/man made forest.jpg');">
                  <div class="content">
                     <div class="name">Man Made Forest</div>
                     <div class="des">The Bohol Mahogany Forest, more commonly known as the Bilar Man-Made Forest, is a dense forest stretching two kilometers along the border of Loboc and Bilar.</div>
                     <button><a onclick="togglePopup('popup-bilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Bilar/Pangas Falls Bilar Bohol.jpg');">
                  <div class="content">
                     <div class="name">Pangas Falls</div>
                     <div class="des">Pangas Falls is one of the untouched marvels in the province of Bohol. </div>
                     <button><a onclick="togglePopup('popup-bilar')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-bilar')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-bilar')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-batuan" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Batuan/Butuan Church.jpg');">
                  <div class="content">
                     <div class="name">Batuan Church</div>
                     <div class="des">The Church of St. James in Batuan, Bohol, is a testament to the rich cultural heritage of the Philippines.</div>
                     <button><a onclick="togglePopup('popup-batuan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Batuan/makapiko nature park.jpg');">
                  <div class="content">
                     <div class="name">Makapiko Nature Park</div>
                     <div class="des">Makapiko Nature Park is a place for nature lovers and adventure seekers like trekking and river tubing activities.</div>
                     <button><a onclick="togglePopup('popup-batuan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Batuan/shiphaus batuan bohol.jpg');">
                  <div class="content">
                     <div class="name">Shiphaus Batuan</div>
                     <div class="des">Located in Poblacion Norte of the town of Batuan, the Batuan ShipHaus, or simply ShipHaus, is a modern-day Noah's Ark in the middle of a farming village.</div>
                     <button><a onclick="togglePopup('popup-batuan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Batuan/Butuan Church.jpg');">
                  <div class="content">
                     <div class="name">Batuan Church</div>
                     <div class="des">The Church of St. James in Batuan, Bohol, is a testament to the rich cultural heritage of the Philippines.</div>
                     <button><a onclick="togglePopup('popup-batuan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Batuan/makapiko nature park.jpg');">
                  <div class="content">
                     <div class="name">Makapiko Nature Park</div>
                     <div class="des">Makapiko Nature Park is a place for nature lovers and adventure seekers like trekking and river tubing activities.</div>
                     <button><a onclick="togglePopup('popup-batuan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Batuan/shiphaus batuan bohol.jpg');">
                  <div class="content">
                     <div class="name">Shiphaus Batuan</div>
                     <div class="des">Located in Poblacion Norte of the town of Batuan, the Batuan ShipHaus, or simply ShipHaus, is a modern-day Noah's Ark in the middle of a farming village.</div>
                     <button><a onclick="togglePopup('popup-batuan')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-batuan')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-batuan')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-sierra" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Sierra/Sierra Bullones Church.jpg');">
                  <div class="content">
                     <div class="name">Sierra Bullones Church</div>
                     <div class="des">Immaculate Conception Church is a Roman Catholic church in Sierra Bullones, an interior town located in the southeastern part of Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-sierra')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sierra/sierra bullones-rice-terraces.jpg');">
                  <div class="content">
                     <div class="name">Sierra Bullones Rice Terraces</div>
                     <div class="des">The Rice Terraces of Sierra Bullones Bohol are a captivating and recently discovered tourist attraction.</div>
                     <button><a onclick="togglePopup('popup-sierra')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sierra/Sudlon River.jpg');">
                  <div class="content">
                     <div class="name">Sudlon River</div>
                     <div class="des">Sudlon River, Sierra Bullones</div>
                     <button><a onclick="togglePopup('popup-sierra')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sierra/Sierra Bullones Church.jpg');">
                  <div class="content">
                     <div class="name">Sierra Bullones Church</div>
                     <div class="des">Immaculate Conception Church is a Roman Catholic church in Sierra Bullones, an interior town located in the southeastern part of Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-sierra')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sierra/sierra bullones-rice-terraces.jpg');">
                  <div class="content">
                     <div class="name">Sierra Bullones Rice Terraces</div>
                     <div class="des">The Rice Terraces of Sierra Bullones Bohol are a captivating and recently discovered tourist attraction.</div>
                     <button><a onclick="togglePopup('popup-sierra')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sierra/Sudlon River.jpg');">
                  <div class="content">
                     <div class="name">Sudlon River</div>
                     <div class="des">Sudlon River, Sierra Bullones</div>
                     <button><a onclick="togglePopup('popup-sierra')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-sierra')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-sierra')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-duero" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Duero/hawom-hawom spring.jpg');">
                  <div class="content">
                     <div class="name">Hawom-hawom Spring</div>
                     <div class="des">Hawom-hawom Spring, Duero</div>
                     <button><a onclick="togglePopup('popup-duero')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Duero/Immaculate Conception Parish Church.jpg');">
                  <div class="content">
                     <div class="name">Duero Church</div>
                     <div class="des">The Duero Church is one of only a few in the Philippines designed in the Greek Temple Revival style.</div>
                     <button><a onclick="togglePopup('popup-duero')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Duero/the lord of pardon.jpg');">
                  <div class="content">
                     <div class="name">Lord of Pardon</div>
                     <div class="des">The Lord of Pardon Hill gives one a panoramic view of the mountains and coastline of the town. </div>
                     <button><a onclick="togglePopup('popup-duero')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Duero/hawom-hawom spring.jpg');">
                  <div class="content">
                     <div class="name">Hawom-hawom Spring</div>
                     <div class="des">Hawom-hawom Spring, Duero</div>
                     <button><a onclick="togglePopup('popup-duero')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Duero/Immaculate Conception Parish Church.jpg');">
                  <div class="content">
                     <div class="name">Duero Church</div>
                     <div class="des">The Duero Church is one of only a few in the Philippines designed in the Greek Temple Revival style.</div>
                     <button><a onclick="togglePopup('popup-duero')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Duero/the lord of pardon.jpg');">
                  <div class="content">
                     <div class="name">Lord of Pardon</div>
                     <div class="des">The Lord of Pardon Hill gives one a panoramic view of the mountains and coastline of the town. </div>
                     <button><a onclick="togglePopup('popup-duero')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-duero')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-duero')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-guindulman" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Guindulman/Bohol Landthai Hills Panoramic View.png');">
                  <div class="content">
                     <div class="name">Landthai Hills</div>
                     <div class="des">The Landthai Hills in Guindulman, Bohol is known for its stunning panoramic view of the mountains and valleys. </div>
                     <button><a onclick="togglePopup('popup-guindulman')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Guindulman/cabantian hills.jpg');">
                  <div class="content">
                     <div class="name">Cabantian Hills</div>
                     <div class="des">A hill that offers a 360-degree view of Guindulman town's beauty. </div>
                     <button><a onclick="togglePopup('popup-guindulman')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Guindulman/guindulman church.jpg');">
                  <div class="content">
                     <div class="name">Guindulman Church</div>
                     <div class="des">The Guindulman Church is the first Marian parish in the Talibon diocese to be granted spiritual affinity and the fourth in Bohol. </div>
                     <button><a onclick="togglePopup('popup-guindulman')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Guindulman/Bohol Landthai Hills Panoramic View.png');">
                  <div class="content">
                     <div class="name">Landthai Hills</div>
                     <div class="des">The Landthai Hills in Guindulman, Bohol is known for its stunning panoramic view of the mountains and valleys. </div>
                     <button><a onclick="togglePopup('popup-guindulman')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Guindulman/cabantian hills.jpg');">
                  <div class="content">
                     <div class="name">Cabantian Hills</div>
                     <div class="des">A hill that offers a 360-degree view of Guindulman town's beauty.</div>
                     <button><a onclick="togglePopup('popup-guindulman')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Guindulman/guindulman church.jpg');">
                  <div class="content">
                     <div class="name">Guindulman Church</div>
                     <div class="des">The Guindulman Church is the first Marian parish in the Talibon diocese to be granted spiritual affinity and the fourth in Bohol. </div>
                     <button><a onclick="togglePopup('popup-guindulman')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-guindulman')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-guindulman')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-anda" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Anda/cabagnow cave.jpg');">
                  <div class="content">
                     <div class="name">Cabagnow Cave</div>
                     <div class="des">Collapsed limestone cavern with a striking blue pool, popular for swimming & cliff jumping.</div>
                     <button><a onclick="togglePopup('popup-anda')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Anda/Santo Niño de Anda Parish Church.jpg');">
                  <div class="content">
                     <div class="name">Anda Church</div>
                     <div class="des">Santo Niño de Anda Parish Church is located in Anda, Philippines and was built in 1925.</div>
                     <button><a onclick="togglePopup('popup-anda')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Anda/Parklane Bohol Resort and Spa.jpg');">
                  <div class="content">
                     <div class="name">Parklane Bohol Resort and Spa</div>
                     <div class="des">Parklane Bohol Resort and Spa is a great choice for a stay in Anda.</div>
                     <button><a onclick="togglePopup('popup-anda')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Anda/cabagnow cave.jpg');">
                  <div class="content">
                     <div class="name">Cabagnow Cave</div>
                     <div class="des">Collapsed limestone cavern with a striking blue pool, popular for swimming & cliff jumping.</div>
                     <button><a onclick="togglePopup('popup-anda')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Anda/Santo Niño de Anda Parish Church.jpg');">
                  <div class="content">
                     <div class="name">Anda Church</div>
                     <div class="des">Santo Niño de Anda Parish Church is located in Anda, Philippines and was built in 1925.</div>
                     <button><a onclick="togglePopup('popup-anda')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Anda/Parklane Bohol Resort and Spa.jpg');">
                  <div class="content">
                     <div class="name">Parklane Bohol Resort and Spa</div>
                     <div class="des">Parklane Bohol Resort and Spa is a great choice for a stay in Anda.</div>
                     <button><a onclick="togglePopup('popup-anda')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-anda')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-anda')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-candijay" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Candijay/cadapdapan rice terraces.jpg');">
                  <div class="content">
                     <div class="name">Cadapdapan Rice Terrraces</div>
                     <div class="des">Cadapdapan Rice Terraces are the most amazing rice terraces on Bohol.</div>
                     <button><a onclick="togglePopup('popup-candijay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Candijay/can umantad falls.jpg');">
                  <div class="content">
                     <div class="name">Can-umantad Falls</div>
                     <div class="des">Can-Umantad Falls in Candijay is one of the most impressive waterfalls you will find on the incredible island of Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-candijay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Candijay/Can-olin butterfly candijay.jpg');">
                  <div class="content">
                     <div class="name">Can-olin Butterfly</div>
                     <div class="des">The Can-olin Butterfly Sanctuary is located at Candijay town, Bohol. </div>
                     <button><a onclick="togglePopup('popup-candijay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Candijay/Canawa cold spring Candijay.jpg');">
                  <div class="content">
                     <div class="name">Canawa Cold Spring</div>
                     <div class="des">Canawa Cold Springs in Candijay, Bohol are a great way to cool off</div>
                     <button><a onclick="togglePopup('popup-candijay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Candijay/Candijay church.jpg');">
                  <div class="content">
                     <div class="name">Candijay Church</div>
                     <div class="des">St. Joseph Parish is a Catholic church in Candijay, Bohol. </div>
                     <button><a onclick="togglePopup('popup-candijay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Candijay/Kankoka hills Candijay.jpg');">
                  <div class="content">
                     <div class="name">Kankoka Hills</div>
                     <div class="des">Kankoka Hills at Candijay</div>
                     <button><a onclick="togglePopup('popup-candijay')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-candijay')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-candijay')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-pilar" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Pilar/Jardin necitas Pilar.jpg');">
                  <div class="content">
                     <div class="name">Jardin Necitas</div>
                     <div class="des">Jardin Necitas, also known as Jardin Necitas, is an outdoor garden that features 200,000 artificial flowers that glow with LED lights.</div>
                     <button><a onclick="togglePopup('popup-pilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pilar/Malinao Dam Pilar.jpg');">
                  <div class="content">
                     <div class="name">Malinao Dam</div>
                     <div class="des">The Malinao Dam in Pilar, on the Philippine island of Bohol</div>
                     <button><a onclick="togglePopup('popup-pilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pilar/pilarchurch.jpg');">
                  <div class="content">
                     <div class="name">Pilar Church</div>
                     <div class="des">Virgen del Pilar Parish of the Roman Catholic Diocese of Talibon was established on 1962. It is located in the Municipality of Pilar, Province of Bohol.</div>
                     <button><a onclick="togglePopup('popup-pilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pilar/Jardin necitas Pilar.jpg');">
                  <div class="content">
                     <div class="name">Jardin Necitas</div>
                     <div class="des">Jardin Necitas, also known as Jardin Necitas, is an outdoor garden that features 200,000 artificial flowers that glow with LED lights.</div>
                     <button><a onclick="togglePopup('popup-pilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pilar/Malinao Dam Pilar.jpg');">
                  <div class="content">
                     <div class="name">Malinao Dam</div>
                     <div class="des">The Malinao Dam in Pilar, on the Philippine island of Bohol</div>
                     <button><a onclick="togglePopup('popup-pilar')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pilar/pilarchurch.jpg');">
                  <div class="content">
                     <div class="name">Pilar Church</div>
                     <div class="des">Virgen del Pilar Parish of the Roman Catholic Diocese of Talibon was established on 1962. It is located in the Municipality of Pilar, Province of Bohol.</div>
                     <button><a onclick="togglePopup('popup-pilar')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-pilar')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-pilar')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-isidro" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/San-isidro/Camugao.jpg');">
                  <div class="content">
                     <div class="name">Camugao Falls</div>
                     <div class="des">The Camugao Falls is considered as one of the enchanting sights in Bohol.</div>
                     <button><a onclick="togglePopup('popup-isidro')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San-isidro/Kilab-Kilab Falls Sanisidro.jpg');">
                  <div class="content">
                     <div class="name">Kilab-kilab Falls</div>
                     <div class="des">Beautiful waterfall in green forest.</div>
                     <button><a onclick="togglePopup('popup-isidro')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San-isidro/San-isidro church.jpg');">
                  <div class="content">
                     <div class="name">San Isidro Church</div>
                     <div class="des">St. Isidore the Farmer Parish of the Roman Catholic Diocese of Tagbiliran was established on 1970. </div>
                     <button><a onclick="togglePopup('popup-isidro')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San-isidro/Camugao.jpg');">
                  <div class="content">
                     <div class="name">Camugao Falls</div>
                     <div class="des">The Camugao Falls is considered as one of the enchanting sights in Bohol.</div>
                     <button><a onclick="togglePopup('popup-isidro')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San-isidro/Kilab-Kilab Falls Sanisidro.jpg');">
                  <div class="content">
                     <div class="name">Kilab-kilab Falls</div>
                     <div class="des">Beautiful waterfall in green forest.</div>
                     <button><a onclick="togglePopup('popup-isidro')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San-isidro/San-isidro church.jpg');">
                  <div class="content">
                     <div class="name">San Isidro Church</div>
                     <div class="des">St. Isidore the Farmer Parish of the Roman Catholic Diocese of Tagbiliran was established on 1970. </div>
                     <button><a onclick="togglePopup('popup-isidro')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-isidro')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-isidro')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-calape" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Calape/_storage_emulated_0_Calape_Isla hayahay beach resort.jpg');">
                  <div class="content">
                     <div class="name">Hayahay Beach Resort</div>
                     <div class="des">A place where you can escape city life.</div>
                     <button><a onclick="togglePopup('popup-calape')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Calape/Calape church.jpg');">
                  <div class="content">
                     <div class="name">Calape Church</div>
                     <div class="des">The Calape Church, commonly known as Saint Vincent Ferrer Church, is in the municipality of Calape, Bohol, Philippines. </div>
                     <button><a onclick="togglePopup('popup-calape')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Calape/Redland calape.jpg');">
                  <div class="content">
                     <div class="name">Redland Calape</div>
                     <div class="des"> This breathtaking and unique attraction in Bohol is quite different from the usual tourist attractions in the island.</div>
                     <button><a onclick="togglePopup('popup-calape')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Calape/_storage_emulated_0_Calape_Isla hayahay beach resort.jpg');">
                  <div class="content">
                     <div class="name">Hayahay Beach Resort</div>
                     <div class="des">A place where you can escape city life.</div>
                     <button><a onclick="togglePopup('popup-calape')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Calape/Calape church.jpg');">
                  <div class="content">
                     <div class="name">Calape Church</div>
                     <div class="des">The Calape Church, commonly known as Saint Vincent Ferrer Church, is in the municipality of Calape, Bohol, Philippines. </div>
                     <button><a onclick="togglePopup('popup-calape')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Calape/Redland calape.jpg');">
                  <div class="content">
                     <div class="name">Redland Calape</div>
                     <div class="des"> This breathtaking and unique attraction in Bohol is quite different from the usual tourist attractions in the island.</div>
                     <button><a onclick="togglePopup('popup-calape')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-calape')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-calape')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-tubigon" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Tubigon/Macaas Bamboo boardwalk tubigon.jpg');">
                  <div class="content">
                     <div class="name">Macaas Bamboo Boardwalk</div>
                     <div class="des">A 500-meter boardwalk would be built around the mangrove forest.</div>
                     <button><a onclick="togglePopup('popup-tubigon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tubigon/Sea Drake bar and grill.jpg');">
                  <div class="content">
                     <div class="name">Sea Drake Bar and Grill</div>
                     <div class="des">Sea Drake Bar and Grill, Bohol Island.</div>
                     <button><a onclick="togglePopup('popup-tubigon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tubigon/Tubigon church.jpg');">
                  <div class="content">
                     <div class="name">Tubigon Church</div>
                     <div class="des">San Isidro Labrador Church is a heritage, colonial church located in Tubigon, Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-tubigon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tubigon/Tubigon Dumog Sandbar .jpg');">
                  <div class="content">
                     <div class="name">Dumog Sandbar</div>
                     <div class="des">Dumog Sandbar is a paradise waiting to be discovered. </div>
                     <button><a onclick="togglePopup('popup-tubigon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Tubigon/Tubigon port.jpg');">
                  <div class="content">
                     <div class="name">Tubigon Port</div>
                     <div class="des">Tubigon's municipal port is the second largest and busiest port in the province of Bohol. </div>
                     <button><a onclick="togglePopup('popup-tubigon')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-tubigon')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-tubigon')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-sagbayan" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Sagbayan/Sagbayan Chocolate Farm.jpg');">
                  <div class="content">
                     <div class="name">Sagbayan Chocolate Farm</div>
                     <div class="des">A cacao farm that is located just few minutes from the Bohol Chocolate Hills complex. </div>
                     <button><a onclick="togglePopup('popup-sagbayan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sagbayan/Sagbayan peak.jpg');">
                  <div class="content">
                     <div class="name">Sagbayan Peak</div>
                     <div class="des">Sagbayan Peak is a mountain resort and recreation center located in the town of Sagbayan, about 45 miles northwest of Tagbilaran City.</div>
                     <button><a onclick="togglePopup('popup-sagbayan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sagbayan/Sagbayan church.jpg');">
                  <div class="content">
                     <div class="name">Sagbayan Church</div>
                     <div class="des">Founded in 1952, St. Augustine Parish church in Sagbayan is one of the newer churches in Bohol. </div>
                     <button><a onclick="togglePopup('popup-sagbayan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sagbayan/Sagbayan Chocolate Farm.jpg');">
                  <div class="content">
                     <div class="name">Sagbayan Chocolate Farm</div>
                     <div class="des">A cacao farm that is located just few minutes from the Bohol Chocolate Hills complex. </div>
                     <button><a onclick="togglePopup('popup-sagbayan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sagbayan/Sagbayan peak.jpg');">
                  <div class="content">
                     <div class="name">Sagbayan Peak</div>
                     <div class="des">Sagbayan Peak is a mountain resort and recreation center located in the town of Sagbayan, about 45 miles northwest of Tagbilaran City.</div>
                     <button><a onclick="togglePopup('popup-sagbayan')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Sagbayan/Sagbayan church.jpg');">
                  <div class="content">
                     <div class="name">Sagbayan Church</div>
                     <div class="des">Founded in 1952, St. Augustine Parish church in Sagbayan is one of the newer churches in Bohol. </div>
                     <button><a onclick="togglePopup('popup-sagbayan')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-sagbayan')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-sagbayan')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-dagohoy" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Dagohoy/dagohoy church.jpg');">
                  <div class="content">
                     <div class="name">Dagohoy Church</div>
                     <div class="des">Church of Our Lady of Lourdes · Dagohoy, Bohol, Central Visayas, Philippines.</div>
                     <button><a onclick="togglePopup('popup-dagohoy')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dagohoy/Dagohoy Park.jpg');">
                  <div class="content">
                     <div class="name">Dagohoy Park</div>
                     <div class="des">Situated in the high-altitude town of Magtangtang, Danao in Bohol, the Francisco Dagohoy Historical Park.</div>
                     <button><a onclick="togglePopup('popup-dagohoy')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dagohoy/Francisco Dagohoy monument.png');">
                  <div class="content">
                     <div class="name">Francisco Dagohoy Monument</div>
                     <div class="des">Francisco Dagohoy Monument</div>
                     <button><a onclick="togglePopup('popup-dagohoy')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dagohoy/dagohoy church.jpg');">
                  <div class="content">
                     <div class="name">Dagohoy Church</div>
                     <div class="des">Church of Our Lady of Lourdes · Dagohoy, Bohol, Central Visayas, Philippines.</div>
                     <button><a onclick="togglePopup('popup-dagohoy')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dagohoy/Dagohoy Park.jpg');">
                  <div class="content">
                     <div class="name">Dagohoy Park</div>
                     <div class="des">Situated in the high-altitude town of Magtangtang, Danao in Bohol, the Francisco Dagohoy Historical Park.</div>
                     <button><a onclick="togglePopup('popup-dagohoy')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Dagohoy/Francisco Dagohoy monument.png');">
                  <div class="content">
                     <div class="name">Francisco Dagohoy Monument</div>
                     <div class="des">Francisco Dagohoy Monument</div>
                     <button><a onclick="togglePopup('popup-dagohoy')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-dagohoy')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-dagohoy')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-alicia" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Alicia/Binabaje Hills Hike.jpg');">
                  <div class="content">
                     <div class="name">Binabaje Hills Hike</div>
                     <div class="des">The most incredible hike on Bohol is in Alicia.</div>
                     <button><a onclick="togglePopup('popup-alicia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Alicia/Bohol-Alicia-St-Joachim-St-Anne-Parish.jpg');">
                  <div class="content">
                     <div class="name">Alicia Church</div>
                     <div class="des">This church is known for its beautiful Gothic-inspired architecture, featuring intricate details and ornate designs.</div>
                     <button><a onclick="togglePopup('popup-alicia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Alicia/Binabaje Hills Hike.jpg');">
                  <div class="content">
                     <div class="name">Binabaje Hills Hike</div>
                     <div class="des">The most incredible hike on Bohol is in Alicia.</div>
                     <button><a onclick="togglePopup('popup-alicia')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Alicia/Bohol-Alicia-St-Joachim-St-Anne-Parish.jpg');">
                  <div class="content">
                     <div class="name">Alicia Church</div>
                     <div class="des">This church is known for its beautiful Gothic-inspired architecture, featuring intricate details and ornate designs.</div>
                     <button><a onclick="togglePopup('popup-alicia')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-alicia')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-alicia')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-mabini" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Mabini/Lumayag sandbar Mabini.jpg');">
                  <div class="content">
                     <div class="name">Lumayag Sand Bar</div>
                     <div class="des">Limadjag is an atoll island. It has a pure white sands and clear pristine water. </div>
                     <button><a onclick="togglePopup('popup-mabini')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mabini/mabinichurch.jpg');">
                  <div class="content">
                     <div class="name">Mabini Church</div>
                     <div class="des">The Sto. Niño Parish Church, also known simply as the Mabini Church, is a Roman Catholic church in the municipality of Mabini.</div>
                     <button><a onclick="togglePopup('popup-mabini')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mabini/Pearl in the ocean Mabini.jpg');">
                  <div class="content">
                     <div class="name">Pearl in the Ocean</div>
                     <div class="des">Enjoy the scenic sea view and mountain view of Mabini, Bohol from the Pearl of the Ocean.</div>
                     <button><a onclick="togglePopup('popup-mabini')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mabini/popog cave mabini bohol.jpg');">
                  <div class="content">
                     <div class="name">Popog Cave</div>
                     <div class="des">Popog Cave, Marcelo, Mabini, Bohol.</div>
                     <button><a onclick="togglePopup('popup-mabini')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mabini/tsedi highlands and bayview park.jpg');">
                  <div class="content">
                     <div class="name">Tsedi Highlands and Bayview Park</div>
                     <div class="des">Feel the reinvigorating breath of nature at TSEDI Highlands and Bayview Park in Barangay Minol in Mabini town.</div>
                     <button><a onclick="togglePopup('popup-mabini')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-mabini')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-mabini')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-pascual" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Pascual/Cambugsay-Healing-Hills.jpg');">
                  <div class="content">
                     <div class="name">Cambugsay Healing Hills</div>
                     <div class="des">Cambugsay Healing Hills is in Brgy. San Pascual, Ubay, Bohol. Ubay is a town in the Northeastern Bohol. </div>
                     <button><a onclick="togglePopup('popup-pascual')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pascual/naturalpark.jpg');">
                  <div class="content">
                     <div class="name">Natural Park</div>
                     <div class="des">At the top of the Ubay Green Park hill, you can see how beautiful mother nature really is. </div>
                     <button><a onclick="togglePopup('popup-pascual')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pascual/Cambugsay-Healing-Hills.jpg');">
                  <div class="content">
                     <div class="name">Cambugsay Healing Hills</div>
                     <div class="des">Cambugsay Healing Hills is in Brgy. San Pascual, Ubay, Bohol. Ubay is a town in the Northeastern Bohol. </div>
                     <button><a onclick="togglePopup('popup-pascual')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Pascual/naturalpark.jpg');">
                  <div class="content">
                     <div class="name">Natural Park</div>
                     <div class="des">At the top of the Ubay Green Park hill, you can see how beautiful mother nature really is. </div>
                     <button><a onclick="togglePopup('popup-pascual')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-pascual')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-pascual')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-ubay" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Ubay/ubaychurch.jpg');">
                  <div class="content">
                     <div class="name">Ubay Church</div>
                     <div class="des">Sto. Niño Parish Church of Ubay, Bohol Philippines, Ubay, Bohol, Philippines. </div>
                     <button><a onclick="togglePopup('popup-ubay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Ubay/benliw dam.jpg');">
                  <div class="content">
                     <div class="name">Benliw Dam</div>
                     <div class="des">Benliw dam is seen with great potentials as an agro-tourism destination due to its breathtaking view.</div>
                     <button><a onclick="togglePopup('popup-ubay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Ubay/palayan valley.jpg');">
                  <div class="content">
                     <div class="name">Palayan Valley</div>
                     <div class="des">Palayan Valley is an open valley located in Ubay, famous for its green fields resembling to that of popular spot in Batanes. </div>
                     <button><a onclick="togglePopup('popup-ubay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Ubay/ubaychurch.jpg');">
                  <div class="content">
                     <div class="name">Ubay Church</div>
                     <div class="des">Sto. Niño Parish Church of Ubay, Bohol Philippines, Ubay, Bohol, Philippines. </div>
                     <button><a onclick="togglePopup('popup-ubay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Ubay/benliw dam.jpg');">
                  <div class="content">
                     <div class="name">Benliw Dam</div>
                     <div class="des">Benliw dam is seen with great potentials as an agro-tourism destination due to its breathtaking view.</div>
                     <button><a onclick="togglePopup('popup-ubay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Ubay/palayan valley.jpg');">
                  <div class="content">
                     <div class="name">Palayan Valley</div>
                     <div class="des">Palayan Valley is an open valley located in Ubay, famous for its green fields resembling to that of popular spot in Batanes. </div>
                     <button><a onclick="togglePopup('popup-ubay')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-ubay')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-ubay')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-miguel" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/San Miguel/bayongan dam.jpg');">
                  <div class="content">
                     <div class="name">Bayongan Dam</div>
                     <div class="des">The Bayongan Dam is a prominent hydroelectric dam located in the municipality of San Miguel, in the province of Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-miguel')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San Miguel/langgam cave.jpg');">
                  <div class="content">
                     <div class="name">Langgam Cave</div>
                     <div class="des">Langgam Cave located in Brgy. Tomoc, San Miguel, Bohol. It's a cave and a waterfall!</div>
                     <button><a onclick="togglePopup('popup-miguel')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San Miguel/san miguel church.jpg');">
                  <div class="content">
                     <div class="name">San Miguel Church</div>
                     <div class="des">St. Michael Arcanghel Parish Church, San Miguel, Bohol in San Miguel.</div>
                     <button><a onclick="togglePopup('popup-miguel')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San Miguel/bayongan dam.jpg');">
                  <div class="content">
                     <div class="name">Bayongan Dam</div>
                     <div class="des">The Bayongan Dam is a prominent hydroelectric dam located in the municipality of San Miguel, in the province of Bohol, Philippines.</div>
                     <button><a onclick="togglePopup('popup-miguel')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San Miguel/langgam cave.jpg');">
                  <div class="content">
                     <div class="name">Langgam Cave</div>
                     <div class="des">Langgam Cave located in Brgy. Tomoc, San Miguel, Bohol. It's a cave and a waterfall!</div>
                     <button><a onclick="togglePopup('popup-miguel')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/San Miguel/san miguel church.jpg');">
                  <div class="content">
                     <div class="name">San Miguel Church</div>
                     <div class="des">St. Michael Arcanghel Parish Church, San Miguel, Bohol in San Miguel.</div>
                     <button><a onclick="togglePopup('popup-miguel')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-miguel')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-miguel')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-inabanga" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Inabangga/Inabangga Church.jpg');">
                  <div class="content">
                     <div class="name">Inabangga Church</div>
                     <div class="des">Located on an elevated area beside the banks of the Inabanga River, a mission was founded in the place by the Jesuits in 1596.</div>
                     <button><a onclick="togglePopup('popup-inabanga')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Inabangga/inabangga hanging bridge.jpg');">
                  <div class="content">
                     <div class="name">Inabangga Hanging Bridge</div>
                     <div class="des">Inabangga Hanging Bridge</div>
                     <button><a onclick="togglePopup('popup-inabanga')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Inabangga/Sua peak inabangga.jpg');">
                  <div class="content">
                     <div class="name">Sua Peak</div>
                     <div class="des">The Sua Peak was known only for lovers until they decided to transform the place into something magical.</div>
                     <button><a onclick="togglePopup('popup-inabanga')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Inabangga/Inabangga Church.jpg');">
                  <div class="content">
                     <div class="name">Inabangga Church</div>
                     <div class="des">Located on an elevated area beside the banks of the Inabanga River, a mission was founded in the place by the Jesuits in 1596.</div>
                     <button><a onclick="togglePopup('popup-inabanga')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Inabangga/inabangga hanging bridge.jpg');">
                  <div class="content">
                     <div class="name">Inabangga Hanging Bridge</div>
                     <div class="des">Inabangga Hanging Bridge</div>
                     <button><a onclick="togglePopup('popup-inabanga')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Inabangga/Sua peak inabangga.jpg');">
                  <div class="content">
                     <div class="name">Sua Peak</div>
                     <div class="des">The Sua Peak was known only for lovers until they decided to transform the place into something magical.</div>
                     <button><a onclick="togglePopup('popup-inabanga')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-inabanga')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-inabanga')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <!--Not Included
      <div id = "popup-biabas" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Biabas/biabas.webp');">
                  <div class="content">
                     <div class="name">Biabas</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button><a onclick="togglePopup('popup-biabas')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Biabas/eskaya-tribe-bohol-philippines-011.jpg');">
                  <div class="content">
                     <div class="name">Eskaya Tribe</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button><a onclick="togglePopup('popup-biabas')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Biabas/Eskaya.webp');">
                  <div class="content">
                     <div class="name">Eskaya</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button><a onclick="togglePopup('popup-biabas')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Biabas/biabas.webp');">
                  <div class="content">
                     <div class="name">Biabas</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button><a onclick="togglePopup('popup-biabas')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Biabas/eskaya-tribe-bohol-philippines-011.jpg');">
                  <div class="content">
                     <div class="name">Eskaya Tribe</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button><a onclick="togglePopup('popup-biabas')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Biabas/Eskaya.webp');">
                  <div class="content">
                     <div class="name">Eskaya</div>
                     <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                     <button><a onclick="togglePopup('popup-biabas')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-biabas')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-biabas')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>-->

      <div id = "popup-buenavista" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Buenavista/Buenavista Church.jpg');">
                  <div class="content">
                     <div class="name">Buenavista Church</div>
                     <div class="des">Santo Rosario Parish Church is a church in Buenavista, Bohol.</div>
                     <button><a onclick="togglePopup('popup-buenavista')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Buenavista/Buenavista sandbar.jpg');">
                  <div class="content">
                     <div class="name">Buenavista Sandbar</div>
                     <div class="des">The Pandao sandbar in the town of Buenavista, Bohol province is a favorite summer destination because of its fine white sand.</div>
                     <button><a onclick="togglePopup('popup-buenavista')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Buenavista/Buenavista Church.jpg');">
                  <div class="content">
                     <div class="name">Buenavista Church</div>
                     <div class="des">Santo Rosario Parish Church is a church in Buenavista, Bohol.</div>
                     <button><a onclick="togglePopup('popup-buenavista')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Buenavista/Buenavista sandbar.jpg');">
                  <div class="content">
                     <div class="name">Buenavista Sandbar</div>
                     <div class="des">The Pandao sandbar in the town of Buenavista, Bohol province is a favorite summer destination because of its fine white sand.</div>
                     <button><a onclick="togglePopup('popup-buenavista')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-buenavista')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-buenavista')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-trinidad" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Trinidad/kawasan falls.jpg');">
                  <div class="content">
                     <div class="name">Kawasan Falls</div>
                     <div class="des">Located in Barangay San Isidro, Trinidad Bohol, Kawasan Falls is a breathtaking waterfall that has a 20 meter high drop in the middle of deep green forest.</div>
                     <button><a onclick="togglePopup('popup-trinidad')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Trinidad/Local Trinidad Scenery.jpg');">
                  <div class="content">
                     <div class="name">Local Trinidad Scenery</div>
                     <div class="des">Local Trinidad Scenery</div>
                     <button><a onclick="togglePopup('popup-trinidad')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Trinidad/The Batungay Cave.jpg');">
                  <div class="content">
                     <div class="name">Batungay Cave</div>
                     <div class="des">With over 700 meters to explore within the Batungay Twin Peak, reaching an impressive height of 150 feet above the ground</div>
                     <button><a onclick="togglePopup('popup-trinidad')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Trinidad/Trinidad church.jpg');">
                  <div class="content">
                     <div class="name">Trinidad Church</div>
                     <div class="des">St. Isidore Parish is a Catholic church in Trinidad, Bohol.</div>
                     <button><a onclick="togglePopup('popup-trinidad')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-trinidad')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-trinidad')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-unido" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Bien Unido/bien unido church.jpg');">
                  <div class="content">
                     <div class="name">Bien Unido Church</div>
                     <div class="des">Church of Santo Niño · Bien-Unido, Bohol, Central Visayas, Philippines.</div>
                     <button><a onclick="togglePopup('popup-unido')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Bien Unido/bien unido sand bars.jpg');">
                  <div class="content">
                     <div class="name">Bien Unido Sandbars</div>
                     <div class="des">Bien Unido Sandbars</div>
                     <button><a onclick="togglePopup('popup-unido')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Bien Unido/dive camp.jpg');">
                  <div class="content">
                     <div class="name">Dive Camp</div>
                     <div class="des">Dive Camp Resort, Bien Unido, Bohol, Bien Unido.</div>
                     <button><a onclick="togglePopup('popup-unido')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Bien Unido/tikangkang mini beach.jpg');">
                  <div class="content">
                     <div class="name">Tikangkang Mini Beach</div>
                     <div class="des">Tikangkang MINI BEACH is a Filipino Restaurant, located at: Puerto San Pedro Bien Unido Bohol, Bien Unido, Bohol.</div>
                     <button><a onclick="togglePopup('popup-unido')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-unido')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-unido')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-jetafe" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Jetafe/Jetafe church.jpg');">
                  <div class="content">
                     <div class="name">Jetafe Church</div>
                     <div class="des">Originally named Ambacon, Jetafe is near Pangpang, a lair of Dagohoy's followers.</div>
                     <button><a onclick="togglePopup('popup-jetafe')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Jetafe/Jetafe floating umbrella.jpg');">
                  <div class="content">
                     <div class="name">Jetafe Floating Umbrella</div>
                     <div class="des">At least 1,200 umbrellas are hoisted high above the town plaza of Getafe.</div>
                     <button><a onclick="togglePopup('popup-jetafe')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Jetafe/Jetafe church.jpg');">
                  <div class="content">
                     <div class="name">Jetafe Church</div>
                     <div class="des">Originally named Ambacon, Jetafe is near Pangpang, a lair of Dagohoy's followers.</div>
                     <button><a onclick="togglePopup('popup-jetafe')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Jetafe/Jetafe floating umbrella.jpg');">
                  <div class="content">
                     <div class="name">Jetafe Floating Umbrella</div>
                     <div class="des">At least 1,200 umbrellas are hoisted high above the town plaza of Getafe.</div>
                     <button><a onclick="togglePopup('popup-jetafe')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-jetafe')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-jetafe')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-talibon" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Talibon/North sandbar talibon.jpg');">
                  <div class="content">
                     <div class="name">North Sandbar</div>
                     <div class="des">North Sandbar or Bongan Sandbar in Talibon, Bohol.</div>
                     <button><a onclick="togglePopup('popup-talibon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Talibon/talibonchurch.jpg');">
                  <div class="content">
                     <div class="name">Talibon Church</div>
                     <div class="des">The Most Holy Trinity Cathedral Parish also called Talibon Cathedral, is a Roman Catholic cathedral located at Barangay Poblacion, Talibon.</div>
                     <button><a onclick="togglePopup('popup-talibon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Talibon/North sandbar talibon.jpg');">
                  <div class="content">
                     <div class="name">North Sandbar</div>
                     <div class="des">North Sandbar or Bongan Sandbar in Talibon, Bohol.</div>
                     <button><a onclick="togglePopup('popup-talibon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Talibon/talibonchurch.jpg');">
                  <div class="content">
                     <div class="name">Talibon Church</div>
                     <div class="des">The Most Holy Trinity Cathedral Parish also called Talibon Cathedral, is a Roman Catholic cathedral located at Barangay Poblacion, Talibon.</div>
                     <button><a onclick="togglePopup('popup-talibon')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-talibon')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-talibon')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-bonbonon" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Lapinig Island/lapinig beach.jpg');">
                  <div class="content">
                     <div class="name">Lapinig Beach</div>
                     <div class="des">Coral beach on Lapinig Island.</div>
                     <button><a onclick="togglePopup('popup-bonbonon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Lapinig Island/sangkay.jpg');">
                  <div class="content">
                     <div class="name">Sangkay</div>
                     <div class="des">Lapinig Sangkay, CPG, Bohol</div>
                     <button><a onclick="togglePopup('popup-bonbonon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Lapinig Island/lapinig beach.jpg');">
                  <div class="content">
                     <div class="name">Lapinig Beach</div>
                     <div class="des">Coral beach on Lapinig Island.</div>
                     <button><a onclick="togglePopup('popup-bonbonon')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Lapinig Island/sangkay.jpg');">
                  <div class="content">
                     <div class="name">Sangkay</div>
                     <div class="des">Lapinig Sangkay, CPG, Bohol</div>
                     <button><a onclick="togglePopup('popup-bonbonon')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-bonbonon')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-bonbonon')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-mahanay" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Mahanay Island/mahanay  beach.webp');">
                  <div class="content">
                     <div class="name">Mahanay Beach</div>
                     <div class="des">Mahanay Island is a small island in Central Visayas in the Philippines.</div>
                     <button><a onclick="togglePopup('popup-mahanay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mahanay Island/mahanayreef.webp');">
                  <div class="content">
                     <div class="name">Mahanay Reef</div>
                     <div class="des">Mahanay Island is a small island in Central Visayas in the Philippines. It is slightly north of Bohol island, with Banacon island and its surrounding reef.</div>
                     <button><a onclick="togglePopup('popup-mahanay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mahanay Island/mahanay  beach.webp');">
                  <div class="content">
                     <div class="name">Mahanay Beach</div>
                     <div class="des">Mahanay Island is a small island in Central Visayas in the Philippines.</div>
                     <button><a onclick="togglePopup('popup-mahanay')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Mahanay Island/mahanayreef.webp');">
                  <div class="content">
                     <div class="name">Mahanay Reef</div>
                     <div class="des">Mahanay Island is a small island in Central Visayas in the Philippines. It is slightly north of Bohol island, with Banacon island and its surrounding reef.</div>
                     <button><a onclick="togglePopup('popup-mahanay')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-mahanay')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-mahanay')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-carmen" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Carmen/chocolate hills adventure park.jpg');">
                  <div class="content">
                     <div class="name">Chocolate Hills Adventure Park</div>
                     <div class="des">Zip-lining, treetop rope courses, horseback riding & camping in a rugged park with an outdoor cafe.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/chocolate hills.jpg');">
                  <div class="content">
                     <div class="name">Chocolate Hills</div>
                     <div class="des">The Chocolate Hills are a geological formation in the Bohol province of the Philippines.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/Saint Anthony the Abbot Church Carmen.jpg');">
                  <div class="content">
                     <div class="name">Carmen Church</div>
                     <div class="des">Established in 1874, the St. Anthony the Abbot Parish, also known as Carmen Church, has been a significant religious landmark in Bohol.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/taytayhills.jpg');">
                  <div class="content">
                     <div class="name">Taytay Hills</div>
                     <div class="des">A recreational spot with an overlooking view of the. Chocolate Hills, Cebu and other neighboring town.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/chocolate hills adventure park.jpg');">
                  <div class="content">
                     <div class="name">Chocolate Hills Adventure Park</div>
                     <div class="des">Zip-lining, treetop rope courses, horseback riding & camping in a rugged park with an outdoor cafe.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/chocolate hills.jpg');">
                  <div class="content">
                     <div class="name">Chocolate Hills</div>
                     <div class="des">The Chocolate Hills are a geological formation in the Bohol province of the Philippines.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/Saint Anthony the Abbot Church Carmen.jpg');">
                  <div class="content">
                     <div class="name">Carmen Church</div>
                     <div class="des">Established in 1874, the St. Anthony the Abbot Parish, also known as Carmen Church, has been a significant religious landmark in Bohol.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Carmen/taytayhills.jpg');">
                  <div class="content">
                     <div class="name">Taytay Hills</div>
                     <div class="des">A recreational spot with an overlooking view of the. Chocolate Hills, Cebu and other neighboring town.</div>
                     <button><a onclick="togglePopup('popup-carmen')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-carmen')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-carmen')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-danao" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Danao/danao adventure park.jpg');">
                  <div class="content">
                     <div class="name">Danao Adventure Park</div>
                     <div class="des">Adventure park with caving, a zip-line, rappelling, kayaking & other high-adrenaline activities.</div>
                     <button><a onclick="togglePopup('popup-danao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Danao/ka mira cave danao.jpg');">
                  <div class="content">
                     <div class="name">Ka Mira Cave</div>
                     <div class="des">Kamira Cave, one of the explorable cave in Danao region of Bohol.</div>
                     <button><a onclick="togglePopup('popup-danao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Danao/Kapesky Danao.jpg');">
                  <div class="content">
                     <div class="name">Kapesky</div>
                     <div class="des">Camping cabin in Danao, Bohol</div>
                     <button><a onclick="togglePopup('popup-danao')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Danao/Taming cliff Danao.jpg');">
                  <div class="content">
                     <div class="name">Taming Cliff</div>
                     <div class="des">Discover Taming Cliff in Danao Bohol with the cheapest entrance fee and breathtaking view.</div>
                     <button><a onclick="togglePopup('popup-danao')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-danao')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-danao')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-clarin" class="popup">
         <div class="container">
            <div class="slide">
               <div class="item" style="background-image: url('/towns/Clarin/Binaliw falls clarin.jpg');">
                  <div class="content">
                     <div class="name">Binaliw Falls</div>
                     <div class="des">Binaliw waterfall is one of the hidden gems in the town of Clarin Bohol.</div>
                     <button><a onclick="togglePopup('popup-clarin')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Clarin/Bung-aw eco farm Clarin.jpg');">
                  <div class="content">
                     <div class="name">Bung-aw Eco Farm</div>
                     <div class="des">The farm features expansive grounds with plenty of space to move and walk about.</div>
                     <button><a onclick="togglePopup('popup-clarin')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Clarin/Clarin Church.jpg');">
                  <div class="content">
                     <div class="name">Clarin Church</div>
                     <div class="des">Originally named Can-ogong, Clarin was established as a parish in honor of St. Michael the Archangel in 1924.</div>
                     <button><a onclick="togglePopup('popup-clarin')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Clarin/Binaliw falls clarin.jpg');">
                  <div class="content">
                     <div class="name">Binaliw Falls</div>
                     <div class="des">Binaliw waterfall is one of the hidden gems in the town of Clarin Bohol.</div>
                     <button><a onclick="togglePopup('popup-clarin')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Clarin/Bung-aw eco farm Clarin.jpg');">
                  <div class="content">
                     <div class="name">Bung-aw Eco Farm</div>
                     <div class="des">The farm features expansive grounds with plenty of space to move and walk about.</div>
                     <button><a onclick="togglePopup('popup-clarin')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/towns/Clarin/Clarin Church.jpg');">
                  <div class="content">
                     <div class="name">Clarin Church</div>
                     <div class="des">Originally named Can-ogong, Clarin was established as a parish in honor of St. Michael the Archangel in 1924.</div>
                     <button><a onclick="togglePopup('popup-clarin')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-clarin')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-clarin')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

   </body>
</html>

<script type="text/javascript">
   // Function to show the popup for a specific town
   function togglePopup(popupId) {
       var blur = document.getElementById('blur');
       var popup = document.getElementById(popupId);
       blur.classList.toggle('active');
       popup.classList.toggle('active');
   }
   
   // Function to switch to the next slide within a specific town's popup
   function nextSlide(popupId) {
       let slide = document.querySelector(`#${popupId} .slide`);
       let items = slide.querySelectorAll('.item');
       slide.appendChild(items[0]);
   }
   
   // Function to switch to the previous slide within a specific town's popup
   function prevSlide(popupId) {
       let slide = document.querySelector(`#${popupId} .slide`);
       let items = slide.querySelectorAll('.item');
       let lastItem = items[items.length - 1];
       slide.prepend(lastItem);
   }
</script>