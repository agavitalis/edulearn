$(document).ready(function() {
    
    $(".answerRadio").change(function() {
        let seleted_question_id = $(this).data("id");
        let student_answer = $(this).val();

        $.ajax({
            type: "post",
            url: "/student/exam-answer",
            data: {
                _token: $("input[name=_token]").val(),
                seleted_question_id: seleted_question_id,
                student_answer: student_answer
            },
            success: function(response) {
                if (response.code == 200) {
                    //do something with the response here
                } else if (response.code == 301) {
                    alert("Opps, Seems you are not connected to th internet");
                }
            },
            errors: function(error) {
                console.log(error.message);
            }
        });
    });
});

let lastId;

function openNextTab() {
    let str = $(".tab-pane.active").attr("id");
    let res = str.split("-");
    let id = Number(res[2]) + 1;
    if(id != lastId){
        $(`#v-pills-tab a[href="#v-pills-${id}"]`).tab("show"); // Select tab by name
        lastId = id;
    }else{
        alert("Question finished")
    }
 
}

function openPreviousTab() {
    let str = $(".tab-pane.active").attr("id");
    let res = str.split("-");
    let id = Number(res[2]) - 1;

    if (id < 1) {
        id = 1;
    }

    $(`#v-pills-tab a[href="#v-pills-${id}"]`).tab("show"); // Select tab by name
    lastId = id;
}

function  endExam(){
    $.ajax({
        type: "post",
        url: "/student/end-exam",
        data: {
            _token: $("input[name=_token]").val(),
        },
        success: function(response) {
            if (response.code == 200) {
                
                //redirect to the success page
                window.location.href = response.redirect_url
                
            } else if (response.code == 301) {
                alert("Opps, Seems you are not connected to th internet");
            }
        },
        errors: function(error) {
            console.log(error.message);
        }
    });
}
