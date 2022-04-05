
/*
* Common util function */
function manageReport(td, preview, pnr) {
    $('body').loader();
    $.ajax({
        url: App.base + "history/reservations/download",
        data: pnr != 'undefined'? {pnr:pnr} : {pnr: td.data("pnr")},
        success: function (resp) {
            var resp = $(resp);
            if(preview) {
                $('body').loader(false);
                var tr = td.parent();
                var previewPanel = $('<tr><td colspan="' + tr.find('td').length +
                    '"><button type="button" style="float: right" class="fa fa-times close-preview"></button></td></tr>');
                previewPanel.find(".close-preview").click(function () {
                    previewPanel.remove();
                    tr.show();
                })
                tr.hide();
                previewPanel.find("td").append(resp);
                tr.after(previewPanel);
            } else {
                $("body").append(resp);
                downloadPdf(resp).then(function () {
                    $('body').loader(false);
                });
            }
        },
        error: function () {
            $('body').loader(false);
        }
    })
}

function downloadPdf(reportDom) {
    return getCanvas(reportDom).then(function(canvas) {
        var img = canvas.toDataURL("image/png");
//             reportDom.remove();
        $('body').loader(false);
        var doc = new jsPDF({
            unit:'pt',
            format:'ledger'
        });
        doc.addImage(img, 'PNG', 20, 20);
        // doc.output("dataurlnewwindow");
        doc.save('Ticket.pdf');
    }).then(function () {
//             reportDom.remove();
    });
}

function getCanvas(dom) {
    dom.width(1000).css('max-width', 'none');
    return html2canvas(dom, {
        logging: true,
        imageTimeout: 2000,
        removeContainer: true
    });
}

// Set minimum body height
function setMinimumBodyHeight(){
    /*console.log('SMNLOG ::--------setMinimumBodyHeight--------');*/
    var minHeight = screen.height-$(".footer-v1").height();
    if(minHeight < 550)
        minHeight = 550;
    $(".bodyWrapperDiv").css({"min-height": minHeight+"px"})
}