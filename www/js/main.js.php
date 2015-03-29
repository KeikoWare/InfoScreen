var count, tocount, i;

function saveTimelines(){
var timelineid, sorting, delay, templateid, text1, text2, text3, text4, int1, int2, int3, int4;

	count = 0;
	tocount = 0;
	
	$( "#progressbar" ).show();

	for (var key in objTimelines) {
		count++;
	}

	for (var key in objTimelines) {
		var obj = objTimelines[key];
		
		timelineid = key;
		
		for (var prop in obj) {

			switch(prop)
			{
			case "sorting":
				sorting = obj[prop];
			break;
			case "delay":
				delay = obj[prop];
			break;
			case "templateid":
				templateid = obj[prop];
			break;
			case "text1":
				text1 = obj[prop];
			break;
			case "text2":
				text2 = obj[prop];
			break;
			case "text3":
				text3 = obj[prop];
			break;
			case "text4":
				text4 = obj[prop];
			break;
			case "int1":
				int1 = obj[prop];
			break;
			case "int2":
				int2 = obj[prop];
			break;
			case "int3":
				int3 = obj[prop];
			break;
			case "int4":
				int4 = obj[prop];
			break;

			}
		}

		updateTimeline(timelineid, sorting, delay, templateid, text1, text2, text3, text4, int1, int2, int3, int4);

	}

}

function saveBoxes(){
var boxid, width, height, left, top, zindex, boxname, editcolor, position, displaycolor;

	count = 0;
	tocount = 0;
	
	$( "#progressbar" ).show();

	for (var key in objBoxes) {
		count++;
	}
	
	for (var key in objBoxes) {
		var obj = objBoxes[key];
		
		boxid = key;
		
		for (var prop in obj) {

			switch(prop)
			{
			case "width":
				width = obj[prop];
			break;
			case "height":
				height = obj[prop];
			break;
			case "left":
				left = obj[prop];
			break;
			case "top":
				top = obj[prop];
			break;
			case "zindex":
				if(obj[prop] == 0){
					autozindex++;
					zindex = autozindex;
				} else zindex = obj[prop];
			break;
			case "name":
				boxname = obj[prop];
			break;
			case "editcolor":
				editcolor = obj[prop];
			break;
			case "displaycolor":
				displaycolor = obj[prop];
			break;
			case "position":
				position = obj[prop];
			break;

			}
		}

		updateBox(boxid, width, height, left, top, zindex, boxname, editcolor, position, displaycolor);

	}

}

function checkProgress(type, newText){

	if(count == tocount){
		$( "#progressbar" ).progressbar({
			value: 100
		});

		$( "#progressText" ).html(newText);
		setTimeout(function(){
			$( "#progressbar" ).hide();
			$( "#progressText" ).html('Gemmer');
			$( "#progressbar" ).progressbar({
				value: false
			});
		}, 3000);
	}
}

function rebuildBoxes(newzoom){
var newX = Math.round(editX * newzoom / 100);
var newY = Math.round(editY * newzoom / 100);
var newvalue;
zoom = newzoom;

	document.getElementById('boxEdit').style.width  = newX+"px";
	document.getElementById('boxEdit').style.height = newY+"px";

	for (var key in objBoxes) {
		var obj = objBoxes[key];
		
		
		for (var prop in obj) {

			switch(prop)
			{
			case "width":
				newvalue = Math.round(obj[prop] * newzoom / 100);
				document.getElementById('boxid'+key).style.width  = newvalue+"px";
			break;
			case "height":
				newvalue = Math.round(obj[prop] * newzoom / 100);
				document.getElementById('boxid'+key).style.height  = newvalue+"px";
			break;
			case "left":
				newvalue = Math.round(obj[prop] * newzoom / 100);
				document.getElementById('boxid'+key).style.left  = newvalue+"px";
			break;
			case "top":
				newvalue = Math.round(obj[prop] * newzoom / 100);
				document.getElementById('boxid'+key).style.top  = newvalue+"px";
			break;
			
			case "zindex":
				document.getElementById('boxid'+key).style.zIndex  = obj[prop];
			break;
			
			case "name":
				document.getElementById('text'+key).innerHTML = "<b>"+obj[prop]+"</b>";
			break;

			case "editcolor":
				document.getElementById('boxid'+key).style.background  = "#"+obj[prop];
			break;
			
			case "displaycolor":
			break;
			

			}
		}
	}
}

function getSizePos(obj){
var actid, width, height, top, left, name;
actid = obj.id.split("id").pop();
width = Math.round(obj.style.width.replace('px','')*100/zoom);
height = Math.round(obj.style.height.replace('px','')*100/zoom);
top = Math.round(obj.style.top.replace('px','')*100/zoom);
left = Math.round(obj.style.left.replace('px','')*100/zoom);

objBoxes[actid]["width"]=width;
objBoxes[actid]["height"]=height;
objBoxes[actid]["top"]=top;
objBoxes[actid]["left"]=left;

//updateBox(actid, width, height, left, top, 0, objBoxes[actid]["name"], objBoxes[actid]["editcolor"]);
//alert("Id: "+actid.split("id").pop()+" Vidde: "+width);
}

function updateBox(boxid, width, height, left, top, zindex, boxname, editcolor, position, displaycolor){
$.ajax({
	type: 'POST',
	url: 'updateBox.php',
	data: 'boxid='+boxid+'&width='+width+'&height='+height+'&left='+left+'&top='+top+'&zindex='+zindex+'&boxname='+boxname+'&editcolor='+editcolor+'&position='+position+'&scheme='+scheme+'&displaycolor='+displaycolor,
	success: function(data) {
		tocount++;
		checkProgress(1,'Gemt');
	}
});
}

function updateTimeline(timelineid, sorting, delay, templateid, text1, text2, text3, text4, int1, int2, int3, int4){

$.ajax({
	type: 'POST',
	url: 'updateTimeline.php',
	data: 'timelineid='+timelineid+'&sorting='+sorting+'&delay='+delay+'&templateid='+templateid+'&text1='+text1+'&text2='+text2+'&text3='+text3+'&text4='+text4+'&int1='+int1+'&int2='+int2+'&int3='+int3+'&int4='+int4,
	success: function(data) {
		tocount++;
		checkProgress(1,'Gemt');
	},
	error: function(data) {
		alert(data);
	}
});
}

function editBox(){
	if(!document.getElementById('editorBoxId').value) return false;
	location.href='?content=edit&id='+document.getElementById('editorBoxId').value;
}


function addNewBox(scheme){
	var newBox = document.createElement('div');
	var newBoxTitle = document.createElement('div');
	var newID = 0;
	var newNo = 0;
	var newZindex=0;
	var newColor;

	var colorArray = new Array("FF0000","FFFF00","00FF00","0000FF","FFAA00","FF00AA","999999","EMPTY");
	newColor = colorArray[0];

	for (var key in objBoxes) {
		colorArray.splice(jQuery.inArray(objBoxes[key]["editcolor"], colorArray),1);
		if(objBoxes[key]["zindex"] > newZindex) newZindex = objBoxes[key]["zindex"];
	}
	
	if(colorArray[0]) newColor = colorArray[0];
	newZindex++;
	
	$.ajax({
		type: 'POST',
		url: 'addnewBox.php',
		success: function(data) {
			newID = 'boxid'+data.split("succes").pop();   
			newNo = data.split("succes").pop();   
		},
		async: false
	});
	
	if(newID == 0 || newNo == 0) return false;
	
	objBoxes[newNo] = {
		"width" : 300
		,
		"height" : 200
		,
		"left" : 125
		,
		"top" : 125
		,
		"zindex" : newZindex
		,
		"name" : 'new_layer '+newNo
		,
		"editcolor" : newColor
		,
		"displaycolor" : 'FFFFFF'
		,
		"position" : 'absolute'
		};
	
	
	newBox.id = newID;
	newBoxTitle.id="text"+newNo;
	newBox.className = 'clsBox';
	newBox.class = 'clsBox';
	newBox.style.overflow = 'hidden'; 
	newBox.style.margin = 0;
	newBox.style.opacity = 0.75; 
	newBox.style.textAlign= 'center';
	newBox.style.background = '#FF00FF';
	newBox.style.position = 'absolute';
	newBox.onmouseup = function(){getSizePos(this);};
	newBox.onclick=function(){selectBox(this);};
	newBox.onmouseover=function(){this.style.cursor='move';};	
	//newBoxTitle.innerHTML = '<b>new_layer '+newNo+'1</b>';
	newBox.appendChild(newBoxTitle);
	
	document.getElementById('boxEdit').appendChild(newBox);

	rebuildFunctionality();
	rebuildBoxes(zoom);
}

function selectBox(obj){

	document.getElementById('editor').style.visibility='visible';
	document.getElementById('editorBoxId').value = obj.id.split("id").pop();
	document.getElementById('boxSelectWidth').value = objBoxes[obj.id.split("id").pop()]["width"];
	document.getElementById('boxSelectHeight').value = objBoxes[obj.id.split("id").pop()]["height"];
	document.getElementById('boxSelectLeft').value = objBoxes[obj.id.split("id").pop()]["left"];
	document.getElementById('boxSelectTop').value = objBoxes[obj.id.split("id").pop()]["top"];
	document.getElementById('boxSelectName').value = objBoxes[obj.id.split("id").pop()]["name"];
	document.getElementById('boxSelectZindex').value = objBoxes[obj.id.split("id").pop()]["zindex"];

	document.getElementById('boxSelectEditColor').value = objBoxes[obj.id.split("id").pop()]["editcolor"];
	document.getElementById('boxSelectEditColor').style.background = "#"+objBoxes[obj.id.split("id").pop()]["editcolor"];
	
	document.getElementById('boxSelectDisplayColor').value = objBoxes[obj.id.split("id").pop()]["displaycolor"];
	document.getElementById('boxSelectDisplayColor').style.background = "#"+objBoxes[obj.id.split("id").pop()]["displaycolor"];

	document.getElementById('tl').checked = false;
	document.getElementById('ml').checked = false;
	document.getElementById('bl').checked = false;
	document.getElementById('tc').checked = false;
	document.getElementById('mc').checked = false;
	document.getElementById('bc').checked = false;
	document.getElementById('tr').checked = false;
	document.getElementById('mr').checked = false;
	document.getElementById('br').checked = false;


	if(objBoxes[obj.id.split("id").pop()]["position"] != '' && objBoxes[obj.id.split("id").pop()]["position"] != 'absolute') 
		document.getElementById(objBoxes[obj.id.split("id").pop()]["position"]).checked = true;

	document.getElementById('boxtext').innerHTML = "<b>"+objBoxes[obj.id.split("id").pop()]["name"]+"</b>";

}

function changeValue(prop, newvalue){
	var key = document.getElementById('editorBoxId').value;

		switch(prop)
		{
		case "width":
			objBoxes[key]["width"] = newvalue;
		break;
		case "height":
			objBoxes[key]["height"]  = newvalue;
		break;
		case "left":
			$('input[name=boxSelectposition]').attr('checked',false);
			objBoxes[key]["position"]  = 'absolute';
			objBoxes[key]["left"]  = newvalue;
		break;
		case "top":
			$('input[name=boxSelectposition]').attr('checked',false);
			objBoxes[key]["position"]  = 'absolute';
			objBoxes[key]["top"]  = newvalue;
		break;
		case "name":
			objBoxes[key]["name"]  = newvalue;
			document.getElementById('boxtext').innerHTML = "<b>"+newvalue+"</b>";
		break;
		case "editcolor":
			objBoxes[key]["editcolor"]  = newvalue;
		break;
		case "displaycolor":
			objBoxes[key]["displaycolor"]  = newvalue;
		break;
		case "zindex":
			objBoxes[key]["zindex"]  = newvalue;
		break;
		case "position":
			objBoxes[key]["position"]  = newvalue;
			switch(newvalue)
			{
			case "tl":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = 0;
				objBoxes[key]["left"] = 0;
			break;
			case "ml":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = (Math.floor((editY/2)) - Math.floor((objBoxes[key]["height"]/2)));
				objBoxes[key]["left"] = 0;
			break;
			case "bl":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = editY - objBoxes[key]["height"];
				objBoxes[key]["left"] = 0;
			break;
			case "tc":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = 0;
				objBoxes[key]["left"] = (Math.floor((editX/2)) - Math.floor((objBoxes[key]["width"]/2)));
			break;
			case "mc":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = (Math.floor((editY/2)) - Math.floor((objBoxes[key]["height"]/2)));
				objBoxes[key]["left"] = (Math.floor((editX/2)) - Math.floor((objBoxes[key]["width"]/2)));
			break;
			case "bc":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = editY - objBoxes[key]["height"];
				objBoxes[key]["left"] = (Math.floor((editX/2)) - Math.floor((objBoxes[key]["width"]/2)));
			break;
			case "tr":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = 0;
				objBoxes[key]["left"] = editX - objBoxes[key]["width"];
			break;
			case "mr":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = (Math.floor((editY/2)) - Math.floor((objBoxes[key]["height"]/2)));
				objBoxes[key]["left"] = editX - objBoxes[key]["width"];
			break;
			case "br":
				objBoxes[key]["position"]  = 'absolute';
				objBoxes[key]["top"]  = editY - objBoxes[key]["height"];
				objBoxes[key]["left"] = editX - objBoxes[key]["width"];
			break;
			}
			
			selectBox(document.getElementById('boxid'+document.getElementById('editorBoxId').value));
		break;
		}


		rebuildBoxes(zoom);

}

function showLayer(type, active){
	switch(type)
	{
	case 1:
	document.getElementById('sizepos').style.display='none';
	document.getElementById('properties').style.display='none';
	
	document.getElementById(active).style.display='block';
	break;
	}
}

function rebuildFunctionality(){
	$( '.clsBox' ).draggable();
	$( '.clsBox' ).resizable();

	$('.clsBox').bind("contextmenu", function(e) {

		boxEditId =  this.id.split("boxid").pop();

		document.getElementById("editBoxHeader").innerHTML = '<b>Box: '+objBoxes[boxEditId]["name"];+'</b>';
		$('#editmenu').css({
			top: e.pageY+'px',
			left: e.pageX+'px'
		}).show();
		return false;

	});

	$(document).ready(function() {

		$('#editmenu').click(function() {
			$('#editmenu').hide();
		});
		
		$(document).click(function() {
			$('#editmenu').hide();
		});

	});
}

function removeBox(boxid){
	if(!confirm("Er du sikker på du vil fjerne box: "+objBoxes[boxid]["name"]+"?\n\nADVARSEL: Box'en kan IKKE genskabes!")) return false;

	$.ajax({
		type: 'POST',
		url: 'removeBox.php',
 		data: {boxid : boxid},
		success: function(data) {
			$("#menuid"+boxid).remove(); 
			$("#menuid"+boxid).remove(); 
			$("#boxid"+boxid).remove(); 
			delete objBoxes[boxid];
		},
		error: function(xhr, status, error) {
			alert("An AJAX error occured: " + status + "\nError: " + error + "\nError detail: " + xhr.responseText);
		},
		async: false
	});
}

function removeTimeline(timelineid){
	if(!confirm("Er du sikker på du vil fjerne tidslinjen?\n\nADVARSEL: Tidslinien kan IKKE genskabes!")) return false;

	$.ajax({
		type: 'POST',
		url: 'removeTimeline.php',
 		data: {timelineid : timelineid},
		success: function(data) {
			$("#timelineid"+timelineid).remove(); 
		},
		error: function(xhr, status, error) {
			alert("An AJAX error occured: " + status + "\nError: " + error + "\nError detail: " + xhr.responseText);
		},
		async: false
	});
}

function changeImage(obj, imgobj){
	if(obj.value != '') imgobj.src='onscreen/'+obj.value;
}

function convertTime(value, delay, type){
	var newdelay;
	var time;
	
	switch(type)
	{
	case "H":
		time = Math.floor((delay/3600));
		newdelay = delay - (time*3600) + (value*3600);
	break;
	
	case "M":
		time = Math.floor((delay/3600));
		time = delay - (time*3600);
		time = Math.floor((time/60));
		newdelay = delay - (time*60) + (value*60);
	break;
	
	case "S":
		time = Math.floor((delay/3600));
		time = delay - (time*3600);
		newdelay = Math.floor((time/60));
		time = time - (newdelay*60);
		newdelay = delay - time + value;
	break;
	
	}

	newdelay = newdelay*1000;
//	alert(newdelay);
	return newdelay;
}

function changeProperties(prop, newvalue, id){
	var key = id;
 
	switch(prop)
	{
	case "delayH":	
		objTimelines[key]["delay"] = convertTime(newvalue, (objTimelines[key]["delay"]/1000), "H");
	break;

	case "delayM":
		objTimelines[key]["delay"] = convertTime(newvalue, (objTimelines[key]["delay"]/1000), "M");
	break;

	case "delayS":
		objTimelines[key]["delay"] = convertTime(newvalue, (objTimelines[key]["delay"]/1000), "S");
	break;

	case "sorting":
		objTimelines[key]["sorting"] = newvalue;
	break;
	
	case "templateid":
		objTimelines[key]["templateid"] = newvalue;
	break;
	
	case "text1":
		objTimelines[key]["text1"] = newvalue;
	break;

	case "text2":
		objTimelines[key]["text2"] = newvalue;
	break;
	
	case "text3":
		objTimelines[key]["text3"] = newvalue;
	break;
	
	case "text4":
		objTimelines[key]["text4"] = newvalue;
	break;
	
	case "int1":
		objTimelines[key]["int1"] = newvalue;
	break;
	
	case "int2":
		objTimelines[key]["int2"] = newvalue;
	break;
	
	case "int3":
		objTimelines[key]["int3"] = newvalue;
	break;
	
	case "int4":
		objTimelines[key]["int4"] = newvalue;
	break;
	
	
	}
			
}


function saveSystemdata(zoom){
var zoom;

$.ajax({
	type: 'POST',
	url: 'saveSystemdata.php',
	data: 'zoom='+zoom,
	success: function(data) {
	}
});
}

function saveBoxRights(boxid, save, groupid){

$.ajax({
	type: 'POST',
	url: 'saveBoxRights.php',
	data: 'boxid='+boxid+'&save='+save+'&groupid='+groupid,
	success: function(data) {
		alert('Gemt'+data);
	}
});

}

function chgRelation(userid, groupid, save){

$.ajax({
	type: 'POST',
	url: 'chgRelation.php',
	data: 'userid='+userid+'&groupid='+groupid+'&save='+save,
	success: function(data) {
		alert('Gemt'+data);
	}
});

}

function chgGroupRelation(groupid, typeid, save){

$.ajax({
	type: 'POST',
	url: 'chgGroupRelation.php',
	data: 'groupid='+groupid+'&typeid='+typeid+'&save='+save,
	success: function(data) {
		alert('Gemt'+data);
	}
});

}


