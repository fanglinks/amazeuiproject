$(document).ready(function  () {
	$("p").hover(function(){
		$(this).hide();
	});
/*******************************************This is Selector comment************************************/
	//selector    "*" This is choice all element
	//this     is now Html element
	//p.intro    choice class="intro" <p>element
	//p:first   choice first <p> element
	//ul li:first     choice  first <ul>elements first <li> element
	//ul li:first-child   choice every one <ul>element's  first <li> element
	//[href]    choice elements who have href value
	//a[target='_blank']  choice  all of <a> where target = "__blank"
	//a[target!='__blank']  choice  all of <a> where target != "__blank"
	//:button    choice all type="button"   <input>element  and button element
	//tr:even    oushu  choice  even seat <tr> element
	//tr:odd jishu   choice  odd seat <tr> element
/********************************************This is event comment****************************************/

	//event   click  The event is click your mouse
	//dblclick  The event is twice click your left mouse
	//mouseenter   The event is when mouse go on what it select element it will be touch
	//mouseleave    The event is  when mouse left what element it select
	//mousedown       The event when mouse in selected elements click it event will be happen
	//mouseup            The event when mouse left selected elements   
	//hover                 The event will happen if  move to what element you selected
	//focus		    The event will happen if  elements get focus
	//blur		    The event will happen if lost he's focus
	//keypress
	//keydown
	//change
	//submit
	//load
	//unload
	//scroll
/********************************************************************************************************/
	//Jquery DOM = Document Object Model
	//get content mothod text()  html()  val()
	//text()  set or get element text content
	//html()  set or get elements content (with  Html tag)
	//val()    set or get form cloumn value
	//attr()  get attribute value
/*******************************************************************************************************/
	//Ajax  
	//$(selector).load(URL,data,callback);
	//URL  is you want load  ,data is post key/value data set  
	//callback argument is a function when load() ok
	//$("#div1").load("demo_test.txt @p1");
	//$("button"),click(function(){
	//	$(this).load('demo.txt',function(responseText,statusTxt,xhr)
	//		)
	//{if(statusTxt == "success")
	//	alert("External content loaded successfully!");}
	//});

	//$.get(URL,callback);
	//$.get("demo.php",function(data,status){
	//	alert("Data :" + data + "nstatus :" + status);
	//});

	//$.post(URL,data,callback);
	//$post("demo.html",{
	//	name : "Donald Duck",
	//	city : "Donald burg"
	//},
	//	function(data,status){
	//		alert("Data :" + data + "nStatus :" + status);
	//	});
	//});

/********************************************************************************************************/











	// $(".title").click(function(){
	// 	$.get("nextpage",function(json){
	// 			alert("JSON Data: " + json.title[1])
	// 		}
	// 		);
	// });

	// $().action(function  () {
	// 	$("").behave();
	// });

	// $().action(function  () {
	// 	$("").behave();
	// });

	// $().action(function  () {
	// 	$("").behave();
	// });

	// $().action(function  () {
	// 	$("").behave();
	// });
	
});