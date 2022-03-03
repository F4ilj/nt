
<?php header("Content-type: text/css; charset: UTF-8");
    session_start(); ?>

* {
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    }
    
    body {
    padding: 0;
    margin: 0;
    width:100vw;
    overflow-x:hidden;
    opacity: 0;
    animation: ani 1.25s forwards;
    }
    
    h1, h2, h3, h4, h5, h6 {
    padding: 0;
    margin: 0;
    }
    
    
    a {
    text-decoration: none;
    }
    
    p {
    margin: 0;
    }
    
    ul, li {
    display: block;
    padding: 0;
    margin: 0;
    }
    
    .container	{
    width: 1100px;
    margin: 0 auto;
    padding-left: 0px;
    padding-right: 0px;
    
    }

    .form_auth  {
    width: 390px;
    margin: 200px auto;
    }

    .form_name {
    font-size: 30px;
    color: #403866;
    line-height: 1.2;
    text-transform: uppercase;
    text-align: center;
    width: 100%;
    display: block;
    padding-bottom: 51px;
    }


    .form_inp1 {
    color: #403866;
    line-height: 1.2;
    font-size: 18px;
    display: block;
    width: 100%;
    height: 62px;
    padding: 0 20px 0 38px;
    outline: none;
    border: none;
    background-color: #e6e6e6;
    }


    .form_inp {
    width: 100%;
    height: 32px;
    border: 1px solid #CFCFCF;
    box-sizing: border-box;
    border-radius: 2px;
    margin-bottom: 15px;
    padding-left: 10px;
    display: block;

    }

    .wrap_input {
    width: 100%;
    position: relative;
    border: 1px solid transparent;
    border-radius: 3px;
    margin-bottom: 16px;
    }

    

    .form_btn {
    font-size: 13px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    padding: 0 20px;
    width: 100%;
    height: 32px;
    background-color: #827ffe;
    border-radius: 3px;
    transition: all .4s;
    font-weight: 500;
    outline: none!important;
    border: none;
    margin-bottom: 10px;
    }

    .form_btn:hover {
        background-color: #403866;
    }

    .form_a {
    display: block;
    font-weight: 400;
    font-size: 16px;
    color: #827ffe;
    line-height: 1.4;
    }

    .form_a:hover {
    color: #403866;
    }


    .wrapper_h {
    display: flex;
    justify-content: space-between ;
    align-items: center;
    padding-top: 46px;
    padding-bottom: 60px;
    }

    .wrp_is {
    display: flex;
    align-items: center;
    }

    .srch {
    margin-left: 45px;
    }

    .prf {
    color: #2D3031;
    border-radius: 5px;
    width: 118px;
    height: 45px;
    font-weight: 500;
    font-size: 14px;
    line-height: 16px;
    border: none;
    }

    .prf:hover {
    opacity: 0.7;
    }


  
    .prf:active {
    opacity: 0.9;
    }

    .search input {
    width: 300px;
    height: 40px;
    padding-left: 14px;
    border: none;
    background: #F0F0F0;
    border-radius: 5px;
    font-size: 14px;
    line-height: 16px;
    margin-right: 20px;
    }

    form {
    display: block;
    margin-top: 0em;
    margin-block-end: 0em;
    }

    .icon img {
    width: 70px;
    height: 70px;
    transition: all .2s;
    }

    .icon img:hover {
    opacity: 0.7;
    }


    .hcomp_add {
    font-weight: 300;
    font-size: 40px;
    line-height: 47px;
    color: #2D3031;
    padding-bottom: 30px;
    }

    .pcomp_add {
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;  
    color: #2D3031
    }


    .nameinp_add {
    width: 526px;
    height: 32px;
    border: 1px solid #CFCFCF;
    box-sizing: border-box;
    border-radius: 2px;
    margin-bottom: 15px;
    padding-left: 10px;
    }

    .textinp_add {
    width: 526px;
    height: 245px;
    border: 1px solid #CFCFCF;
    box-sizing: border-box;
    border-radius: 2px;
    resize: none;
    margin-bottom: 15px;
    padding-left: 10px;
    padding-top: 10px;
    }



    .sinp_add {
    width: 263px;
    height: 32px;    
    border: 1px solid #CFCFCF;
    box-sizing: border-box;
    border-radius: 2px;
    padding-left: 10px;
    margin-bottom: 15px;
    }

    .ksel_add {
    border: 1px solid #CFCFCF;
    width: 128.41px;
    height: 32px; 
    box-sizing: border-box;
    border-radius: 2px;
    margin-bottom: 35px;
    padding-left: 10px;
    }

    .ksel_add option {
    padding-left: 10px;
    }

    .hdr_crt { 
    color: #2D3031;
    background: #F0F0F0;
    border-radius: 5px;
    width: 118px;
    height: 45px;
    padding: 11.5px 32px;
    font-weight: 500;
    font-size: 14px;
    line-height: 16px;
    margin-right: 330px;
    }

    .hdr_crt:hover {
    opacity: 0.7;
    }

    .btn_add {
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;  
    color: #2D3031;
    padding: 6px 29px 6px 29px;
    border: 1px solid #CFCFCF;
    box-sizing: border-box;
    border-radius: 2px;
    font-weight: normal;
    }

    .btn_add:hover {
    opacity: 0.7;
    }


    .post {
    height: 158px;
    width: 100%;
    display: flex;
    margin-bottom: 15px;

    
    }

}




    .img_pst img {
    width: 300px;
    height: 158px;
    margin-right: 50px;
    }
    

    .id_pst {
    margin-bottom: 15px;
    }

    .id_pst a {
    color: crimson;
    }

    .name_pst {
    margin-bottom: 20px;
    font-weight: 700;
    font-size: 16px;
    line-height: 16px;
    color: #2D3031;
    }

    .text_pst {
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        -webkit-line-clamp: 4; 
        display: -webkit-box; 
        -webkit-box-orient: vertical; 
        overflow: hidden;
        text-overflow: ellipsis;
        color: black;
        }



    .ind_svg {
    width: 15px;
    height: 15px;
    margin-left: 5px;
    transition: all .2s;
    }

    .ind_svg:hover {
    opacity: 0.7; 
    }



    .dropdown {
        position: relative;
        display: inline-block;
        
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        z-index: 1;
        right:0;
        min-width: 200px;
        border-radius: 5px;
        top: 60px;

    }


    .dropdown-content a {
    padding-left: 20px; 
    padding-top: 5px;
    padding-bottom: 5px;
    color: black;
    text-decoration: none;
    display: block;
    transition: all .2s;
    }

    .dropdown-content a:hover {background-color: #ddd}


    .dropdown-content p {
    padding-left: 20px; 
    padding-top: 5px;
    padding-bottom: 5px;
    font-weight: 600;
    color: black;
    text-decoration: none;
    display: block;
    }

    .dropdown-content::before {
        content: ''; 
        position: absolute;
        right: 10px; top: -15px;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 15px solid #f1f1f1;
        border-radius: 2px;
        
    }





    .show {display:block;}

    hr {
        border: none; /* Убираем границу */
        background-color: black; /* Цвет линии */
        color: black; /* Цвет линии для IE6-7 */
        height: 1px; /* Толщина линии */
        margin: 0;
        padding: 0;

    }

    .ext:hover {
    color: red;
    }
    

    .slide-image {
    width: 100%;
}

.carousel-holder {
    margin-bottom: 30px;
}

.carousel-control,
.item {
    border-radius: 4px;
}

.caption {
    height: 160px;
    overflow: hidden;
}

.caption h4 {
    white-space: nowrap;
}

.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}



#table {
	width: 100%;
	margin-bottom: 20px;
	border: 1px solid #dddddd;
	border-collapse: collapse;
    opacity: 0;
    animation: ani 1.25s forwards; 
}

@keyframes ani {
    0% {opacity: 0;}
  100% {opacity: 1;}
}

.reph {
	font-weight: bold;
	padding: 5px;
	background: #efefef;
	border: 1px solid #dddddd;

}
.rep {
	border: 1px solid #dddddd;
	padding: 5px;


}

.col-md-9 {
    margin-top: -20px;
}

.img_add {
    margin-bottom: 15px;
}

.btn {
	display: inline-block;	
	box-sizing: border-box;
	padding: 0 13px;
	margin: 0 15px 15px 0;
	outline: none;
	border: 1px solid #a4afba;  
	border-radius: 3px;
	height: 32px;
	line-height: 32px;
	font-size: 14px;
	font-weight: 500;
	text-decoration: none;
	color: #838a92;
	background-color: #fff;
	cursor: pointer;
	user-select: none;
	appearance: none;
	touch-action: manipulation;  
}
.btn:focus-visible {
	box-shadow: 0 0 0 3px lightskyblue;
}
.btn:hover {
	border-color: #ff4000;
	color: #4e879c;  
}
.btn:active {
	border-color: #78a2b7 !important;
	color: #3a728b !important;
}
.btn:disabled {
	background-color: #eee;
	color: #444;
	pointer-events: none;
}

.wrkar {
display: flex;
align-items: center;
margin-bottom: 100px;
}

.wrkar h4 {

}

.hdr_crt1 {
    margin-left: 10px;
    color: #2D3031;
    background: #F0F0F0;
    border-radius: 5px;
    padding: 11px 22px;
    font-weight: 500;
    font-size: 14px;
    line-height: 16px;
    margin-right: 330px;


}


.hdr_crt1:hover {
    opacity: 0.7;
    }   





























