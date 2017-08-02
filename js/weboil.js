/**
 * Created by 1609963 on 01/08/2017.
 */
$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drilling1Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling1").on('hide.bs.modal', function () {
        $("#drilling1Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling1").on('show.bs.modal', function () {
        $("#drilling1Video").attr('src', url);
    });
});

$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drilling2Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling2").on('hide.bs.modal', function () {
        $("#drilling2Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling2").on('show.bs.modal', function () {
        $("#drilling2Video").attr('src', url);
    });
});

$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drilling3Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling3").on('hide.bs.modal', function () {
        $("#drilling3Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling3").on('show.bs.modal', function () {
        $("#drilling3Video").attr('src', url);
    });
});
$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#drilling4Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myDrilling4").on('hide.bs.modal', function () {
        $("#drilling4Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myDrilling4").on('show.bs.modal', function () {
        $("#drilling4Video").attr('src', url);
    });
});


/**
 * Created by 1609963 on 01/08/2017.
 */
$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#control1Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myControl1").on('hide.bs.modal', function () {
        $("#control1Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myControl1").on('show.bs.modal', function () {
        $("#control2Video").attr('src', url);
    });
});

$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#control2Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myControl2").on('hide.bs.modal', function () {
        $("#control2Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myControl2").on('show.bs.modal', function () {
        $("#control2Video").attr('src', url);
    });
});

$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#control3Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myControl3").on('hide.bs.modal', function () {
        $("#control3Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myControl3").on('show.bs.modal', function () {
        $("#control3Video").attr('src', url);
    });
});
$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#control4Video").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myControl4").on('hide.bs.modal', function () {
        $("#control4Video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myControl4").on('show.bs.modal', function () {
        $("#control4Video").attr('src', url);
    });
});
