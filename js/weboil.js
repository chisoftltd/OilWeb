/**
 * Created by 1609963 on 01/08/2017.
 */
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drillingVideo").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling").on('hide.bs.modal', function(){
        $("#drillingVideo").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling").on('show.bs.modal', function(){
        $("#drillingVideo").attr('src', url);
    });
});

$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#controlVideo").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myControl").on('hide.bs.modal', function(){
        $("#controlVideo").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myControl").on('show.bs.modal', function(){
        $("#controlVideo").attr('src', url);
    });
});