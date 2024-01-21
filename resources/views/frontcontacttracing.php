@extends('layouts.front')
@section('content')

<section class="content_info">
          <!-- Info white-->
            <div class="info_white1 border_bottom">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                             <h2 class="red-title">Far East Holdings Berhad (14809-W)</h2>
                             <h5>Level 23, Menara Zenith, Jalan Putra Square 6, 25200 Kuantan, Pahang Darul Makmur, Malaysia</h5>
<ul class="unstyled">
                             	<li><span class="label label-info">Tel:</span> +(609) 514-1936 / 514-1948 / 514-1339</li>
            <li><span class="label label-warning">Fax:</span> +(609) 513-6211</li>
                                <li><span class="label label-success">E-mail:</span> <a href="mailto:fareast@fareh.po.my">fareast@fareh.po.my</a></li>
                             </ul>
                      </div>

                    </div>
                </div>
                <i class="icon-map-marker right"></i>
            </div>
            
            <!-- End Info white-->
            <div class="clearfix"></div>
            
            
            <!-- Info resalt-->
            <div class="info_resalt border_bottom">
                <div class="container">
                    <a name="enquiry"></a>
                  <h2 class="red-title">Get In Touch With Us</h2>
                    {{ Session::get('message') }}
                    <h5>Please fill in the enquiry form below </h5>
                    <div class="row-fluid">
                        <form action="{{ url() }}/contactsubmit" id="form1" method="post">
                        <div class="span6">
                            <h6>Name <span class="red-title">*</span></h6>
                          <input type="text" required="" class="input-xxlarge" name="Name" placeholder="Your Name">
                            <h6>E-mail Address <span class="red-title">*</span></h6>
                          <input type="text" required="" class="input-xxlarge" name="Email" placeholder="E-mail Address">
                            <h6>Contact Number <span class="red-title">*</span></h6>
                          <input type="text" required="" class="input-xxlarge" name="Phone" placeholder="Contact Number">
                          <h6>Company Name <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="CompanyName" placeholder="Company Name">
                          <div class="clearfix"></div>
                          
                            <h6>What would you like to enquire about?</h6>
                            <select id="subject" name="subject">
                            	<option>-- Select --</option>
                                <option>Products</option>
                                <option>Promotions</option>
                                <option>Events</option>
                                <option>Services</option>
                                <option>Others</option>
                            </select>
                            
                            <h6>Your Message</h6>
                            <textarea required="" class="input-xxlarge" name="message1" placeholder="Your Message"></textarea>
                            
                            <h6><input type="checkbox" name="subscribe" value="Subscribe"> Subscribe Our Newsletter</h6>
                            
                            <p>Confirm the re-captcha:<br>
                                
                                {{$errors->first('g-recaptcha-response','<div class="alert alert-danger">*:message</div>')}}
                                {{ Form::captcha() }} <br>
                            
                            <input type="submit" class="button" value="Send Message" name="Submit">
                             
                            <div id="result"></div>  
                        </div>

                        <div class="span6">
                        
                            <h6>Address <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="Address" placeholder="Address">
                            <h6>City <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="City" placeholder="City">
                            <h6>State <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="State" placeholder="State">
                            <h6>Postal Code <span class="red-title">*</span></h6>
                            <input type="text" required="" class="input-xxlarge" name="PostalCode" placeholder="Postal Code">
                            <h6>Country <span class="red-title">*</span></h6>
                            <select class="input-xlarge" id="DDLCountry" name="DDLCountry">
                                      <option value="Afghanistan">Afghanistan</option>
                                      <option value="Albania">Albania</option>
                                      <option value="Algeria">Algeria</option>
                                      <option value="American Samoa">American Samoa</option>
                                      <option value="Andorra">Andorra</option>
                                      <option value="Angola">Angola</option>
                                      <option value="Anguilla">Anguilla</option>
                                      <option value="Antarctica">Antarctica</option>
                                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                      <option value="Argentina">Argentina</option>
                                      <option value="Armenia">Armenia</option>
                                      <option value="Aruba">Aruba</option>
                                      <option value="Australia">Australia</option>
                                      <option value="Austria">Austria</option>
                                      <option value="Azerbaijan">Azerbaijan</option>
                                      <option value="Bahamas">Bahamas</option>
                                      <option value="Bahrain">Bahrain</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="Barbados">Barbados</option>
                                      <option value="Belarus">Belarus</option>
                                      <option value="Belgium">Belgium</option>
                                      <option value="Belize">Belize</option>
                                      <option value="Benin">Benin</option>
                                      <option value="Bermuda">Bermuda</option>
                                      <option value="Bhutan">Bhutan</option>
                                      <option value="Bolivia">Bolivia</option>
                                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                      <option value="Botswana">Botswana</option>
                                      <option value="Bouvet Island">Bouvet Island</option>
                                      <option value="Brazil">Brazil</option>
                                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                      <option value="Brunei">Brunei</option>
                                      <option value="Bulgaria">Bulgaria</option>
                                      <option value="Burkina Faso">Burkina Faso</option>
                                      <option value="Burundi">Burundi</option>
                                      <option value="Cambodia">Cambodia</option>
                                      <option value="Cameroon">Cameroon</option>
                                      <option value="Canada">Canada</option>
                                      <option value="Cape Verde">Cape Verde</option>
                                      <option value="Cayman Islands">Cayman Islands</option>
                                      <option value="Central African Republic">Central African Republic</option>
                                      <option value="Chad">Chad</option>
                                      <option value="Chile">Chile</option>
                                      <option value="China">China</option>
                                      <option value="Christmas Island">Christmas Island</option>
                                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                      <option value="Colombia">Colombia</option>
                                      <option value="Comoros">Comoros</option>
                                      <option value="Congo">Congo</option>
                                      <option value="Congo (DRC)">Congo (DRC)</option>
                                      <option value="Cook Islands">Cook Islands</option>
                                      <option value="Costa Rica">Costa Rica</option>
                                      <option value="CÃ´te d`Ivoire">Côte d`Ivoire</option>
                                      <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                      <option value="Cuba">Cuba</option>
                                      <option value="Cyprus">Cyprus</option>
                                      <option value="Czech Republic">Czech Republic</option>
                                      <option value="Denmark">Denmark</option>
                                      <option value="Djibouti">Djibouti</option>
                                      <option value="Dominica">Dominica</option>
                                      <option value="Dominican Republic">Dominican Republic</option>
                                      <option value="East Timor">East Timor</option>
                                      <option value="Ecuador">Ecuador</option>
                                      <option value="Egypt">Egypt</option>
                                      <option value="El Salvador">El Salvador</option>
                                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                                      <option value="Eritrea">Eritrea</option>
                                      <option value="Estonia">Estonia</option>
                                      <option value="Ethiopia">Ethiopia</option>
                                      <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                      <option value="Faroe Islands">Faroe Islands</option>
                                      <option value="Fiji Islands">Fiji Islands</option>
                                      <option value="Finland">Finland</option>
                                      <option value="France">France</option>
                                      <option value="French Guiana">French Guiana</option>
                                      <option value="French Polynesia">French Polynesia</option>
                                      <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                      <option value="Gabon">Gabon</option>
                                      <option value="Gambia">Gambia</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Germany">Germany</option>
                                      <option value="Ghana">Ghana</option>
                                      <option value="Gibraltar">Gibraltar</option>
                                      <option value="Greece">Greece</option>
                                      <option value="Greenland">Greenland</option>
                                      <option value="Grenada">Grenada</option>
                                      <option value="Guadeloupe">Guadeloupe</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Guatemala">Guatemala</option>
                                      <option value="Guinea">Guinea</option>
                                      <option value="GuineaBissau">GuineaBissau</option>
                                      <option value="Guyana">Guyana</option>
                                      <option value="Haiti">Haiti</option>
                                      <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                      <option value="Honduras">Honduras</option>
                                      <option value="Hong Kong SAR">Hong Kong SAR</option>
                                      <option value="Hungary">Hungary</option>
                                      <option value="Iceland">Iceland</option>
                                      <option value="India">India</option>
                                      <option value="Indonesia">Indonesia</option>
                                      <option value="Iran">Iran</option>
                                      <option value="Iraq">Iraq</option>
                                      <option value="Ireland">Ireland</option>
                                      <option value="Israel">Israel</option>
                                      <option value="Italy">Italy</option>
                                      <option value="Ivory Coast">Ivory Coast</option>
                                      <option value="Jamaica">Jamaica</option>
                                      <option value="Japan">Japan</option>
                                      <option value="Jordan">Jordan</option>
                                      <option value="Kazakhstan">Kazakhstan</option>
                                      <option value="Kenya">Kenya</option>
                                      <option value="Kiribati">Kiribati</option>
                                      <option value="Korea">Korea</option>
                                      <option value="Kuwait">Kuwait</option>
                                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                                      <option value="Laos">Laos</option>
                                      <option value="Latvia">Latvia</option>
                                      <option value="Lebanon">Lebanon</option>
                                      <option value="Lesotho">Lesotho</option>
                                      <option value="Liberia">Liberia</option>
                                      <option value="Libya">Libya</option>
                                      <option value="Liechtenstein">Liechtenstein</option>
                                      <option value="Lithuania">Lithuania</option>
                                      <option value="Luxembourg">Luxembourg</option>
                                      <option value="Macau SAR">Macau SAR</option>
                                      <option value="Macedonia Former Yugoslav Republic of">Macedonia Former Yugoslav Republic of</option>
                                      <option value="Madagascar">Madagascar</option>
                                      <option value="Malawi">Malawi</option>
                                      <option value="Malaysia" selected="selected">Malaysia</option>
                                      <option value="Maldives">Maldives</option>
                                      <option value="Mali">Mali</option>
                                      <option value="Malta">Malta</option>
                                      <option value="Marshall Islands">Marshall Islands</option>
                                      <option value="Martinique">Martinique</option>
                                      <option value="Mauritania">Mauritania</option>
                                      <option value="Mauritius">Mauritius</option>
                                      <option value="Mayotte">Mayotte</option>
                                      <option value="Mexico">Mexico</option>
                                      <option value="Micronesia">Micronesia</option>
                                      <option value="Moldova">Moldova</option>
                                      <option value="Monaco">Monaco</option>
                                      <option value="Mongolia">Mongolia</option>
                                      <option value="Montserrat">Montserrat</option>
                                      <option value="Morocco">Morocco</option>
                                      <option value="Mozambique">Mozambique</option>
                                      <option value="Myanmar">Myanmar</option>
                                      <option value="Namibia">Namibia</option>
                                      <option value="Nauru">Nauru</option>
                                      <option value="Nepal">Nepal</option>
                                      <option value="Netherlands">Netherlands</option>
                                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                                      <option value="New Caledonia">New Caledonia</option>
                                      <option value="New Zealand">New Zealand</option>
                                      <option value="Nicaragua">Nicaragua</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Nigeria">Nigeria</option>
                                      <option value="Niue">Niue</option>
                                      <option value="Norfolk Island">Norfolk Island</option>
                                      <option value="North Korea">North Korea</option>
                                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                      <option value="Norway">Norway</option>
                                      <option value="Oman">Oman</option>
                                      <option value="Pakistan">Pakistan</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Palestine">Palestine</option>
                                      <option value="Panama">Panama</option>
                                      <option value="Papua New Guinea">Papua New Guinea</option>
                                      <option value="Paraguay">Paraguay</option>
                                      <option value="Peru">Peru</option>
                                      <option value="Philippines">Philippines</option>
                                      <option value="Pitcairn Islands">Pitcairn Islands</option>
                                      <option value="Poland">Poland</option>
                                      <option value="Portugal">Portugal</option>
                                      <option value="Puerto Rico">Puerto Rico</option>
                                      <option value="Qatar">Qatar</option>
                                      <option value="Reunion">Reunion</option>
                                      <option value="Romania">Romania</option>
                                      <option value="Russia">Russia</option>
                                      <option value="Rwanda">Rwanda</option>
                                      <option value="Saipan">Saipan</option>
                                      <option value="Samoa">Samoa</option>
                                      <option value="San Marino">San Marino</option>
                                      <option value="SÃ£o TomÃ&copy; and PrÃ­ncipe">São Tomé and Príncipe</option>
                                      <option value="Saudi Arabia">Saudi Arabia</option>
                                      <option value="Senegal">Senegal</option>
                                      <option value="Serbia &amp; Montenegro">Serbia &amp; Montenegro</option>
                                      <option value="Seychelles">Seychelles</option>
                                      <option value="Sierra Leone">Sierra Leone</option>
                                      <option value="Singapore">Singapore</option>
                                      <option value="Slovakia">Slovakia</option>
                                      <option value="Slovenia">Slovenia</option>
                                      <option value="Solomon Islands">Solomon Islands</option>
                                      <option value="Somalia">Somalia</option>
                                      <option value="South Africa">South Africa</option>
                                      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                      <option value="Spain">Spain</option>
                                      <option value="Sri Lanka">Sri Lanka</option>
                                      <option value="St. Helena">St. Helena</option>
                                      <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
                                      <option value="St. Lucia">St. Lucia</option>
                                      <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                      <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
                                      <option value="Sudan">Sudan</option>
                                      <option value="Suriname">Suriname</option>
                                      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                      <option value="Swaziland">Swaziland</option>
                                      <option value="Sweden">Sweden</option>
                                      <option value="Switzerland">Switzerland</option>
                                      <option value="Syria">Syria</option>
                                      <option value="Taiwan">Taiwan</option>
                                      <option value="Tajikistan">Tajikistan</option>
                                      <option value="Tanzania">Tanzania</option>
                                      <option value="Thailand">Thailand</option>
                                      <option value="Togo">Togo</option>
                                      <option value="Tokelau">Tokelau</option>
                                      <option value="Tonga">Tonga</option>
                                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                      <option value="Tunisia">Tunisia</option>
                                      <option value="Turkey">Turkey</option>
                                      <option value="Turkmenistan">Turkmenistan</option>
                                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                      <option value="Tuvalu">Tuvalu</option>
                                      <option value="Uganda">Uganda</option>
                                      <option value="Ukraine">Ukraine</option>
                                      <option value="United Arab Emirates">United Arab Emirates</option>
                                      <option value="United Kingdom">United Kingdom</option>
                                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                      <option value="United States of America">United States of America</option>
                                      <option value="Uruguay">Uruguay</option>
                                      <option value="Uzbekistan">Uzbekistan</option>
                                      <option value="Vanuatu">Vanuatu</option>
                                      <option value="Vatican City">Vatican City</option>
                                      <option value="Venezuela">Venezuela</option>
                                      <option value="Vietnam">Vietnam</option>
                                      <option value="Virgin Islands">Virgin Islands</option>
                                      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                                      <option value="Yemen">Yemen</option>
                                      <option value="Yugoslavia">Yugoslavia</option>
                                      <option value="Zaire">Zaire</option>
                                      <option value="Zambia">Zambia</option>
                                      <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                          
						  
                          
                            
                           
                        </div>
                      </form>
                    </div>
                   
                </div>
        </div>
            <!-- End Info resalt-->
          

          <!-- Info title-->
      	  <!--<div class="row-fluid info_title">
 				<br>
                <div class="info_vertical">
                    <h2><span>Our Clients</span></h2>
                    <p>"We bring a personal and effective approach to every project we work on, which is why our clients love us and why they keep coming back."</p>
                </div>
                <br>
                <div class="vertical_line"><div class="circle_top"></div></div>

                <i class="icon-group left"></i>
            </div>-->
            <!-- End Info title-->
           
            <!-- clients-->
            <!--<section class="info_resalt border_top">
            	
              <div class="container">
               <div class="row-fluid">  
                <div id="sponsors" class="sponsors">                
                     
                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2800%; transition-duration: 0.6s; transform: translate3d(-1630px, 0px, 0px);">
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Digi"><img alt="Digi" src="img/logo/digi.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="U Mobile"><img alt="U Mobile" src="img/logo/umobile.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Maxis"><img alt="Maxis" src="img/logo/maxis.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Celcom"><img alt="Celcom" src="img/logo/celcom.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Ericsson"><img alt="Ericsson" src="img/logo/ericsson.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="NEC"><img alt="NEC" src="img/logo/nec.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Alcatel Lucent"><img alt="Alcatel Lucent" src="img/logo/alcatel_lucent.png"></a>
                       </li>
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Huawei"><img alt="Huawei" src="img/logo/huawei.png"></a>
                       </li> 
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="ZTE"><img alt="ZTE" src="img/logo/zte.png"></a>
                       </li> 
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="P1"><img alt="P1" src="img/logo/p1.png"></a>
                       </li> 
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="yes"><img alt="yes" src="img/logo/yes.png"></a>
                       </li> 
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="nsn"><img alt="nsn" src="img/logo/nsn.png"></a>
                       </li> 
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Smart"><img alt="Smart" src="img/logo/smart.png"></a>
                       </li> 
                       <li style="width: 200px; float: left; display: block;">
                          <a title="" class="tooltip_hover" href="#" data-original-title="Axiata"><img alt="Axiata" src="img/logo/axiata.png"></a>
                       </li>                                       
                    </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="flex-active">3</a></li></ol><ul class="flex-direction-nav"><li><a href="#" class="flex-prev">Previous</a></li><li><a href="#" class="flex-next flex-disabled">Next</a></li></ul></div>
              </div>  
             </div>  
            </section> --> 
            <!-- End clients--> 


           

        </section>
@stop