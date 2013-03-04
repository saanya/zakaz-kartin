
$(document).ready(function () {
  var imgObj={
        width:$("#photo").width(),
        height:$("#photo").height()
    }
    
  var i=  $('img#photo').imgAreaSelect({
        handles: true,
        onInit:start,
        x1:10,
        y1:10,
        x2:imgObj.width-10,
        y2:imgObj.height-10
    });
    
    function start(img, selection) {

    }
    
  $('#photo').imgAreaSelect({aspectRatio: '1:1',onSelectChange: preview });
  
  function preview(img, selection) {
    	var scaleX = imgObj.width/ selection.width;
	var scaleY = imgObj.height / selection.height;
        console.log(imgObj);
	//alert(selection.width);
        //alert(selection.height);
//	$('#photo + div').css({
//		width: Math.round(selection.width) + 'px',
//		height: Math.round(selection.height) + 'px'
//		//marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px',
//              //  marginTop: '-' + Math.round(scaleY * selection.y1) + 'px'
//	});

        $('#photo + div > img').css({
		width: Math.round(scaleX * selection.width) + 'px',
		height: Math.round(scaleY * selection.height) + 'px'
	});
  }

//    var ias = $('#photo').imgAreaSelect({ instance: true });
//    
//    ias.setSelection(10, 10, imgObg.width-10, imgObg.height-10, true);
//    ias.setOptions({ show: true,handles: true });
//    ias.update();
    
});