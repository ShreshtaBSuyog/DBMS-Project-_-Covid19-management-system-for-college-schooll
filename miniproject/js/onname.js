function selectVD(){
    
    var x = document.getElementById("vaccine").value;
   
    var x3 = document.getElementById("dose").value;

    $.ajax({
        url:"showname.php",
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
