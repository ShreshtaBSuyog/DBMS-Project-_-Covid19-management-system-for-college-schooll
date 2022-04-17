function selectV(){
    
    var x = document.getElementById("department").value;
   
    var x3 = document.getElementById("dose").value;

    $.ajax({
        url:"showdept.php",
        method:"POST",
        data:{
            id : x,
           
            id3 : x3
        },
        success:function(data){
            $("#ans").html(data);
        }
    })
}
