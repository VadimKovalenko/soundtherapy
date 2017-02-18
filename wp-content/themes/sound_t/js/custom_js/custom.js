jQuery(document).ready(function(){

    if (window.webshim) {
        (function () {
            
            webshim.setOptions('mediaelement', {
                replaceUI: 'auto'
            });
        })();
    }


//add some controls
jQuery(function (jQuery) {
    jQuery('div.player').each(function () {
        var player = this;
        var getSetCurrentTime = createGetSetHandler(

        function () {
            try {
                jQuery('video, audio', player).prop('currentTime', jQuery.prop(this, 'value'));
            } catch (er) {}
        });

        jQuery('video, audio', this).bind('durationchange updateMediaState', function () {
            var duration = jQuery.prop(this, 'duration');
            //console.log(duration);
            if (!duration) {
                return;
            }
        })
        .bind('timeupdate', function () {
            jQuery('span.current-time').text(jQuery.prop(this, 'currentTime'));
            //console.log(jQuery.prop(this, 'currentTime'));
            var duration = jQuery.prop(this, 'duration');
            var urlsong = jQuery(this).text();
            var song = urlsong.substring(urlsong.lastIndexOf('/') + 1);
            //console.log(song);
            if(jQuery.prop(this, 'currentTime') >= 1 && jQuery.prop(this, 'currentTime') <= 1.2) {
                var status = 'started';
                addStat(status, song);
            }
            if(jQuery.prop(this, 'currentTime') >= (duration - 0.05) && jQuery.prop(this, 'currentTime') <= duration) {
                var status = 'finished';
                addStat(status, song);
            }
        })
        .bind('play pause', function () {
            jQuery('span.paused-state').text(jQuery.prop(this, 'paused'));
            console.log(jQuery.prop(this, 'paused'));
            //console.log('clicked song ' + jQuery(this).text());

            //Check if user start/finishe listening current composition
            //console.log(jQuery.prop(this, 'currentTime'));
            //console.log(jQuery(this).text());

        })
    });

});

//helper for createing throttled get/set functions (good to create time/volume-slider, which are used as getter and setter)

function createGetSetHandler(get, set) {
    var throttleTimer;
    var blockedTimer;
    var blocked;
    return {
        get: function () {
            if (blocked) {
                return;
            }
            return get.apply(this, arguments);
        },
        set: function () {
            clearTimeout(throttleTimer);
            clearTimeout(blockedTimer);

            var that = this;
            var args = arguments;
            blocked = true;
            throttleTimer = setTimeout(function () {
                set.apply(that, args);
                blockedTimer = setTimeout(function () {
                    blocked = false;
                }, 30);
            }, 0);
        }
    };
};


function addStat(status, song) {
    //console.log("Query to DB");
    var userN = 'VADIM AJAX';
    jQuery.ajax({
        url: ajaxurl,
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'save_stat',
            status: status,
            song: song,
        },
        success: function (response) {
            console.log("success");
        },
        error: function(error) {
            console.log("error");
        }
    })
}

});




