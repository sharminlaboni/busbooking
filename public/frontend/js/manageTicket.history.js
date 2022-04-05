/**
 * Created by coder on 12/6/16.
 */

$(document).ready(function () {

    var body = $("body");
    var pageContainer = body.find(".content.container");
    var historyTable = pageContainer.find("#reservationsDetailsDiv");
    var cancelDetails = pageContainer.find("#cancelDetails");

    historyTable.on("click", ".cancel", function () {
        body.loader();
        $.ajax({
            url: App.base + "history/reservations/cancel-initialize",
            data: {
                pnr: $(this).val()
            },
            success: function (resp) {
                resp = $(resp);
                $('#cancelDetails').html(resp);
                body.loader(false);
            },
            error: function () {
                body.loader(false);
            }
        });
    });

    cancelDetails.on("click", ".cancel-and-refund", function () {
        if ($('.viewTermsBtn').prop('checked') == true) {
            $('.viewTermsBtn').closest('div.checkbox').find('a').removeClass('error');
            body.loader();
            $.ajax({
                url: App.base + "history/reservations/cancel_json",
                data: {
                    pnr: $(".pnrValue").val()
                },
                success: function (result) {
                    $('#cancelDetails').empty();
                    $('#reservationsDetailsDiv').empty();
                    $('#reservationsDetailsHeader').empty();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    if (result === "1") {
                        $('#alertMsg').html("<p class='alert-success'>Reservation has been cancelled successfully.</p>").show().delay(10000).fadeOut();
                        document.getElementById("defaultOpen").click();
                    } else {
                        $('#alertMsg').html("<p  class='alert-warning'>Failed to cancel reservation.</p>").show().delay(10000).fadeOut();
                    }
                    $('#pnr').val(null);

                    body.loader(false);
                },
                error: function () {
                    body.loader(false);
                }
            });
        } else {
            $(this).addClass('disabled');
            $('.viewTermsBtn').closest('div.checkbox').find('a').addClass('error');
        }
    });

    cancelDetails.on("click", ".viewTermsBtn", function () {
        $('.viewTermsBtn').closest('div.checkbox').find('a').removeClass('error');
        if ($('.viewTermsBtn').prop('checked')) {
            $('.viewTermsBtn').prop('checked', true);
        } else if ($('.viewTermsBtn').prop('!checked')) {
            $('.viewTermsBtn').prop('!checked', false);
        }
        $('.submitBtn').removeClass('disabled')
    });

});
