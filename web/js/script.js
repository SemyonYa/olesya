var blocks = [
    'First',
    'Second',
    'Third',
    'Fourth'
];

$(document).ready(() => {
    setScrollMenuState();
});

$(document).scroll(() => {
    setScrollMenuState();
})

function setScrollMenuState() {
    const scrollState = $(window).scrollTop();
    const secondTop = $('#Second').offset().top;
    const thirdTop = $('#Third').offset().top;
    const fourthTop = $('#Fourth').offset().top;
    if (scrollState < secondTop - 200) {
        setScrollMenuColor();
        showScrollMenuItems();
    } else if (scrollState > secondTop - 200 && scrollState < thirdTop - 200) {
        setScrollMenuColor(2);
        showScrollMenuItems(2);
    } else if (scrollState > thirdTop - 200 && scrollState < fourthTop - 200) {
        setScrollMenuColor(3);
        showScrollMenuItems(3);
    } else if (scrollState > fourthTop - 200) {
        setScrollMenuColor(4);
        showScrollMenuItems(4);
    }
}

function setScrollMenuColor(currentBlockNo = 1) {
    $('#ScrollMenu>div').each((i, elem) => {
        if ($(elem).attr('data-id') <= currentBlockNo) {
            $(elem).addClass('active')
        } else {
            $(elem).removeClass('active')
        }
    })
}

function showScrollMenuItems(currentBlockNo = 1) {
    $('#ScrollMenu .scroll-menu-item').each((i, elem) => {
        if ($(elem).attr('data-id') == currentBlockNo || currentBlockNo == 1) {
            $(elem).children('div').css('opacity', '1');
        } else {
            $(elem).children('div').css('opacity', '0');
        }
    });
}

function scrollToBlock(currentBlockNo) {
    const x = $('#Fourth').offset().top;
    console.log(x);
    $('html,body').animate({
        scrollTop: $('#' + blocks[currentBlockNo - 1]).offset().top
    }, 400);
}