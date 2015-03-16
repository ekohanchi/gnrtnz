function extractPageName(hrefString)
{
	var arr = hrefString.split('/');
	return  (arr.length < 2) ? hrefString : arr[arr.length-2].toLowerCase() + arr[arr.length-1].toLowerCase();
}
 
function setActiveMenu(arr, crtPage)
{
	for (var i=0; i < arr.length; i++)
	{
		if(extractPageName(arr[i].href) == crtPage)
		{
			if (arr[i].parentNode.tagName != "DIV")
			{
				arr[i].className = "current";
				arr[i].parentNode.className = "current";
			}
		}
	}
}
 
function setPage()
{
	hrefString = document.location.href ? document.location.href : document.location;
 
	if (document.getElementById("nav") !=null )
	setActiveMenu(document.getElementById("nav").getElementsByTagName("a"), extractPageName(hrefString));
}


/* function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

function highlightPage() {
  if (!document.getElementsByTagName) return false;
  if (!document.getElementById) return false;
  if (!document.getElementById("toplinks")) return false;
  var nav = document.getElementById("toplinks");
  var links = nav.getElementsByTagName("a");
  for (var i=0; i<links.length; i++) {
    var linkurl = links[i].getAttribute("href");
    var currenturl = window.location.href;
    
//    alert("linkurl before comparison" + linkurl);
//    alert("current url" + currenturl);
    
    if (currenturl.indexOf(linkurl) != -1) {
    	alert("the current page is: " + linkurl);
      links[i].className = "here";
      var linktext = links[i].lastChild.nodeValue.toLowerCase();
      document.body.setAttribute("id",linktext);
    }
//    //testing
//    links[i].lastChild.nodeValue;
//    alert(links[i].lastChild.nodeValue);
  }
//  alert("test");
}

addLoadEvent(highlightPage);

*/