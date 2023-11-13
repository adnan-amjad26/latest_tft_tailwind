 setInterval(() => {
         
         let videoLists = document.querySelectorAll('.video-list-container_video .lists');
     
     videoLists.forEach(vid =>{
        vid.onclick = () =>{
           videoLists.forEach(remove =>{remove.classList.remove('active')});
           vid.classList.add('active');
           let src = vid.querySelector('.list-video').getAttribute('src');
		   let videoid = vid.querySelector('.list-video').getAttribute('videoid');
           let title = vid.querySelector('.list-title').innerHTML;
           document.querySelector('.main-video-container_video .main-video.'+videoid).src = src;
           document.querySelector('.main-video-container_video .main-video').play();
           document.querySelector('.main-video-container_video .main-vid-title').innerHTML = title;
        };
     });

      }, 1000);
  function playVideo(evt, VideoID) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(VideoID).style.display = "block";
  evt.currentTarget.className += " active";
	  
}

window.onload = function(){
 if(document.querySelector('.tablinks:first-child')){
	 document.querySelector('.tablinks:first-child').click();
 }
 if(document.querySelector('.lists:first-child')){
	  document.querySelector('.lists:first-child').click();
 }	

}
