
<style>  
  
.morecontent span {
    display: none;
}
.morelink {
    display: block;
} 
  
  
  
  
</style>
<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 200;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});  
 </script>

<!-- Slider Area Start -->
<div class="rs-banner-section3 banner">
        <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h1 class=""><span>World's No 1</span> Assignment Help Service<strong>By Global Assignment Expert</strong></h1>
                <h2>One stop assignment writing  solution for all urgent assignment help requirements. <span style="color: var(--blue);">Round the clock assistance</span></h2>
                <h3>10+ Years of Experience in Academic Writing</h3>
                <ul class="plusPts">
              <li><p>Preferred experts</p></li>
              <li><p>Free Turnitin Report</p></li>
              <li><p>Unlimited revisions</p></li>
            </ul>
            <ul class="trust">
              <li><img src="assets/images/trustpilot.png" data-src="assets/images/trustpilot.png" alt="Trustpilot"><strong>4.5 / 5</strong></li>
              <li><img src="assets/images/sitejabber.png" data-src="assets/images/sitejabber.png" alt="Sitejabber"><strong>4.4 / 5</strong></li>
            </ul>
                 </div>
              <div class="col-lg-6">
                <div class="register-form">
                    <div class="form-title text-center">
                         <h4 class="title">Upto 50% OFF on all Assignments.</h4>
                    </div>
                     <div class="form-group text-center white-bg-form">
                        <?php if($this->session->flashdata('message1')){?>
                              <div class="status alert alert-success"><?php echo $this->session->flashdata('message1');?></div>
                             <?php }?>
                         <form id="order_form" class="contact-form" method="post" action="<?=site_url('/');?>">
                             <div class="row"> 
                            <div class="col-md-6">
                            <input type="text" name="fullname" placeholder="Enter Your Name" required="required" maxlength="50" id="fullname" class="form-control">
                            <em style="color:red"><?=form_error('fullname')?></em>
                            </div> 
                            <div class="col-md-6"> 
                            <select name="type_of_paper" required="required" class="form-control"> 
                            <option value="">Choose Paper Type</option> 
                            <option value="Assignment">Assignment</option> 
                            <option value="Bibliography">Bibliography</option> 
                            <option value="Case Study">Case Study</option> 
                            <option value="Course Work">Course Work</option> 
                            <option value="Dissertation">Dissertation</option> 
                            <option value="Dissertation Proposal">Dissertation Proposal</option> 
                            <option value="Essay">Essay</option> 
                            <option value="Home Work">Home Work</option> 
                            <option value="Report">Report</option> 
                            <option value="Research Paper">Research Paper</option> 
                            <option value="Thesis">Thesis</option> 
                            <option value="Thesis Proposal">Thesis Proposal</option> 
                            <option value="Other">Other</option> 
                            </select> 
                            <em style="color:red"><?=form_error('type_of_paper')?></em>
                            </div> 
                            <div class="col-md-6">
                            <input type="email" name="email" placeholder="Enter Your Email" required="required" maxlength="150" id="email" class="form-control">
                            <em style="color:red"><?=form_error('email')?></em>
                            </div> 
                            <div class="col-md-6">
                            <input type="text" name="subject" placeholder="Subject Name" required="required" maxlength="255" id="subject" class="form-control">
                            <em style="color:red"><?=form_error('subject')?></em>
                            </div> 
                            <div class="col-md-6"> 
                            <select class="form-control" name="country" id="country"> 
                            <option value="United Kingdom (+44)" selected="selected">United Kingdom (+44)</option> 
                            <option value="Australia (+61)">Australia (+61)</option> 
                            <option value="Canada (+1)">Canada (+1)</option> 
                            <option value="China (+86)">China (+86)</option> 
                            <option value="France (+33)">France (+33)</option> 
                            <option value="Germany (+49)">Germany (+49)</option> 
                            <option value="India (+91)">India (+91)</option> 
                            <option value="Japan (+81)">Japan (+81)</option> 
                            <option value="Malaysia (+60)">Malaysia (+60)</option> 
                            <option value="Pakistan (+92)">Pakistan (+92)</option> 
                            <option value="Singapore (+65)">Singapore (+65)</option> 
                            <option value="South Africa (+27)">South Africa (+27)</option> 
                            <option value="United Arab Emirates (+971)">United Arab Emirates (+971)</option> 
                            <option value="United States (+1)">United States (+1)</option> 
                            <option value="Abkhazia (+7 840)">Abkhazia (+7 840)</option> 
                            <option value="Abkhazia (+7 940)">Abkhazia (+7 940)</option> 
                            <option value="Afghanistan (+93)">Afghanistan (+93)</option> 
                            <option value="Albania (+355)">Albania (+355)</option> 
                            <option value="Algeria (+213)">Algeria (+213)</option> 
                            <option value="American Samoa (+1 684)">American Samoa (+1 684)</option> 
                            <option value="Andorra (+376)">Andorra (+376)</option> 
                            <option value="Angola (+244)">Angola (+244)</option> 
                            <option value="Anguilla (+1 264)">Anguilla (+1 264)</option> 
                            <option value="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option> 
                            <option value="Argentina (+54)">Argentina (+54)</option> 
                            <option value="Armenia (+374)">Armenia (+374)</option> 
                            <option value="Aruba (+297)">Aruba (+297)</option> 
                            <option value="Ascension (+247)">Ascension (+247)</option> 
                            <option value="Australian External Territories (+672)">Australian External Territories (+672)</option> 
                            <option value="Austria (+43)">Austria (+43)</option> 
                            <option value="Azerbaijan (+994)">Azerbaijan (+994)</option> 
                            <option value="Bahamas (+1 242)">Bahamas (+1 242)</option> 
                            <option value="Bahrain (+973)">Bahrain (+973)</option> 
                            <option value="Bangladesh (+880)">Bangladesh (+880)</option> 
                            <option value="Barbados (+1 246)">Barbados (+1 246)</option> 
                            <option value="Barbuda (+1 268)">Barbuda (+1 268)</option> 
                            <option value="Belarus (+375)">Belarus (+375)</option> 
                            <option value="Belgium (+32)">Belgium (+32)</option> 
                            <option value="Belize (+501)">Belize (+501)</option> 
                            <option value="Benin (+229)">Benin (+229)</option> 
                            <option value="Bermuda (+1 441)">Bermuda (+1 441)</option> 
                            <option value="Bhutan (+975)">Bhutan (+975)</option> 
                            <option value="Bolivia (+591)">Bolivia (+591)</option> 
                            <option value="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option> 
                            <option value="Botswana (+267)">Botswana (+267)</option> 
                            <option value="Brazil (+55)">Brazil (+55)</option> 
                            <option value="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option> 
                            <option value="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option> 
                            <option value="Brunei (+673)">Brunei (+673)</option> 
                            <option value="Bulgaria (+359)">Bulgaria (+359)</option> 
                            <option value="Burkina Faso (+226)">Burkina Faso (+226)</option> 
                            <option value="Burundi (+257)">Burundi (+257)</option> 
                            <option value="Cambodia (+855)">Cambodia (+855)</option> 
                            <option value="Cameroon (+237)">Cameroon (+237)</option> 
                            <option value="Cape Verde (+238)">Cape Verde (+238)</option> 
                            <option value="Cayman Islands (+ 345)">Cayman Islands (+ 345)</option> 
                            <option value="Central African Republic (+236)">Central African Republic (+236)</option> 
                            <option value="Chad (+235)">Chad (+235)</option> 
                            <option value="Chile (+56)">Chile (+56)</option> 
                            <option value="Christmas Island (+61)">Christmas Island (+61)</option> 
                            <option value="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option> 
                            <option value="Colombia (+57)">Colombia (+57)</option> 
                            <option value="Comoros (+269)">Comoros (+269)</option> 
                            <option value="Congo (+242)">Congo (+242)</option> 
                            <option value="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option> 
                            <option value="Cook Islands (+682)">Cook Islands (+682)</option> 
                            <option value="Costa Rica (+506)">Costa Rica (+506)</option> 
                            <option value="Ivory Coast (+225)">Ivory Coast (+225)</option> 
                            <option value="Croatia (+385)">Croatia (+385)</option> 
                            <option value="Cuba (+53)">Cuba (+53)</option> 
                            <option value="Curacao (+599)">Curacao (+599)</option> 
                            <option value="Cyprus (+537)">Cyprus (+537)</option> 
                            <option value="Czech Republic (+420)">Czech Republic (+420)</option> 
                            <option value="Denmark (+45)">Denmark (+45)</option> 
                            <option value="Diego Garcia (+246)">Diego Garcia (+246)</option> 
                            <option value="Djibouti (+253)">Djibouti (+253)</option> 
                            <option value="Dominica (+1 767)">Dominica (+1 767)</option> 
                            <option value="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option> 
                            <option value="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option> 
                            <option value="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option> 
                            <option value="East Timor (+670)">East Timor (+670)</option> 
                            <option value="Easter Island (+56)">Easter Island (+56)</option> 
                            <option value="Ecuador (+593)">Ecuador (+593)</option> 
                            <option value="Egypt (+20)">Egypt (+20)</option> 
                            <option value="El Salvador (+503)">El Salvador (+503)</option> 
                            <option value="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option> 
                            <option value="Eritrea (+291)">Eritrea (+291)</option> 
                            <option value="Estonia (+372)">Estonia (+372)</option> 
                            <option value="Ethiopia (+251)">Ethiopia (+251)</option> 
                            <option value="Falkland Islands (+500)">Falkland Islands (+500)</option> 
                            <option value="Faroe Islands (+298)">Faroe Islands (+298)</option> 
                            <option value="Fiji (+679)">Fiji (+679)</option> 
                            <option value="Finland (+358)">Finland (+358)</option> 
                            <option value="French Antilles (+596)">French Antilles (+596)</option> 
                            <option value="French Guiana (+594)">French Guiana (+594)</option> 
                            <option value="French Polynesia (+689)">French Polynesia (+689)</option> 
                            <option value="Gabon (+241)">Gabon (+241)</option> 
                            <option value="Gambia (+220)">Gambia (+220)</option> 
                            <option value="Georgia (+995)">Georgia (+995)</option> 
                            <option value="Ghana (+233)">Ghana (+233)</option> 
                            <option value="Gibraltar (+350)">Gibraltar (+350)</option> 
                            <option value="Greece (+30)">Greece (+30)</option> 
                            <option value="Greenland (+299)">Greenland (+299)</option> 
                            <option value="Grenada (+1 473)">Grenada (+1 473)</option> 
                            <option value="Guadeloupe (+590)">Guadeloupe (+590)</option> 
                            <option value="Guam (+1 671)">Guam (+1 671)</option> 
                            <option value="Guatemala (+502)">Guatemala (+502)</option> 
                            <option value="Guinea (+224)">Guinea (+224)</option> 
                            <option value="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option> 
                            <option value="Guyana (+595)">Guyana (+595)</option> 
                            <option value="Haiti (+509)">Haiti (+509)</option> 
                            <option value="Honduras (+504)">Honduras (+504)</option> 
                            <option value="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option> 
                            <option value="Hungary (+36)">Hungary (+36)</option> 
                            <option value="Iceland (+354)">Iceland (+354)</option> 
                            <option value="Indonesia (+62)">Indonesia (+62)</option> 
                            <option value="Iran (+98)">Iran (+98)</option> 
                            <option value="Iraq (+964)">Iraq (+964)</option> 
                            <option value="Ireland (+353)">Ireland (+353)</option> 
                            <option value="Israel (+972)">Israel (+972)</option> 
                            <option value="Italy (+39)">Italy (+39)</option> 
                            <option value="Jamaica (+1 876)">Jamaica (+1 876)</option> 
                            <option value="Jordan (+962)">Jordan (+962)</option> 
                            <option value="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option> 
                            <option value="Kenya (+254)">Kenya (+254)</option> 
                            <option value="Kiribati (+686)">Kiribati (+686)</option> 
                            <option value="North Korea (+850)">North Korea (+850)</option> 
                            <option value="South Korea (+82)">South Korea (+82)</option> 
                            <option value="Kuwait (+965)">Kuwait (+965)</option> 
                            <option value="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option> 
                            <option value="Laos (+856)">Laos (+856)</option> 
                            <option value="Latvia (+371)">Latvia (+371)</option> 
                            <option value="Lebanon (+961)">Lebanon (+961)</option> 
                            <option value="Lesotho (+266)">Lesotho (+266)</option> 
                            <option value="Liberia (+231)">Liberia (+231)</option> 
                            <option value="Libya (+218)">Libya (+218)</option> 
                            <option value="Liechtenstein (+423)">Liechtenstein (+423)</option> 
                            <option value="Lithuania (+370)">Lithuania (+370)</option> 
                            <option value="Luxembourg (+352)">Luxembourg (+352)</option> 
                            <option value="Macau SAR China (+853)">Macau SAR China (+853)</option> 
                            <option value="Macedonia (+389)">Macedonia (+389)</option> 
                            <option value="Madagascar (+261)">Madagascar (+261)</option> 
                            <option value="Malawi (+265)">Malawi (+265)</option> 
                            <option value="Maldives (+960)">Maldives (+960)</option> 
                            <option value="Mali (+223)">Mali (+223)</option> 
                            <option value="Malta (+356)">Malta (+356)</option> 
                            <option value="Marshall Islands (+692)">Marshall Islands (+692)</option> 
                            <option value="Martinique (+596)">Martinique (+596)</option> 
                            <option value="Mauritania (+222)">Mauritania (+222)</option> 
                            <option value="Mauritius (+230)">Mauritius (+230)</option> 
                            <option value="Mayotte (+262)">Mayotte (+262)</option> 
                            <option value="Mexico (+52)">Mexico (+52)</option> 
                            <option value="Micronesia (+691)">Micronesia (+691)</option> 
                            <option value="Midway Island (+1 808)">Midway Island (+1 808)</option> 
                            <option value="Moldova (+373)">Moldova (+373)</option> 
                            <option value="Monaco (+377)">Monaco (+377)</option> 
                            <option value="Mongolia (+976)">Mongolia (+976)</option> 
                            <option value="Montenegro (+382)">Montenegro (+382)</option> 
                            <option value="Montserrat (+1664)">Montserrat (+1664)</option> 
                            <option value="Morocco (+212)">Morocco (+212)</option> 
                            <option value="Myanmar (+95)">Myanmar (+95)</option> 
                            <option value="Namibia (+264)">Namibia (+264)</option> 
                            <option value="Nauru (+674)">Nauru (+674)</option> 
                            <option value="Nepal (+977)">Nepal (+977)</option> 
                            <option value="Netherlands (+31)">Netherlands (+31)</option> 
                            <option value="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option> 
                            <option value="Nevis (+1 869)">Nevis (+1 869)</option> 
                            <option value="New Caledonia (+687)">New Caledonia (+687)</option> 
                            <option value="New Zealand (64)">New Zealand (64)</option> 
                            <option value="Nicaragua (+505)">Nicaragua (+505)</option> 
                            <option value="Niger (+227)">Niger (+227)</option> 
                            <option value="Nigeria (+234)">Nigeria (+234)</option> 
                            <option value="Niue (+683)">Niue (+683)</option> 
                            <option value="Norfolk Island (+672)">Norfolk Island (+672)</option> 
                            <option value="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option> 
                            <option value="Norway (+47)">Norway (+47)</option> 
                            <option value="Oman (+968)">Oman (+968)</option> 
                            <option value="Palau (+680)">Palau (+680)</option> 
                            <option value="Palestinian Territory (+970)">Palestinian Territory (+970)</option> 
                            <option value="Panama (+507)">Panama (+507)</option> 
                            <option value="Papua New Guinea (+675)">Papua New Guinea (+675)</option> 
                            <option value="Paraguay (+595)">Paraguay (+595)</option> 
                            <option value="Peru (+51)">Peru (+51)</option> 
                            <option value="Philippines (+63)">Philippines (+63)</option> 
                            <option value="Poland (+48)">Poland (+48)</option> 
                            <option value="Portugal (+351)">Portugal (+351)</option> 
                            <option value="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option> 
                            <option value="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option> 
                            <option value="Qatar (+974)">Qatar (+974)</option> 
                            <option value="Reunion (+262)">Reunion (+262)</option> 
                            <option value="Romania (+40)">Romania (+40)</option> 
                            <option value="Russia (+7)">Russia (+7)</option> 
                            <option value="Rwanda (+250)">Rwanda (+250)</option> 
                            <option value="Samoa (+685)">Samoa (+685)</option> 
                            <option value="San Marino (+378)">San Marino (+378)</option> 
                            <option value="Saudi Arabia (+966)">Saudi Arabia (+966)</option> 
                            <option value="Senegal (+221)">Senegal (+221)</option> 
                            <option value="Serbia (+381)">Serbia (+381)</option> 
                            <option value="Seychelles (+248)">Seychelles (+248)</option> 
                            <option value="Sierra Leone (+232)">Sierra Leone (+232)</option> 
                            <option value="Slovakia (+421)">Slovakia (+421)</option> 
                            <option value="Slovenia (+386)">Slovenia (+386)</option> 
                            <option value="Solomon Islands (+677)">Solomon Islands (+677)</option> 
                            <option value="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option> 
                            <option value="Spain (+34)">Spain (+34)</option> 
                            <option value="Sri Lanka (+94)">Sri Lanka (+94)</option> 
                            <option value="Sudan (+249)">Sudan (+249)</option> 
                            <option value="Suriname (+597)">Suriname (+597)</option> 
                            <option value="Swaziland (+268)">Swaziland (+268)</option> 
                            <option value="Sweden (+46)">Sweden (+46)</option> 
                            <option value="Switzerland (+41)">Switzerland (+41)</option> 
                            <option value="Syria (+963)">Syria (+963)</option> 
                            <option value="221">Taiwan (+886)</option> 
                            <option value="Tajikistan (+992)">Tajikistan (+992)</option> 
                            <option value="Tanzania (+255)">Tanzania (+255)</option> 
                            <option value="Thailand (+66)">Thailand (+66)</option> 
                            <option value="Timor Leste (+670)">Timor Leste (+670)</option> 
                            <option value="Togo (+228)">Togo (+228)</option> 
                            <option value="Tokelau (+690)">Tokelau (+690)</option> 
                            <option value="Tonga (+676)">Tonga (+676)</option> 
                            <option value="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option> 
                            <option value="Tunisia (+216)">Tunisia (+216)</option> 
                            <option value="Turkey (+90)">Turkey (+90)</option> 
                            <option value="Turkmenistan (+993)">Turkmenistan (+993)</option> 
                            <option value="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option> 
                            <option value="Tuvalu (+688)">Tuvalu (+688)</option> 
                            <option value="Uganda (+256)">Uganda (+256)</option> 
                            <option value="Ukraine (+380)">Ukraine (+380)</option> 
                            <option value="Uruguay (+598)">Uruguay (+598)</option> 
                            <option value="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option> 
                            <option value="Uzbekistan (+998)">Uzbekistan (+998)</option> 
                            <option value="Vanuatu (+678)">Vanuatu (+678)</option> 
                            <option value="Venezuela (+58)">Venezuela (+58)</option> 
                            <option value="Vietnam (+84)">Vietnam (+84)</option> 
                            <option value="Wake Island (+1 808)">Wake Island (+1 808)</option> 
                            <option value="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option> 
                            <option value="Yemen (+967)">Yemen (+967)</option> 
                            <option value="Zambia (+260)">Zambia (+260)</option> 
                            <option value="Zanzibar (+255)">Zanzibar (+255)</option> 
                            <option value="Zimbabwe (+263)">Zimbabwe (+263)</option> 
                            </select> 
                            <em style="color:red"><?=form_error('country')?></em>
                            </div> 

                            <div class="col-md-6">
                            <input type="tel" name="phone" placeholder="Enter Contact" maxlength="10" required="required" id="phone" class="form-control">
                            <em style="color:red"><?=form_error('phone')?></em>
                            </div> 
                            <div class="col-md-6">
                                
                            <input name="select_urgent" placeholder="Enter Deadline" id="datepicker" class="form-control" required="required" maxlength="255" autocomplete="off">
                            <em style="color:red"><?=form_error('select_urgent')?></em>
                            </div> 
                            <div class="col-md-6"> 
                            <select name="currency" required="required" class="form-control" id="currency"> 
                            <option value="">Education Level</option> 
                            <option value="Graduate">Graduate</option> 
                            <option value="College">College</option> 
                            <option value="University">University</option> 
                            <option value="Doctrate">Doctrate</option> 
                            <option value="Masters">Masters</option> 
                          </select> 
                          <em style="color:red"><?=form_error('currency')?></em>
                        </div> 
                        <div class="col-md-6"> 
                        	<select name="papertopic" required="required" class="form-control" id="papertopic"> 
                        		<option value="">Select Referencing Style</option> 
                        		<option value="Harvard">Harvard</option> 
                        		<option value="APA">APA</option> 
                        		<option value="MLA">MLA</option> 
                        		<option value="Chicago">Chicago</option> 
                        		<option value="Footnotes">Footnotes</option> 
                        		<option value="Footnotes and bibliography">Footnotes and bibliography</option> 
                        		<option value="AGLC">AGLC</option> 
                        		<option value="BMJ">BMJ</option> 
                        		<option value="MHRA">MHRA</option> 
                        		<option value="Oxford">Oxford</option> 
                        		<option value="OSCOLA">OSCOLA</option> 
                        		<option value="Vancouver">Vancouver</option> 
                        		<option value="Turbian">Turbian</option> 
                        		<option value="Open">Open</option> 
                        	</select>
                        	<em style="color:red"><?=form_error('papertopic')?></em> 
                        </div> 
                        <div class="col-md-6"> 
                        	<select name="select_pages" required="required" class="form-control" id="select_pages"> 
                        		<option value="">Choose Paper length</option> 
                        		<option value="1 Pages/250 words">1 Pages/250 words</option> 
                        		<option value="2 Pages/500 words">2 Pages/500 words</option> 
                        		<option value="3 Pages/750 words">3 Pages/750 words</option> 
                        		<option value="4 Pages/1000 words">4 Pages/1000 words</option> 
                        		<option value="5 Pages/1250 words">5 Pages/1250 words</option> 
                        		<option value="6 Pages/1500 words">6 Pages/1500 words</option> 
                        		<option value="7 Pages/1750 words">7 Pages/1750 words</option> 
                        		<option value="8 Pages/2000 words">8 Pages/2000 words</option> 
                        		<option value="9 Pages/2250 words">9 Pages/2250 words</option> 
                        		<option value="10 Pages/2500 words">10 Pages/2500 words</option> 
                        		<option value="11 Pages/2750 words">11 Pages/2750 words</option> 
                        		<option value="12 Pages/3000 words">12 Pages/3000 words</option> 
                        		<option value="13 Pages/3250 words">13 Pages/3250 words</option> 
                        		<option value="14 Pages/3500 words">14 Pages/3500 words</option> 
                        		<option value="15 Pages/3750 words">15 Pages/3750 words</option> 
                        		<option value="16 Pages/4000 words">16 Pages/4000 words</option> 
                        		<option value="17 Pages/4250 words">17 Pages/4250 words</option> 
                        		<option value="18 Pages/4500 words">18 Pages/4500 words</option> 
                        		<option value="19 Pages/4750 words">19 Pages/4750 words</option> 
                        		<option value="20 Pages/5000 words">20 Pages/5000 words</option> 
                        		<option value="21 Pages/5250 words">21 Pages/5250 words</option> 
                        		<option value="22 Pages/5500 words">22 Pages/5500 words</option> 
                        		<option value="23 Pages/5750 words">23 Pages/5750 words</option> 
                        		<option value="24 Pages/6000 words">24 Pages/6000 words</option> 
                        		<option value="25 Pages/6250 words">25 Pages/6250 words</option> 
                        		<option value="26 Pages/6500 words">26 Pages/6500 words</option> 
                        		<option value="27 Pages/6750 words">27 Pages/6750 words</option> 
                        		<option value="28 Pages/7000 words">28 Pages/7000 words</option> 
                        		<option value="29 Pages/7250 words">29 Pages/7250 words</option> 
                        		<option value="30 Pages/7500 words">30 Pages/7500 words</option> 
                        		<option value="31 Pages/7750 words">31 Pages/7750 words</option> 
                        		<option value="32 Pages/8000 words">32 Pages/8000 words</option> 
                        		<option value="33 Pages/8250 words">33 Pages/8250 words</option> 
                        		<option value="34 Pages/8500 words">34 Pages/8500 words</option> 
                        		<option value="35 Pages/8750 words">35 Pages/8750 words</option> 
                        		<option value="36 Pages/9000 words">36 Pages/9000 words</option> 
                        		<option value="37 Pages/9250 words">37 Pages/9250 words</option> 
                        		<option value="38 Pages/9500 words">38 Pages/9500 words</option> 
                        		<option value="39 Pages/9750 words">39 Pages/9750 words</option> 
                        		<option value="40 Pages/10000 words">40 Pages/10000 words</option> 
                        	</select> 
                        	<em style="color:red"><?=form_error('select_pages')?></em>
                        </div> 
                        <!--<div class="col-md-12">
                        	<textarea name="description" placeholder="Enter Question" required="required" id="description" rows="5" class="form-control"></textarea>
                        	<em style="color:red"><?=form_error('description')?></em>
                        </div> -->

                        	<div class="col-md-12 text-center">
                        		<input name="form_botcheck" class="form-control" type="hidden" value="" />
                        		<input type="submit" id="submit" value="Order Now" class="wpcf7-form-control wpcf7-submit">
                        	</div>
                        </div>
                         </form>
                     </div>
                 </div>
              </div>
            </div>
        </div>
    </div>
<!--Banner Section End-->
<style>
    .white-bg-form .col-md-6 {
    padding: 5px 15px;
}
</style>
<section class="service-icn">
            <div class="container">
                <div class="row srvce-row mar-service-icon">
                    <div class="col-md-2">
                        <div class="servce-bx">
                            <p>WE DON'T BELIEVE IN
                               <span>LESS THAN 100%</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-10 servce-txt">
                        <div class="row serv-txt-insde">
                        <div id="plag" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/Plagiarism2.png');?>">
                            <p>Plagiarism Free</p>
                        </div>
                        <div id="satisfy" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/Satisfaction.png');?>">
                            <p>100% Satisfaction</p>
                        </div>
                        <div id="refund" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/Refund.png');?>">
                            <p>100% Refund*</p>
                        </div>
                        <div id="live-sprt" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/24icon.png');?>">
                            <p>24/7 Live Support</p>
                        </div>
                        <div id="rfnd-plcy" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/refund-policy.png');?>">
                            <p>Best in Industry Price</p>
                        </div>
                        <div id="phd-writers" class="col-md-2 txt-pnt">
                            <img src="<?=base_url('assets/images/writer.png');?>">
                            <p>Native PhD Writers</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        


        <section id="about-area">
        <!--start container-->
        <div class="container">
            <!--start row-->
            <div class="row">
                <!--start about images-->
                <div class="col-md-6">
                    <div class="about-images row wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        
                         <img src="<?=base_url('assets/images/about/about-home.jpg');?>" class="img-responsive img-brdr" alt="Assignment help | GlobalAssignmentHelp">
                        
                    </div>
                </div>
                <!--end about images-->
                <!--start about content-->
                <div class="col-md-6">
                    <div class="about-content">
                        <!-- <h6>GotoAssignmentHelp</h6> -->
                        <h2>Online Assignment Help UK Services</h2>
                        <p>"Global Assignment Expert offers you, Assignment writing help from highly experienced and efficient experts. It cordially invites you to share your idea of an assignment and get the implementation in your hand. Global Assignment Expert is ready to provide your assignment within the given time. The company assures you plagiarism-free work with cent percent proficiency and punctuality.</p>

<p>The company offers you genuine, specialized projects for you, as per your demand. The writers of the company tend to blindly follow the customization narrated by a client. A suitable price for every project is taken. The payable amount assures to be worthy for each specific project. The urgent assignments are carefully done here, maintaining their quality. Global Assignment Expert affirms to be one of the biggest online assignment writing platforms of the current time. The company helps you with all kinds of writings, from assignments to case studies. Projects of subject variations or pattern variations are equally given attention to.</p>
                
                            <div class="row assign-list">
                                   <div class="col-md-6">
                                          <ul>
                                               <li>UK Assignment Help</li>
                                               <li>Dissertation Assignment Help</li>
                                               <li>Nursing Assignment Help</li>
                                           </ul>
                                    </div>
                                 <div class="col-md-6">
                                            <ul>
                                               <li>Computer Assignment Help</li>
                                               <li>Perdisco Assignment Help</li>
                                               <li>Essay Writing Help Online</li>
                                          
                                            </ul>
                                </div>
                            </div>
                       <!--  <h5>Yankee Williamson <span>- Founder</span></h5> -->
                    </div>
                    <div class="btn-part">
                                    <a class="readon2" href="/order">Order Now</a>
                               </div>
                </div>

                <!--end about content-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

<hr>
<div class="content-section-white p-t-0">
    <!-- Choose Writers Section -->
    <div class="choose-writer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title text-center">Why students order last minute assistance with assignments from us</h2>
                    <p class="textCommon text-center">You have the flexibility to chose an assignment expert that suits your budget and quality parameters. We have more than 2000 PhD experts available to assist with assignments.</p>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="landing-writing-service-list">
                                <li class="landing-writing-service-list-item1">
                                    <h4>Re-work till satisfaction</h4>
                                    <p>Get free expert assistance till satisfaction.</p>
                                </li>
                                <li class="landing-writing-service-list-item2">
                                    <h4>Pay using Secure channel</h4>
                                    <p>You can pay using different payment method through trusted & secure paypal channel.</p>
                                </li>
                                <li class="landing-writing-service-list-item3">
                                    <h4>Plagiarism Free Work Guaranteed</h4>
                                    <p>We sent unique content with no plagiarism.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 hidden-xs">
                            <div class="writers-image">
                                <img src="assets/images/featured-image1.jpg" class="img-responsive" width="320px" alt="AllAssignmentHelp Unique Features">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="landing-writing-service-list">
                                <li class="landing-writing-service-list-item4">
                                    <h4>Ping Us on Whasapp</h4>
                                    <p>You can talk to us 24*7. We are here to help you.</p> 
                                </li>
                                <li class="landing-writing-service-list-item5">
                                    <h4>Student friendly assignment service</h4>
                                    <p>You do not to be on laptop all the time We have  great mobile interface for our students.</p>
                                </li>
                                <li class="landing-writing-service-list-item6">
                                    <h4>Receive Completed Solution</h4>
                                    <p>You will receive your complete assignment prior to the submission deadline.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-4 col-sm-offset-4 text-center">
                            <a href="https://www.Globalassignmentexpert.com/features" class="btn btn-secondary btn-bg-red">View all Features <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Writers Section -->
</div>

        <div class="content-section-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pb-40">
                        <h2 class="page-title">We are Trusted,Secured and Verified</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-11 offset-1">
                        <div class="clientSlider security-partners">
                            <div class="item security-partners1"></div>
                            <!-- <div class="item security-partners2"></div> -->
                            <div class="item security-partners3"></div>
                            <div class="item security-partners4"></div>
                            <div class="item security-partners5"></div>
                            <div class="item security-partners6"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="textCommon text-center">Students from the different parts of the world rely on our service because we offer secured payment gateway, confidentiality pact and encrypted channel for communication. Moreover, we do not save any of your details and it automatically alleviates chances of data leak.</p>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="content-Featuresbx">
                                    <div class="content-feature-icon">
                                        <div class="content-feature-icon2x feature-protection"></div>
                                    </div>
                                    <div class="content-feature-text">
                                        <h3>100% Private and Confidential</h3>
                                        <p class="textCommon">Your information is 100% confidential and even writers do not have access to it.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="content-Featuresbx">
                                    <div class="content-feature-icon">
                                        <div class="content-feature-icon2x feature-reviews"></div>
                                    </div>
                                    <div class="content-feature-text">
                                        <h3>Verified Reviews</h3>
                                        <p class="textCommon">We do not buy reviews, our reviews are from verified users on Google and Here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="content-Featuresbx">
                                    <div class="content-feature-icon">
                                        <div class="content-feature-icon2x feature-refund"></div>
                                    </div>
                                    <div class="content-feature-text">
                                        <h3>100% Money Back Guarnatee</h3>
                                        <p class="textCommon">Your money is in safe hands, we offer 100% money back guarantee if we fail to deliver.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="content-section-white mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-title pb-20">Assignment Help Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="textCommon text-justify"><strong>Your Ideation, Our Execution</strong>: Show us your idea of the assignment, fill the order form on our website and get your work done. The company is here to implement your idea of work and present it to you. The support team will be coordinating with you in case of any specialization or customization. The best writers of Global Experts will be doing your assignment in the best way possible. The company takes up the responsibility to make your project noteworthy. You just have to narrate your requirements on our website and the experts will do the rest of your work. Complete attention will be paid to your authorization over the assignment. To implement your idea of the project work is the company’s first and foremost priority. </p>
                        <p class="textCommon text-justify"><strong>Payment and Pleasure</strong>:  You submit your idea; the Global Experts will take care of that. Pay to get benefited. We assure you pleasure after receiving all your assignments. Why pay if your pleasure isn’t satisfied? Set the criteria of your assignment and you will receive the worthiest price quotation for the project. Pay the fees and be sure to get pleased, seeing the work done by the companys expert writers. Notable, the company is already having innumerable students who are pleased with their assignments, done by the Global Assignments Expert. You can soon be one of them if you dare to trust Global Assignment Expert. </p>
                        <p class="textCommon text-justify"><strong>Proficiency, Not Plagiarism</strong>: The company, Global Assignment Expert has above 300k best academic writers including 6000 Ph.D. academic writers to serve you only the best. The company even has more than 12 years of experience in academic or assignment writing. The experts here offer you proficiency and punctuality, not plagiarism. Professional writers are here to understand your requirement and serve you as per that. Plagiarism is never entertained here. The company assures you to provide you only the exclusive materials and content writings considering your requirements.</p>
                        <p class="textCommon text-justify"><strong>Refund Policy</strong>: At Global Assignment expert, student’s satisfaction is taken into consideration and the work is done without any error. But in any case, if the client wants to cancel the order, his money will be refundable. A 25% of deduction will be processed and the rest will be refunded to the client. The company claims 99.99% of clients get satisfactory results but if you are not satisfied with the assignments, you are free to ask for a refund.</p>
                        
                    </div>
                    <div class="col-md-6">
                        <p class="textCommon text-justify"><strong>Round the Clock, Around the World</strong>: The Global Assignment Expert provides you service 24*7, around the World. Assignment help service is provided in UK, Australia, Canada, New Zealand, Russia, and in many other countries through the online media platform. Students from any corner of the World may access the help service any time from this company. All-day and night services are available here for valuable clients. No time foundation seems to be a barrier here. Any time you can get help from the support team of the company. Global Assignment Expert, one of the largest online assignment writing platforms is here to reach out to you, irrespective of every corner of the World. All it needs is a click on the website.</p>
                        <p class="textCommon text-justify"><strong>Subject Spread</strong>: Are you seeking assignment writing help for different subjects? Global Assignment Expert provides all kinds of assignments, regarding any subjects, followed by the World’s top most universities. The subject is not even a difficulty here. The experts cover the assignments of over 100 subjects with the same proficiency. The service for assignment writing, essay writing help, project works, dissertation writing, or any other type of academic writing for any subject, is available here at one place.<!--  Any type of work is given an equal amount of attention here. You will never be disappointed; doesn’t matter in which subject you are seeking help for. Best writers for specific subjects are hired in the company from the whole world and they are proved to be experts in their fields. --></p>
                        <p class="textCommon text-justify"><strong>Student Satisfaction</strong>: Student satisfaction is the priority for the Global Assignment Expert. The assignments, submitted to the clients are maintained to be completely based on students’ criteria. The authorization of the client is given appropriate consideration. Then, the project work is taken into progression. If still the client is not satisfied, the expert writers associate with the clients and take care of all the requirements. The thesis is revised many times until the client doesn’t get the appropriate assignments, regarding the specific need. The work done, based on the client’s authorization is then shown to the client, and rechecks are done until the client is pleased and satisfied.</p>
                        <p class="textCommon text-justify"><strong>Delivered before Deadline</strong>: Global Assignment Expert promises you to deliver your project before deadlines. The company maintains its punctuality in a very good manner. It does not fail to deliver the assignment, on or before the allotted time. Here, proficiency comes with good punctuality. You can rely upon to get your projects before the deadline. The delivery timings and systems are considered to be the primary concern. Not only before the deadline, but the company holds the fastest assignment delivery records in the whole world.</p>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="support-block">
                            <li>
                                <h3 class="support-block-title">2-3 Hours</h3>
                                <p class="textCommon text-center"><strong>We can do your assignment in 2-3 hours as well</strong></p>
                            </li>
                            <li>
                                <h3 class="support-block-title">95%</h3>
                                <p class="textCommon text-center"><strong>Our recurring clients asking us to do assignments</strong></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="ui-siteStats">
                            <ul>
                                <li>
                                    <h3 class="support-block-title">200</h3>
                                    <p class="textCommon text-center"><strong>Number of custom assignments we write daily</strong></p>
                                </li>
                                <li>
                                    <h3 class="support-block-title">4.9</h3>
                                    <p class="textCommon text-center"><strong>Rating for our assignment help service</strong></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Counter Up Section Start-->
        <div class="rs-counter pt-100 pb-70 bg3">
            <div class="container">
                <div class="sec-title white-text mb-50 text-center">
                    <h2>ACHEIVEMENTS</h2>      
                    <p>Best writer’s guidance over the complete assignment. Different subjects and types of writing on one online platform</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">12008</h2>                  
                            <h4 class="counter-desc">DELIVERED DOCUMENTS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">5048</h2>
                            <h4 class="counter-desc">ACADEMIC EXPERTS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">4500</h2>                  
                            <h4 class="counter-desc">STUDENTS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">100</h2>
                            <h4 class="counter-desc">SUBJECTS</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Counter Down Section End -->

       
            
            <div id="rs-courses-categories" class="rs-courses-categories pt-100 pb-70 d-none">
			<div class="container">
				<div class="sec-title-2 mb-50 text-center">
                    <h2>BENEFITS WITH US</h2>
                    <p>I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                	
                </div>
                    <div class="row">
    	            	<div class="col-lg-4 col-md-6">
    	            		<div class="courses-item">
    	            	        <i class="flaticon-book-1"></i>
    	            	        <h4 class="courses-title"><a href="#">High Quality</a></h4>
    	            	        <span class="courses-amount">Feel free to visit us for the high quality</span>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-4 col-md-6">
    	            		<div class="courses-item">
    	            	        <i class="flaticon-document"></i>
    	            	        <h4 class="courses-title"><a href="#">24×7 Support</a></h4>
    	            	        <span class="courses-amount">We available 24×7 for your convenience.</span>
    	            	    </div>
    	            	</div>
    	            	<div class="col-lg-4 col-md-6">
    	            		<div class="courses-item">
    	            	        <i class="flaticon-tool-1"></i>
    	            	        <h4 class="courses-title"><a href="#">Wide Variety</a></h4>
    	            	        <span class="courses-amount">Our experts provide  wide variety writings </span>
    	            	    </div>
    	            	</div>
    	            	<!-- <div class="col-lg-3 col-md-6">
    	            		<div class="courses-item">
    	            	        <i class="flaticon-book-1"></i>
    	            	        <h4 class="courses-title"><a href="#"> Plagiarism Free Work</a></h4>
    	            	        <span class="courses-amount">We check — To avoid any plagiarism.</span>
    	            	    </div>
    	            	</div> -->
                    </div>
                    
	            </div>
            </div>

        <!-- Testimonial Start -->
        <div id="rs-testimonial-2" class="rs-testimonial-2 pt-100 pb-70 sec-color d-none">
            <div class="blue-overlay"></div>
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2><span class="orange-color">WHAT OUR HAPPY </span>STUDENTS SAYS</h2>
                    <p>BETTER SERVICE STARTS HERE</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div  class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img  src="<?=base_url('assets/images/testimonial/1.jpg');?>"  alt="Assignment Help Service Online">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Luise Henrikes</h4>
                                    <p>
									  Great Work are done by Globalassignmentexpert.com in terms of Assignment Writing. Thanks for the help.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img  src="<?=base_url('assets/images/testimonial/2.jpg');?>"  alt="My Assignment Help">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Aliana D’suza</h4>
                                    <p>
									  I was very worried for my Dissertation writing until Globalassignmentexpert.com help me. They provide assignment with accuracy and perfection. 
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img  src="<?=base_url('assets/images/testimonial/3.jpg');?>" alt="Assignment Helper UK">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Peter Edward</h4>
                                    <p>
									  Your are the Center of Our Assignment World. Thank You for the Writing Services.
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img src="<?=base_url('assets/images/testimonial/4.jpg');?>"  alt="Assignment Help Expert">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Hannah</h4>
                                    <p>
                                       A computer network is a great subject but the core of this field sometimes bothers. If you catch this subject, you may have a better grade. 
                                    </p>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    <img  src="<?=base_url('assets/images/testimonial/5.jpg');?>" alt="Programming Assignment Help">
                                </div>
                                <div class="testi-desc">
                                    <h4 class="testi-name">Lucas</h4>
                                    <p>
                                        Got better Grade On My Programming Assignment. I remember my friend said good words about Globalassignmentexpert.com 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="content-section-grey">
            <div class="container">
                <h2 class="page-title text-center">Great Customer Support</h2>
                <p class="textCommon text-center">Our customer support defines our service. Since we are customer-centric company, customer support is as good as our work quality.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-center-icon">
                            <div class="content-feature-icon2x feature-support"></div>
                        </div>
                        <p class="textCommon text-center"><strong>On Demand Phone Calls</strong></p>
                        <p class="textCommon text-center">We have more than 1000 clients in a single day and we have a great on demand calling system in place where you can request a free call back from our support executives.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-center-icon">
                            <div class="content-feature-icon2x feature-smsupdates"></div>
                        </div>
                        <p class="textCommon text-center"><strong>Services For Every Subjects :</strong></p>
                        <p class="textCommon text-center">It doesn't matter if you are a fresher in college or just completing your final assignment to earn a PhD. degree, our writers are allways ready to provide you professional assignment help on all topic at any level. Feel free to contact us for best grade.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-center-icon">
                            <div class="content-feature-icon2x feature-availability"></div>
                        </div>
                        <p class="textCommon text-center"><strong>24/7 Availability :</strong></p>
                        <p class="textCommon text-center">You need not to panic even at midnight or after. Our support always make your life easier by prompt responses. We have a 99.4% thumbs up for our support and we are proud of it.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-center-icon">
                            <div class="content-feature-icon2x feature-whatsapp"></div>
                        </div>
                        <p class="textCommon text-center"><strong>WhatsApp Support :</strong></p>
                        <p class="textCommon text-center">Our company also provides you with the Whatsapp Support in case you want. We can directly connect over WhatsApp and reduce turnaround time significantly.</p>
                    </div>
                </div>
            </div>
        </div>

<!-- Testimonial Start -->
        <div id="rs-testimonial-3" class="rs-testimonial-3 pt-100 pb-40">
            <div class="container">
                <div class="sec-title-2 text-center">
                    <h2>WHAT OUR HAPPY STUDENTS SAYS</h2>      
                    <p>BETTER SERVICE STARTS HERE.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div  class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                    <img src="<?=base_url('assets/images/testimonial/1.jpg');?>" alt=""> 
                                </div>
                                <h4 class="testi-name">Luise Henrikes</h4>
                                    <p lass="description">
                                      Great Work are done by Globalassignmentexpert.com in terms of Assignment Writing. Thanks for the help.
                                    </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        <h3 class="name">Essay Writing</h3>
                                        <span class="post">GAE7865</span> 
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                    <img src="<?=base_url('assets/images/testimonial/2.jpg');?>" alt=""> 
                                </div>
                                <h5 class="title">Aliana D’suza</h5>
                                    <p class="description">
                                      I was very worried for my Dissertation writing until Globalassignmentexpert.com help me. They provide assignment with accuracy and perfection. 
                                    </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        <h3 class="name">Essay Writing</h3>
                                        <span class="post">GAE7865</span> 
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                    <img src="<?=base_url('assets/images/testimonial/3.jpg');?>" alt=""> 
                                </div>
                                <h5 class="title">Peter Edward</h5>
                                    <p class="description">
                                      Your are the Center of Our Assignment World. Thank You for the Writing Services.
                                    </p>
                                <div class="testimonial-content">
                                     <div class="testimonial-profile">
                                        <h3 class="name">Essay Writing</h3>
                                        <span class="post">GAE7865</span> 
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                    <img src="<?=base_url('assets/images/testimonial/4.jpg');?>" alt=""> 
                                </div>
                                <h5 class="title">Hannah</h4>
                                    <p class="description">
                                       A computer network is a great subject but the core of this field sometimes bothers. If you catch this subject, you may have a better grade. 
                                    </p>
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        <h3 class="name">Essay Writing</h3>
                                        <span class="post">GAE7865</span> 
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->

                            <!-- Testimonial style3 Start -->
                            <div class="testimonial-style3">
                                <div class="image"> 
                                    <img src="<?=base_url('assets/images/testimonial/5.jpg');?>" alt=""> 
                                </div>
                                <h5 class="title">Lucas</h4>
                                    <p class="description">
                                        Got better Grade On My Programming Assignment. I remember my friend said good words about Globalassignmentexpert.com 
                                    </p>
                               
                                <div class="testimonial-content">
                                    <div class="testimonial-profile">
                                        <h3 class="name">Essay Writing</h3>
                                        <span class="post">GAE7865</span> 
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star-half-empty"></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Testimonial style3 End -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        