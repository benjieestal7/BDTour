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
        <h1>Bohol DigiTour</h1>

        <div class="gallery-wrap">
    <img src="/images/arrowleft.png" id="bckBtn">
    <div class="gallery">
            <div>
                <span><img src="/towns/Panglao/Balikasag.jpg"></span>
                <span><img src="/towns/Carmen/chocolate hills.jpg"></span>
                <span><img src="/towns/Corella/Corella Tarsier.jpg"></span>
            </div>

            <div>
                <span><img src="/towns/Panglao/Balikasag.jpg"></span>
                <span><img src="/towns/Carmen/chocolate hills.jpg"></span>
                <span><img src="/towns/Corella/Corella Tarsier.jpg"></span>
            </div>
    </div>
    <img src="/images/rightarrow.png" id="nxtBtn">
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