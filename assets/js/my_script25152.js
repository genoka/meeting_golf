jQuery(document).ready( function() {
   //bt engrenage menu    
   jQuery("#engrenage").click(function() {
        jQuery("#boxengrenage").toggle('slow');
    });
    jQuery("#engrenage").blur(function(){
        setTimeout("hideEngrenage()",100);         
    });
    //textarea message mur  
    var myBaseText=jQuery("#whats-new").val(); 
     
    jQuery("#whats-new").focus(function() {
        jQuery("#whats-new-options").show('slow');
        var textareaText1=jQuery("#whats-new").val();
        if(textareaText1==myBaseText){ jQuery(this).val('');}
    });
    
    jQuery("#whats-new").blur(function(){        
        var textareaText1=jQuery("#whats-new").val();
        var textareaText=jQuery.trim(textareaText1);  
        if((textareaText==myBaseText)||(textareaText=='')){
            jQuery("#whats-new").val(myBaseText);
            jQuery("#whats-new-options").hide('slow');
            jQuery("#whats-new").css({'height':'20px'});
        }
     });

});//fin document ready

function hideEngrenage(){
  jQuery("#boxengrenage").hide('slow');
}