let toggler = 0;

function showMenu() {

    if (toggler == 0) {
        document.getElementById("urlclass_id").classList.remove("urlclass");
        document.getElementById("urlclass_id").classList.add("urlclass-responsive");
        toggler++;
    }

    else {
        document.getElementById("urlclass_id").classList.remove("urlclass-responsive");
        document.getElementById("urlclass_id").classList.add("urlclass");
        toggler--;
    }
}


function zoom_portfolio(thumb_id) {
    document.getElementById("portfolio__overlay").classList.remove("portfolio__overlay-invisible");
    document.getElementById("portfolio__overlay").classList.add("portfolio__overlay");
    let html_cont = document.getElementById("gallery-id").children[0];
    console.log("the thumb id is " + thumb_id);
    let portfolio = document.getElementById("portfolio__overlay-imgcontainer");
    let src_val = wp_get_attachment_image_src(thumb_id);
    portfolio.innerHTML += "<img src='" + src_val + "'>";
}

function zoom_portfolio_two(thumbID) {

    // console.log("changed check clicking");
    if (thumbID > 6) {
        thumbID = 1;
    }
    if (thumbID < 1) {
        thumbID = 6;
    }

    let elementID = document.getElementById("portfolio-image-wrap" + thumbID);
    let imgID = "gallery_img" + thumbID;
    let imgTitle = elementID.getAttribute('my-title');
    document.getElementById("portfolio__overlay").classList.remove("portfolio__overlay-invisible");
    document.getElementById("portfolio__overlay").classList.add("portfolio__overlay");
    let imgCont = document.getElementById("portfolio__overlay-wrapper");
    imgCont.classList.remove("portfolio__overlay-wrapper-invisible");
    imgCont.classList.add("portfolio__overlay-wrapper");
    let portfolio = document.getElementById("portfolio__overlay-imgcontainer");

    let img = document.getElementById(imgID);
    var contWidth = 0;
    var contHeight = 0;
    var dmnvalue = "";
    if (img.naturalWidth < 800) {
        contWidth = img.naturalWidth + 40;
        contHeight = img.naturalHeight + 100;
        dmnvalue = "width:" + contWidth + "; height:" + contHeight + ";";
        portfolio.setAttribute('style', dmnvalue);
    } else {
        portfolio.setAttribute('style', '');
    }

    let imgURL = document.getElementById(imgID).getAttribute('src');
    let incrThumbId = thumbID + 1;
    let decrThumbId = thumbID - 1;
    portfolio.innerHTML = '<img class="portfolio__image" src="' + imgURL + '">';
    portfolio.innerHTML += '<div class="portfolio__image-title"><img src="http://localhost/wordpress/wp-content/uploads/2022/05/prev.png" onclick="zoom_portfolio_two(' + decrThumbId + ')"> <p>' + imgTitle + '</p>' + '<img src="http://localhost/wordpress/wp-content/uploads/2022/05/next.png" onclick="zoom_portfolio_two(' + incrThumbId + ')"> </div> <div class="close__portfolio" onclick="disable_overlay()"> </div>';
}

function make_black(imgId) {

    let contid = "portfolio-image-overlay" + imgId;
    console.log("id inside over " + contid);
    document.getElementById(contid).classList.remove("portfolio__image-overlay-hidden");
    document.getElementById(contid).classList.add("portfolio__image-overlay");

    // imgWrap.innerHTML += "<div class='portfolio__image-hover'> <div class='portfolio__image-text'> View image </div> </div>";
}

function make_white(imgId) {
    let contid = "portfolio-image-overlay" + imgId;
    document.getElementById(contid).classList.remove("portfolio__image-overlay");
    document.getElementById(contid).classList.add("portfolio__image-overlay-hidden");
}

function disable_overlay() {
    console.log("inside disable overlay");
    document.getElementById("portfolio__overlay").classList.remove("portfolio__overlay");
    document.getElementById("portfolio__overlay").classList.add("portfolio__overlay-invisible");
    let imgCont = document.getElementById("portfolio__overlay-wrapper");
    imgCont.classList.remove("portfolio__overlay-wrapper");
    imgCont.classList.add("portfolio__overlay-wrapper-invisible");
}
