// tab functions
$(document).ready(function () {
    $(".clinician-tab").click(function () {
        $(".clinician-box").show();
        $(".patient-box").hide();
        $(".clinician-tab").addClass("active");
        $(".patient-tab").removeClass("active");
    });
    $(".patient-tab").click(function () {
        $(".patient-box").show();
        $(".clinician-box").hide();
        $(".patient-tab").addClass("active");
        $(".clinician-tab").removeClass("active");
    });
});

// empty field validation
function validation()
{
    var id=document.f1.user.value;
    var ps=document.f1.pass.value;
    if(id.length=="" && ps.length=="") {
        alert("Email and Password fields are empty");
        return false;
    }
    else
    {
        if(id.length=="") {
            alert("Email is empty");
            return false;
        }
        if (ps.length=="") {
            alert("Password field is empty");
            return false;
        }
    }
}
