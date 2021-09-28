<?php 
 
require_once("header.php"); 

?>




<div class="container">
        <div class="main-video">
            <div class="video">
                <video controls poster="" class="video" id="video">
                    <source src="1.mp4" type="video/mp4">
                
                </video>
              
            </div>
        </div>
     
    
        <div class="video-list a" >
            <div class="vid active">
                <a href="1.mp4" class="btn">Watch</a>
                <h6 class="title" >01 - HTML_ Structure d'une page web </h6>
            </div>
            <div class="vid">
                <a href="2.mp4" class="btn">Watch</a>
                <h6 class="title">02 - HTML_ Qu'est ce qu'une balise</h6>
            </div>
            <div class="vid">
                <a href="3.mp4" class="btn">Watch</a>
                <h6 class="title">03 - HTML_ Les paragraphes </h6>
            </div>
            <div class="vid">
                <a href="4.mp4" class="btn">Watch</a>
                <h6 class="title">04- HTML_ Retour à la ligne </h6>
            </div>
            <div class="vid">
                <a href="5.mp4" class="btn">Watch</a>
                <h6 class="title">05- HTML_ Gras italique souligné</h6>
            </div>
            <div class="vid">
                <a href="6.mp4" class="btn">Watch</a>
                <h6 class="title">06 - HTML_ Gras italique souligné </h6>
            </div>
            <div class="vid">
                <a href="7.mp4" class="btn">Watch</a>
                <h6 class="title">07 - HTML_ Exposant et indice </h6>
            </div>
            <div class="vid">
                <a href="1.mp4" class="btn">Watch</a>
                <h6 class="title">08 - HTML _ Supprimé </h6>
            </div>
            <div class="vid">
                <a href="2.mp4" class="btn">Watch</a>
                <h6 class="title">09 - HTML _ Marqueur de texte </h6>
            </div>
            <div class="vid">
                <a href="3.mp4" class="btn">Watch</a>
                <h6 class="title">10 - HTML _bdi (Bi-Directional Isolation) </h6>
            </div>
            <div class="vid">
                <a href="4.mp4" class="btn">Watch</a>
                <h6 class="title">11 - HTML _liste de description </h6>
            </div>
            <div class="vid">
                <a href="5.mp4" class="btn">Watch</a>
                <h6 class="title">12 - HTML _ liste non numerote</h6>
            </div>
            
         

        </div>

</div>





<script type="text/javascript">
    let anchors = document.querySelectorAll('.a .btn');
let links = [...anchors];

for (let i=0; i<links.length; i++) {
    links[i].onclick = handler;
}
function handler(e) {
    e.preventDefault();
    let videotarget = this.getAttribute("href");
    let filename = videotarget.substr(0, videotarget.lastIndexOf('.'));
    let video = document.getElementById("video");
    video.removeAttribute("poster");
    let source = document.querySelectorAll(".main-video video source");
    source[0].src = filename + ".mp4";
   
    video.load();
    video.play();
}
</script>


<?php require_once("footer.php");  ?>