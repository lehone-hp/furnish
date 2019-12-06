$(document).ready(function () {


// HANDLING ALL JAVACRIPTS IN THE ADMIN DASHBOARD
//========================================

    $('.summernote').summernote({
        height: 350
    });

    $("#updateProfilePic").click(function (e) {
        var file_data = $('#adminProfilePic')[0].files[0];
        
        if(file_data){

            var form_data = new FormData();
            form_data.append('image', file_data);
            form_data.append('_token', token);

            $.ajax({
                url: "/admin/picture/update",
                data: form_data,
                type: 'POST',
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data.image);
                    toastr.success('Profile picture uploaded');
                    $(".avatar").attr("src", "/users/images/"+data.image);
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });

        }else {
            toastr.error('Please select an image');
        }

    });

    new Chart(document.getElementById("chart2"),{"type":"bar","data":{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"My First Dataset","data":[65,59,80,81,56,55,40],"fill":false,"backgroundColor":["rgba(236, 94, 105, 0.2)","rgba(255, 159, 64, 0.2)","rgba(241, 194, 5, 0.2)","rgba(99, 203, 137, 0.2)","rgba(0, 112, 224, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(236, 94, 105)","rgb(255, 159, 64)","rgb(241, 194, 5)","rgb(99, 203, 137)","rgb(0, 112, 224)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});

});