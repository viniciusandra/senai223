/**
 * Created by FIQC on 10/07/2017.
 */

function counter(date) {
    var theDate = new Date(date);
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function count() {
        var now = new Date();
        if (theDate > now) {
            var distance = theDate - now;
            if (distance < 0) {
                clearInterval(timer);
                return;
            }
        } else {
            var distance = now - theDate;
            if (distance < 0) {
                clearInterval(timer);
                return;
            }
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        if (hours < 10) {
            hours = '0' + hours;
        }
        var minutes = Math.floor((distance % _hour) / _minute);
        if (minutes < 10) {
            minutes = '0' + minutes;
        }
        var seconds = Math.floor((distance % _minute) / _second);
        if (seconds < 10) {
            seconds = '0' + seconds;
        }
        var daytext = '';
        if (days > 1) {
            daytext = ' days ';
        } else {
            daytext = ' day ';
        }
        if (days > 0) {
            document.getElementById('counter').innerHTML = '<div class="days">' + days + '</div>' + '&nbsp' + '<div id="barra2"></div>' + '&nbsp' + '<div class="hours">' + hours + '</div>' + '</div>' + '&nbsp' + '<div id="barra3"></div>' + '&nbsp' + '<div class="minutes">' + minutes + '</div>' + '</div>' + '&nbsp' + '<div id="barra1"></div>' + '&nbsp' + '<div class="seconds">' + seconds + '</div>';
        } else {
            document.getElementById('counter').innerHTML = '<div class="hours">' + hours + '</div>' + '<div class="minutes">' + minutes + '</div>' + '<b> sss </b>' + '<div class="seconds">' + seconds + '</div>';
        }
    }

    timer = setInterval(count, 1000);
}

counter('10/8/2017 1:00:00 GMT-0400 (EDT)');
