//-------------------------------------------------
//		Quick Pager jquery plugin
//		Created by dan and emanuel @geckonm.com
//		www.geckonewmedia.com
// 
//
//		18/09/09 * bug fix by John V - http://blog.geekyjohn.com/
//		1.2 - allows reloading of pager with new items
//-------------------------------------------------

(function($) {
	    
	$.fn.quickPager = function(options) {
	
		var defaults = {
			pageSize: 10,
			currentPage: 1,
			holder: null,
			pagerLocation: "after"
		};
		
		var options = $.extend(defaults, options);
		
		
		return this.each(function() {
			
			
			var selector = $(this);	
			var pageCounter = 1;

			console.log("selector: " + selector.id );
			
			selector.wrap("<div class='simplePagerContainer'></div>");
			
			selector.parents(".simplePagerContainer").find("ul.simplePagerNav").remove();
			
			selector.children().each(function(i){ 
				
				if(i < pageCounter*options.pageSize && i >= (pageCounter-1)*options.pageSize) {
				$(this).addClass("simplePagerPage"+pageCounter);
				}
				else {
					$(this).addClass("simplePagerPage"+(pageCounter+1));
					pageCounter ++;
				}	
				
			});
			
			// show/hide the appropriate regions 
			selector.children().hide();
			selector.children(".simplePagerPage"+options.currentPage).show();
			
			if(pageCounter <= 1) {
				return;
			}
			
			
			var adjacents = 7; //set this to what ever adjacents you want to show in the pagination link

			var checkMedia = window.matchMedia("(max-width: 767px)");

			if (typeof checkMedia !== 'undefined' && checkMedia.matches){
				adjacents = 3;
			}
			//Build pager navigation
			buildPager(selector, options, pageCounter, adjacents);
			
			//checkMedia.addListener(buildPager)
			
			//pager navigation behaviour
			
			selector.parent().find(".simplePagerNav li").click(function() {
				
				//grab the REL attribute 
				//var clickedLink = $(this).attr("rel");
				var clickedLink = $(":first-child", this).attr("rel");
				options.currentPage = clickedLink;
				console.log("clickedLink: " + clickedLink);
				
				showAdjacents( selector, options, pageCounter, parseInt(clickedLink, 10), adjacents );
				
				if(options.holder) {
					$(this).parent("ul").parent(options.holder).find("li.currentPage").removeClass("currentPage");
					$(this).parent("ul").parent(options.holder).find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage");
				}
				else {
					//remove current current (!) page
					$(this).parent("ul").parent(".simplePagerContainer").find("li.currentPage").removeClass("currentPage");
					//Add current page highlighting
					$(this).parent("ul").parent(".simplePagerContainer").find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage");
				}
				
				//hide and show relevant links
				selector.children().hide();			
				selector.find(".simplePagerPage"+clickedLink).show();
				
				//remove current First, Last, Next and Previous link
				selector.parent().find(".simplePagerNav").find(":not([data-counter='yes'])").removeClass("currentPage");
				
				return false;
			});
			
			
			
			/*selector.parent().find(".simplePagerNav a").click(function() {
				
				//grab the REL attribute 
				var clickedLink = $(this).attr("rel");
				options.currentPage = clickedLink;
				
				showAdjacents( selector, options, pageCounter, parseInt(clickedLink, 10) );
				
				if(options.holder) {
					$(this).parent("li").parent("ul").parent(options.holder).find("li.currentPage").removeClass("currentPage");
					$(this).parent("li").parent("ul").parent(options.holder).find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage");
				}
				else {
					//remove current current (!) page
					$(this).parent("li").parent("ul").parent(".simplePagerContainer").find("li.currentPage").removeClass("currentPage");
					//Add current page highlighting
					$(this).parent("li").parent("ul").parent(".simplePagerContainer").find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage");
				}
				
				//hide and show relevant links
				selector.children().hide();			
				selector.find(".simplePagerPage"+clickedLink).show();
				
				//remove current First, Last, Next and Previous link
				selector.parent().find(".simplePagerNav").find(":not([data-counter='yes'])").removeClass("currentPage");
				
				return false;
			});*/
		});
	}
	

})(jQuery);


function showAdjacents( selector, options, pageCounter, page_num, adjacents ) {
	
	page_num = parseInt(page_num, 10);
	var recordsPerPage = parseInt(options.pageSize, 10);
	var totalrecords = parseInt(selector.children().length, 10);
	
	var numofpages = Math.ceil( totalrecords / recordsPerPage );
	
	if ( numofpages > 0 ) {
		// by default we show first page
		if( page_num === 0 ) page_num = 1;
		
		
		var adjacents_min = (adjacents % 2 === 0) ? (adjacents / 2) - 1 : (adjacents - 1) / 2;
		var adjacents_max = (adjacents % 2 === 0) ? adjacents_min + 1 : adjacents_min;
		var page_min = page_num- adjacents_min;
		var page_max = page_num+ adjacents_max;
		

		
		page_min = (page_min < 1) ? 1 : page_min;
		page_max = (page_max < (page_min + adjacents - 1)) ? page_min + adjacents - 1 : page_max;
		
		
		if (page_max > numofpages) {
			page_min = (page_min > 1) ? numofpages - adjacents + 1 : 1;
			page_max = numofpages;
		}
		
		page_min = (page_min < 1) ? 1 : page_min;
		
		
		var children = selector.parent().find(".simplePagerNav").children(); //$(".simplePagerNav").children();
		var thisElement = $(children[0]);

		selector.parent().find(".simplePagerNav").children("[data-counter='yes']").hide();
		
		thisElement = $(children[0]);
		thisElement.removeClass("currentPage");
		if ( (page_num > (adjacents - adjacents_min)) && (numofpages > adjacents) ) {
			
			thisElement.removeClass("disable");
			
		}
		else {
			thisElement.addClass("disable");
		}
		
		thisElement = $(children[1]);
		thisElement.removeClass("currentPage");
		if (page_num > 1) {
			
			thisElement.removeClass("disable");
			thisElement.attr("class","simplePageNav"+(page_num-1));
			thisElement.find("a").attr("rel",(page_num-1));
				
		}else {
			thisElement.addClass("disable");
		}
		
		
		for (var i = page_min;i <= page_max;i++) {
			
			thisElement = $(children[i+1]);
			$(thisElement).show();
			thisElement.attr("class","simplePageNav"+(i));
			thisElement.find("a").attr("rel",(i));
			
			if (i===options.currentPage) {
				thisElement.addClass("currentPage");
			}
			
		}
		
		thisElement = $(children[numofpages+2]);
		thisElement.removeClass("currentPage");
		if (page_num < numofpages) {
			
			thisElement.attr("class","simplePageNav"+(page_num+1));
			thisElement.find("a").attr("rel",(page_num+1));
			
		}else {
			thisElement.addClass("disable");
		}
		
		thisElement = $(children[numofpages+3]);
		thisElement.removeClass("currentPage");
		if ((page_num< (numofpages - adjacents_max)) && (numofpages > adjacents)) {
			
			thisElement.attr("class","simplePageNav"+(numofpages));
			
		}else {
			thisElement.addClass("disable");
		}
		
		
	}
	
}


function buildPager(selector, options, pageCounter, adjacents) {
	
	var displayStyle = "";
	var pageNav = "<ul class='simplePagerNav'>";
	
	pageNav += "<li class='simplePageNav1 disable' "+displayStyle+"><a rel='1' href='#'>First</a></li>";
	
	pageNav += "<li class='simplePageNav1 disable' "+displayStyle+"><a rel='1' href='#'>&laquo;</a></li>";
	
	displayStyle = "";

	
	for (var i=1;i<=pageCounter;i++) {
		if( i > adjacents ) displayStyle = " style='display:none;'";
		
		if (i === options.currentPage) {
			pageNav += "<li data-counter='yes' class='currentPage simplePageNav"+i+"' "+displayStyle+"><a rel='"+i+"' href='#'>"+i+"</a></li>";	
		}
		else {
			pageNav += "<li data-counter='yes' class='simplePageNav"+i+"' "+displayStyle+"><a rel='"+i+"' href='#'>"+i+"</a></li>";
		}
	}
	
	pageNav += "<li class='simplePageNav2'><a rel='2' href='#'>&raquo;</a></li>";
	pageNav += "<li class='simplePageNav"+(pageCounter)+"'><a rel='"+(pageCounter)+"' href='#'>Last</a></li>";
	
	pageNav += "</ul>";
	
	if(!options.holder) {
		switch(options.pagerLocation)
		{
		case "before":
			selector.before(pageNav);
		break;
		case "both":
			selector.before(pageNav);
			selector.after(pageNav);
		break;
		default:
			selector.after(pageNav);
		}
	}
	else {
		$(options.holder).append(pageNav);
	}
}
