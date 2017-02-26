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
            var duration = Math.round(Number(jQuery.prop(this, 'duration'), -2));
            //var duration = Number(jQuery.prop(this, 'duration'), -2);
            var urlsong = jQuery(this).text();
            var song = urlsong.substring(urlsong.lastIndexOf('/') + 1);
            //console.log(song);
            if(jQuery.prop(this, 'currentTime') >= 1 && jQuery.prop(this, 'currentTime') <= 1.2) {
                var status = 'started';
                addStat(status, song);
            }
            else if(jQuery.prop(this, 'currentTime') <= (duration-2) && jQuery.prop(this, 'currentTime') >= (duration-2.3)) {
            //else if(jQuery.prop(this, 'currentTime') == duration) { 
                //var duration = Math.round(Number(jQuery.prop(this, 'duration'), -2));
                var status = 'finished';
                addStat(status, song);
                console.log("It should executed once!");
                //console.log(jQuery.prop(this, 'currentTime'));
                //console.log(duration - 1);
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

//AJAX search field in /user-stat-page
var ajax_url = '/wp-admin/admin-ajax.php',
user_stat_action = 'soundtrerapy_ajax_search';

jQuery.ajax({
    url : ajax_url,
    type: "POST",    
    data: {
        'action': user_stat_action,
        'term' : ''
    },
    success:function(result){ 
        jQuery('.soundtherapy-ajax-search').fadeIn().html(result);
    }    
});

jQuery('#cur_usr').keyup(function(event) {
    // prevent browser autocomplete
    jQuery(this).attr('autocomplete','off');     
    // get search term
    var searchTerm = jQuery(this).val();
    // send request when the lenght is gt 2 letters
    //if(searchTerm.length > 2){
        jQuery.ajax({
        url : ajax_url,
        type: "POST",
        data:{
            'action':user_stat_action,
            'term' :searchTerm
        },
    
    success:function(result){     
                jQuery('.soundtherapy-ajax-search').fadeIn().html(result);
            }
        });
    //}
    });

//Test
jQuery('#cur_usr_2').keyup(function(event) {
    // prevent browser autocomplete
    jQuery(this).attr('autocomplete','off');     
    // get search term
    var searchTerm = jQuery(this).val();
    // send request when the lenght is gt 2 letters
    if(searchTerm.length > 2){
        jQuery.ajax({
        url : ajax_url,
        type: "POST",
        data:{
            'action': 'soundtrerapy_ajax_search_TEST',
            'term' :searchTerm
        },
    
    success:function(result){     
                //jQuery('.soundtherapy-ajax-search').fadeIn().html(result);
                console.log("Test result from server: " + result);
            }
        });
    }
    });
});




