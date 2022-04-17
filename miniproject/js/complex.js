function selectVD(){
    
    var x = document.getElementById("vaccine").value;
    var x2 = document.getElementById("department").value;
    var x3 = document.getElementById("dose").value;
    var x4 = document.getElementById("year").value;

    $.ajax({
        url:"showcomplex.php",
        method:"POST",
        data:{
            id : x,
            id2 : x2,
            id3 : x3,
            id4 : x4
        },
        success:function(data){
            $("#ans").html(data);
        }
    })
}
