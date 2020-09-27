<!DOCTYPE html>
<html>
    <head>
    <link rel="styleSheet" href="{{URL::asset('/css/home.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/design.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/aboutus.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/register.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/login.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/contact.css') }}" type="text/css">
    <link rel="styleSheet" href="{{URL::asset('/css/gallary.css') }}" type="text/css">
    <script type="text/javascript" src="{{URL::asset('/js/home.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://static.pdflibr.com/SuperSlide/2.1.3/jquery.SuperSlide.2.1.3.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/vue.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/vue-router.js') }}"></script>
    </head>
    <body onload="initPage()">
    <!-- <div id="container"> -->
            <!-- header -->
            <div class="header" id="header_id">
                <div class="companyLogo" id="companyLogo_id">
                    <img src="{{URL::asset('/image/4.png') }}">
                </div>
                <div class="home" id="home_id" onclick="clickHeader(0)">
                    <p>home</p>
                </div>
                <div class="product" id="product_id" onclick="clickHeader(1)">
                    <p>product</p>
                    <ul id="product_ul">
                        <li>product1</li>
                        <li>product2</li>
                        <li>product3</li>
                        <li>product4</li>
                    </ul>
                </div>
                <div class="design" id="design_id" onclick="clickHeader(2)">
                    <p>design</p>
                    <ul id="design_ul">
                        <li>design1</li>
                        <li>design2</li>
                        <li>design3</li>
                        <li>design4</li>
                        <li>design3</li>
                    </ul>
                </div>
                <div class="gallary" id="gallary_id" onclick="clickHeader(3)">  
                    <p>gallary</p>
                    <ul id="gallary_ul">
                        <li>gallary1</li>
                        <li>gallary2</li>
                        <li>gallary3</li>
                    </ul>
                </div>
                <div class="support" id="support_id" onclick="clickHeader(4)"><p>support</p></div>
                <div class="aboutUs" id="aboutUs_id" onclick="clickHeader(5)"><p>about us</p></div>
                <div class="contact" id="contact_id" onclick="clickHeader(6)"><p>contact</p></div>
                <div class="cart" id="cart_id" onclick="clickHeader(7)"><p>cart</p></div>
                <div class="login" id="login_id" onclick="clickHeader(8)"><p>login</p></div>
                <div class="register" id="register_id" onclick="clickHeader(9)"><p>register</p></div>
            </div>

            <!-- diaplayBox -->
            <div class = "displayBox" id="displayBox_id" onload="change()">
                <div class="displayBox_bd">
                    <ul>
                        <img src="{{URL::asset('/image/1.jpg') }}" width=80% height=400px>
                        <img src="{{URL::asset('/image/2.jpg') }}" width=80% height=400px>
                        <img src="{{URL::asset('/image/3.jpg') }}" width=80% height=400px>
                    </ul>
                </div>
            </div>



            <!-- home -->
            <div class = "home_div" id="home_div_id" style="display:block">
                <div class="home_width_holder" id="home_width_holder_id">
                    <div class="booklets_holder home_menu">
                        <a href="" title="Online Booklet Printing Services">
                        <!-- 到时候改-->
                        <div class="home_panel_img booklets_img"></div>
                            Booklets
                        </a>
                    </div>
                    <div class="brochures_holder home_menu">
                        <a href="" title="Online Brochure Printing Services">
                        <div class="home_panel_img brochures_img"></div>
                            Brochures
                        </a>
                    </div>
                <div class="clear"></div>
                </div>
                
                <div class="home_content_holder">
                    <div class="home_content_left">
                        <h1 class="hp_title">we deliver quality printing <br style="">at the lowest possible price.</h1>
                        <p>Find the most cost effective solution for your business with our instant online pricing.</p>
                        <p>&nbsp;</p>
                        <p>Supply your print ready artwork and upload your file using our online ordering system. Alternatively, call or email our friendly staff who can assist you with your order.</p>                   
                    </div>
                    <div class="home_content_right">
                        
                        <div class="home_subtitle">an online store with a difference...</div>
                        <div class="home_panel1">
                            <a href="">
                                <div class="home_panel1_img">
                                </div>
                                <h4>Easy Ordering</h4>
                                <p>Shopping cart, email, FTP or Dropbox services available.</p>
                                </a><a class="blue_link" href="">read more+</a>
                            
                        </div>
                        
                        <div class="home_panel2">
                            <a href="">
                                <div class="home_panel2_img">
                                </div>
                                <h4>Need Help?</h4>
                                <p>Our friendly team is ready to offer you industry help or advice.</p>
                                </a><a class="blue_link" href="">read more+</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- product -->
            <div class = "product_div" id="product_div_id" style="display:none">

            </div>

            <!-- design -->
            <div class = "design_div" id="design_div_id" style="display:none">
                <div class="design_div_leftContainer">
                    <h1>Design Services</h1>
                    <p>Our design team has extensive experience in producing brand identities' for any industry from scratch for use in your business stationery. Whether your project is a simple promotional flyer or business card through to a complete suite of high end marketing materials, 1Print have the expertise to provide crisp, clean design that will add value to your organisation.</p>
                    <p>&nbsp;</p>
                    <h3>Services offered</h3>
                    <ul>
                        <li>Logo / Image Design</li>
                        <li>Business Card &amp; Stationery Design</li>
                        <li>Postcard / Flyer Design</li>
                        <li>Promotional Brochure and Booklet Design</li>
                        <li>Presentation Folder and Marketing Material Design</li>
                        <li>Correct or add new details to existing artwork</li>
                        <li>Convert supplied files to a print ready format</li>
                        <li>Signage Design and more..</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>We work closely with our clients to ensure a smooth transition from design to the finished product. 1Print charge an hourly rate for our services and always provide an estimate for each project, whether it's the first for an individual client or the hundredth - No suprises and no problems.</p>
                    <p>&nbsp;</p>
                </div>
                <div class="design_div_rightContainer">
                    <p>Call 1300 327 471 or email 
                        <a href="http://web.archive.org/web/20180903152106/mailto:orders@1print.net.au" class="black_link">orders@1print.net.au</a> for more information and prices.
                    </p>
                    <p>Call 1300 327 471 or email</p>
                    <div style="clear: both;"></div>
                </div>
            </div>

            <!-- gallary -->
            <div class = "gallary_div" id="gallary_div_id" style="display:none">
                <div class="text_holder">
                <div class="gallary_div_options">
                    <div class="gallary_div_option active" style="--optionBackground:url(URL::asset('/image/3.jpg'));">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-walking"></i>
                            </div>
                            <div class="gallary_div_info"> 
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>                               
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-snowflake"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-snowflake"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-snowflake"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-snowflake"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>
                            </div>
                        </div>
                    </div>
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/5516a22e0cdacaa85311ec3f8fd1e9ef/tumblr_o45jwvdsL11qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-tint"></i>
                            </div>
                            <div class="gallary_div_info">
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>
                            </div>
                        </div>
                    </div>
                   
                    <div class="gallary_div_option" style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
                        <div class="gallary_div_shadow"></div>
                        <div class="gallary_div_label">
                            <div class="gallary_div_icon">
                                <i class="gallary_div_fas fa-sun"></i>
                            </div>
                            <div class="gallary_div_info">                               
                                <span class="gallary_div_article">添加文字...添加文字...添加文字...</span>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>

            <!-- support -->
            <div class = "support_div" id="support_div_id" style="display:none">
                <div class="design_div_leftContainer">
                    <h1>Frequently Asked Questions</h1>
                    <p class="black_bold">What colour settings should my artwork use?</p>
                    <p>
                    All images must be saved in CYMK mode between 300-500dpi
                    Please make sure all colours are nominated correctly
                    as PMS or CYMK and are relevant to the job you are submitting.
                    </p>
                    <p>&nbsp;</p>
                    <p class="black_bold">
                    What file formats to you accept when submitting artwork?
                    </p>
                    <p>
                    1Print will only accept the following formats as final artwork.
                    Artwork which does not adhere to these specifications will incur artwork charges.
                    </p>
                    <p>&nbsp;</p>
                    <ul class="black_bullets">
                    <li><span class="black">Adobe Acrobat</span> (PDF) version XI or below (PDF)</li>
                    <li><span class="black">Adobe Photoshop</span> version CC or below (PSD or TIFF)</li>
                    <li><span class="black">Adobe Illustrator</span> version CC or below (AI, EPS, PDF)</li>
                    <li><span class="black">Adobe InDesign</span> version CC or below (INDD)</li>
                    <li><span class="black">Quark Xpress</span> version 9 or below (QXD)</li>
                    </ul>
                    <p>&nbsp;</p>
                    <ul class="black_bullets">
                    <li>1Print accepts files in PC or MAC format.</li>
                    <li>All images must be saved in CMYK at 300dpi.</li>
                    <li>Make sure all colours are nominated correctly as PMS or CMYK.</li>
                    <li>OVERPRINTS MUST BE TURNED OFF.</li>
                    <li>All artwork must include a minimum of 2mm bleed and crop marks.</li>
                    <li>Where possible, please convert your text to outlines or curves.</li>
                    <li>Please supply us with all relevant files, including fonts and links (graphics).</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p class="black_bold">Does 1Print provide artwork design services?</p>
                    <p>
                    Yes, we do provide artwork design services upon request. If you want us to design your artwork for printing, please use our <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a> and let us know. We will contact you to discuss your requirements further. Business Card Design is available as an option when ordering from the Business Card Special page.
                    </p>
                    <p>&nbsp;</p>
                    <p class="black_bold">
                    I want a greater quantity than is available using your shopping cart. Am I out of luck?</p>
                    <p>
                    We are more than happy to do large offset printing runs above the maximum set number offered on the website shopping cart facility. If you have an extra large printing order, complete the <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a> and we will offer you a special price.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">
                    What is Offset Printing?</p>
                    <p>
                    Offset Printing uses large scale printing machines that use liquid inks. The large scale machinery used in offset printing is reserved for big printing jobs with a minimum of 1000 sheets.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What is Digital Printing?</p>
                    Digital Printing uses toner instead of ink. This method of printing is far more economical for short run print jobs than offset printing.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What is Machine Varnish?</p>
                    Machine Varnish is a gloss finish that is applied by the printing press as a liquid on top of the printing. It is great for printing jobs with photos or large areas of ink coverage as it enhances the finish and prevents finger marking.
                    <p></p></div>


                <div class="design_div_rightContainer">
                    <p class="black_bold">You mention highest quality for lowest possible price. How can you claim highest quality?</p>
                    <p>
                    We run our own industrial grade printing equipment in-house, ensuring all jobs are closely monitored and a high standard of quality is consistently maintained. We use the best, highest quality artboard. Our entry level business cards, for example, are printed on 400gsm artboard, while most of our competitors offer 210-230gsm for a higher price.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">Can I receive a free printing sample to see the quality of your services?</p>
                    <p>
                    You certainly can. Simply complete the <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/sample-pack.php" class="blue_link">Free Sample Request</a> Form on this website with your details and we will send you a printing sample pack so you can see the value of our printing services for yourself.
                    </p><p>&nbsp;</p>
                    <p class="black_bold">I have an urgent printing job. How quickly can I receive the finished product?</p>
                    <p>If you need your printing job completed and delivered in the shortest time possible, simply complete the Urgent Printing Form on the website before 3pm on a work day and the finished product will be dispatched in 2 working days by priority delivery.  You will be contacted to confirm dispatch.
                    </p><p>&nbsp;</p> 
                    <p class="black_bold">Where can I view your privacy policy?</p>
                    <p>We value your privacy and you can view our policy on how we use the information you share with us <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/privacy.php" class="blue_link">here</a>.
                    </p><p>&nbsp;</p> 
                    <p class="black_bold">I want to print something that does not appear as a choice in your ordering facility. Can you still help me?</p>
                    We are more than willing to accommodate anything your printing job requires. The more of our customers that ask for something, the more likely we will be to make the option available from the website. If the options you want are not available from the ordering facility, you can request it by filling out our <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a>.
                    <p></p><p>&nbsp;</p>
                    <p class="black_bold">What payment methods do you accept?</p>
                    <p>If you are making an order online using our secure shopping cart facility, you may only pay via Mastercard, Visa or Paypal.
                    </p><p>&nbsp;</p>
                    <p>If you wish to make your order via email, over the phone or in person, we can be very flexible as to how you make payment, including credit card payments. Please be aware that we require a successful payment before your printing job commences. Payment methods are listed below.
                    </p><p>&nbsp;</p>
                    <ul class="black_bullets"> 
                    <li>Electronic Funds Transfer (EFT)</li>
                    <li>Credit Cards (Visa and Master Card)</li>
                    <li>Cheque (made out to 1Print Pty Ltd)</li>
                    <li>PayPal</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>
                    <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/order.php" class="blue_link">Click here for further information</a>
                    </p>
                    <p>&nbsp;</p>
                    <p class="black_bold">I Want to use metallic or specialty colours For my print job. Do you offer this?</p>
                    <p>Yes we do. If you want to use specialty colours like metallic silver or gold you can request this by completing and submitting the <a href="http://web.archive.org/web/20180903133932/http://www.1print.net.au/custom-quotes.php" class="blue_link">Custom Quote Form</a>.
                    </p>
                </div>
                <div style="clear: both;"></div>
            </div>

            <!-- aboutUs -->
            <div class = "aboutUs_div" id="aboutUs_div_id" style="display:none">
                <div class="design_div_leftContainer">
                    <h1>About us</h1>
                    <p>1Print has a state the art production facility to meet all your demands, from short digital to large commercial runs. More importantly, we have the people with the skills and creativity to meet your needs.</p>
                    <p>&nbsp;</p>
                    <p class="black_heading">Our Printing facilities include</p>
                    <ul class="black_bullets">
                    <li>A1, A2 and A3 offset pressess</li>
                    <li>Full colour on Demand Digital Print System</li>
                    <li>Inhouse Design Services</li>
                    <li>Computer to Plate Technology (CTP)</li>
                    <li>Two Cylinders for inhouse formcuting and scoring</li>
                    <li>A4, A3 and A2 Laminating</li>
                    <li>Binding, collating and saddlestitching Services</li>
                    <li> Signage Design and more.. </li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Our vibrant, full colour, offset printing is of exceptional quality and our highly trained operators possess a keen eye for detail.</p>
                </div>
            
                <div class="design_div_rightContainer">
                    <h2 class="large">We Print</h2>

                    <div class="about_col1">
                        <ul class="black_bullets">
                        <li>Annual Reports</li>
                        <li>Business Forms</li>
                        <li><a href="">Envelopes</a></li>
                        <li><a href="">Folders</a></li>
                        <li>Labels</li>
                        <li>Manuals</li>
                        <li>NCR Books</li>
                        <li><a href="">Posters</a></li>
                        <li><a href="">Postcards</a></li>
                        </ul>
                    </div>
                    <div class="about_col2">
                        <ul class="black_bullets">
                        <li><a href="">Pads</a></li>
                        <li><a href="">Presentation Folders</a></li>
                        <li><a href="">Booklets</a></li>
                        <li><a href="">Books</a></li>
                        <li>Calendars</li> 
                        <li><a href="">Catalogues</a></li>
                        <li><a href="">Desk Pads</a></li>
                        <li><a href="">Flyers</a></li>
                        <li>Greeting Cards</li>
                        </ul>
                    </div>
                    <div class="about_col3">
                        <ul class="black_bullets">
                        <li>Invitations</li>
                        <li>Leaflets</li>
                        <li>Magazines</li>
                        <li>Pamphlets</li>
                        <li>Brochures</li>
                        <li>Business Cards</li>
                        <li>Cards</li> 
                        <li>Newsletters</li>
                        <li>Docket Books</li>
                        </ul>
                    </div>
                    <div class="about_col4">
                        <ul class="black_bullets">
                        <li>Forms</li>
                        <li>Gift Vouchers</li>
                        <li>Invoice Books</li>
                        <li>Letterheads</li>
                        <li>Menus</li>
                        <li>Notebooks</li>
                        </ul>
                    </div>
                    <!-- <div class="clear"></div> -->
                    </div>
            </div>

            <!-- contact -->
            <div class = "contact_div" id="contact_div_id" style="display:none">
            <div class="text_holder">
                <div class="main_container">
                    <div class="design_div_leftContainer">
                    <h1>Contact us</h1>
                        <div class="contact_phone">
                    <!-- <span class="black_bold ">Call</span>--> <span class="phone_lg">1300 327 471</span>
                    </div>
                    <div class="contact_fax">
                    <span class="black_bold">Fax</span> (03) 9584 4708
                    </div>

                
                    <div class="contact_email">
                        <span class="contact-align-left">Quotes</span> 
                        <span class="contact-align"><a href="http://web.archive.org/web/20180903154238/mailto:quotes@1print.net.au" class="black_link">quotes@1print.net.au</a></span>
                    </div>
                    <div class="contact_email">
                        <span class="contact-align-left">Orders</span> 
                        <span class="contact-align"><a href="http://web.archive.org/web/20180903154238/mailto:orders@1print.net.au" class="black_link">orders@1print.net.au</a></span>
                    </div>
                    <div class="contact_email_last">
                        <span class="contact-align-left">Accounts</span> 
                        <span class="contact-align"><a href="http://web.archive.org/web/20180903154238/mailto:accounts@1print.net.au" class="black_link">accounts@1print.net.au</a></span>
                    </div>
                

                

                    <p class="black_heading">You can visit us at:</p>
                    <p style="color: #323232;">13 Shearson Cres, Mentone  VIC 3194 Australia</p>
                </div>
                <div class="design_div_rightContainer">
                        <!-- Feedback Form Starts Here -->
                    <div id="feedback">
                    <!-- Heading Of The Form -->
                    <div class="head">
                    <h3 class="contact_title" align="center">FeedBack Form</h3>
                    <p>This is feedback form. Send us your feedback !</p>
                    </div>
                    <!-- Feedback Form -->
                    <form action="#" id="form" method="post" name="form">
                    <input class="contact_div_vname" id="contact_div_vname"placeholder="Your Name" type="text" align="center">
                    <input class="contact_div_vemail" id="contact_div_vemail"placeholder="Your Email" type="text" align="center">
                    <input class="contact_div_sub" id="contact_div_sub"placeholder="Subject" type="text" align="center">
                    <p>Your Suggestion/Feedback</p>
                    <textarea class="contact_div_msg" id="contact_div_msg" placeholder="Type your text here..."></textarea>
                    <p></p>
                    <input class="contact_div_send" id="contact_div_send" name="submit" type="submit" value="Send Feedback">
                    </form>
                    <h3><?php include "../resources/views/secure_email_code.php"?></h3>
                    </div>
                    <!-- Feedback Form Ends Here -->       
                </div>

                <div class="clear"></div>

                <h3>Address</h3>
                <!--The div element for the map -->
                <div id="map" style="width:100%;height:400px;"></div>
          

                </div>
                </div>
            </div>
            
            <!-- cart -->
            {{-- <div class = "cart_div" id="cart_div_id" style="display:none">

            </div> --}}

            



            <!-- login -->
            <div class = "login_div" id="login_div_id" style="display:none">
                <div class="login_div_main">
                    <p class="login_div_sign" align="center">Log in</p>
                    <form class="login_div_form1">
                    <input id="login_username_id" class="login_div_un " type="text" align="center" placeholder="Username">
                    <input id="login_password_id"class="login_div_pass" type="password" align="center" placeholder="Password">
                    <a class="login_div_submit" align="center" onclick="userLogin()">Log in</a>
                    <p class="login_div_forgot" align="center"><a href="#">Forgot Password?</a></p>           
                </div>
            </div>

            <!-- register -->
            <div class = "register_div" id="register_div_id" style="display:none">
                <div class="register_div_user">
                    <!-- <header class="register_div_user_header">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
                        <h1 class="register_div_user_title">Register form</h1>
                    </header> -->
                    <p class="login_div_sign" align="center">Register</p>
                    
                    <form class="register_div_form">
                        <div class="register_div_form_group">
                            <input type="text" placeholder="Username" class="register_div_form_input" />
                        </div>
                        
                        <div class="register_div_form_group">
                            <input type="email" placeholder="Email" class="register_div_form_input" />
                        </div>
                        
                        <div class="register_div_form_group">
                            <input type="password" placeholder="Password" class="register_div_form_input" />
                        </div>

                        <div class="register_div_form_group">
                            <input type="tel" placeholder="Phone number" class="register_div_form_input" />
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="Address" class="register_div_form_input" />
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="Suburb" class="register_div_form_input" />
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="State" class="register_div_form_input" />
                        </div>

                        <div class="register_div_form_group">
                            <input type="text" placeholder="Postcode" class="register_div_form_input" />
                        </div>
                        
                        <button class="register_div_btn" type="button">Register</button>
                    </form>
                </div>
            </div>
            
             <!-- footer -->
             <div class = "footer" id="footer_id">
                <div class = "footer_div_phoneNumber">
                    <img src="{{URL::asset('/image/tel.png') }}" width=80px height=80px>
                    <p>130 000 0000</p>
                </div>
                <div class = "footer_div_placeInfo">
                    <div>
                        <h1>Printion Servers</h1>
                        <p>Business Card Printing</p>
                        <p>Envelope Printing</p>
                        <p>Docker Book Printing</p>
                        <p>Brochuer Printing</p>
                    </div>
                    <div>
                        <p>Post Printing</p>
                        <p>Postcard Printing</p>
                        <p>Posters Printing</p>
                        <p>Express Printing</p>
                        <p>Website Printing</p>
                    </div>
                    <div>
                        <h1>Company Info</h1>
                        <p>About Us</p>
                        <p>Contact</p>
                        <p>Privity Policy</p>
                        <p>Test</p>
                    </div>
                </div>
            </div>
{{-- 
    <script>
        // Initialize and add the map
        function initMap() {
        // The location of Uluru
        var uluru = {lat: -25.344, lng: 131.036};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script> --}}
    {{-- <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaneOwKGB1tgmf5A_G_dSr2GaSw4kHSj8&callback=initMap"></script> --}}
      
    <script type="text/javascript">
        $(".gallary_div_option").click(function(){
            $(".gallary_div_option").removeClass("active");
            $(this).addClass("active");
            
        });

        //轮播
        jQuery(".displayBox").slide({
            mainCell: ".displayBox_bd ul",
            effect: "leftLoop",
            vis: "auto",
            autoPlay: true,
            trigger: "mouseover"
        });

        $(document).ready(function() {
            $( '.dropdown' ).hover(
                function(){
                    $(this).children('.sub-menu').slideDown(200);
                },
                function(){
                    $(this).children('.sub-menu').slideUp(200);
                }
            );
        }); // end ready
    </script>
    

    <!-- </div> -->
    </body>
</html>

