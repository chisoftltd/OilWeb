/**
 * Created by 1609963 on 01/08/2017.
 */
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drillingVideo").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling1").on('hide.bs.modal', function(){
        $("#drillingVideo").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling1").on('show.bs.modal', function(){
        $("#drillingVideo").attr('src', url);
    });
});

$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drilling2Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling2").on('hide.bs.modal', function(){
        $("#drilling2Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling2").on('show.bs.modal', function(){
        $("#drilling2Video").attr('src', url);
    });
});