// back to the main site link on navbar
$('#forumTitle').before('<a id="back-to-the-main-site" style="position:absolute;top:40px;color:white;" href="http://dev.opensprites.gwiddle.co.uk/">Back to the main site</a>');
$('#forumTitle').attr('style', 'padding-top:10px;padding-bottom:20px;');

// logout fix
$('.item-logout a').attr('href', 'http://dev.opensprites.gwiddle.co.uk/logout.php?return=http://opensprites.gwiddle.co.uk/forums/?p=conversations');

// themes
$('#ftr-content .menu').append('<li id="theme"></li>');
$('#theme').append('Theme: <select id="theme-select" style="border-radius:5px;outline:none;"><option>Regular</option><option>Dark</option></select>');

// when theme selection is changed
$('#theme-select').on('change', function() {
    var newt = $(this).val();
    localStorage['os-theme'] = newt;
    window.location.reload();
});

// is theme defined / valid?
var themes = ['Regular', 'Dark'];
if(typeof localStorage['os-theme'] === 'undefined' || themes.indexOf(localStorage['os-theme']) === -1) {
    console.log('wrong theme');
    localStorage['os-theme'] = 'Regular';
    window.location.reload();
}

// set selection to the saved theme
$('#theme-select').val(localStorage['os-theme']);

// set theme based on the theme selection
var theme = $('#theme-select').val();
$('head').append('<!-- theme = "' + theme + '" -->');
$('head').append('<link href="/forums/themes/' + 'all' + '.css' + '?_=' + (new Date()).toISOString() + '" rel="stylesheet" type="text/css">');
$('head').append('<link href="/forums/themes/' + theme.toLowerCase() + '.css' + '?_=' + (new Date()).toISOString() + '" rel="stylesheet" type="text/css">');

// channel stuff
$('a[data-channel=all]').html('All Conversations');
$('.channelListItem').remove();

console.log('theming done');