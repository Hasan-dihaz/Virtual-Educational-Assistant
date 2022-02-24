function addStu(){
    var stuname = $ ("#stuname").val();
    var stuemail = $ ("#stuemail").val();
    var stuphone = $ ("#stuphone").val();
    var stugender = $ ("#stugender").val();
    var stupass = $ ("#stupass").val();
    
    $.ajax({
        url: 'student/addstudent.php',
        method: 'POST',
        dataType: "json",
        data: {
            stuname = stuname,
            stuemail = stuemail,
            stuphone = stuphone,
            stugender = stugender,
            stupass = stupass,
        },
        success: function(data){
            console.log(data);
            if(data == "OK"){
                $('#sucessMsg').html("<span>SignUp successfully!</span>");
            } else if(data == "Failed"){
                $('#sucessMsg').html("<span>Unable to SignUp!</span>");
            }
        },
    });
    
}