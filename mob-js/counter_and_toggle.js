function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}


function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displaycomment");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Show Review Form";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Hide Review Form";

		
		}
}

function saveScrollPositions(theForm) {
        if(theForm) {
            var scrolly = typeof window.pageYOffset != 'undefined' ? window.pageYOffset
                                                   : document.documentElement.scrollTop;
            var scrollx = typeof window.pageXOffset != 'undefined' ? window.pageXOffset
                                                  : document.documentElement.scrollLeft;
            theForm.scrollx.value = scrollx;
            theForm.scrolly.value = scrolly;
        }
    }


function commentreplyFunc() {
	var ele = document.getElementById("$nameidcomment");
	var text = document.getElementById("displaycommentreply");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "REPLY";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "CANCEL";

		
		}
}

if (screen.width >= 699) {
document.location = "index.php";
}

function logintoggle() {
	var ele = document.getElementById("Login");
	var text = document.getElementById("displaycomment");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Add comment";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Hide comment";

		
		}
}

//disable readonly

function enAbletextarea() {
  document.getElementById("comment_content").disabled = false;
}

//function editcommentreplyformfunc() {
	
	//document.editcommentreplyform.submit();
	
	//}
	
	
$(document).ready(function () {
            $("#chkRead").change(function () {
                if ($(this).is(":checked")) {
                    $('#textareaedit').removeAttr("readonly")
                }
                else {
                    $('#textareaedit').attr('readonly', true);
                }
            });
        });






/////////////////////////////






// clone input value

//$(function () {
  //  var $src = $('#comment_content'),
    //    $dst = $('#textareaedit');
  //  $src.on('input', function () {
    //    $dst.val($src.val());
 //   });
//});

document.getElementById("editbtn").addEventListener("click", function () {
      document.getElementById("textareaedit").readOnly = false;
    });


//////password confirm

function replycount() {
	var rep = document.getElementById("replycountdiv");
	var text = document.getElementById("displaycomment");
	if(rep.style.display == "block") {
    		rep.style.display = "none";

  	}
	else {
		rep.style.display = "block";
		
		
		}
}




///////////////////////////////// slide show


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}


// menu con

function mymenuFunction(x) {
  x.classList.toggle("change");
  document.getElementById("mySidenav").style.width = "100%";
}

// sidenave of icon menu


function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
