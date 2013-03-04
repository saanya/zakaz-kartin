
$(document).ready(function () {

$("#sendForm").live("click",function (){
    sendMail();
});

function sendMail(){
    
    var objImg=$("#fileupload .name a");
    var allImg="";
    console.log(objImg);
    objImg.each(function(indx, element){
        var photo = [];
        var strPhoto="";
        
        allImg= allImg+"&img["+indx+"]="+$(element).attr("download");
       // photo [indx] = $(element).attr("download");
        
       // alert(1);
       // console.log($(element).attr("download"));
      //  alert( indx);
       // console.info(strPhoto);
    });
   // console.log(allImg);
   
  //  console.log(photo);
    
    $.ajax({
           type: "POST",
           url: "send/index",
           data: $("#formInfo").serialize()+allImg,
           dataType:"json",
           beforeSend:function(){
               $("#sendForm img").show()
           },
           success: function(result){
               $("#sendForm img").hide();
               
               if(result.result=='success'){
                   $(".modal-body").fadeOut(500);
                   $("#sendSuccess").fadeIn(500);
               }
               
               if(result.result=='error'){
                   alert("Проверьте поля с типом *");
               }


           }
     });
}
    
});