<html>
	<head>
		<meta name= "viewport" content="width=device-width, initial-scale=1.0">
		<title>Bohol Digital Tour</title>
		<link rel= "stylesheet" href= "/css/index.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    
     
     <div class = "highlight">
     <div class="wrapper">
     <img src="/images/discoverbohol2.png"  class="featured-image">

        <h1>Top Destinations</h1>
        <div class="gallery-wrap">
    <img src="/images/arrowleft.png" id="bckBtn">
    <div class="gallery">
            <div>
                <span><img src="/towns/Panglao/beaches.png" onclick="togglePopup('popup-beaches')"></span>
                <span><img src="/categories/Caves/cave.png" onclick="togglePopup('popup-caves')"></span>
                <span><img src="/categories/Ecotour/ecotour.png" onclick="togglePopup('popup-ecotour')"></span>
            </div>

            <div>
                <span><img src="/categories/Heritage/heritage.png" onclick="togglePopup('popup-heritage')"></span>
                <span><img src="/categories/Resort/resort.png" onclick="togglePopup('popup-resort')"></span>
                <span><img src="/categories/Waterfalls/waterfalls.png" onclick="togglePopup('popup-waterfalls')"></span>
            </div>
    </div>
    <img src="/images/rightarrow.png" id="nxtBtn">
        </div>
    </div>
    </div> 
    </div>

    <div id = "popup-beaches" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Beaches/alonabeach-1.jpg');">
                  <div class="content">
                     <div class="name">Alona Beach</div>
                     <div class="des">Alona Beach, located on Panglao Island and considered one of Bohol's most 
                                      renowned beaches, spans 1.5 kilometers of pristine white sand. It is frequently 
                                      likened to the famous Boracay Island, boasting a vibrant nightlife and a diverse 
                                      dining scene. Moreover, Alona Beach is a favored destination for snorkeling and 
                                      diving enthusiasts, featuring vibrant coral reefs abundant with a variety of marine life.</div>
                     <button><a onclick="togglePopup('popup-beaches')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Beaches/anda white sand beach.jpg');">
                  <div class="content">
                     <div class="name">Anda White Beach</div>
                     <div class="des">Anda White Beach, situated at the eastern end of Bohol, is a concealed treasure waiting to be 
                                      discovered. Featuring an extensive expanse of pristine white sand and impeccably clear waters, 
                                      Anda Beach provides a peaceful retreat away from the busy pace of urban living. Additionally, 
                                      the beach boasts some of the most stunning coral reefs on the island, creating a haven for those 
                                      passionate about snorkeling and diving.</div>
                     <button><a onclick="togglePopup('popup-beaches')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Beaches/danao beach panglao.jpg');">
                  <div class="content">
                     <div class="name">Danao Beach</div>
                     <div class="des">Danao Beach is located on the opposite end of Panglao Island. While it may not 
                                      share the same popularity as Alona Beach or Dumaluan, this beach in the southwest 
                                      corner offers stunning ocean vistas. Numerous leisure and resort hotels are situated 
                                      in close proximity, making it an ideal spot for a serene stay. Comparatively, this area 
                                      tends to be more peaceful, making it a suitable choice if you prefer a tranquil environment. 
                                      Opting to stay on this beach is a great way to enjoy a quieter experience.</div>
                     <button><a onclick="togglePopup('popup-beaches')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Beaches/alonabeach-1.jpg');">
                  <div class="content">
                     <div class="name">Alona Beach</div>
                     <div class="des">Alona Beach, located on Panglao Island and considered one of Bohol's most 
                                      renowned beaches, spans 1.5 kilometers of pristine white sand. It is frequently 
                                      likened to the famous Boracay Island, boasting a vibrant nightlife and a diverse 
                                      dining scene. Moreover, Alona Beach is a favored destination for snorkeling and 
                                      diving enthusiasts, featuring vibrant coral reefs abundant with a variety of marine life.</div>
                     <button><a onclick="togglePopup('popup-beaches')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Beaches/anda white sand beach.jpg');">
                  <div class="content">
                     <div class="name">Anda White Beach</div>
                     <div class="des">Anda White Beach, situated at the eastern end of Bohol, is a concealed treasure waiting to be 
                                      discovered. Featuring an extensive expanse of pristine white sand and impeccably clear waters, 
                                      Anda Beach provides a peaceful retreat away from the busy pace of urban living. Additionally, 
                                      the beach boasts some of the most stunning coral reefs on the island, creating a haven for those 
                                      passionate about snorkeling and diving.</div>
                     <button><a onclick="togglePopup('popup-beaches')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Beaches/danao beach panglao.jpg');">
                  <div class="content">
                     <div class="name">Danao Beach</div>
                     <div class="des">Danao Beach is located on the opposite end of Panglao Island. While it may not 
                                      share the same popularity as Alona Beach or Dumaluan, this beach in the southwest 
                                      corner offers stunning ocean vistas. Numerous leisure and resort hotels are situated 
                                      in close proximity, making it an ideal spot for a serene stay. Comparatively, this area 
                                      tends to be more peaceful, making it a suitable choice if you prefer a tranquil environment. 
                                      Opting to stay on this beach is a great way to enjoy a quieter experience.</div>
                     <button><a onclick="togglePopup('popup-beaches')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-beaches')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-beaches')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-caves" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Caves/cabagnow-cave.jpg');">
                  <div class="content">
                     <div class="name">Cabagnow Cave</div>
                     <div class="des">Alona Beach, located on Panglao Island and considered one of Bohol's most 
                                      renowned beaches, spans 1.5 kilometers of pristine white sand. It is frequently 
                                      likened to the famous Boracay Island, boasting a vibrant nightlife and a diverse 
                                      dining scene. Moreover, Alona Beach is a favored destination for snorkeling and 
                                      diving enthusiasts, featuring vibrant coral reefs abundant with a variety of marine life.</div>
                     <button><a onclick="togglePopup('popup-caves')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Caves/combenta cave.jpg');">
                  <div class="content">
                     <div class="name">Combenta Cave</div>
                     <div class="des">Anda White Beach, situated at the eastern end of Bohol, is a concealed treasure waiting to be 
                                      discovered. Featuring an extensive expanse of pristine white sand and impeccably clear waters, 
                                      Anda Beach provides a peaceful retreat away from the busy pace of urban living. Additionally, 
                                      the beach boasts some of the most stunning coral reefs on the island, creating a haven for those 
                                      passionate about snorkeling and diving.</div>
                     <button><a onclick="togglePopup('popup-caves')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Caves/hinagdanan-cave.jpg');">
                  <div class="content">
                     <div class="name">Hinagdanan Cave</div>
                     <div class="des">Danao Beach is located on the opposite end of Panglao Island. While it may not 
                                      share the same popularity as Alona Beach or Dumaluan, this beach in the southwest 
                                      corner offers stunning ocean vistas. Numerous leisure and resort hotels are situated 
                                      in close proximity, making it an ideal spot for a serene stay. Comparatively, this area 
                                      tends to be more peaceful, making it a suitable choice if you prefer a tranquil environment. 
                                      Opting to stay on this beach is a great way to enjoy a quieter experience.</div>
                     <button><a onclick="togglePopup('popup-caves')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Caves/cabagnow-cave.jpg');">
                  <div class="content">
                     <div class="name">Cabagnow Cave</div>
                     <div class="des">Alona Beach, located on Panglao Island and considered one of Bohol's most 
                                      renowned beaches, spans 1.5 kilometers of pristine white sand. It is frequently 
                                      likened to the famous Boracay Island, boasting a vibrant nightlife and a diverse 
                                      dining scene. Moreover, Alona Beach is a favored destination for snorkeling and 
                                      diving enthusiasts, featuring vibrant coral reefs abundant with a variety of marine life.</div>
                     <button><a onclick="togglePopup('popup-caves')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Caves/combenta cave.jpg');">
                  <div class="content">
                     <div class="name">Combenta Cave</div>
                     <div class="des">Anda White Beach, situated at the eastern end of Bohol, is a concealed treasure waiting to be 
                                      discovered. Featuring an extensive expanse of pristine white sand and impeccably clear waters, 
                                      Anda Beach provides a peaceful retreat away from the busy pace of urban living. Additionally, 
                                      the beach boasts some of the most stunning coral reefs on the island, creating a haven for those 
                                      passionate about snorkeling and diving.</div>
                     <button><a onclick="togglePopup('popup-caves')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Caves/hinagdanan-cave.jpg');">
                  <div class="content">
                     <div class="name">Hinagdanan Cave</div>
                     <div class="des">Danao Beach is located on the opposite end of Panglao Island. While it may not 
                                      share the same popularity as Alona Beach or Dumaluan, this beach in the southwest 
                                      corner offers stunning ocean vistas. Numerous leisure and resort hotels are situated 
                                      in close proximity, making it an ideal spot for a serene stay. Comparatively, this area 
                                      tends to be more peaceful, making it a suitable choice if you prefer a tranquil environment. 
                                      Opting to stay on this beach is a great way to enjoy a quieter experience.</div>
                     <button><a onclick="togglePopup('popup-caves')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-caves')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-caves')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-ecotour" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Ecotour/a-popular-photo-taking-spot-in-bilar-manmade-forest.jpg');">
                  <div class="content">
                     <div class="name">Man-Made Forest</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Ecotour/loboc river.jpg');">
                  <div class="content">
                     <div class="name">Loboc River</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Ecotour/tarsier-bohol.jpg');">
                  <div class="content">
                     <div class="name">Tarsier</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Ecotour/a-popular-photo-taking-spot-in-bilar-manmade-forest.jpg');">
                  <div class="content">
                     <div class="name">Man-Made Forest</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Ecotour/loboc river.jpg');">
                  <div class="content">
                     <div class="name">Loboc River</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Ecotour/tarsier-bohol.jpg');">
                  <div class="content">
                     <div class="name">Tarsier</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-ecotour')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-ecotour')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-ecotour" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Ecotour/a-popular-photo-taking-spot-in-bilar-manmade-forest.jpg');">
                  <div class="content">
                     <div class="name">Man-Made Forest</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Ecotour/loboc river.jpg');">
                  <div class="content">
                     <div class="name">Loboc River</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Ecotour/tarsier-bohol.jpg');">
                  <div class="content">
                     <div class="name">Tarsier</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Ecotour/a-popular-photo-taking-spot-in-bilar-manmade-forest.jpg');">
                  <div class="content">
                     <div class="name">Man-Made Forest</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Ecotour/loboc river.jpg');">
                  <div class="content">
                     <div class="name">Loboc River</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Ecotour/tarsier-bohol.jpg');">
                  <div class="content">
                     <div class="name">Tarsier</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-ecotour')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-ecotour')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-ecotour')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-heritage" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Heritage/2023-03-19.jpg');">
                  <div class="content">
                     <div class="name">Baclayon Church</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-heritage')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Heritage/sandugo shrine.jpg');">
                  <div class="content">
                     <div class="name">Sandugo Shrine</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-heritage')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Heritage/SLIDESHOW-18-scaled.jpg');">
                  <div class="content">
                     <div class="name">Bohol Museum</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-heritage')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Heritage/2023-03-19.jpg');">
                  <div class="content">
                     <div class="name">Baclayon Church</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-heritage')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Heritage/sandugo shrine.jpg');">
                  <div class="content">
                     <div class="name">Sandugo Shrine</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-heritage')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Heritage/SLIDESHOW-18-scaled.jpg');">
                  <div class="content">
                     <div class="name">Bohol Museum</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-heritage')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-heritage')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-heritage')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-resort" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Resort/bellevue1.jpg');">
                  <div class="content">
                     <div class="name">Baclayon Church</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-resort')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Resort/hennan.jpg');">
                  <div class="content">
                     <div class="name">Sandugo Shrine</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-resort')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Resort/mithi.jpg');">
                  <div class="content">
                     <div class="name">Bohol Museum</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-resort')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Resort/bellevue1.jpg');">
                  <div class="content">
                     <div class="name">Baclayon Church</div>
                     <div class="des">The Bilar Man-Made Forest, also recognized as the Bohol Mahogany Forest, is a thick woodland that extends 
                                      for two kilometers along the dividing line between Loboc and Bilar towns in Bohol. Comprising predominantly 
                                      white and red mahogany trees, this forest originated as a reforestation initiative initiated over five decades ago. 
                                      Upon entering the forest, visitors will observe a sudden shift in temperature, particularly noticeable in the midst 
                                      of the hot season. Stepping under the shelter of the trees brings an immediate cooling effect to the surroundings.</div>
                     <button><a onclick="togglePopup('popup-resort')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Resort/hennan.jpg');">
                  <div class="content">
                     <div class="name">Sandugo Shrine</div>
                     <div class="des">The Loboc River, also known as the Loay River, is situated in the Bohol province of the Philippines and stands out 
                                      as a prominent tourist attraction in the region. Originating in the town of Carmen, which is centrally located in Bohol, 
                                      the river flows westward for approximately 1.5 kilometers before taking a southerly direction towards the Mindanao or Bohol Sea. 
                                      Covering a drainage area of about 520 square kilometers, the river is surrounded by a horseshoe-shaped chain of mountain peaks reaching 
                                      elevations of up to 800 meters. The rainfall in the area is consistently distributed throughout the year, contributing to Loboc River's 
                                      constant and substantial base flow.</div>
                     <button><a onclick="togglePopup('popup-resort')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Resort/mithi.jpg');">
                  <div class="content">
                     <div class="name">Bohol Museum</div>
                     <div class="des">Situated in Corella, Bohol, the Philippine Tarsier Sanctuary spans over 160 hectares of protected forest area. Tarsiers, among the most 
                                      ancient mammal species, have existed for 45 million years and are believed to share a connection with monkeys, apes, and humans. These creatures 
                                      are diminutive, with adult tarsiers measuring just 4 to 5 inches in height and weighing less than 5 ounces. Despite their small stature, they possess 
                                      large, round eyes that aid in nocturnal vision. As nocturnal beings, tarsiers are most active during the night, spending their days typically sleeping 
                                      while clinging to branches or the slender trunks of trees.</div>
                     <button><a onclick="togglePopup('popup-resort')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-resort')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-resort')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

      <div id = "popup-waterfalls" class="popup">
         <div class="containers">
            <div class="slide">
               <div class="item" style="background-image: url('/categories/Waterfalls/can-umantad-falls-candijay-bohol-2726124A2726.jpg');">
                  <div class="content">
                     <div class="name">Can-umantad Falls</div>
                     <div class="des">This waterfalls is surrounded with big trees and lush vegetation giving the picturesque mountain scenery a cool and invigorating 
                                      atmosphere. Its distinctive peculiarity features does not ebb even during the peak of the summer months, and its water glide gently 
                                      in three streams over crags and ridges that form a semi-circle water, without fear of being carried away by strong current.</div>
                     <button><a onclick="togglePopup('popup-waterfalls')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Waterfalls/dimiao-twin-falls-bohol-3.jpg');">
                  <div class="content">
                     <div class="name">Twin Falls</div>
                     <div class="des">The captivating combination of vibrant hues from tropical trees and a dazzling azure pool is what makes Pahangog Falls a spectacular 
                                      waterfall in Bohol, Philippines. The fact that it is a twin waterfall nestled in unspoiled natural beauty should be sufficient to captivate 
                                      anyone's interest</div>
                     <button><a onclick="togglePopup('popup-waterfalls')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Waterfalls/mag-aso-falls-bohol-2.jpg');">
                  <div class="content">
                     <div class="name">Mag-Aso Falls</div>
                     <div class="des">The Mag-aso Falls is one of Bohol’s natural treasures.  With a height of 25 feet, the twin falls is picturesque 
                                      against a backdrop of tall trees, wild plants including giant ferns, and deep ravines.  Once on the site, while 
                                      bathing and surrounded by the natural landscape, one feels immersed in a middle of a jungle with the sound of the 
                                      interminable chirping of the birds and the rush of flowing waters playing music to your ears.</div>
                     <button><a onclick="togglePopup('popup-waterfalls')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Waterfalls/can-umantad-falls-candijay-bohol-2726124A2726.jpg');">
                  <div class="content">
                     <div class="name">Can-umantad Falls</div>
                     <div class="des">This waterfalls is surrounded with big trees and lush vegetation giving the picturesque mountain scenery a cool and invigorating 
                                      atmosphere. Its distinctive peculiarity features does not ebb even during the peak of the summer months, and its water glide gently 
                                      in three streams over crags and ridges that form a semi-circle water, without fear of being carried away by strong current.</div>
                     <button><a onclick="togglePopup('popup-waterfalls')">Close</a></button>
                  </div>
               </div>
               <div class="item" style="background-image: url('/categories/Waterfalls/dimiao-twin-falls-bohol-3.jpg');">
                  <div class="content">
                     <div class="name">Twin Falls</div>
                     <div class="des">The captivating combination of vibrant hues from tropical trees and a dazzling azure pool is what makes Pahangog Falls a spectacular 
                                      waterfall in Bohol, Philippines. The fact that it is a twin waterfall nestled in unspoiled natural beauty should be sufficient to captivate 
                                      anyone's interest</div>
                     <button><a onclick="togglePopup('popup-waterfalls')">Close</a></button>
                  </div>
               </div>
			   <div class="item" style="background-image: url('/categories/Waterfalls/mag-aso-falls-bohol-2.jpg');">
                  <div class="content">
                     <div class="name">Mag-Aso Falls</div>
                     <div class="des">The Mag-aso Falls is one of Bohol’s natural treasures.  With a height of 25 feet, the twin falls is picturesque 
                                      against a backdrop of tall trees, wild plants including giant ferns, and deep ravines.  Once on the site, while 
                                      bathing and surrounded by the natural landscape, one feels immersed in a middle of a jungle with the sound of the 
                                      interminable chirping of the birds and the rush of flowing waters playing music to your ears.</div>
                     <button><a onclick="togglePopup('popup-waterfalls')">Close</a></button>
                  </div>
               </div>
            </div>
            <div class="button">
               <button class="prev" onclick="prevSlide('popup-waterfalls')"><i class="fa-solid fa-arrow-left"></i></button>
               <button class="next" onclick="nextSlide('popup-waterfalls')"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
         </div>
      </div>

<script>
    let scrollContainer = document.querySelector(".gallery");
    let bckBtn = document.getElementById("bckBtn");
    let nxtBtn = document.getElementById("nxtBtn");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
        scrollContainer.style.scrollBehavior = "auto";
    });

    nxtBtn.addEventListener("click", () =>{
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 900;
    });

    bckBtn.addEventListener("click", () =>{
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 900;
    });

</script>

<script>
    window.addEventListener('load', function () {
        fetch('https://bdtour-9ab73aef6628.herokuapp.com/page_count/add', {
            method: 'GET',
        })
        .then(response => {
            if (response.status === 200) {
                console.log('API call successful.');
            } else {
                console.error('API call failed.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

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

	</body>
</html>