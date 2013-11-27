function initScoreCount(id) {
    var idHash = '#' + id;
    var golfScore = $(idHash);
    
    $(idHash + ' .codeArea.editable').keyup(function() {
        updateCount(id);
    });
}

function updateCount(id) {
    var idHash = '#' + id;
    var codeArea = $(idHash + '-codeArea');
    var cssLink = $(idHash + '-cssLink');
    var cssActive = cssLink.hasClass('active');
    var golfScore = $(idHash + '-golfScore .typed');
    var par = $(idHash + '-golfScore .par');
    var parScore = parseInt(par.html());
    
    if (cssActive) {
        var cssValue = codeArea.val().replace(/\s/g, '');
        var score = cssValue.length;
        
        if (score > parScore) {
            golfScore.addClass("overPar");
        }
        else {
            golfScore.removeClass("overPar");
        }
        golfScore.html(score);
    }
}

function isWhitespace(c) {
    return c.test(/\s/);
}