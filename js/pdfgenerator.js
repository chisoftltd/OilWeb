/**
 * Created by 1609963 on 20/08/2017.
 */
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#seite2').html(), 15, 15, {
        'width': 3170,
        'elementHandlers': specialElementHandlers
    });
    doc.save('Well-Planning-Objectives.pdf');
});
