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


function zoom_portfolio( thumb_id )
{
    document.getElementById("portfolio__overlay").classList.remove("portfolio__overlay-invisible");
    document.getElementById("portfolio__overlay").classList.add("portfolio__overlay");
    let html_cont = document.getElementById("gallery-id").children[0];
    console.log("the thumb id is " + thumb_id);
    let portfolio = document.getElementById("portfolio__overlay-imgcontainer");
    let src_val =  wp_get_attachment_image_src( thumb_id );
    portfolio.innerHTML += "<img src='" + src_val + "'>";
}

function make_black( imgId)
{
   
    let contid = "portfolio-image-overlay"+ imgId;
    console.log("id inside over "+ contid);
    document.getElementById(contid).classList.remove("portfolio__image-overlay-hidden");
    document.getElementById(contid).classList.add("portfolio__image-overlay");

    // imgWrap.innerHTML += "<div class='portfolio__image-hover'> <div class='portfolio__image-text'> View image </div> </div>";
}

function make_white( imgId )
{
    let contid = "portfolio-image-overlay"+ imgId;
    document.getElementById(contid).classList.remove("portfolio__image-overlay");
    document.getElementById(contid).classList.add("portfolio__image-overlay-hidden");
}

function disable_overlay()
{
    console.log("inside disable overlay");
	document.getElementById("portfolio__overlay").classList.remove("portfolio__overlay");
    document.getElementById("portfolio__overlay").classList.add("portfolio__overlay-invisible");
	let imgCont = document.getElementById("portfolio__overlay-wrapper");
	imgCont.classList.remove("portfolio__overlay-wrapper");
	imgCont.classList.add("portfolio__overlay-wrapper-invisible");
}
