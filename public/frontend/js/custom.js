/* Write here your custom javascript codes */

Date.prototype.ddMMYYY = function () {
    var mm = this.getMonth() + 1; // getMonth() is zero-based
    var dd = this.getDate();

    return [
        (dd > 9 ? '' : '0') + dd,
        (mm > 9 ? '' : '0') + mm,
        this.getFullYear()
    ].join('/');
};

Date.prototype.ddMMYYYHHMMSS = function () {
    let mm = this.getMonth() + 1; // getMonth() is zero-based
    let dd = this.getDate();
    let hour24 = this.getHours();
    let hour12 = hour24 % 12;
    hour12 = (hour12 === 0 ? 12 : hour12);
    let am = (hour24 > 11 ? 'PM' : 'AM');
    let min = this.getMinutes();
    let sec = this.getSeconds();
    return [
        (dd > 9 ? '' : '0') + dd,
        (mm > 9 ? '' : '0') + mm,
        this.getFullYear() + '  ' + (hour12 > 9 ? '' : '0') + hour12 + ':' + (min > 9 ? '' : '0') + min + ':' + (sec > 9 ? '' : '0') + sec + ' ' + am
    ].join('/');
};

$.extend($.fn, {
    loader: function (loader) {
        var $this = this;
        if (loader == false) {
            setTimeout(function () {
                $this.find(".div-mask").remove();
                return;

            }, 300);
        }
        var position = this.position();
        var maskHtml = $('<div class="div-mask" style="position: fixed; z-index: 100; left: 0; top: 0; right: 0; bottom: 0; width: 100%; height: 100%; background-color: #eeeeee; opacity: 0.3">' +
            '<img style="margin: auto;left: 48%;position: absolute;top: 48%;" src="/images/ajax_loader.gif"/></div>')
        this.append(maskHtml);
        return this
    }
});
