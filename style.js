var topIndex = 0;
swapImages();

function swapImages() {
  var top_imgs = document.getElementsByClassName("top-imgs");
  for (var i = 0; i < top_imgs.length; i++) {
    top_imgs[i].style.display = "none";  
  }
  topIndex++;
  if (topIndex > top_imgs.length) {
    topIndex = 1;
  }

  top_imgs[topIndex-1].style.display = "block";  
  setTimeout(swapImages, 8000);    
}