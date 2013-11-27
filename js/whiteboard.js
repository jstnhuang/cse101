function initWhiteboardById(id) {
    initPreviews(id);
    setWhiteboardDimensions(id);
    setTabOverride(2);
    initWhiteboardBindings(id);
}

function initPreviews(id) {
    var idHash = '#' + id;
    var iFrame = $(idHash + '-iframe');
    var codeArea = $(idHash + '-codeArea');
    var codeDiv = $(idHash + '-codeDiv');
    var previewDiv = $(idHash + '-previewDiv');
    
    iFrame.attr('src', '/iframe.html');
    iFrame.load(function() {
        codeArea.ready(function() {
            if (codeDiv.hasClass('hidden')) {
                codeDiv.hide();
                previewDiv.css('width', '100%');
            }
            updatePreview(id);
        });
    });
}

function initWhiteboardBindings(id) {
    var idHash = '#' + id;
    $(idHash + ' .codeArea.editable').keyup(handleCodeAreaKeyUp);
    $(idHash + ' .codeArea').focus(handleCodeAreaKeyUp);
    $(idHash + ' a.whiteboardLabel').click(handleTabClick);
    $(window).resize(function() {
        setWhiteboardDimensions(id);
    });
}

function handleTabClick(e) {
    if ($(this).hasClass('active'))
        return;
        
    var id = getId($(this).attr('id'));
    
    // Save current contents.
    var activeSelector = '#' + id + ' .whiteboardLabel.active';
    var clickedSelector = '#' + $(this).attr('id');
    var codeAreaSelector = '#' + id + '-codeArea';
    var currentValue = $(codeAreaSelector).val();
    
    $(activeSelector).data('value', currentValue);
    
    // Switch active tab.
    $(activeSelector).removeClass('active');
    $(clickedSelector).addClass('active');
    
    // Populate code area with new tab's data.
    $(codeAreaSelector).val($(clickedSelector).data('value'));
    updatePreview(id);
}

function handleCodeAreaKeyUp(e) {
    var codeAreaId = $(this).attr('id');
    var id = getId(codeAreaId);
    updatePreview(id);
}

function updatePreview(id) {
    var idHash = '#' + id;
    var iFrame = $(idHash + '-iframe');
    var codeArea = $(idHash + '-codeArea');
    var htmlLink = $(idHash + '-htmlLink');
    var cssLink = $(idHash + '-cssLink');
    var codeDiv = $(idHash + '-codeDiv');
    var previewArea = $(idHash + '-previewArea');
    var tabSelectors = '#' + id + ' a.whiteboardLabel';
    
    if (codeDiv.hasClass('hidden')) {
        htmlLink.removeClass('active');
        cssLink.removeClass('active');
    }

    // Clear iframe if we've left the webdev101 domain.
    if (iFrame.data('reloadNextTime')) {
        iFrame.attr('src', '/iframe.html');
        iFrame.data('reloadNextTime', false);
    }
    else {
        var ifrm = document.getElementById(id + '-iframe');
        var ifrmContent = (ifrm.contentWindow) ?
            ifrm.contentWindow :
            (ifrm.contentDocument.document) ?
                ifrm.contentDocument.document :
                ifrm.contentDocument;

        var iFrameLocation = location.protocol + "//" + location.host
            + "/iframe.html";
        try {
            // Should cause an error if we're not in the webdev101 domain.
            if (iFrameLocation != ifrmContent.location) {
                iFrame.data('reloadNextTime', true);
                return;
            }
        }
        catch (error) {
            iFrame.data('reloadNextTime', true);
            return;
        }
    }
    
    var htmlActive = htmlLink.hasClass('active');
    var cssActive = cssLink.hasClass('active');
    if (htmlActive && !cssActive) {
        iFrame.contents().find('body').html(
            html_sanitize(codeArea.val(), allUrls, null));
        var cssValue = '<style><!-- '
            + cssLink.data('value')
            + ' --></style>';
        iFrame.contents().find('head').html(cssValue);
    }
    else if (!htmlActive && cssActive) {
        var cssValue = '<style><!-- '
            + codeArea.val()
            + ' --></style>';
        iFrame.contents().find('head').html(cssValue);
        iFrame.contents().find('body').html(
            html_sanitize(htmlLink.data('value'), allUrls, null));
    }
    else if (!htmlActive && !cssActive) { // hidden code div
        iFrame.contents().find('body').html(
            html_sanitize(htmlLink.data('value'), allUrls, null));
        var cssValue = '<style><!-- '
            + html_sanitize(cssLink.data('value'), allUrls, null)
            + ' --></style>';
        iFrame.contents().find('head').html(cssValue);
    }
    else { // case not supported
        alert("There was an error loading the page.");
        return;
    }
}

// Assuming ID ends in '-something'.
function getId(string) {
    var strParts = string.split('-');
    var id = '';
    for (var i=0; i<strParts.length-1; i++) {
        if (i != 0)
            id += '-';
        id += strParts[i];
    }
    return id;
}

function setTabOverride(numSpaces) {
    $.fn.tabOverride.setTabSize(numSpaces); 
    $('.codeArea').tabOverride(true);
}

function setWhiteboardDimensions(id) {
    var idHash = '#' + id;
    var codeArea = $(idHash + '-codeArea');
    var iFrame = $(idHash + '-iframe');
    var codeDiv = $(idHash + '-codeDiv');
    var previewArea = $(idHash + '-previewArea');
    var whiteboard = $(idHash);
    
    // Calculate and cache the height.
    if (codeArea.data('height') === undefined) {
        var codeAreaHeight = codeArea.innerHeight();
        previewArea.height(codeAreaHeight);
        iFrame.height(codeAreaHeight);
        codeArea.data('height', codeAreaHeight);
    }
    else {
        var codeAreaHeight = codeArea.data('height');
        previewArea.height(codeAreaHeight);
        iFrame.height(codeAreaHeight);
        codeArea.data('height', codeAreaHeight);
    }
    
    // Set width.
    /*var whiteboardWidth = $(idHash).innerWidth();
    var whiteboardPadding = 2*5;
    
    var cols = (whiteboardWidth - whiteboardPadding)/18;
    try {
        codeArea.attr('cols', Math.floor(cols));
    }
    catch(error) {
        codeArea.attr('cols', 1);
    }
    
    if (codeDiv.hasClass("hidden")) {
        iFrame.width(whiteboardWidth - whiteboardPadding - 1);
    }
    else {
        var codeAreaWidth = codeArea.innerWidth();
        var codeAreaMarginRight = 5;
        
        iFrame.width(whiteboardWidth - whiteboardPadding - codeAreaWidth - codeAreaMarginRight - 1);
    }*/
}
