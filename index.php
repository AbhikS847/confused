<?php

include_once './includes/header.php';

?>

<style>
.btn-primary{
    background-color:#bb00ff!important;
    border:none;
}
.btn:hover{
    border: none!important;
}

#icon_mobile{
    transition:ease-out 350ms;
    color:#bb00ff;
    margin-top:0.7rem;
}

.rotate-center {
	-webkit-animation: rotate-center 2s ease-in-out infinite both;
	        animation: rotate-center 4s ease-in-out infinite both;
}

@-webkit-keyframes rotate-center {
  0% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes rotate-center {
  0% {
    -webkit-transform: rotate(0);
            transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

#searchLinks{
  color:#000!important;
  text-decoration: none!important;
}

#searchLinks:hover{
  color:#FFF!important;
  padding-top:0.2rem;
  padding-bottom:0.2rem;
  padding-right:1rem;
  padding-left:1rem;
}

.flip-horizontal-top {
	-webkit-animation: flip-horizontal-top 0.4s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
	        animation: flip-horizontal-top 0.4s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
}

@-webkit-keyframes flip-horizontal-top {
  0% {
    -webkit-transform: rotateX(0);
            transform: rotateX(0);
  }
  100% {
    -webkit-transform: rotateX(-360deg);
            transform: rotateX(-360deg);
  }
}
@keyframes flip-horizontal-top {
  0% {
    -webkit-transform: rotateX(0);
            transform: rotateX(0);
  }
  100% {
    -webkit-transform: rotateX(-360deg);
            transform: rotateX(-360deg);
  }
}

.flip-horizontal-top-off{
  display:none;
}

.scale-up-center {
	-webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
	        animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
}

@-webkit-keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

.scale-up-center-off{
  display: none;
}

</style>

<div class="jumbotron jumbotron-fluid">
<svg id="icon_mobile" class="rotate-center d-flex d-sm-none" style="position:absolute" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
  <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
</svg>
<svg id="icon_mobile" class="rotate-center d-none d-sm-flex" style="position:absolute;margin-left:5rem" xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
  <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
</svg>
<svg id="icon_mobile" class="rotate-center d-none d-sm-flex" style="position:absolute;margin-left:75rem" xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
  <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
</svg>
    <h1 class="display-2 text-center" style="color:#bb00ff">cOnFuSeD???</h1>
    <p class="lead text-center" style="color:#bb00ff">Feel free to start, join or finish a discussion.</p>
    <div class="d-flex justify-content-center py-3">
    <button class="btn btn-primary">Discussions</button>
    <button class="btn btn-primary mx-2">Trending</button>
    <button class="btn btn-primary mx-2">Profiles</button>
    </div>
    <p class="small text-center" style="background-color:#bb00ff;color:#FFF;padding-top:0.5rem;padding-bottom:0.5rem"><b>Anything you like - Homework, Electronics, Jobs, Music, DIY...etc</b></p>
</div>
<div class="container">
<div class="row">
<div class="col-8 col-sm-3">
<h4 class="display-6 text-center d-none d-sm-block" style="color:#bb00ff">Search</h4>
<form class="d-none d-sm-block" method="GET" action="index.php" >
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Type in a search..." aria-label="Recipient's username" aria-describedby="button-addon2">
  <button type="submit" class="btn btn-primary" type="button" id="button-addon2">Search</button>
  </div>
  </form>
  <b class="text-center d-none d-sm-block">Latest searches</b>
<ul class="list-group text-center d-none d-sm-block">
  <li class="list-group-item" style="border:none;border-bottom:2px solid #bb00ff"><a href="#" id="searchLinks">Fixing a broken charger cable</a></li>
  <li class="list-group-item" style="border:none;border-bottom:2px solid #bb00ff"><a href="#" id="searchLinks">Moving houses</a></li>
  <li class="list-group-item" style="border:none;border-bottom:2px solid #bb00ff"><a href="#" id="searchLinks">Gaming pc vs Gaming laptop</a></li>
</ul>
<div class="fixed-bottom d-block d-sm-none">
  <div id="" class="scale-up-center-off">
    <button id="openSearch" class="btn btn-primary" style="border-radius:100%">
  <svg xmlns="http://www.w3.org/2000/svg" style="padding-bottom:0.1rem" width="30" height="45" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
  </div>
<div id="" class="flip-horizontal-top">
<div class="input-group mb-3">
<button id="closeSearch" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z"/>
</svg></button>
  <input type="text" class="form-control" placeholder="Enter search..." aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
</div>
</div>
</div>
  </div>
  <div class="col-8 col-sm-6 d-none d-sm-block">
<h4 class="display-6 text-center" style="color:#bb00ff">Recent</h4>
</div>
<div class="col-8 col-sm-2 d-none d-sm-block">
<h4 class="display-6 text-center" style="color:#bb00ff">Categories</h4>
</div>
</div>
</div>

<script>
const openButton = document.querySelector('#openSearch');
const closeButton = document.querySelector('#closeSearch');
const openSearch = document.querySelector('.scale-up-center-off');
const closeSearch = document.querySelector('.flip-horizontal-top');

closeButton.addEventListener('click',()=>{
  closeSearch.classList.remove('flip-horizontal-top');
  closeSearch.classList.add('flip-horizontal-top-off');
  openSearch.classList.remove('scale-up-center-off');
  openSearch.classList.add('scale-up-center');
});

openButton.addEventListener('click',()=>{
  closeSearch.classList.remove('flip-horizontal-top-off');
  closeSearch.classList.add('flip-horizontal-top');
  openSearch.classList.remove('scale-up-center');
  openSearch.classList.add('scale-up-center-off');
})

</script>

<?php

include_once './includes/footer.php';

?>