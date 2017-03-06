
function load_header()
{

	/*
	var linkEl = document.createElement('link'); // not working
	linkEl.src = '/assets/images/b_logo.png';
	linkEl.rel = 'shortcut icon';
	document.head.appendChild(linkEl);

	var linkEl = document.createElement('script'); // jquery can't load here, and can't call in this file
	linkEl.src = '/assets/js/jquery-3.1.0.min.js';
	linkEl.type = 'text/javascript';
	document.head.appendChild(linkEl);

	var linkEl = document.createElement('script');
	linkEl.src = '/assets/js/semantic.min.js';
	linkEl.type = 'text/javascript';
	document.head.appendChild(linkEl);
	*/

	var linkEl = document.createElement('link');
	linkEl.href = '/assets/css/semantic.min.css';
	linkEl.rel = 'stylesheet';
	document.head.appendChild(linkEl);

	var linkEl = document.createElement('link');
	linkEl.href = '/assets/css/style.css';
	linkEl.rel = 'stylesheet';
	document.head.appendChild(linkEl);
}

function load_navbar()
{
	var navbar = 
	 '<div class="ui borderless main menu">' 
	+'  <div class="ui container">' 
	+'    <a href="/" class="header item">' 
	+'      <img class="logo" src="/assets/images/b_logo.png">' 
	+'    </a>' 
	+'    <a href="/" class="item active">Home</a>' 
	//+'	  <a href="#" class="item">Introduction</a>' 
	//+'    <a href="#" class="item">About</a>' 
	//+'    <div class="ui right floated dropdown item">' 
	//+'      <a class="item" style="padding:0;" href="javascript:;">More</a>' 
	//+'      <i class="dropdown icon" style="margin-left:0.3rem;"></i>' 
	//+'      <div class="menu">' 
	//+'        <a class="item" href="#">Menu</a>' 
	//+'        <a class="item" href="#">Options</a>' 
	//+'      </div>' 
	//+'    </div><!-- .dropdown -->' 
	+'  </div><!-- .container -->' 
	+'</div>'
	+'<div style="margin-top:40px;"></div>';

	var navbarNode = document.createElement('div');
	navbarNode.innerHTML = navbar;
	
	document.body.insertBefore(navbarNode, document.body.firstChild);

}

function load_footer()
{
	var footer = 
		 '<div class="ui" style="margin-top:40px;"></div>'
		+'<div class="ui center aligned container" style="min-height:60px;">'
		+'  <div class="ui">'
		+'    <div class="ui" style="padding-top:20px;"></div>'
		+'    <div class="ui">'
		+'		@2017 <a href="http://xl.liudonghua.net">liudonghua@xunlei.com</a>'
		+'	</div>'
		+'  </div>'
		+'</div>';

	var footerNode = document.createElement('div');
	footerNode.innerHTML = footer;
	
	document.body.insertBefore(footerNode, document.body.lastChild);
}

load_header();

jQuery(document).ready(function() 
{
	load_navbar();
	load_footer();

    // show dropdown on hover
    jQuery('.main.menu  .ui.dropdown').dropdown({
      on: 'hover'
    });
});

